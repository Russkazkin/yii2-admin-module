<?php


namespace app\modules\admin\assets;


use yii\web\AssetBundle;

class ModalAsset extends AssetBundle
{
    public $sourcePath = '@app/modules/admin/resources';

    public $css = [
        'libs/custombox/custombox.min.css'
    ];

    public $js = [
        'libs/custombox/custombox.min.js',
    ];
}