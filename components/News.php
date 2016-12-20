<?php
namespace app\components;

use yii\base\Widget;
use app\models\News as Model;

class News extends Widget
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
            ->orderBy('date DESC')
            ->limit(7)
            ->all();

        return $this->render('news', ['result' => $result]);
    }
}