<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "teachers".
 *
 * @property int $id
 * @property string $image
 * @property string $name
 * @property string $name_ru
 * @property string $surname
 * @property string $role_uz
 * @property string $role_ru
 * @property string $role_en
 * @property string $phone
 * @property string $email
 * @property string $parol
 */
class Teachers extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'teachers';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['image', 'name', 'name_ru', 'surname', 'role_uz', 'role_ru', 'role_en', 'phone', 'email', 'parol'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'image' => Yii::t('app', 'Image'),
            'name' => Yii::t('app', 'Name'),
            'name_ru' => Yii::t('app', 'Name Ru'),
            'surname' => Yii::t('app', 'Surname'),
            'role_uz' => Yii::t('app', 'Role Uz'),
            'role_ru' => Yii::t('app', 'Role Ru'),
            'role_en' => Yii::t('app', 'Role En'),
            'phone' => Yii::t('app', 'Phone'),
            'email' => Yii::t('app', 'Email'),
            'parol' => Yii::t('app', 'Parol'),
        ];
    }
}
