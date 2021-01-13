<?php

namespace api\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'bootstrap/css/bootstrap.min.css',
        'fontawesome/css/all.css',
        'fontawesome/css/fontawesome.min.css',
        'overlayScrollbars/css/OverlayScrollbars.min.css',
        'dist/css/adminlte.css',
        'https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700',
        'https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css',
        'icheck-bootstrap/icheck-bootstrap.min.css',
        'css/site.css',
    ];
    public $js = [
        'js/jquery-3.4.1.min.js',
        'bootstrap/js/bootstrap.min.js',
        'bootstrap/js/bootstrap.bundle.min.js',
        'bootstrap/js/popper.min.js',
        'fontawesome/js/all.js',
        'fontawesome/js/fontawesome.min.js',
        'overlayScrollbars/js/jquery.overlayScrollbars.min.js',
        'dist/js/adminlte.js',
        'dist/js/demo.js',
        'jquery-mousewheel/jquery.mousewheel.js',
        'raphael/raphael.min.js',
        'jquery-mapael/jquery.mapael.min.js',
        'jquery-mapael/maps/world_countries.min.js',
        'chart.js/Chart.min.js',
        'dist/js/pages/dashboard2.js',
        'js/main.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapAsset', // this line
    ];
}
