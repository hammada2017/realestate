<?php
/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;
use yii\bootstrap4\Breadcrumbs;
use common\widgets\Alert;
use kartik\icons\FontAwesomeAsset;

FontAwesomeAsset::register($this);
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
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed" style="background-image: url('dist/img/login-background.jpg');
        background-size: 100% 100%; -webkit-background-size: 100% 100%; -o-background-size: 100% 100%;
        -moz-background-size: 100% 100%; -ms-background-size: 100% 100%; ">
<?php $this->beginBody() ?>

<div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
        </li>
        </ul>
        
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar elevation-4 text-right" style="background-image: url('dist/img/sidebackground.png');
        background-size: 100% 100%; -webkit-background-size: 100% 100%; -o-background-size: 100% 100%;
        -moz-background-size: 100% 100%; -ms-background-size: 100% 100%; ">
        <!-- Brand Logo -->
        <?= Html::a(
            '<img src="dist/img/logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3 float-right">
            <span class="brand-text font-weight-light">المدينة</span>'
            , ['site/index'], ['class' => 'brand-link']); ?>
        

        <!-- Sidebar -->
        <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
            <img src="dist/img/user2-160x160.png" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <?= Html::beginForm(['/site/logout'], 'post')
                . Html::submitButton('تسجيل الخروج (' . Yii::$app->user->identity->username . ')',
                ['class' => 'btn btn-link logout text-white'])
                . Html::endForm(); ?>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                    with font-awesome or any other icon font library -->
                <li class="nav-item has-treeview menu-open">
                    <li class="nav-item">
                        <?= Html::a('<h3 class="text-center"><i class="nav-icon fas fa-building text-light"></i> القائمة</h3>', ['site/index'], ['class' => 'nav-link text-success']); ?>
                    </li>
                    
                </li>
                <hr>
                <li class="nav-item has-treeview">
                    <?= Html::a('<i class="fas fa-sitemap nav-icon text-success"></i> الطلبات', ['index', 'menuId' => 1], ['class' => 'nav-link text-white']); ?>
                </li>
                <li class="nav-item has-treeview">
                    <?= Html::a('<i class="fas fa-building nav-icon text-success"></i> السندوتشات', ['index', 'menuId' => 2], ['class' => 'nav-link text-white']); ?>
                </li>
                <li class="nav-item has-treeview">
                    <?= Html::a('<i class="fas fa-user-tie nav-icon text-success"></i> العصائر', ['index', 'menuId' => 3], ['class' => 'nav-link text-white']); ?>
                </li>
                <li class="nav-item has-treeview">
                    <?= Html::a('<i class="fas fa-layer-group nav-icon text-success"></i> الحلويات', ['index', 'menuId' => 4], ['class' => 'nav-link text-white']); ?>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>
    <!-- Sidebar Container -->

    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content mb-3">
      <div class="container-fluid pb-3">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            'options' => ['class' => ['bg-info']],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

   <!-- Main Footer -->
  <footer class="main-footer" style="text-align: center; background-image: url('dist/img/navfooter.png');
        background-size: 100% 100%; -webkit-background-size: 100% 100%; -o-background-size: 100% 100%;
        -moz-background-size: 100% 100%; -ms-background-size: 100% 100%;">
    <strong class="text-white">جميع حقوق النشر &copy; محفوظة لشركة ماجك استيك تكنولوجي 2020</strong>
  </footer>         
</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
