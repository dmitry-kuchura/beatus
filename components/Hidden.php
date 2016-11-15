<?php
namespace app\components;

use yii\base\Widget;

class Hidden extends Widget
{

    public function init()
    {
        ob_start();
    }

    public function run()
    {
        return $this->render('hidden');
    }
}