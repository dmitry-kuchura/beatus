<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "contacts".
 *
 * @property integer $id
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $status
 * @property string $name
 * @property string $email
 * @property string $theme
 * @property string $phone
 */
class Contacts extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'contacts';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['created_at', 'updated_at', 'status'], 'integer'],
            [['theme'], 'string'],
            [['name', 'email'], 'string', 'max' => 64],
            [['phone'], 'string', 'max' => 150],
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
            'status' => 'Status',
            'name' => 'Name',
            'email' => 'Email',
            'theme' => 'Theme',
            'phone' => 'Phone',
        ];
    }
}
