<?php

use Demo\Service\Example;
use Demo\Service\ExampleInterface;
use Jaxon\Demo\Calc\Package as CalcPackage;

$directory = base_path('ajax');

return [
    'app' => [
        'request' => [
            'route' => 'jaxon.ajax',
            'middlewares' => ['web'],
        ],
        'directories' => [
            [
                'path' => $directory,
                'namespace' => 'Demo\\Ajax',
            ],
        ],
        'dialogs' => [
            'default' => [
                'modal' => 'bootbox',
                'alert' => 'cute',
            ],
        ],
        'container' => [
            'auto' => [
                Example::class,
            ],
            'alias' => [
                ExampleInterface::class => Example::class
            ],
        ],
        'packages' => [
            CalcPackage::class => [],
        ],
    ],
    'lib' => [
        'core' => [
            'language' => 'en',
            'encoding' => 'UTF-8',
            'request' => [
                'uri' => '/jaxon',
            ],
            'prefix' => [
                'class' => '',
            ],
            'debug' => [
                'on' => false,
                'verbose' => false,
            ],
            'error' => [
                'handle' => false,
            ],
        ],
        'js' => [
            'lib' => [
                // 'uri' => '/jaxon/lib',
            ],
            'app' => [
                // 'uri' => '',
                // 'dir' => '',
                'export' => false,
                'minify' => false,
            ],
        ],
    ],
];
