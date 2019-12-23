<?php


namespace app\modules\admin\assets;


use yii\web\AssetBundle;

class FormAdvancedAsset extends AssetBundle
{
    public $sourcePath = '@app/modules/admin/resources';

    public $css = [
        'libs/select2.min.css'
    ];

    public $js = [
        'libs/select2.min.js'
    ];
}