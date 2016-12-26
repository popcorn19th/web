<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;
/**
 * ContactForm is the model behind the contact form.
 */
class Member extends ActiveRecord
{
  public static function tableName()
  {
      return '{{member}}';
  }

  public function attributeLabels()
    {
        return [
            'id' =>'No.',
            'username' => 'ชื่อผู้ใช้',
            'password' => 'รหัสผ่าน',
            'firstname' => 'ชื่อ',
            'lastname' => 'นามสกุล',
            'nickname' => 'ชื่อเล่น',
            'age' => 'อายุ',
            'email' => 'อีเมลล์',
            'manage'=> 'จัดการ',
        ];
    }
    public function rules()
    {
        return [
            [['username', 'password', 'firstname', 'lastname','nickname','age','email'], 'required'],
            [['username', 'password', 'firstname', 'lastname','nickname','age','email'], 'safe'],
        ];
    }
}
