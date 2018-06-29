<?php


namespace iPaya\Cron\Modules\Api\Controllers;


use iPaya\Cron\Models\Cron;
use iPaya\Cron\Modules\Api\Controller;

class CronController extends Controller
{
    public function actionList()
    {
        $models = Cron::find()->enabled()->all();
        return $models;
    }

    /**
     * @return array
     */
    public function actionVersion()
    {
        $version = Cron::find()->enabled()->max('updatedAt');
        return [
            'version' => (integer)($version == null ? 0 : $version),
        ];
    }
}
