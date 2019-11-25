<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%groups}}`.
 */
class m191125_092229_create_groups_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%groups}}', [
            'group_id' => $this->primaryKey(),
            'title'=>$this->string()->notNull(),
            'status'=>$this->boolean()->defaultValue(1)
        ]);


    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%groups}}');
    }
}
