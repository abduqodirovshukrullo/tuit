<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "students".
 *
 * @property int $id
 * @property string $image
 * @property string $name
 * @property string $name_ru
 * @property string $surname
 * @property string $surname_ru
 * @property string $group
 * @property string $subject
 * @property string $phone
 * @property string $email
 */
class Students extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'students';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['image', 'name', 'name_ru', 'surname', 'surname_ru', 'group', 'subject', 'phone', 'email'], 'string', 'max' => 255],
            [['name', 'surname', 'group','subject','phone' ], 'required'],

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
            'surname_ru' => Yii::t('app', 'Surname Ru'),
            'group' => Yii::t('app', 'Group'),
            'subject' => Yii::t('app', 'Subject'),
            'phone' => Yii::t('app', 'Phone'),
            'email' => Yii::t('app', 'Email'),
        ];
    }
}
