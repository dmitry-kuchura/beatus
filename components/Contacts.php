<?php
namespace app\components;

use yii\base\Widget;
use yii\db\Query;

class Contacts extends Widget
{

    public function init()
    {
        parent::init();
        ob_start();
    }

    public function run()
    {
        ob_get_clean();
        
        $params = [];

        // API Gmail
        $query = new Query;
        $query->select('val')
            ->from('config')
            ->where(['data' => 'gmail-api']);
        $api = $query->one();
        $params['api-key'] = $api['val'];

        // Maps X
        $query = new Query;
        $query->select('val')
            ->from('config')
            ->where(['data' => 'mapx']);
        $mapx = $query->one();
        $params['map-x'] = $mapx['val'];

        // Maps Y
        $query = new Query;
        $query->select('val')
            ->from('config')
            ->where(['data' => 'mapy']);
        $mapy = $query->one();
        $params['map-y'] = $mapy['val'];

        // Address
        $query = new Query;
        $query->select('val')
            ->from('config')
            ->where(['data' => 'address']);
        $address = $query->one();
        $params['address'] = $address['val'];

        // Phone #1
        $query = new Query;
        $query->select('val')
            ->from('config')
            ->where(['data' => 'phone_1']);
        $phone_1 = $query->one();
        $params['phone_1'] = $phone_1['val'];

        // Phone #2
        $query = new Query;
        $query->select('val')
            ->from('config')
            ->where(['data' => 'phone_2']);
        $phone_2 = $query->one();
        $params['phone_2'] = $phone_2['val'];

        // Phone #3
        $query = new Query;
        $query->select('val')
            ->from('config')
            ->where(['data' => 'phone_3']);
        $phone_3 = $query->one();
        $params['phone_3'] = $phone_3['val'];

        // Email
        $query = new Query;
        $query->select('val')
            ->from('config')
            ->where(['data' => 'email']);
        $email = $query->one();
        $params['email'] = $email['val'];

        // Facebook
        $query = new Query;
        $query->select('val')
            ->from('config')
            ->where(['data' => 'facebook']);
        $facebook = $query->one();
        $params['facebook'] = $facebook['val'];

        // Youtube
        $query = new Query;
        $query->select('val')
            ->from('config')
            ->where(['data' => 'youtube']);
        $youtube = $query->one();
        $params['youtube'] = $youtube['val'];

        // Twitter
        $query = new Query;
        $query->select('val')
            ->from('config')
            ->where(['data' => 'twitter']);
        $twitter = $query->one();
        $params['twitter'] = $twitter['val'];

        // Google +
        $query = new Query;
        $query->select('val')
            ->from('config')
            ->where(['data' => 'google']);
        $google = $query->one();
        $params['google'] = $google['val'];
        
        return $this->render('contacts', ['params' => $params]);
    }
}