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
        'js/app.js'
    ];
    public $depends = [
    ];
}
