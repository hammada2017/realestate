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
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<?php $this->beginBody() ?>

<div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand border-bottom">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <?= Html::a('الرئيسية', ['site/index'], ['class' => 'nav-link']); ?>
        </li>
        </ul>

        <!-- SEARCH FORM -->
        <form class="form-inline ml-3">
        <div class="input-group input-group-sm">
            <input class="form-control form-control-navbar" type="search" placeholder="بحث" aria-label="Search">
            <div class="input-group-append">
            <button class="btn btn-navbar" type="submit">
                <i class="fas fa-search"></i>
            </button>
            </div>
        </div>
        </form>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
        <!-- Messages Dropdown Menu -->
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-comments"></i>
            <span class="badge badge-danger navbar-badge">3</span>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <a href="#" class="dropdown-item">
                <!-- Message Start -->
                <div class="media">
                <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                <div class="media-body">
                    <h3 class="dropdown-item-title">
                    Brad Diesel
                    <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                    </h3>
                    <p class="text-sm">Call me whenever you can...</p>
                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                </div>
                </div>
                <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
                <!-- Message Start -->
                <div class="media">
                <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                <div class="media-body">
                    <h3 class="dropdown-item-title">
                    John Pierce
                    <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                    </h3>
                    <p class="text-sm">I got your message bro</p>
                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                </div>
                </div>
                <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
                <!-- Message Start -->
                <div class="media">
                <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                <div class="media-body">
                    <h3 class="dropdown-item-title">
                    Nora Silvester
                    <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                    </h3>
                    <p class="text-sm">The subject goes here</p>
                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                </div>
                </div>
                <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
            </div>
        </li>
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-bell"></i>
            <span class="badge badge-warning navbar-badge">15</span>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <span class="dropdown-item dropdown-header">15 Notifications</span>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
                <i class="fas fa-envelope mr-2"></i> 4 new messages
                <span class="float-right text-muted text-sm">3 mins</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
                <i class="fas fa-users mr-2"></i> 8 friend requests
                <span class="float-right text-muted text-sm">12 hours</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
                <i class="fas fa-file mr-2"></i> 3 new reports
                <span class="float-right text-muted text-sm">2 days</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#"><i
                class="fas fa-th-large"></i></a>
        </li>
        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar elevation-4 text-right">
        <!-- Brand Logo -->
        <?= Html::a(
            '<img src="dist/img/realestate_logo.png" alt="RealEsate Logo" class="brand-image img-circle elevation-3 float-right"
                style="opacity: .8">
            <span class="brand-text font-weight-light">عقارات ابوسعد</span>'
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
                        <?= Html::a('<i class="nav-icon fas fa-tachometer-alt text-danger"></i> لوحة التحكم', ['site/index'], ['class' => 'nav-link']); ?>
                    </li>
                    
                </li>
                <li class="nav-item has-treeview">
                    <?= Html::a(' <i class="nav-icon fas fa-users text-warning"></i> إدارة المستخدمين <i class="fas fa-angle-right left"></i>', ['site/user-index'], ['class' => 'nav-link']); ?>
                    <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <?= Html::a('<i class="fas fa-users nav-icon"></i> المستخدمين', ['site/user-index'], ['class' => 'nav-link']); ?>
                    </li>
                    <li class="nav-item">
                        <?= Html::a('<i class="fas fa-user-plus nav-icon"></i> أضافة مستخدم', ['site/create'], ['class' => 'nav-link']); ?>
                    </li>
                    </ul>
                </li>

                <li class="nav-item has-treeview">
                    <?= Html::a(' <i class="nav-icon fas fa-city text-warning"></i> إدارة العقارات <i class="fas fa-angle-right left"></i>', ['real-estate/index'], ['class' => 'nav-link']); ?>
                    <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <?= Html::a('<i class="fas fa-city nav-icon"></i> العقارات', ['real-estate/index'], ['class' => 'nav-link']); ?>
                    </li>
                    <li class="nav-item">
                        <?= Html::a('<i class="fas fa-building nav-icon"></i> أضافة عقار', ['real-estate/create'], ['class' => 'nav-link']); ?>
                    </li>
                    </ul>
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
            'options' => ['class' => [''], 'style' => ['background-color' => '#aba5a5']],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

   <!-- Main Footer -->
  <footer class="main-footer" style="text-align: center;">
    <strong>جميع حقوق النشر &copy; محفوظة لشركة ماجك استيك تكنولوجي 2020</strong>
  </footer>         
</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
