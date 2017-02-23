<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "member".
 *
 * @property integer $id
 * @property string $photo
 * @property string $username
 * @property string $password
 * @property string $student_id
 * @property string $citizen_id
 * @property string $prefix_id
 * @property string $firstname
 * @property string $lastname
 * @property string $nickname
 * @property string $birthday
 * @property integer $age
 * @property string $gender
 * @property string $graduate_year
 * @property string $generation
 * @property string $occupation
 * @property string $position
 * @property string $status_id
 * @property string $study
 * @property string $level
 * @property string $class
 * @property string $address
 * @property string $work
 * @property string $email
 * @property string $tel
 * @property string $create_date
 */
class Member extends \yii\db\ActiveRecord
{
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
            [['birthday', 'age', 'address'], 'required'],
            [['birthday', 'create_date'], 'safe'],
            [['age'], 'integer'],
            [['address', 'work'], 'string'],
            [['photo', 'prefix_id', 'status_id'], 'string', 'max' => 200],
            [['username', 'password', 'nickname'], 'string', 'max' => 20],
            [['student_id', 'citizen_id'], 'string', 'max' => 13],
            [['firstname', 'lastname'], 'string', 'max' => 50],
            [['gender', 'email'], 'string', 'max' => 100],
            [['graduate_year'], 'string', 'max' => 4],
            [['generation'], 'string', 'max' => 3],
            [['occupation', 'position', 'study', 'level'], 'string', 'max' => 500],
            [['class'], 'string', 'max' => 5],
            [['tel'], 'string', 'max' => 15],
            [['imageFile'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ลำดับ',
            'photo' => 'รูปภาพ',
            'username' => 'ชื่อผู้ใช้งาน',
            'password' => 'รหัสผ่าน',
            'student_id' => 'รหัสนักศึกษา',
            'citizen_id' => 'รหัสบัตรประชาชน',
            'prefix_id' => 'คำนำหน้า',
            'firstname' => 'ชื่อ',
            'lastname' => 'นามสกุล',
            'nickname' => 'ชื่อเล่น',
            'birthday' => 'วันเดือนปีเกิด',
            'age' => 'อายุ',
            'gender' => 'เพศ',
            'graduate_year' => 'ปีการศึกษาที่จบ',
            'generation' => 'รุ่นที่',
            'occupation' => 'อาชีพ',
            'position' => 'ตำแหน่ง',
            'status_id' => 'สถานะ',
            'study' => 'กำลังศึกษาอยู่ที่',
            'level' => 'ระดับการศึกษา',
            'class' => 'กำลังศึกษาปีที่',
            'address' => 'ที่อยู่',
            'work' => 'สถานที่ทำงาน',
            'email' => 'อีเมลล์',
            'tel' => 'เบอร์โทร',
            'create_date' => 'วันเวลาสมัคร',
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
