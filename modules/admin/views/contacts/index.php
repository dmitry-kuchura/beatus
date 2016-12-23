<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */
?>
<div class="pages-index">

    <h1><?php echo Html::encode($this->title); ?></h1>

    <p>
        <?php echo Html::a('Создать', ['create'], ['class' => 'btn btn-success']); ?>
    </p>

    <div class="row">
        <div class="col-md-12">
            <div class="portlet">
                <div class="portlet-title">
                    <div class="caption">Сообщения из контактной формы</div>
                </div>
                <div class="portlet-body">
                    <div class="table-scrollable">
                        <table class="table table-striped table-bordered table-advance table-hover">
                            <thead>
                            <tr>
                                <th>
                                    <i class="fa fa-info"></i> Имя
                                </th>
                                <th>
                                    <i class="fa fa-calendar"></i> Дата
                                </th>
                                <th>
                                    <i class="fa fa-check"></i> Статус
                                </th>
                                <th>
                                    <i class="fa fa-filter"></i> Операции
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($data as $news): ?>
                                <tr data-id="<?php echo $news->id; ?>">
                                    <td class="highlight">
                                        <div class="success"></div>
                                        <a href="<?php echo yii\helpers\Url::to(['/admin/news/update', 'id' => $news->id]) ?>"><?php echo $news->name; ?></a>
                                    </td>
                                    <td><?php echo date('d/m/Y', $news->created_at); ?></td>
                                    <td>
                                        <?php if ($news->status == 0): ?>
                                            <span class="label label-sm label-danger"> Не опубликовано </span>
                                        <?php else: ?>
                                            <span class="label label-sm label-success"> Опубликовано </span>
                                        <?php endif; ?>
                                    </td>
                                    <td>
                                        <a href="<?php echo yii\helpers\Url::to(['/admin/news/update', 'id' => $news->id]) ?>"
                                           class="btn btn-outline btn-circle btn-sm purple">
                                            <i class="fa fa-edit"></i> Изменить</a>
                                        <a href="<?php echo yii\helpers\Url::to(['/admin/news/delete', 'id' => $news->id]) ?>"
                                           class="btn btn-outline btn-circle dark btn-sm black">
                                            <i class="fa fa-trash-o"></i> Удалить</a>
                                        <a href="<?php echo yii\helpers\Url::to(['/admin/news/view', 'id' => $news->id]) ?>"
                                           class="btn btn-outline btn-circle red btn-sm blue">
                                            <i class="fa fa-share"></i> Просмотр</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <?php echo \yii\widgets\LinkPager::widget(['pagination' => $pager]); ?>
    </div>
</div>
