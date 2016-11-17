<?php
namespace app\components;

use yii\base\Widget;

class Head extends Widget
{

    public function init()
    {
        ob_start();
    }

    public function run()
    {
        return $this->render('head');
    }
}