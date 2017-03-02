<?php
namespace oneui\assets;

use yii\web\AssetBundle;

class OneuiAsset extends AssetBundle
{
    public $sourcePath = '@oneui/assets/data';
    public $css = [
        'css/bootstrap.min.css',
        'css/oneui.css',
    ];
    public $js = [
        'js/core/jquery.min.js',
        'js/core/bootstrap.min.js',
        'js/core/jquery.slimscroll.min.js',
        'js/core/jquery.scrollLock.min.js',
        'js/core/jquery.countTo.min.js',
        'js/core/jquery.placeholder.min.js',
        'js/core/js.cookie.min.js',
        'js/app.js'

    ];
    public $depends = [
    ];
}
