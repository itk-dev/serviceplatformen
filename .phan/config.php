<?php
/**
 * This configuration will be read and overlaid on top of the
 * default configuration. Command line arguments will be applied
 * after this file is read.
 *
 * @see src/Phan/Config.php
 * See Config for all configurable options.
 */
return [
    'backward_compatibility_checks' => false,
    'target_php_version' => 7.3,

    'dead_code_detection' => true,
    'ignore_undeclared_functions_with_known_signatures' => false,
    'whitelist_issue_types' => [
        'PhanCompatiblePHP7',
        'PhanDeprecatedFunctionInternal',
        'PhanInvalidConstantFQSEN',
    ],
    'directory_list' => [
        'src',
    ],
    'exclude_analysis_directory_list' => [
        'vendor/',
        'tests/',
    ],
    'exclude_file_regex' => '@^vendor/.*/(tests|Tests)/@',
];
