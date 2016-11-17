<?php

namespace app\modules\admin\controllers;

use Yii;
use app\modules\admin\controllers\MainController;
use yii\web\Response;

class DefaultController extends MainController
{

    public function actionIndex()
    {
        $session = Yii::$app->session;
        $this->view->title = 'Панель Администратора - Wezom Yii2';

        if ($session->get('login')) {
            return $this->render('index');
        } else {

            $this->layout = 'login';
            return $this->render('login');
        }
    }

    public function actionLogin()
    {

        Yii::$app->response->format = Response::FORMAT_JSON;

        if (Yii::$app->request->isAjax) {
            $data = Yii::$app->request->post();

            $authorization = $this->login($data);

            if ($authorization) {
                return ['authorization' => 'true'];
            } else {
                return ['authorization' => 'false'];
            }
        }

    }

    public function actionLogout()
    {
        $session = Yii::$app->session;
        $session->remove('login');

        $this->redirect(['index']);
    }
}
