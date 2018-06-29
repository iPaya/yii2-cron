<?php

use yii\helpers\Html;
use yii\web\View;

/** @var $this View */
/** @var $token string */
/** @var $howtos array */

$this->title = '计划任务';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="box box-primary">
    <div class="box-header">
        <h3 class="box-title">Worker 注册 Token <code><?= $token ?></code></h3>
    </div>
    <div class="box-body">
        <p>你可以通过点击下面按钮重置 Worker 注册 Token。</p>
        <p>
            <?= Html::a('重置 Worker 注册 Token', ['token/reset'], [
                'class' => 'btn btn-danger',
                'data-method' => 'post',
                'data-confirm' => '确认重置 Worker 注册 Token?'
            ]) ?>
        </p>
    </div>
</div>

<div class="box box-primary">
    <div class="box-header">
        <h3 class="box-title">如何添加任务执行 Worker？</h3>
    </div>
    <div class="box-body">
        <ul class="list-unstyled">
            <?php foreach ($howtos as $item): ?>
                <li><?= Html::a($item['label'], $item['url'], ['target' => '_blank']) ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>
