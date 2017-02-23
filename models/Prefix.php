<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "prefix".
 *
 * @property integer $id
 * @property string $name
 */
class Prefix extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'prefix';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'คำนำหน้า',
        ];
    }
}
