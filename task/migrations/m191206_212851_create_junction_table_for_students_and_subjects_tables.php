<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%students_subjects}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%students}}`
 * - `{{%subjects}}`
 */
class m191206_212851_create_junction_table_for_students_and_subjects_tables extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%attendance}}', [
            'student_id' => $this->integer(),
            'subject_id' => $this->integer(),
            'date' => $this->date(),
            'value' => $this->string()->defaultValue('Не задано'),
            'teacher_id' => $this->integer()->notNull(),
            'PRIMARY KEY(student_id, subject_id,date)',
        ]);

        // creates index for column `student_id`
        $this->createIndex(
            '{{%idx-attendance-student_id}}',
            '{{%attendance}}',
            'student_id'
        );

        // add foreign key for table `{{%students}}`
        $this->addForeignKey(
            '{{%fk-attendance-student_id}}',
            '{{%attendance}}',
            'student_id',
            '{{%students_groups}}',
            'student_id',
            'CASCADE'
        );

        // creates index for column `subject_id`
        $this->createIndex(
            '{{%idx-attendance-subject_id}}',
            '{{%attendance}}',
            'subject_id'
        );

        // add foreign key for table `{{%subjects}}`
        $this->addForeignKey(
            '{{%fk-attendance-subject_id}}',
            '{{%attendance}}',
            'subject_id',
            '{{%teachers_groups}}',
            'subject_id',
            'CASCADE'
        );

        $this->createIndex(
            '{{%idx-attendance-date}}',
            '{{%attendance}}',
            'date'
        );

        $this->createIndex(
            '{{%idx-attendance-teacher_id}}',
            '{{%attendance}}',
            'teacher_id'
        );

        $this->addForeignKey(
            '{{%fk-attendance-teacher_id}}',
            '{{%attendance}}',
            'teacher_id',
            '{{%teachers_groups}}',
            'teacher_id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%students}}`
        $this->dropForeignKey(
            '{{%fk-attendance-student_id}}',
            '{{%attendance}}'
        );

        // drops index for column `student_id`
        $this->dropIndex(
            '{{%idx-attendance-student_id}}',
            '{{%attendance}}'
        );

        // drops foreign key for table `{{%subjects}}`
        $this->dropForeignKey(
            '{{%fk-attendance-subject_id}}',
            '{{%attendance}}'
        );

        // drops index for column `subject_id`
        $this->dropIndex(
            '{{%idx-attendance-subject_id}}',
            '{{%attendance}}'
        );

        $this->dropIndex(
            '{{%idx-attendance-date}}',
            '{{%attendance}}'
        );


        $this->dropForeignKey(
            '{{%fk-attendance-teacher_id}}',
            '{{%attendance}}'
        );

        // drops index for column `subject_id`
        $this->dropIndex(
            '{{%idx-attendance-teacher_id}}',
            '{{%attendance}}'
        );

        $this->dropTable('{{%attendance}}');
    }
}
