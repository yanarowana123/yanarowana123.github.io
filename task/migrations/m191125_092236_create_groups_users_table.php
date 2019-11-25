<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%groups_users}}`.
 */
class m191125_092236_create_groups_users_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%groups_users}}', [
            'user_id' => $this->integer(),
            'group_id' => $this->integer(),
            'PRIMARY KEY(user_id, group_id)',

        ]);


        $this->createIndex(
            'idx-groups_users-user_id',
            'groups_users',
            'user_id'
        );

        // add foreign key for table `post`
        $this->addForeignKey(
            'fk-groups_users-user',
            'groups_users',
            'user_id',
            'users',
            'user_id',
            'CASCADE'
        );

        // creates index for column `tag_id`
        $this->createIndex(
            'idx-groups_users-group_id',
            'groups_users',
            'group_id'
        );

        // add foreign key for table `tag`
        $this->addForeignKey(
            'fk-groups_users-group_id',
            'groups_users',
            'group_id',
            'groups',
            'group_id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `post`
        $this->dropForeignKey(
            'fk-groups_users-user',
            'groups_users'
        );

        // drops index for column `post_id`
        $this->dropIndex(
            'idx-groups_users-user_id',
            'groups_users'
        );

        // drops foreign key for table `tag`
        $this->dropForeignKey(
            'fk-groups_users-group_id',
            'groups_users'
        );

        // drops index for column `tag_id`
        $this->dropIndex(
            'idx-groups_users-group_id',
            'groups_users'
        );
        $this->dropTable('{{%groups_users}}');
    }
}
