<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model iPaya\Cron\Models\Cron */

$this->title = '修改计划任务: #' . $model->id;
$this->params['breadcrumbs'][] = ['label' => '计划任务', 'url' => ['index']];
$this->params['breadcrumbs'][] = $model->comment;
?>
<div class="cron-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
