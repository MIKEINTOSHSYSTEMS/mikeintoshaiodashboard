<?php

$params = require(__DIR__ . '/params.php');

$config = [
    'id' => 'app',
    'name'=>'Easy Forms',
    'version' => '2.0',
    'basePath' => dirname(__DIR__),
    'defaultRoute' => 'setup/step/1',
    'timezone' => 'UTC',
    'sourceLanguage' => 'en-US',
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'bootstrap' => ['setup', 'log'],
    'components' => [
        'request' => [
            // Change this secret key - this is required for cookie validation
            'cookieValidationKey' => 'PEi6ICsok3vWiJSJJtQV2JZ6D-jk5gkh',
            'parsers' => [
                'application/json' => 'yii\web\JsonParser',
            ]
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                    'except' => [
                        'yii\web\Session::init', // Exclude only session init
                    ],
                ],
            ],
        ],
        'i18n' => [
            'translations' => [
                'app' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    'basePath' => '@app/messages',
                    'sourceLanguage' => 'en-US',
                    'fileMap' => [
                        'app' => 'app.php',
                        'app/error' => 'error.php',
                    ],
                ],
            ],
        ],
        'db' => require(__DIR__ . '/db.php'),
        'urlManager' => [
            'enablePrettyUrl' => false,
            'showScriptName' => false,
        ],
        'authManager' => [
            'class' => 'Da\User\Component\AuthDbManagerComponent',
        ],
        'assetManager' => [
            'appendTimestamp' => true,
            'bundles' => [
                'yii\web\JqueryAsset' => [
                    'sourcePath' => null,
                    'basePath' => '@webroot',
                    'baseUrl' => '@web/static_files',
                    'js' => [
                        'js/libs/jquery.js',
                    ]
                ],
                'yii\bootstrap5\BootstrapAsset' => [
                    'sourcePath' => null,
                    'basePath' => '@webroot',
                    'baseUrl' => '@web/themes/next/assets',
                    'css' => [
                    ]
                ],
                'yii\bootstrap5\BootstrapPluginAsset' => [
                    'sourcePath' => null,
                    'basePath' => '@webroot',
                    'baseUrl' => '@web/themes/next/assets',
                    'js' => [
                    ],
                ],
            ],
        ],
        'view' => [
            'theme' => [
                'basePath' => '@app/themes/next',
                'baseUrl' => '@web/themes/next',
                'pathMap' => [
                    '@app/views' => [
                        '@app/themes/next/views',
                    ],
                    '@Da/User/resources/views' => [
                        '@app/themes/next/views/user',
                    ],
                    '@app/components/widgets' => [
                        '@app/themes/next/widgets',
                    ]
                ],
            ],
        ],
    ],
    'modules' => [
        'setup' => [
            'class' => 'app\modules\setup\Module',
        ],
    ],
    'params' => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = 'yii\debug\Module';

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = 'yii\gii\Module';
}

return $config;
