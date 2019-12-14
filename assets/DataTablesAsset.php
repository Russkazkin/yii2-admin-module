<?php


namespace app\modules\admin\assets;


use yii\web\AssetBundle;

class DataTablesAsset extends AssetBundle
{
    public $sourcePath = '@app/modules/admin/resources';

    public $css = [
        'css/app.min.css',
        'css/bootstrap.min.css',
        'css/icons.min.css',
    ];

    public $js = [
        'js/libs/datatables/jquery.dataTables.min.js',
        'js/libs/datatables/dataTables.bootstrap4.js',
        'js/libs/datatables/dataTables.responsive.min.js',
        'js/libs/datatables/responsive.bootstrap4.min.js',
        'js/libs/datatables/dataTables.buttons.min.js',
        'js/libs/datatables/buttons.bootstrap4.min.js',
        'js/libs/datatables/buttons.html5.min.js',
        'js/libs/datatables/buttons.flash.min.js',
        'js/libs/datatables/buttons.print.min.js',
        'js/libs/datatables/dataTables.keyTable.min.js',
        'js/libs/datatables/dataTables.select.min.js',
        'js/libs/pdfmake/pdfmake.min.js',
        'js/libs/pdfmake/vfs_fonts.js',
        'js/pages/datatables.init.js'
    ];

    public $depends = [
        'yii\web\JqueryAsset',
    ];
}