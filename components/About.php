<?php
namespace app\components;

use yii\base\Widget;

class About extends Widget
{

    public function init()
    {
        parent::init();
        ob_start();
    }

    public function run()
    {
        ob_get_clean();
        return $this->render('about');
    }
}