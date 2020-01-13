<?php


namespace app\modules\admin\assets;


use yii\web\AssetBundle;

class QuillStylesAsset extends AssetBundle
{
    public $sourcePath = '@app/modules/blog/resources';

    public $css = [
          'css/quill.css',
    ];
}