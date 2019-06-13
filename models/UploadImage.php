<?php

namespace app\models;

use trntv\filekit\behaviors\UploadBehavior;
use Yii;
use yii\base\Model;
use yii\db\ActiveRecord;
use yii\web\UploadedFile;

class UploadImage extends ActiveRecord
{
    /**
     * @var UploadedFile
     */
    public $imageFile;
    public function rules()
    {
        return [['imageFile'], 'file'];

    }

    public function upload()
    {
        if ($this->validate()) {
            $this->imageFile->saveAs('uploads/'. $this->id . '.' . $this->imageFile->baseName . '.' . $this->imageFile->extension);
            return true;
        } else {
            return false;
        }
    }
}