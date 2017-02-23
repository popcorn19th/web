<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Student;
use app\models\Prefix;
use app\models\Status;

/**
 * This is the model class for table "student".
 *
 * @property integer $id
 * @property string $username
 * @property string $password
 * @property string $student_id
 * @property integer $prefix_id
 * @property string $firstname
 * @property string $lastname
 * @property string $gender
 * @property string $nickname
 * @property string $citizen_id
 * @property string $birthday
 * @property integer $age
 * @property string $address
 * @property integer $status_id
 * @property integer $class
 * @property string $work
 * @property string $email
 * @property string $tel
 * @property string $photo
 */
class Student extends \yii\db\ActiveRecord
{
    public $imageFile;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'student';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['prefix_id', 'nickname', 'citizen_id', 'birthday', 'age', 'address', 'status_id'], 'required'],
            [['prefix_id', 'age', 'status_id', 'class'], 'integer'],
            [['birthday'], 'safe'],
            [['address', 'work'], 'string'],
            [['username', 'password', 'firstname', 'lastname', 'gender', 'email', 'tel', 'photo'], 'string', 'max' => 200],
            [['student_id', 'citizen_id'], 'string', 'max' => 13],
            [['gender', 'nickname'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ลำดับ',
            'username' => 'ชื่อผู้ใช้งาน',
            'password' => 'รหัสผ่าน',
            'student_id' => 'รหัสนักศึกษา',
            'prefix_id' => 'คำนำหน้า',
            'firstname' => 'ชื่อ',
            'lastname' => 'นามสกุล',
            'gender' => 'เพศ',
            'nickname' => 'ชื่อเล่น',
            'citizen_id' => 'รหัสบัตรประชาชน',
            'birthday' => 'วันเดือนปีเกิด',
            'age' => 'อายุ',
            'address' => 'ที่อยู่',
            'status_id' => 'สถานะ',
            'class' => 'กำลังศึกษาปีที่',
            'work' => 'สถานที่ทำงาน',
            'email' => 'อีเมลล์',
            'tel' => 'เบอร์โทร',
            'photo' => 'photo',
        ];
    }

public function upload()
   {
       if ($this->validate()) {
         if(isset($this->imageFile->extension)){
           $filename = $this->imageFile->baseName . '.' . $this->imageFile->extension;
           $this->imageFile->saveAs('uploads/' . $filename);
           return $filename;
         }else{
           return false;
         }

       } else {
           return false;
       }
   }

   public function getPrefix()
   {
       return $this->hasOne(Prefix::className(), ['id' => 'prefix_id']);
   }

   public function getStatus()
   {
       return $this->hasOne(Status::className(), ['id' => 'status_id']);
   }



}
