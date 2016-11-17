<?php

namespace app\modules\admin\controllers;

use Yii;
use yii\web\Controller;
use app\modules\admin\models\Users;


class MainController extends Controller
{


    public function login($data)
    {
        $session = Yii::$app->session;

        $user = Users::find()
            ->where(['status' => 1])
            ->andFilterWhere(['like', 'login', $data['username']])
            ->one();
        if ($user->pass == $data['password']) {
            $session->set('login', 'true');
            return true;
        }

        return false;
    }


}
