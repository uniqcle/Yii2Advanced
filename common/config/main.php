<?php
return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],

         'mailer' => [
                    'class' => 'yii\swiftmailer\Mailer',
                    'viewPath' => '@common/mail',
                    'transport' => [
                        'class' => 'Swift_SmtpTransport',
                        'host' => 'smtp.yandex.ru',
                        'username' => 'uniqcle@yandex.ru', //От кого приходит почта
                        'password' => '*****',
                        'port' => '465',
                        'encryption' => 'ssl', // у яндекса SSL
                    ],
         
                    'useFileTransport' => false, // будем отправлять реальные сообщения, а не в файл
                ],

        'stringHelper' => [
            'class' => 'common\components\StringHelper'
        ],
    ],
];
