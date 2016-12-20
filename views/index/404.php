<?php use yii\helpers\Url; ?>
<div class="errorHolder">
    <div class="errorContent">
        <div class="errorHeader">404</div>
        <div class="wTxt">
            <h3>Страница не найдена</h3>
            <p><em>К сожалению, страница, которую Вы запросили, не была найдена.</em> <br> Вы можете перейти на <a href="<?php echo Url::to('/'); ?>">главную страницу.</a></p>
        </div>
    </div>
</div>