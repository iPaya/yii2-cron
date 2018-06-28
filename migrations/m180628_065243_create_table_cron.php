<?php

use yii\db\Migration;


/**
 * Class m180628_065243_create_table_cron
 */
class m180628_065243_create_table_cron extends Migration
{
    /**
     * @return null|string
     */
    public function getTableOptions()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
        return $tableOptions;
    }

    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('{{%cron}}', [
            'id' => $this->primaryKey(),
            'cron' => $this->string()->notNull()->comment('Cron Expression'),
            'command' => $this->string(1000)->notNull()->comment('Command'),
            'comment' => $this->string()->comment('Comment'),
            'enabled' => $this->integer(1)->notNull()->defaultValue(1)->comment('Enabled'),
            'createdAt' => $this->integer(),
            'updatedAt' => $this->integer(),
        ], $this->getTableOptions() . ' comment "Cron Table"');
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->dropTable('{{%cron}}');
    }
}
