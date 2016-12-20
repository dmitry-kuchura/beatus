<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use app\controllers\MainController;


class IndexController extends MainController
{

    public function actionIndex()
    {
        $this->view->title = 'Beatus Yii2';
        return $this->render('index');
    }

    public function actionError()
    {
        $this->layout = '404';
        $this->view->title = '#404 Not Found';
        return $this->render('404');
    }

    public function actionTest() {
        return $this->render('index');
    }
}
