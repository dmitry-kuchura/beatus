<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "news".
 *
 * @property integer $id
 * @property integer $created_at
 * @property integer $updated_at
 * @property string $name
 * @property string $text
 * @property string $h1
 * @property string $title
 * @property string $description
 * @property string $keywords
 * @property integer $status
 * @property integer $date
 * @property string $image
 * @property integer $views
 */
class News extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'news';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['created_at', 'updated_at', 'status', 'date', 'views'], 'integer'],
            [['name'], 'required'],
            [['text', 'description', 'keywords'], 'string'],
            [['name', 'h1', 'title'], 'string', 'max' => 150],
            [['image'], 'string', 'max' => 255],
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
            'text' => 'Text',
            'h1' => 'H1',
            'title' => 'Title',
            'description' => 'Description',
            'keywords' => 'Keywords',
            'status' => 'Status',
            'date' => 'Date',
            'image' => 'Image',
            'views' => 'Views',
        ];
    }
}
