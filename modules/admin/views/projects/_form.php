<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\datepicker\DatePicker;
use yii\helpers\Url;
use app\modules\admin\components\DatePicker as Picker;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\News */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="news-form form-group form-md-line-input">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?php echo $form->field($model, 'name')->textInput(['maxlength' => true]); ?>

    <?php echo $form->field($model, 'text')->textarea(['rows' => 6]); ?>

    <div class="form-group form-md-line-input">
        <div class="md-radio-inline">
            <div class="md-radio">
                <input type="radio" id="on" name="News[status]" value="1"
                       class="md-radiobtn" <?php echo $model['status'] == 1 ? 'checked=""' : ''; ?>>
                <label for="on">
                    <span class="inc"></span>
                    <span class="check"></span>
                    <span class="box statusBox" data-id="<?php echo $model['id']; ?>" data-status="1"></span>Опубликована</label>
            </div>
            <div class="md-radio has-error">
                <input type="radio" id="off" name="News[status]" value="0"
                       class="md-radiobtn" <?php echo $model['status'] == 0 ? 'checked=""' : ''; ?>>
                <label for="off">
                    <span class="inc"></span>
                    <span class="check"></span>
                    <span class="box statusBox" data-id="<?php echo $model['id']; ?>" data-status="0"></span>Не опубликована</label>
            </div>
        </div>
    </div>
    <?php if (is_file(HOST . Url::to('/image/news/main/' . $model['image']))): ?>
        <div id="preview-pane">
            <div class="preview-container">
                <?php echo Html::img(Url::to('/image/news/main/' . $model['image']), ['style' => 'max-width: 235px;']); ?>
            </div>
        </div>
    <?php else: ?>
        <div class="form-group">
            <input type="file" name="image">
        </div>
    <?php endif; ?>
    <div class="form-group">
        <?php echo Html::submitButton($model->isNewRecord ? 'Создать' : 'Обновить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']); ?>
    </div>
    <?php ActiveForm::end(); ?>
</div>
