<?php

namespace iPaya\Cron\Models;

use Cron\CronExpression;

/**
 * This is the model class for table "{{%cron}}".
 *
 * @property int $id
 * @property string $cron Cron Expression
 * @property string $command Command
 * @property string $comment Comment
 * @property int $enabled Enabled
 */
class Cron extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%cron}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['cron', 'command'], 'required'],
            [['enabled'], 'integer'],
            [['cron', 'comment'], 'string', 'max' => 255],
            [['command'], 'string', 'max' => 1000],
            [['cron'], 'validateCron']
        ];
    }

    public function validateCron($attribute, $params)
    {
        try {
            CronExpression::factory($this->cron);
        } catch (\Exception $e) {
            $this->addError($attribute, $e->getMessage());
        }
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'cron' => 'cron 表达式',
            'command' => '命令',
            'comment' => '备注',
            'enabled' => '开启',
        ];
    }

    public function attributeHints()
    {
        return [
            'cron' => 'cron 表达式'
        ];
    }

    /**
     * {@inheritdoc}
     * @return CronQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new CronQuery(get_called_class());
    }

    /**
     * @return bool
     */
    public function enable()
    {
        $this->enabled = 1;
        if (!$this->save()) {
            return false;
        }

        return true;
    }

    /**
     * @return bool
     */
    public function disable()
    {
        $this->enabled = 0;
        if (!$this->save()) {
            return false;
        }

        return true;
    }
}
