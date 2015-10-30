<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'language'=>'ru-RU',
    'bootstrap' => ['log'],
    'controllerNamespace' => 'frontend\controllers',
    'components' => [
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
//            'enableStrictParsing' => true,
            'suffix' => '.html',
            'rules' => [
                '/' => 'site/index',
                '<action:contact|about>' => 'site/<action>'
            ],
        ],
        'assetManager' => [
            'appendTimestamp' => false,
            'bundles' => [
                'yii\web\JqueryAsset' => [
                    'sourcePath' => null,   // do not publish the bundle
                    'js' => [
                        '//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js',
                    ]
                ],
                'yii\bootstrap\BootstrapPluginAsset' => false,
                'yii\bootstrap\BootstrapAsset' => false,
                'wii\materialize\MaterializeAsset' => [
                    'sourcePath' => null,
                    'css' => [
                        '//cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/css/materialize.min.css',
                        '//fonts.googleapis.com/icon?family=Material+Icons',
                    ],
                    'js' => [
                        '//cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/js/materialize.min.js',
                    ],
                ],
            ],
        ],
    ],
    'modules' => [
        'gii' => [
            'class' => 'yii\gii\Module',
            'allowedIPs' => ['*']
        ]
    ],
    'extensions' => require(__DIR__. '/../../vendor/yiisoft/extensions.php'),
    'params' => $params,
];
