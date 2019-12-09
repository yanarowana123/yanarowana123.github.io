<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%students_groups}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%students}}`
 * - `{{%groups}}`
 */
class m191205_183655_create_junction_table_for_students_and_groups_tables extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%students_groups}}', [
            'student_id' => $this->integer(),
            'group_id' => $this->integer(),
            'PRIMARY KEY(student_id, group_id)',
        ]);

        // creates index for column `student_id`
        $this->createIndex(
            '{{%idx-students_groups-student_id}}',
            '{{%students_groups}}',
            'student_id'
        );

        // add foreign key for table `{{%student}}`
        $this->addForeignKey(
            '{{%fk-students_groups-student_id}}',
            '{{%students_groups}}',
            'student_id',
            '{{%students}}',
            'student_id',
            'CASCADE'
        );

        // creates index for column `group_id`
        $this->createIndex(
            '{{%idx-students_groups-group_id}}',
            '{{%students_groups}}',
            'group_id'
        );

        // add foreign key for table `{{%group}}`
        $this->addForeignKey(
            '{{%fk-students_groups-group_id}}',
            '{{%students_groups}}',
            'group_id',
            '{{%groups}}',
            'group_id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%student}}`
        $this->dropForeignKey(
            '{{%fk-students_groups-student_id}}',
            '{{%students_groups}}'
        );

        // drops index for column `student_id`
        $this->dropIndex(
            '{{%idx-students_groups-student_id}}',
            '{{%students_groups}}'
        );

        // drops foreign key for table `{{%group}}`
        $this->dropForeignKey(
            '{{%fk-students_groups-group_id}}',
            '{{%students_groups}}'
        );

        // drops index for column `group_id`
        $this->dropIndex(
            '{{%idx-students_groups-group_id}}',
            '{{%students_groups}}'
        );

        $this->dropTable('{{%students_groups}}');
    }
}
