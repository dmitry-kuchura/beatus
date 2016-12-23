<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use app\controllers\MainController;
use yii\db\Query;
use yii\web\Response;
use yii\base\View;
use app\modules\admin\models\Contacts;


class FormController extends MainController
{

    public function actionContacts()
    {

        Yii::$app->response->format = Response::FORMAT_JSON;

        if (Yii::$app->request->post()) {
            $post = Yii::$app->request->post();

            $contacts = new Contacts();

            $contacts->created_at = time();
            $contacts->name = $post['name'];
            $contacts->email = $post['email'];
            $contacts->theme = $post['theme'];
            $contacts->phone = $post['phone'];

            $contacts->save();

            return ['success' => true, 'response' => 'Ответсвенный сотрудник свяжется с Вами в ближайшее время. Спасибо что Вы с нами!'];
        } else {
            return ['success' => false];
        }
    }
}
