<?php

return [
    "parameters" => [
        "dns": "sqlite::memory:"
    ],
    "punit" => [
        "bootstrap": "./vendor/autoload.php",
        "directories": [
            "./tests"
        ],
        "class": [
            "prefix" => null,
            "suffix" => "Test.php"
        ],
        "method": [
            "prefix" => "test",
            "suffix" => null
        ],
        "colors" => false,
        "verbose" => false,
        "stop_on_failure" => false,
        "debug" => false,
        "log" => [
            "html" => "./build/report",
            "clover" => "./build/coverage.xml",
            "php" => "./build/coverage.serialized",
            "junit" => "./bild/logfile.xml",
            "text" => "php://stdout"
        ]
    ]
];

