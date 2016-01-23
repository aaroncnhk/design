<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\bootstrap\BootstrapAsset;
$this->title = '登录';
$this->registerCssFile("/statics/style/signin.css",[BootstrapAsset::className()]);
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container">

      <h2 class="form-signin-heading text-center">请登录你的账户</h2>

      <div class="card card-signin">
        <img class="img-circle profile-img" src="/statics/images/avatar.png" alt="">
        
        <?php $form = ActiveForm::begin(['class' => 'form-signin','id' => 'login-form']); ?>
          <?= $form->field($model, 'username') ?>
          <?= $form->field($model, 'password')->passwordInput() ?>

          <?= Html::submitButton('登录', ['class' => 'btn btn-lg btn-primary btn-block', 'name' => 'login-button']) ?>
          <div class="checkbox">
            <a class="pull-right">忘记密码?</a>
            <label>
              <input type="checkbox" value="remember-me">记住我
            </label>
          </div>

        <?php ActiveForm::end(); ?>
      </div>

    </div> 
    <!-- /container -->