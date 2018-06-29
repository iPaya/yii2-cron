<?php

/* @var $this yii\web\View */
/* @var $model iPaya\Cron\Models\Cron */

$this->title = '修改任务: #' . $model->id;
$this->params['breadcrumbs'][] = ['label' => '计划任务', 'url' => ['default/index']];
$this->params['breadcrumbs'][] = ['label' => '任务管理', 'url' => ['index']];
$this->params['breadcrumbs'][] = $model->comment;
?>
<div class="cron-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
