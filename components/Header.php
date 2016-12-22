<?php
namespace app\components;

use yii\base\Widget;
use yii\db\Query;

class Header extends Widget
{

    public function init()
    {
        parent::init();
        ob_start();
    }

    public function run()
    {
        ob_get_clean();

        $query = new Query;
        $query->select('val')
            ->from('config')
            ->where(['data' => 'phone_1']);
        $phone = $query->one();

        return $this->render('header', ['phone' => $phone['val']]);
    }
}