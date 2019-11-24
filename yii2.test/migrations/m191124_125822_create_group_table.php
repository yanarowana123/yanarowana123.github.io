<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%group}}`.
 */
class m191124_125822_create_group_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%group}}', [
            'group_id' => $this->primaryKey(),
            'title' => $this->string()->notNull()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%group}}');
    }
}
