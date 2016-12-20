<?php

namespace app\modules\admin\controllers;

use Yii;
use app\modules\admin\models\News;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\data\Pagination;
use yii\web\HttpException;
use yii\web\Response;

class NewsController extends Controller
{
    public function behaviors()
    {
        $this->enableCsrfValidation = false;

        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['GET'],
                ],
            ],
        ];
    }

    public function actionIndex()
    {
        $this->view->title = 'Новости';
        $this->view->params['breadcrumbs'][] = 'Новости';

        $query = News::find()->orderBy('id DESC');
        // pager
        $pager = new Pagination(['totalCount' => $query->count(), 'pageSize' => 4, 'pageSizeParam' => false, 'forcePageParam' => false]);
        // get data
        $data = $query->offset($pager->offset)->limit($pager->limit)->orderBy('date DESC')->all();
        if (empty($data)) {
            throw new HttpException(404, 'Страница не была найдена..');
        }
        // render
        return $this->render('index', ['data' => $data, 'pager' => $pager]);
    }

    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    public function actionCreate()
    {
        $model = new News();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

//        Yii::$app->request->post('News')['date'] = strtotime(Yii::$app->request->post('News')['date']);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    public function actionStatus() {
        Yii::$app->response->format = Response::FORMAT_JSON;

        $post = Yii::$app->request->post();

        $model = $this->findModel($post['id']);

        $model->status = (int) $post['status'];

        if ($model->save()) {
            return ['result' => 'true'];
        } else {
            return ['result' => 'false'];
        }
    }

    protected function findModel($id)
    {
        if (($model = News::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
