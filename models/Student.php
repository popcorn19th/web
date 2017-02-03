<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "student".
 *
 * @property string $username
 * @property string $password
 * @property integer $id
 * @property integer $no
 * @property string $firstname
 * @property string $lastname
 * @property string $nickname
 * @property string $birthday
 * @property integer $age
 * @property string $address
 * @property integer $status_id
 * @property string $prefix_id
 * @property string $work
 * @property string $email
 * @property integer $tel
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
            [['no', 'birthday', 'age', 'address', 'status_id', 'tel'], 'required'],
            [['no', 'age', 'status_id', 'tel'], 'integer'],
            [['address', 'work'], 'string'],
            [['username', 'password', 'firstname', 'lastname', 'email'], 'string', 'max' => 200],
            [['nickname'], 'string', 'max' => 100],
            [['birthday', 'prefix_id'], 'string', 'max' => 250],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'username' => 'Username',
            'password' => 'Password',
            'id' => 'รหัสนักศึกษา',
            'no' => 'รหัสบัตรประชาชน',
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
