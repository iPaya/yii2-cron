<?php


namespace iPaya\Cron\Modules\Admin;


class Module extends \yii\base\Module
{
    public $defaultRoute = 'cron/index';
    public $controllerNamespace = 'iPaya\Cron\Modules\Admin\Controllers';
    /**
     * @var string
     * Available: bootstrap, adminlte
     */
    public $theme = 'bootstrap';

    public function init()
    {
        parent::init();
        $this->setViewPath('@iPaya/Cron/Modules/Admin/themes/' . $this->theme);
    }

    public function menuItems()
    {
        return [
            ['label' => '计划任务', 'url' => ['cron/index']]
        ];
    }
}
