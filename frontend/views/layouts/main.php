<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
AppAsset::register($this);

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
<body>
<?php $this->beginBody() ?>


<?= $content ?>
  <footer class="footer">
    <div class="container">
      <div class="footer--brand">
        <a href="/">Oozou</a>
      </div>
      <div class="footer--copyright">
        &copy; <?= date('Y') ?> 象记
      </div>
    </div>
  </footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
