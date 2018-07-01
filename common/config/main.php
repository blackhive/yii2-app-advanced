<?php
return [
    'aliases' => [
        '@bower' => dirname(dirname(__DIR__)) . '/node_modules',
        '@npm' => dirname(dirname(__DIR__)) . '/node_modules',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'assetManager' => [
            // https://stackoverflow.com/questions/24819220/yii2-assets-clear-cache
            'linkAssets' => true,
        ],
    ],
    'language'=>'zh-CN',
    'timeZone'=>'Asia/Shanghai',
];
