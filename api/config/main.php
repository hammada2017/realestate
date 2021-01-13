<?php
use yii\rest\UrlRule;
use yii\web\JsonParser;

$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id' => 'app-api',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'api\controllers',
    'modules' => [
        'gridview' => [
            'class' => '\kartik\grid\Module',
        ],
        'gridviewKrajee' =>  [
            'class' => '\kartik\grid\Module',
        ],
    ],
    'components' => [
        'assetManager' => [
            // override bundles to use CDN :
            'bundles' => [
                'yii\bootstrap4\BootstrapAsset' => [
                    'sourcePath' => null,
                    'baseUrl' => 'https://stackpath.bootstrapcdn.com/bootstrap/4.2.1',
                    'css' => [
                        'css/bootstrap.min.css'
                    ],
                ],
                'yii\bootstrap4\BootstrapPluginAsset' => [
                    'sourcePath' => null,
                    'baseUrl' => 'https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1',
                    'js' => [
                        'js/bootstrap.bundle.min.js'
                    ],
                ],
            ],
        ],
        'request' => [
            'csrfParam' => '_csrf-api',
            'parsers' => [
                'application/json' => JsonParser::class
            ]
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'enableSession'=>false,
            //'identityCookie' => ['name' => '_identity-api', 'httpOnly' => true],
        ],
        // 'session' => [
        //     // this is the name of the session cookie used for login on the frontend
        //     'name' => 'advanced-api',
        // ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'authManager' => [
            'class' => 'yii\rbac\DbManager',
            'defaultRoles' => ['guest'],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'MyComponent' => [
            'class' => 'api\components\MyComponent',
        ],
        'urlManager' => [
            'enablePrettyUrl' => false,
            'showScriptName' => false,
            'rules' => [
                ['class' => UrlRule::class, 
                    'controller' => [
                        'real-estate',
                         'user'
                    ],
                    'extraPatterns'=>[
                        'GET test'=>'test',
                        'POST login'=>'login',
                    ],
                ]
            ],
        ],
    ],
    'params' => $params,
];
