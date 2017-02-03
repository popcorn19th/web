<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "member".
 *
 * @property integer $id
 * @property string $username
 * @property string $password
 * @property string $firstname
 * @property string $lastname
 * @property string $nickname
 * @property integer $age
 * @property string $email
 */
class MemberTest extends \yii\db\ActiveRecord
{
    public $imageFile;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'member';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['age'], 'integer'],
            [['username', 'password', 'nickname'], 'string', 'max' => 20],
            [['firstname', 'lastname'], 'string', 'max' => 50],
            [['photo'], 'string', 'max' => 200],
            [['email'], 'string', 'max' => 100],
            [['imageFile'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'password' => 'Password',
            'firstname' => 'Firstname',
            'lastname' => 'Lastname',
            'nickname' => 'Nickname',
            'age' => 'Age',
            'email' => 'Email',
            'photo' => 'Photo',
        ];
    }

    public function upload()
    {
        if ($this->validate()) {
            $filename = $this->imageFile->baseName . '.' . $this->imageFile->extension;
            $this->imageFile->saveAs('uploads/' . $filename);
            return $filename;
        } else {
            return false;
        }
    }
}
