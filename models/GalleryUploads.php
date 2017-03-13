<?php

namespace backend\models;

use Yii;
use \yii\web\UploadedFile;
use \yii\helpers\ArrayHelper;
use \yii\helpers\Html;

/**
 * This is the model class for table "gallery_uploads".
 *
 * @property integer $id
 * @property string $name
 * @property string $details
 * @property string $photo
 * @property string $photos
 */
class GalleryUploads extends \yii\db\ActiveRecord
{
  public $upload_foler ='uploads';
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'gallery_uploads';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [

            [['name'], 'string', 'max' => 100],
            [['details'], 'string', 'max' => 500],
            [['photo'], 'file',
              'skipOnEmpty' => true,
              'extensions' => 'png,jpg'
            ],
            [['photos'], 'file',
              'skipOnEmpty' => true,
              'maxFiles' => 3,
              'extensions' => 'png,jpg'
            ]
        ];
}

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'details' => 'Details',
            'photo' => 'Photo',
            'photos' => 'Photos',
        ];
    }
}
public static function find()
    {
        return new GalleryUploadsQuery(get_called_class());
    }

public function upload($model,$attribute)
    {
        $photo  = UploadedFile::getInstance($model, $attribute);
          $path = $this->getUploadPath();
        if ($this->validate() && $photo !== null) {
            $fileName = md5($photo->baseName.time()) . '.' . $photo->extension;
            //$fileName = $photo->baseName . '.' . $photo->extension;
            if($photo->saveAs($path.$fileName)){
              return $fileName;
            }
        }
        return $model->isNewRecord ? false : $model->getOldAttribute($attribute);
    }

public function uploadMultiple($model,$attribute)
    {
      $photos  = UploadedFile::getInstances($model, $attribute);
      $path = $this->getUploadPath();
      if ($this->validate() && $photos !== null) {
          $filenames = [];
          foreach ($photos as $file) {
                  $filename = md5($file->baseName.time()) . '.' . $file->extension;
                  if($file->saveAs($path . $filename)){
                    $filenames[] = $filename;
                  }
          }
          if($model->isNewRecord){
            return implode(',', $filenames);
          }else{
            return implode(',',(ArrayHelper::merge($filenames,$model->getOwnPhotosToArray())));
          }
      }

      return $model->isNewRecord ? false : $model->getOldAttribute($attribute);
    }

    public function getPhotosViewer(){
      $photos = $this->photos ? @explode(',',$this->photos) : [];
      $img = '';
      foreach ($photos as  $photo) {
        $img.= ' '.Html::img($this->getUploadUrl().$photo,['class'=>'img-thumbnail','style'=>'max-width:100px;']);
      }
      return $img;
    }

    public function getOwnPhotosToArray()
    {
      return $this->getOldAttribute('photos') ? @explode(',',$this->getOldAttribute('photos')) : [];
    }
