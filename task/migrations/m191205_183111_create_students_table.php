<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%students}}`.
 */
class m191205_183111_create_students_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%students}}',[
            'student_id' => $this->primaryKey(),
            'student_fname'=>$this->string()->notNull(),
            'student_sname'=>$this->string()->notNull(),
            'status'=>$this->boolean()->defaultValue(1)
        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%students}}');
    }
}
