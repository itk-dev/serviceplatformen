<?php

namespace ItkDev\Serviceplatformen\Service;

class SoapClient
{

    /**
     * Executes Soap request.
     */
    public static function doSoap($url, $request, $action = null)
    {
        $ch = curl_init($url);

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_SSLVERSION, 6);

        if ($action != null) {
            $headers = [
                'Content-Type: application/soap+xml; charset=utf-8; action="' . $action . '"',
                "Content-Length: " . strlen($request),
            ];
        } else {
            $headers = [
                'Content-Type: application/soap+xml; charset=utf-8',
                "Content-Length: " . strlen($request),
            ];
        }

        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        if ($request != null) {
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $request);
        }

        $result = curl_exec($ch);

        curl_close($ch);

        return $result;
    }
}
