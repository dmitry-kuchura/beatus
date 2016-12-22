<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use yii\db\Query;


class MainController extends Controller
{
    public function registerParams()
    {
        // Copyright
        $query = new Query;
        $query->select('val')
            ->from('config')
            ->where(['data' => 'copyright']);
        $copyright = $query->one();
        $this->view->params['copyright'][] = $copyright['val'];



    }
}
