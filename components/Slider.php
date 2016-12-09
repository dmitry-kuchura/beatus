<?php
namespace app\components;

use yii\base\Widget;
use app\models\Slider as Model;

class Slider extends Widget
{

    public function init()
    {
        parent::init();
        ob_start();
    }

    public function run()
    {
        ob_get_clean();

        $result = Model::find()
            ->where(['status' => 1])
            ->orderBy('sort ASC')
            ->all();

        return $this->render('slider', ['result' => $result]);
    }
}