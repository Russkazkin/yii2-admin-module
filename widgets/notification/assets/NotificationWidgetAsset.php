<?php


namespace app\modules\admin\widgets\notification\assets;


use app\modules\admin\assets\AdminAsset;
use yii\web\AssetBundle;

class NotificationWidgetAsset extends AssetBundle
{
    public $sourcePath = '@app/modules/admin/widgets/notification/resources';

    public $css = [
        'css/toastr.min.css'
    ];

    public $js = [
        'js/toastr.min.js'
    ];

    public $depends = [
        AdminAsset::class,
    ];
}