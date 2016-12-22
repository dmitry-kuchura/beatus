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


class AjaxController extends MainController
{

    public function beforeAction($action)
    {
        $this->enableCsrfValidation = false;
        return parent::beforeAction($action);
    }

    public function actionNews()
    {

        Yii::$app->response->format = Response::FORMAT_JSON;

        if (Yii::$app->request->isAjax) {
            $post = Yii::$app->request->post();
            $page = (int)$post['page'];
            $limit = 4;
            $html = '';

            if ($page == 1) {
                $offset = 7;
            } else {
                $offset = (($page - 1) * $limit) + 7;
            }

            // Новости
            $query = new Query;
            $query->select('*')
                ->from('news')
                ->where(['status' => 1])
                ->orderBy('date DESC');

            $data = $query->offset($offset)->limit($limit)->all();

            // Больше новостей
            $more = new Query;
            $more->select('*')
                ->from('news')
                ->where(['status' => 1])
                ->orderBy('date DESC');

            $moreData = $more->offset($offset + $limit)->limit($limit)->all();

            foreach ($data as $news) {
                $html .= $this->renderFile('@app/views/ajax/news.php', ['obj' => $news]);
            }

            return ['success' => true, 'html' => $html, 'more' => $moreData];
        } else {
            return ['success' => false];
        }
    }

    public function actionProject()
    {
    }
}
