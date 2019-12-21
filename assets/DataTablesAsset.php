<?php


namespace app\modules\admin\assets;


use yii\web\AssetBundle;

class DataTablesAsset extends AssetBundle
{
    public $sourcePath = '@app/modules/admin/resources';

    public $css = [
        'libs/datatables/dataTables.bootstrap4.css',
        'libs/datatables/responsive.bootstrap4.css',
        'libs/datatables/buttons.bootstrap4.css',
        'libs/datatables/select.bootstrap4.css',
        'css/tables-custom.css',
    ];

    public $js = [
        'libs/datatables/jquery.dataTables.min.js',
        'libs/datatables/dataTables.bootstrap4.js',
        'libs/datatables/dataTables.responsive.min.js',
        'libs/datatables/responsive.bootstrap4.min.js',
        'libs/datatables/dataTables.buttons.min.js',
        'libs/datatables/buttons.bootstrap4.min.js',
        'libs/datatables/buttons.html5.min.js',
        'libs/datatables/buttons.flash.min.js',
        'libs/datatables/buttons.print.min.js',
        'libs/datatables/dataTables.keyTable.min.js',
        'libs/datatables/dataTables.select.min.js',
        'libs/pdfmake/pdfmake.min.js',
        'libs/pdfmake/vfs_fonts.js',
        'js/pages/datatables.init.js'
    ];

    public $depends = [
        'yii\web\JqueryAsset',
    ];
}