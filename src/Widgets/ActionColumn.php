<?php


namespace iPaya\Task\Widgets;


use yii\helpers\Html;

class ActionColumn extends \yii\grid\ActionColumn
{
    public $template = '{enable} {disable} {update} {delete}';

    /**
     * Initializes the default button rendering callbacks.
     */
    protected function initDefaultButtons()
    {
        $this->initDefaultButton('update', '修改');
        $this->initDefaultButton('delete', '删除', [
            'data-confirm' => \Yii::t('yii', '确认删除?'),
            'data-method' => 'post',
        ]);
        $this->initDefaultButton('enable', '开启');
        $this->initDefaultButton('disable', '关闭');
    }

    protected function initDefaultButton($name, $label, $additionalOptions = [])
    {
        if (!isset($this->buttons[$name]) && strpos($this->template, '{' . $name . '}') !== false) {
            $this->buttons[$name] = function ($url, $model, $key) use ($label, $additionalOptions) {
                $options = array_merge([
                    'title' => $label,
                    'aria-label' => $label,
                ], $additionalOptions, $this->buttonOptions);
                return Html::a($label, $url, $options);
            };
        }
    }
}
