<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "webboard_topic".
 *
 * @property integer $id
 * @property string $subject
 * @property string $user
 * @property string $detail
 * @property string $create_date
 */
class WebboardTopic extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'webboard_topic';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['subject'], 'required'],
            [['detail'], 'string'],
            [['create_date'], 'safe'],
            [['subject'], 'string', 'max' => 250],
            [['user'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'subject' => 'หัวข้อ',
            'user' => 'ชื่อ',
            'detail' => 'ข้อความ',
            'create_date' => 'Create Date',
        ];
    }
}
