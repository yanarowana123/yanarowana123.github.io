<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%users}}`.
 */
class m191125_092225_create_users_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%users}}', [
            'user_id' => $this->primaryKey(),
            'user_name'=>$this->string()->notNull(),
            'status'=>$this->boolean()->defaultValue(1)
        ]);




    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {

        $this->dropTable('{{%users}}');
    }
}
