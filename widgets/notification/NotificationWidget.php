<?php


namespace app\modules\admin\widgets\notification;


use app\modules\admin\widgets\notification\assets\NotificationWidgetAsset;
use Yii;
use yii\base\Widget;

class NotificationWidget extends Widget
{
    public $flashes;
    public $options = [
        'closeButton' => true,
        'debug' => false,
        'newestOnTop' => false,
        'progressBar' => false,
        'positionClass' => 'toast-top-full-width',
        'preventDuplicates' => false,
        'onclick' => null,
        'showDuration' => '500',
        'hideDuration' => '1000',
        'timeOut' => '5000',
        'extendedTimeOut' => '1000',
        'showEasing' => 'swing',
        'hideEasing' => 'linear',
        'showMethod' => 'fadeIn',
        'hideMethod' => 'fadeOut',
    ];

    public function init()
    {
        parent::init();
        $this->flashes = Yii::$app->session->getAllFlashes();
        NotificationWidgetAsset::register($this->view);
    }

    public function run()
    {
        $this->view->registerJs('
            toastr.options = options
            for (key in flashes){
                Command: toastr[key](flashes[key]);
            }
        ');
        return $this->render('notification', [
            'options' => $this->options,
            'flashes' => $this->flashes,
        ]);
    }
}