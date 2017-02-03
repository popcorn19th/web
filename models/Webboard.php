<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "webboard".
 *
 * @property integer $id
 * @property string $name
 * @property integer $question_id
 * @property string $detail
 * @property string $create_date
 */
class Webboard extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'webboard';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['question_id'], 'integer'],
            [['detail'], 'string'],
            [['create_date'], 'safe'],
            [['name'], 'string', 'max' => 100],
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
            'question_id' => 'Question ID',
            'detail' => 'Detail',
            'create_date' => 'Create Date',
        ];
    }
}
