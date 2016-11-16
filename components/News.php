<?php
namespace app\components;

use yii\base\Widget;

class News extends Widget
{

    public function init()
    {
        ob_start();
    }

    public function run()
    {
        return $this->render('news');
    }
}