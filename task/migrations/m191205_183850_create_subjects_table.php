<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%subjects}}`.
 */
class m191205_183850_create_subjects_table extends Migration
{
    public function safeUp()
    {
        $this->createTable('{{%subjects}}', [
            'subject_id' => $this->primaryKey(),
            'subject_title' => $this->string()->unique()->notNull()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%subjects}}');
    }
}
