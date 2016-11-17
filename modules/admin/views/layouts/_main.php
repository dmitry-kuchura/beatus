<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AdminAsset;

AdminAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?php echo Yii::$app->language ?>">
<head>
    <meta charset="<?php echo Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php echo Html::csrfMetaTags() ?>
    <title><?php echo Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => 'Basic',
        'brandUrl' => Url::to(['/admin']),
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);

    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            Html::beginTag('li', ['class' => 'dropdown']),
            Html::a('Разделы' . Html::beginTag('span', ['class' => 'caret']) . Html::endTag('span', ['class' => 'caret']), Url::to(Yii::$app->homeUrl, true), ['class' => 'dropdown-toggle', 'data-toggle' => 'dropdown', 'role' => 'button', 'aria-haspopup' => 'true', 'aria-expanded' => 'false']),
            Html::beginTag('ul', ['class' => 'dropdown-menu']),

            Html::beginTag('li'), Html::a('Список разделов', Url::to(['/admin/category'])), Html::endTag('li'),
            Html::beginTag('li'), Html::a('Создать раздел', Url::to(['/admin/category/create'])), Html::endTag('li'),

            Html::endTag('ul', ['class' => 'dropdown-menu']),
            Html::endTag('li', ['class' => 'dropdown']),

            Html::beginTag('li', ['class' => 'dropdown']),
            Html::a('Страницы' . Html::beginTag('span', ['class' => 'caret']) . Html::endTag('span', ['class' => 'caret']), Url::to(Yii::$app->homeUrl, true), ['class' => 'dropdown-toggle', 'data-toggle' => 'dropdown', 'role' => 'button', 'aria-haspopup' => 'true', 'aria-expanded' => 'false']),
            Html::beginTag('ul', ['class' => 'dropdown-menu']),

            Html::beginTag('li'), Html::a('Список страниц', Url::to(['/admin/pages'])), Html::endTag('li'),
            Html::beginTag('li'), Html::a('Создать страницу', Url::to(['/admin/pages/create'])), Html::endTag('li'),

            Html::endTag('ul', ['class' => 'dropdown-menu']),
            Html::endTag('li', ['class' => 'dropdown'])
        ],
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <div class="page-header">
            <h1><?php echo Html::encode($this->title) ?></h1>
        </div>
        <?php echo Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?php echo $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; Wezom <?php echo date('Y') ?></p>

        <p class="pull-right"><?php echo Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
