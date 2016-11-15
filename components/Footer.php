<?php
namespace app\components;

use yii\base\Widget;

class Footer extends Widget
{

    public function init()
    {
        ob_start();
    }

    public function run()
    {
        return $this->render('footer');
    }
}