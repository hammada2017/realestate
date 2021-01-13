<?php

/* @var $this \yii\web\View */
/* @var $content string */

use frontend\assets\AppAsset;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" dir="rtl">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <style>
    .login-box{
      background-image: url('dist/img/login-backgrond-cover.png');
       border-radius: 20px 20px;
    }
     .login-box:hover {   
       cursor :pointer ;
        box-shadow: 3px 3px 10px #fff, -3px -3px 10px #fff ;
        }
  
    </style>
</head>
<body class="hold-transition login-page" style="background-image: url('dist/img/login-background.jpg');
        background-size: 100% 100%; -webkit-background-size: 100% 100%; -o-background-size: 100% 100%;
        -moz-background-size: 100% 100%; -ms-background-size: 100% 100%; ">
<?php $this->beginBody() ?>
<div class="login-box">
  <div class="login-logo mb-0 pt-2">
    <a href="#"><img src="dist/img/logo2.png"/></a>
  </div>
  <!-- /.login-logo -->
  <div class="p-2">
    <?= $content ?>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
