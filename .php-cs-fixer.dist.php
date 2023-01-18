<?php

$finder = PhpCsFixer\Finder::create()
    ->in(__DIR__.'/{src,tests}')
;

$header =<<<'HEADER'
This file is part of itk-dev/serviceplatformen.

(c) 2020 ITK Development

This source file is subject to the MIT license.
HEADER;

return (new PhpCsFixer\Config())
    ->setRiskyAllowed(true)
    ->setRules([
        '@PSR2' => true,
        'array_syntax' => ['syntax' => 'short'],
        'header_comment' => ['header' => $header, 'comment_type' => 'PHPDoc'],
        'list_syntax' => ['syntax' => 'short'],
        'method_argument_space' => ['on_multiline' => 'ensure_fully_multiline'],
        'strict_comparison' => true,
    ])
    ->setFinder($finder)
;
