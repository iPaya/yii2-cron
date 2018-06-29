<?php


/* @var $this yii\web\View */
/* @var $model iPaya\Cron\Models\Cron */

$this->title = '添加任务';
$this->params['breadcrumbs'][] = ['label' => '计划任务', 'url' => ['default/index']];
$this->params['breadcrumbs'][] = ['label' => '任务管理', 'url' => ['cron/index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cron-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
