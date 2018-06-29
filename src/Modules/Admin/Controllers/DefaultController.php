<?php


namespace iPaya\Cron\Modules\Admin\Controllers;


use iPaya\Cron\Modules\Admin\Controller;

class DefaultController extends Controller
{
    public function actionIndex()
    {
        $token = $this->module->getToken();

        $howtos = [
            ['label' => '如何添加自定义 Worker？', 'url' => 'https://github.com/iPaya/task-worker'],
        ];

        return $this->render('index', [
            'token' => $token,
            'howtos' => $howtos,
        ]);
    }
}
