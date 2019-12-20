<?php


namespace app\modules\admin\widgets\notification;


use app\modules\admin\widgets\notification\assets\NotificationWidgetAsset;
use yii\base\Widget;

class NotificationWidget extends Widget
{
    public function init()
    {
        parent::init();
        NotificationWidgetAsset::register($this->view);
    }

    public function run()
    {
        return '<h1>it works!</h1>';
    }
}