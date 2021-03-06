<?php


namespace app\modules\admin\assets;


use yii\web\AssetBundle;

class FormAdvancedAsset extends AssetBundle
{
    public $sourcePath = '@app/modules/admin/resources';

    public $css = [
        'libs/bootstrap-tagsinput/bootstrap-tagsinput.css',
        'libs/select2/select2.min.css',
        'libs/multiselect/multi-select.css',
    ];

    public $js = [
        'libs/bootstrap-tagsinput/bootstrap-tagsinput.min.js',
        'libs/select2/select2.min.js',
        'libs/multiselect/jquery.multi-select.js',
        'libs/bootstrap-maxlength/bootstrap-maxlength.min.js',
        'js/init.js',
    ];

    public $depends = [
        'yii\web\JqueryAsset',
    ];
}