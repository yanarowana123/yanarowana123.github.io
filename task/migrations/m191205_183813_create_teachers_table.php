<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%teachers}}`.
 */
class m191205_183813_create_teachers_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%teachers}}', [
            'teacher_id' => $this->primaryKey(),
            'teacher_fname' =>$this->string()->notNull(),
            'teacher_sname' => $this->string()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%teachers}}');
    }
}
