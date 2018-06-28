<?php


namespace iPaya\Cron\Modules\Api;


use yii\filters\auth\HttpBasicAuth;
use yii\web\JsonParser;

class Module extends \yii\base\Module
{
    public $controllerNamespace = 'iPaya\Cron\Modules\Api\Controllers';
    /**
     * @var callable
     * @see HttpBasicAuth::$auth
     */
    public $identityAuth;
    public $identityClass;

    public function init()
    {
        parent::init();
        \Yii::$app->set('request', [
            'class' => 'yii\web\Request',
            'parsers' => [
                'application/json' => JsonParser::class,
            ]
        ]);
        \Yii::$app->set('user', [
            'class' => 'yii\web\User',
            'identityClass' => $this->identityClass,
            'enableSession' => false,
        ]);
    }
}
