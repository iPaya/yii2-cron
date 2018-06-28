<?php


namespace iPaya\Cron\Modules\Api;


use yii\filters\auth\HttpBasicAuth;
use yii\web\Response;

class Controller extends \yii\rest\Controller
{
    public $enableCsrfValidation = false;

    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        /** @var Module $module */
        $module = $this->module;
        $behaviors = parent::behaviors();
        $behaviors['contentNegotiator']['formats'] = [
            'application/json' => Response::FORMAT_JSON,
        ];
        $behaviors['authenticator']['authMethods'] = [
            [
                'class' => HttpBasicAuth::class,
                'auth' => $module->identityAuth,
            ]
        ];
        return $behaviors;
    }
}
