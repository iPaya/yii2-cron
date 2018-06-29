<?php


namespace iPaya\Cron\Modules\Admin;


use yii\filters\AccessControl;
use yii\filters\VerbFilter;

/**
 * Class Controller
 * @package iPaya\Cron\Modules\Admin
 * @property Module $module
 */
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
            ],
            'verbs' => [
                'class' => VerbFilter::class,
                'actions' => $this->verbs(),
            ]
        ];
    }

    /**
     * @return array
     */
    public function verbs()
    {
        return [];
    }

}
