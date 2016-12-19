<?php

namespace app\modules\admin\controllers;

use Yii;
use app\modules\admin\controllers\MainController;
use yii\web\Response;

class DefaultController extends MainController
{

    public function beforeAction($action)
    {
        $session = Yii::$app->session;
        if (!$session->get('login')) {
            $this->layout = 'login';
            return $this->render('login');
        }
    }

    public function actionIndex()
    {
        $this->view->title = 'Панель Администратора - Wezom Yii2';
        $this->layout = 'main';
        return $this->render('index');
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
