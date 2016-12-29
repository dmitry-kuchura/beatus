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

        // Get settings
        $query = new Query;
        $query->select('*')
            ->from('config')
            ->where(['status' => 1]);
        $data = $query->all();

        foreach ($data as $item) {
            $params[$item['data']] = $item['val'];
        }

        return $this->render('contacts', ['params' => $params]);
    }
}