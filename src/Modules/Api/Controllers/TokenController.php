<?php


namespace iPaya\Cron\Modules\Api\Controllers;


use iPaya\Cron\Modules\Api\Controller;

class TokenController extends Controller
{
    /**
     * @param string $token
     * @return bool
     */
    public function actionValidate($token)
    {
        return $token == $this->module->getToken();
    }
}
