<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%teachers_groups}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%teachers}}`
 * - `{{%groups}}`
 */
class m191206_212054_create_junction_table_for_teachers_and_groups_tables extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%teachers_groups}}', [
            'teacher_id' => $this->integer(),
            'group_id' => $this->integer(),
            'subject_id'=>$this->integer(),
            'PRIMARY KEY(teacher_id, group_id,subject_id)',
        ]);

        // creates index for column `teacher_id`
        $this->createIndex(
            '{{%idx-teachers_groups-teacher_id}}',
            '{{%teachers_groups}}',
            'teacher_id'
        );

        // add foreign key for table `{{%teachers}}`
        $this->addForeignKey(
            '{{%fk-teachers_groups-teacher_id}}',
            '{{%teachers_groups}}',
            'teacher_id',
            '{{%teachers_subjects}}',
            'teacher_id',
            'CASCADE'
        );

        // creates index for column `group_id`
        $this->createIndex(
            '{{%idx-teachers_groups-group_id}}',
            '{{%teachers_groups}}',
            'group_id'
        );

        // add foreign key for table `{{%groups}}`
        $this->addForeignKey(
            '{{%fk-teachers_groups-group_id}}',
            '{{%teachers_groups}}',
            'group_id',
            '{{%groups}}',
            'group_id',
            'CASCADE'
        );


        // creates index for column `group_id`
        $this->createIndex(
            '{{%idx-teachers_groups-subject_id}}',
            '{{%teachers_groups}}',
            'subject_id'
        );

        // add foreign key for table `{{%groups}}`
        $this->addForeignKey(
            '{{%fk-teachers_groups-subject_id}}',
            '{{%teachers_groups}}',
            'subject_id',
            '{{%teachers_subjects}}',
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
            '{{%fk-teachers_groups-teacher_id}}',
            '{{%teachers_groups}}'
        );

        // drops index for column `teacher_id`
        $this->dropIndex(
            '{{%idx-teachers_groups-teacher_id}}',
            '{{%teachers_groups}}'
        );

        // drops foreign key for table `{{%groups}}`
        $this->dropForeignKey(
            '{{%fk-teachers_groups-group_id}}',
            '{{%teachers_groups}}'
        );

        // drops index for column `group_id`
        $this->dropIndex(
            '{{%idx-teachers_groups-group_id}}',
            '{{%teachers_groups}}'
        );


        $this->dropForeignKey(
            '{{%fk-teachers_groups-subject_id}}',
            '{{%teachers_groups}}'
        );

        // drops index for column `teacher_id`
        $this->dropIndex(
            '{{%idx-teachers_groups-subject_id}}',
            '{{%teachers_groups}}'
        );

        $this->dropTable('{{%teachers_groups}}');
    }
}
