<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Админка';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="login-form" action="index.html" method="post">
    <h3 class="form-title font-green">Панель Администратора</h3>
    <div class="alert alert-danger display-hide">
        <button class="close" data-close="alert"></button>
        <span> Enter any username and password. </span>
    </div>
    <div class="form-group">
        <label class="control-label visible-ie8 visible-ie9">Логин</label>
        <input class="form-control form-control-solid placeholder-no-fix username" type="text" autocomplete="off"
               placeholder="Логин" name="Логин"/></div>
    <div class="form-group">
        <label class="control-label visible-ie8 visible-ie9">Пароль</label>
        <input class="form-control form-control-solid placeholder-no-fix password" type="password" autocomplete="off"
               placeholder="Пароль" name="Пароль"/></div>
    <div class="form-actions">
        <button type="submit" class="btn green uppercase submitLogin">Войти</button>
<!--        <label class="rememberme check">-->
<!--            <input type="checkbox" name="remember" class="remember">Запомнить-->
<!--        </label>-->
<!--        <a href="javascript:;" id="forget-password" class="forget-password"> Забыли пароль ?</a>-->
    </div>
</div>
<form class="forget-form" action="index.html" method="post">
    <h3 class="font-green">Забыли пароль ?</h3>
    <p> Введите Ваш e-mail адрес и мы отправим Вам пароль. </p>
    <div class="form-group">
        <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Email"
               name="email"/></div>
    <div class="form-actions">
        <button type="button" id="back-btn" class="btn btn-default">Назад</button>
        <button type="submit" class="btn btn-success uppercase pull-right submitRemember">Отправить</button>
    </div>
</form>