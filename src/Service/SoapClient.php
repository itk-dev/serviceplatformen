<?php

/**
 * This file is part of itk-dev/serviceplatformen.
 *
 * (c) 2020 ITK Development
 *
 * This source file is subject to the MIT license.
 */

namespace ItkDev\Serviceplatformen\Service;

use Symfony\Component\Cache\Adapter\FilesystemAdapter;
use Symfony\Component\OptionsResolver\Options;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Contracts\Cache\CacheInterface;
use Symfony\Contracts\Cache\ItemInterface;

class SoapClient
{
    private array $options;

    public function __construct(array $options)
    {
        $resolver = new OptionsResolver();
        $this->configureOptions($resolver);

        $this->options = $resolver->resolve($options);
    }

    /**
     * Executes Soap request.
     */
    public function doSoap($url, $request, $action = null, $noCache = false, $cacheKeyOptions = [])
    {
        if ($noCache) {
            return $this->call($url, $request, $action);
        }

        $cache = $this->getCache();

        $cacheKey = $this->getCacheKey(__METHOD__, $cacheKeyOptions);

        $expirationTime = $this->determineExpirationDateTime();

        return $cache->get($cacheKey, function (ItemInterface $item) use ($url, $request, $action, $expirationTime) {
            $response = $this->call($url, $request, $action);
            $item->expiresAt($expirationTime);

            return $response;
        });
    }

    private function call($url, $request, $action = null)
    {
        $ch = curl_init($url);

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_SSLVERSION, 6);


        $headers = [
            null !== $action
                ? 'Content-Type: application/soap+xml; charset=utf-8; action="' . $action . '"'
                : 'Content-Type: application/soap+xml; charset=utf-8',
            'Content-Length: ' . strlen($request),
        ];

        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        if ($request !== null) {
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $request);
        }

        $result = curl_exec($ch);

        curl_close($ch);

        return $result;
    }

    private function getCache(): CacheInterface
    {
        return $this->options['cache'];
    }

    private function getCacheKey(string $key, array $payload): string
    {
        return preg_replace(
            '#[{}()/\\\\@:]+#',
            '_',
            $key . '|' . sha1(json_encode($payload+$this->options))
        );
    }

    public function determineExpirationDateTime(): ?\DateTimeImmutable
    {
        $now = new \DateTimeImmutable('now');
        $times = [];
        foreach ($this->options['cache_expiration_time'] as $spec) {
            $time = $now->modify($spec);
            if ($time > $now) {
                $times[] = $time;
            }
        }

        return empty($times) ? null : min([...$times]);
    }

    protected function configureOptions(OptionsResolver $resolver)
    {
        $resolver
            ->setRequired([
                'cache_expiration_time'
            ])
            ->setDefaults([
                'cache' => static function (Options $options) {
                    return new FilesystemAdapter();
                },
            ])
            ->setAllowedTypes('cache', CacheInterface::class)
            ->setAllowedTypes('cache_expiration_time', 'string[]')
        ;
    }
}
