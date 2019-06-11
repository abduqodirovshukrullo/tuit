<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%students}}`.
 */
class m190603_104940_create_students_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%students}}', [
            'id' => $this->primaryKey(),
            'image' => $this->string(),
            'name' => $this->string(),
            'name_ru' => $this->string(),
            'surname' => $this->string(),
            'group' => $this->string(),
            'phone' => $this->string(),
            'email' => $this->string(),
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
