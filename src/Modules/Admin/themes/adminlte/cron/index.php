<?php

use yii\grid\GridView;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '计划任务';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cron-index box box-primary">
    <div class="box-header with-border">
        <?= Html::a('添加计划任务', ['create'], ['class' => 'btn btn-success btn-flat']) ?>
    </div>
    <div class="box-body table-responsive">
        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'layout' => "{summary}\n{items}\n{pager}",
            'columns' => [
                'id',
                'comment',
                'cron',
                'command',
                'enabled:boolean',

                [
                    'class' => \yii\grid\ActionColumn::class,
                    'template' => '{enable} {disable} {update} {delete}',
                    'buttons' => [
                        'enable' => function ($url, $model, $key) {
                            if ($model->enabled) {
                                return null;
                            }
                            return Html::a('开启', $url, [
                                'data' => [
                                    'toggle' => 'post',
                                    'confirm' => '确认开启？'
                                ]
                            ]);
                        },
                        'disable' => function ($url, $model, $key) {
                            if (!$model->enabled) {
                                return null;
                            }
                            return Html::a('关闭', $url, [
                                'data' => [
                                    'toggle' => 'post',
                                    'confirm' => '确认关闭？'
                                ]
                            ]);
                        }
                    ]
                ],
            ],
        ]); ?>
    </div>
</div>
