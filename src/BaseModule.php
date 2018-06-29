<?php


namespace iPaya\Cron;


use yii\base\Module;

class BaseModule extends Module
{
    const TOKEN_CACHE_KEY = 'yii2-cron.worker.token';

    /**
     * @return string
     */
    public function getToken($regenerate = false)
    {
        $cache = \Yii::$app->cache;
        $token = $cache->get(self::TOKEN_CACHE_KEY);
        if ($regenerate || !$token) {
            $token = \Yii::$app->security->generateRandomString(16);
            $cache->set(self::TOKEN_CACHE_KEY, $token);
        }
        return $token;
    }
}
