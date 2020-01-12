<?php


namespace app\modules\admin\assets;


use yii\web\AssetBundle;

class MagnificPopupAsset extends AssetBundle
{
    public $sourcePath = '@bower/magnific-popup';

    public $css = [
        'dist/magnific-popup.css',
    ];

    public $js = [
        'dist/jquery.magnific-popup.js'
    ];

    public $depends = [
        'yii\web\JqueryAsset',
    ];
}