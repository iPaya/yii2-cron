<?php


/* @var $this yii\web\View */
/* @var $model iPaya\Cron\Models\Cron */

$this->title = '添加计划任务';
$this->params['breadcrumbs'][] = ['label' => '计划任务', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cron-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
