<?php

use yii\bootstrap\ActiveForm;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model iPaya\Cron\Models\Cron */
?>

<div class="cron-form box box-primary">
    <?php $form = ActiveForm::begin(); ?>
    <div class="box-body table-responsive">

        <?= $form->field($model, 'comment')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'cron')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'command')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'enabled')->checkbox() ?>

    </div>
    <div class="box-footer">
        <?= Html::submitButton('提交', ['class' => 'btn btn-success btn-flat']) ?>
    </div>
    <?php ActiveForm::end(); ?>
</div>
