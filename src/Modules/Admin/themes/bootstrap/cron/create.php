<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model iPaya\Cron\Models\Cron */

$this->title = '添加任务';
$this->params['breadcrumbs'][] = ['label' => '计划任务', 'url' => ['default/index']];
$this->params['breadcrumbs'][] = ['label' => '任务管理', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cron-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
