<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\datepicker\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\News */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="news-form form-group form-md-line-input">

    <?php $form = ActiveForm::begin(['options' => ['enctype'=>'multipart/form-data']]); ?>

    <?php echo $form->field($model, 'name')->textInput(['maxlength' => true]); ?>

    <?php echo $form->field($model, 'text')->textarea(['rows' => 6]); ?>

    <?php echo $form->field($model, 'date')->widget(
        DatePicker::className(), [
        'id' => 'date',
        'inline' => true,
        'template' => '<div class="well well-sm" style="background-color: #fff; width:250px">{input}</div>',
        'clientOptions' => [
            'autoclose' => true,
            'format' => 'dd-M-yyyy'
        ]
    ]); ?>

    <div class="form-group form-md-line-input">
        <div class="md-radio-inline">
            <div class="md-radio">
                <input type="radio" id="on" name="status"
                       class="md-radiobtn" <?php echo $model['status'] == 1 ? 'checked=""' : ''; ?>>
                <label for="on">
                    <span class="inc"></span>
                    <span class="check"></span>
                    <span class="box statusBox" data-id="<?php echo $model['id']; ?>" data-status="1"></span>Опубликована</label>
            </div>
            <div class="md-radio has-error">
                <input type="radio" id="off" name="status"
                       class="md-radiobtn" <?php echo $model['status'] == 0 ? 'checked=""' : ''; ?>>
                <label for="off">
                    <span class="inc"></span>
                    <span class="check"></span>
                    <span class="box statusBox" data-id="<?php echo $model['id']; ?>" data-status="0"></span>Не
                    опубликована</label>
            </div>
        </div>
    </div>

    <div class="form-group">
        <input type="file" name="image">
    </div>

    <div class="form-group">
        <?php echo Html::submitButton($model->isNewRecord ? 'Создать' : 'Обновить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']); ?>
    </div>


    <?php ActiveForm::end(); ?>

</div>
