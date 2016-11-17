<?php

use yii\helpers\Url;
use app\components\Text;

?>


<h3 class="page-title"><?php echo $this->title; ?></h3>

<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="dashboard-stat blue">
            <div class="visual">
                <i class="fa fa-comments"></i>
            </div>
            <div class="details">
                <div class="number">
                    <span data-counter="counterup" data-value="<?php echo $count_category; ?>"><?php echo $count_category; ?></span>
                </div>
                <div class="desc"> Всего разделов </div>
            </div>
            <a class="more" href="<?php echo Url::to(['/admin/category']); ?>"> Подробнее
                <i class="m-icon-swapright m-icon-white"></i>
            </a>
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="dashboard-stat purple">
            <div class="visual">
                <i class="fa fa-globe"></i>
            </div>
            <div class="details">
                <div class="number">
                    <span data-counter="counterup" data-value="<?php echo $count_pages; ?>"><?php echo $count_pages; ?></span>
                </div>
                <div class="desc"> Всего страниц </div>
            </div>
            <a class="more" href="<?php echo Url::to(['/admin/pages']); ?>"> Подробнее
                <i class="m-icon-swapright m-icon-white"></i>
            </a>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6 col-sm-6">
        <div class="portlet light bordered">
            <div class="portlet-title tabbable-line">
                <div class="caption">
                    <i class="icon-layers font-red"></i>
                    <span class="caption-subject font-red bold uppercase"> Последние страницы </span>
                </div>
            </div>
            <div class="portlet-body">
                <div class="tab-content">
                    <div class="tab-pane active">
                        <div class="mt-comments">
                            <?php foreach ($pages as $page): ?>
                                <div class="mt-comment">
                                    <div class="mt-comment-body">
                                        <div class="mt-comment-info">
                                            <span class="mt-comment-author"><?php echo $page->name; ?></span>
                                            <span class="mt-comment-date"><?php echo $parent[$page->parent]; ?></span>
                                        </div>
                                        <div class="mt-comment-text"> <?php echo Text::limit($page->text); ?> </div>

                                        <?php switch ($page->status) {
                                            case 1:
                                                $text = 'Опубликовано';
                                                $status = 'mt-comment-status-approved';
                                                break;
                                            case 0:
                                                $text = 'Не опубликовано';
                                                $status = 'mt-comment-status-pending';
                                                break;
                                        }; ?>

                                        <div class="mt-comment-details">
                                            <span class="mt-comment-status <?php echo $status; ?>"><?php echo $text; ?></span>
                                            <ul class="mt-comment-actions">
                                                <li>
                                                    <a href="<?php echo Url::to(['/admin/pages/update', 'id' => $page->id]) ?>">Редактировать</a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo Url::to(['/admin/pages/view', 'id' => $page->id]) ?>">Просмотр</a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo Url::to(['/admin/pages/delete', 'id' => $page->id]) ?>">Удаление</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-sm-6">
        <div class="portlet light bordered">
            <div class="portlet-title tabbable-line">
                <div class="caption">
                    <i class="icon-puzzle font-red"></i>
                    <span class="caption-subject font-red bold uppercase"> Разделы сайта </span>
                </div>
            </div>
            <div class="portlet-body">
                <div class="tab-content">
                    <div class="tab-pane active">
                        <div class="mt-comments">
                            <?php foreach ($category as $cat): ?>
                                <div class="mt-comment">
                                    <div class="mt-comment-body">
                                        <div class="mt-comment-info">
                                            <span class="mt-comment-author"><?php echo $cat->name; ?></span>
                                        </div>

                                        <?php switch ($cat->status) {
                                            case 1:
                                                $text = 'Опубликовано';
                                                $status = 'mt-comment-status-approved';
                                                break;
                                            case 0:
                                                $text = 'Не опубликовано';
                                                $status = 'mt-comment-status-pending';
                                                break;
                                        }; ?>

                                        <div class="mt-comment-details">
                                            <span class="mt-comment-status <?php echo $status; ?>"><?php echo $text; ?></span>
                                            <ul class="mt-comment-actions">
                                                <li>
                                                    <a href="<?php echo Url::to(['/admin/category/update', 'id' => $cat->id]) ?>">Редактировать</a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo Url::to(['/admin/category/view', 'id' => $cat->id]) ?>">Просмотр</a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo Url::to(['/admin/category/delete', 'id' => $cat->id]) ?>">Удаление</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

