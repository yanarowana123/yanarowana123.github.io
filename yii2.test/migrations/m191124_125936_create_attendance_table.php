<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%attendance}}`.
 */
class m191124_125936_create_attendance_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%attendance}}', [
            'user_id' => $this->integer(),
            'date' => $this->date(),
            'value' => $this->string(),
            'PRIMARY KEY(user_id, date)'
        ]);


        $this->createIndex(
            'idx-attendance-user_id',
            'attendance',
            'user_id'
        );

        $this->addForeignKey(
            'fk-attendance-user',
            'attendance',
            'user_id',
            'user',
            'user_id',
            'CASCADE'
        );
        $this->createIndex(
            'idx-attendance-date',
            'attendance',
            'date'
        );

    }




    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey(
            'fk-attendance-user',
            'attendance'
        );

        // drops index for column `post_id`
        $this->dropIndex(
            'idx-attendance-user_id',
            'attendance'
        );

        $this->dropIndex(
            'idx-attendance-date',
            'attendance'
        );

        $this->dropTable('{{%attendance}}');
    }
}
