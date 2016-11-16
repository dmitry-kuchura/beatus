<?php
namespace app\components;

use yii\base\Widget;

class Service extends Widget
{

    public function init()
    {
        ob_start();
    }

    public function run()
    {
        return $this->render('service');
    }
}