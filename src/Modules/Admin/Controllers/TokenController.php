<?php


namespace iPaya\Cron\Modules\Admin\Controllers;


use iPaya\Cron\Modules\Admin\Controller;

class TokenController extends Controller
{
    public function verbs()
    {
        return [
            'reset' => ['POST']
        ];
    }

    /**
     * @return \yii\web\Response
     */
    public function actionReset()
    {
        $this->module->getToken(true);
        return $this->redirect(['default/index']);
    }
}
