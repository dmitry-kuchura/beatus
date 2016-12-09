<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "slider".
 *
 * @property integer $id
 * @property integer $created_at
 * @property integer $updated_at
 * @property string $name
 * @property string $title
 * @property string $text
 * @property string $slide
 * @property string $bg
 * @property integer $status
 * @property integer $sort
 */
class Slider extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'slider';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['created_at', 'updated_at', 'status', 'sort'], 'integer'],
            [['name', 'status', 'sort'], 'required'],
            [['name', 'title', 'text'], 'string', 'max' => 150],
            [['slide', 'bg'], 'string', 'max' => 250],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'name' => 'Name',
            'title' => 'Title',
            'text' => 'Text',
            'slide' => 'Slide',
            'bg' => 'Bg',
            'status' => 'Status',
            'sort' => 'Sort',
        ];
    }
}
