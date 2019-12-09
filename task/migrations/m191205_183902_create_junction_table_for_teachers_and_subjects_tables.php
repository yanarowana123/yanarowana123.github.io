<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%teachers_subjects}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%teachers}}`
 * - `{{%subjects}}`
 */
class m191205_183902_create_junction_table_for_teachers_and_subjects_tables extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%teachers_subjects}}', [
            'teacher_id' => $this->integer(),
            'subject_id' => $this->integer(),
            'PRIMARY KEY(teacher_id, subject_id)',
        ]);

        // creates index for column `teacher_id`
        $this->createIndex(
            '{{%idx-teachers_subjects-teacher_id}}',
            '{{%teachers_subjects}}',
            'teacher_id'
        );

        // add foreign key for table `{{%teachers}}`
        $this->addForeignKey(
            '{{%fk-teachers_subjects-teacher_id}}',
            '{{%teachers_subjects}}',
            'teacher_id',
            '{{%teachers}}',
            'teacher_id',
            'CASCADE'
        );

        // creates index for column `subject_id`
        $this->createIndex(
            '{{%idx-teachers_subjects-subject_id}}',
            '{{%teachers_subjects}}',
            'subject_id'
        );

        // add foreign key for table `{{%subjects}}`
        $this->addForeignKey(
            '{{%fk-teachers_subjects-subject_id}}',
            '{{%teachers_subjects}}',
            'subject_id',
            '{{%subjects}}',
            'subject_id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%teachers}}`
        $this->dropForeignKey(
            '{{%fk-teachers_subjects-teacher_id}}',
            '{{%teachers_subjects}}'
        );

        // drops index for column `teacher_id`
        $this->dropIndex(
            '{{%idx-teachers_subjects-teacher_id}}',
            '{{%teachers_subjects}}'
        );

        // drops foreign key for table `{{%subjects}}`
        $this->dropForeignKey(
            '{{%fk-teachers_subjects-subject_id}}',
            '{{%teachers_subjects}}'
        );

        // drops index for column `subject_id`
        $this->dropIndex(
            '{{%idx-teachers_subjects-subject_id}}',
            '{{%teachers_subjects}}'
        );

        $this->dropTable('{{%teachers_subjects}}');
    }
}
