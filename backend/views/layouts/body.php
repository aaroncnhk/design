<?php

/* @var $this \yii\web\View */
/* @var $content string */
use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\helpers\Url;

use yii\bootstrap\BootstrapAsset;
// use yii\bootstrap\Nav;
// use yii\bootstrap\NavBar;
// use yii\widgets\Breadcrumbs;
// use common\widgets\Alert;

AppAsset::register($this);
$this->registerJsFile('@web/statics/js/bootstrap.min.js?v=3.3.6',['depends'=>['backend\assets\AppAsset']]);
$this->registerJsFile('@web/statics/js/plugins/metisMenu/jquery.metisMenu.js',['depends'=>['backend\assets\AppAsset']]);
$this->registerJsFile('@web/statics/js/plugins/slimscroll/jquery.slimscroll.min.js',['depends'=>['backend\assets\AppAsset']]);
$this->registerJsFile('@web/statics/js/plugins/layer/layer.min.js',['depends'=>['backend\assets\AppAsset']]);
$this->registerJsFile('@web/statics/js/hplus.min.js?v=4.1.0',['depends'=>['backend\assets\AppAsset']]);
$this->registerJsFile('@web/statics/js/contabs.min.js',['depends'=>['backend\assets\AppAsset']]);
$this->registerJsFile('@web/statics/js/plugins/pace/pace.min.js',['depends'=>['backend\assets\AppAsset']]);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="fixed-sidebar full-height-layout gray-bg" style="overflow:hidden">
<?php $this->beginBody() ?>
<?php if (!Yii::$app->user->isGuest) {?>
        <?=$content?>
<?php }?>
<?php $this->endBody() ?>

</body>
</html>
<?php $this->endPage() ?>
