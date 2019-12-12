<?php


namespace app\modules\admin\assets;


use yii\web\AssetBundle;

class AdminAsset extends AssetBundle
{
    public $sourcePath = '@app/modules/admin/resources';

    public $css = [
        'css/app.min.css',
        'css/bootstrap.min.css',
        'css/icons.min.css',
        ];

    public $js = [
        'js/vendor.min.js',
        'js/app.min.js',
        ];

    public function init()
    {
        parent::init();
        $this->publishOptions['beforeCopy'] = function ($from, $to) {
            $dirname = basename(dirname($from));
            return $dirname === 'fonts' || $dirname === 'img';
        };
    }

}