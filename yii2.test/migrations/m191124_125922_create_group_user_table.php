<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%group_user}}`.
 */
class m191124_125922_create_group_user_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%group_user}}', [
            'user_id' => $this->integer(),
            'group_id' => $this->integer(),
            'PRIMARY KEY(user_id, group_id)',

        ]);


        $this->createIndex(
            'idx-group_user-user_id',
            'group_user',
            'user_id'
        );

        // add foreign key for table `post`
        $this->addForeignKey(
            'fk-group_user-user',
            'group_user',
            'user_id',
            'user',
            'user_id',
            'CASCADE'
        );

        // creates index for column `tag_id`
        $this->createIndex(
            'idx-group_user-group_id',
            'group_user',
            'group_id'
        );

        // add foreign key for table `tag`
        $this->addForeignKey(
            'fk-group_user-group_id',
            'group_user',
            'group_id',
            'group',
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
            'fk-group_user-user',
            'group_user'
        );

        // drops index for column `post_id`
        $this->dropIndex(
            'idx-group_user-user_id',
            'group_user'
        );

        // drops foreign key for table `tag`
        $this->dropForeignKey(
            'fk-group_user-group_id',
            'group_user'
        );

        // drops index for column `tag_id`
        $this->dropIndex(
            'idx-group_user-group_id',
            'group_user'
        );
        $this->dropTable('{{%group_user}}');
    }
}
