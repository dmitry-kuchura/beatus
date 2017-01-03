<?php

namespace app\modules\admin\controllers;

use Yii;
use app\modules\admin\models\Slider;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\data\Pagination;
use yii\web\HttpException;
use yii\web\Response;
use app\modules\admin\components\FileUpload;

class SliderController extends Controller
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
        $this->view->title = 'Слайды';
        $this->view->params['breadcrumbs'][] = 'Слайды';

        $query = Slider::find();

        $pager = new Pagination(['totalCount' => $query->count(), 'pageSize' => 4, 'pageSizeParam' => false, 'forcePageParam' => false]);

        $data = $query->offset($pager->offset)->limit($pager->limit)->orderBy('sort ASC')->all();
        if (empty($data)) {
            throw new HttpException(404, 'Страница не была найдена..');
        }

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
        $this->view->title = 'Добавление слайда';

        $this->view->params['breadcrumbs'][] = ['label' => 'Слайды', 'url' => ['index']];
        $this->view->params['breadcrumbs'][] = 'Добавление слайда';

        $model = new Slider();

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

        $this->view->title = 'Изменение слайда';
        $this->view->params['breadcrumbs'][] = ['label' => 'Слайды', 'url' => ['index']];
        $this->view->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
        $this->view->params['breadcrumbs'][] = 'Изменение';


        if (Yii::$app->request->post()) {
            $data['Slider'] = Yii::$app->request->post('Slider');

            $model->name = $data['Slider']['name'];
            $model->text = $data['Slider']['text'];
            $model->status = (int)$data['Slider']['status'] == 0 ? 0 : 1;

            if ($_FILES) {
                $slide = FileUpload::uploadImage('image/slider', $name = 'slide', 'slider');
                $bg = FileUpload::uploadImage('image/slider', $name = 'bg', 'slider');

                $model->slide = $slide;
                $model->bg = $bg;
            }
        }

        if (Yii::$app->request->post() && $model->save()) {
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

    public function actionStatus()
    {
        Yii::$app->response->format = Response::FORMAT_JSON;

        $post = Yii::$app->request->post();

        $model = $this->findModel($post['id']);

        $model->status = (int)$post['status'];

        if ($model->save()) {
            return ['result' => 'true'];
        } else {
            return ['result' => 'false'];
        }
    }

    protected function findModel($id)
    {
        if (($model = Slider::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
