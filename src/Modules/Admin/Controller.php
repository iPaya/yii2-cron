<?php


namespace iPaya\Cron\Modules\Admin;


use yii\filters\AccessControl;

class Controller extends \yii\web\Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return [
            'accessRules' => [
                'class' => AccessControl::class,
                'rules' => [
                    ['allow' => true, 'roles' => ['@']]
                ]
            ]
        ];
    }

}
