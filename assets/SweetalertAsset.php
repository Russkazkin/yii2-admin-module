<?php


namespace app\modules\admin\assets;


use yii\web\AssetBundle;

class SweetalertAsset extends AssetBundle
{
    public $sourcePath = '@app/modules/admin/resources';

    public $css = [
        'libs/sweetalert2/sweetalert2.min.css'
    ];

    public $js = [
        'libs/sweetalert2/sweetalert2.min.js',
        'js/alert-init.js'
    ];
}