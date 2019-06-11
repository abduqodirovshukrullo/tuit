<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%teachers}}`.
 */
class m190603_104728_create_teachers_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%teachers}}', [
            'id' => $this->primaryKey(),
            'image' => $this->string(),
            'name' => $this->string(),
            'name_ru' => $this->string(),
            'surname' => $this->string(),
            'role_uz' => $this->string(),
            'role_ru' => $this->string(),
            'role_en' => $this->string(),
            'phone' => $this->string(),
            'email' => $this->string(),
            'parol' => $this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%teachers}}');
    }
}
