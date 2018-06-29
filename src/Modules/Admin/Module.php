<?php


namespace iPaya\Cron\Modules\Admin;


use iPaya\Cron\BaseModule;

class Module extends BaseModule
{
    public $defaultRoute = 'default/index';
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
            ['label' => '计划任务', 'url' => ['default/index']],
            ['label' => '任务管理', 'url' => ['cron/index']],
        ];
    }
}
