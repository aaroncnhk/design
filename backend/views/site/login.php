<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\bootstrap\BootstrapAsset;
$this->title = '登录';
$this->params['breadcrumbs'][] = $this->title;
?>
<body class="gray-bg">

    <div class="middle-box text-center loginscreen  animated fadeInDown">
        <div>
            <div>

                <h1 class="logo-name">X+</h1>

            </div>
            <h3>欢迎登录象记管理后台</h3>

            <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
                <div class="form-group">
                    <?= $form->field($model, 'username')->textInput(['placeholder'=>'用户名'])->label(false) ?>
                </div>
                <div class="form-group">
                    <?= $form->field($model, 'password')->passwordInput(['placeholder'=>'密码'])->label(false)  ?>
                </div>
                <?= Html::submitButton('登录', ['class' => 'btn btn-primary block full-width m-b', 'name' => 'login-button']) ?>


                <p class="text-muted text-center"> <a href="login.html#"><small>忘记密码了？</small></a> | <a href="register.html">注册一个新账号</a>
                </p>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</body>
