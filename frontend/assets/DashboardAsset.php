<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class DashboardAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [

      'css/bootstrap.min.css',
    '//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css',
    '//cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css',
    'css/AdminLTE.min.css',
    'css/_all-skins.min.css',
    'css/blue.css',
    'css/site.css',


    //'css/morris.css',
    //'css/jquery-jvectormap-1.2.2.css',
    //'css/datepicker3.css',
    //'css/daterangepicker.css',
    //'css/bootstrap3-wysihtml5.min.css',,
    ];
    public $js = [
      '//code.jquery.com/ui/1.11.4/jquery-ui.min.js',
      'js/bootstrap.min.js',
      'js/morris.min.js',
      'js/jquery.sparkline.min.js',
      'js/jquery-jvectormap-1.2.2.min.js',
      'js/jquery-jvectormap-world-mill-en.js',
    //  'js/jquery.knob.js',
  //  'js/daterangepicker.js',
      //'js/bootstrap-datepicker.js',
      //'js/bootstrap3-wysihtml5.all.min.js',
      'js/jquery.slimscroll.min.js',
      'js/fastclick.js',
      'js/app.min.js',
      'js/dashboard.js',
      //'js/demo.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
