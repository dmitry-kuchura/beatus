<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "config".
 *
 * @property integer $id
 * @property string $name
 * @property string $val
 * @property string $data
 * @property string $type
 * @property integer $status
 */
class Config extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'config';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['val'], 'string'],
            [['status'], 'integer'],
            [['name', 'data', 'type'], 'string', 'max' => 150],
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
            'val' => 'Val',
            'data' => 'Data',
            'type' => 'Type',
            'status' => 'Status',
        ];
    }
}
