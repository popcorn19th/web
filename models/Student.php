<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "student".
 *
 * @property integer $id
 * @property string $username
 * @property string $password
 * @property string $student_id
 * @property string $citizen_id
 * @property string $firstname
 * @property string $lastname
 * @property string $nickname
 * @property string $birthday
 * @property integer $age
 * @property string $address
 * @property integer $status_id
 * @property integer $prefix_id
 * @property string $work
 * @property string $email
 * @property string $tel
 */
class Student extends \yii\db\ActiveRecord
{
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
            [['birthday', 'age', 'address', 'status_id', 'prefix_id'], 'required'],
            [['birthday'], 'safe'],
            [['age', 'status_id', 'prefix_id'], 'integer'],
            [['address', 'work'], 'string'],
            [['username', 'password', 'firstname', 'lastname', 'email', 'tel'], 'string', 'max' => 200],
            [['student_id', 'citizen_id'], 'string', 'max' => 13],
            [['nickname'], 'string', 'max' => 100],
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
            'student_id' => 'รหัสนักศึกษา',
            'citizen_id' => 'รหัสบัตรประชาชน',
            'firstname' => 'Firstname',
            'lastname' => 'Lastname',
            'nickname' => 'Nickname',
            'birthday' => 'Birthday',
            'age' => 'Age',
            'address' => 'Address',
            'status_id' => 'Status ID',
            'prefix_id' => 'Prefix ID',
            'work' => 'Work',
            'email' => 'Email',
            'tel' => 'Tel',
        ];
    }
}
