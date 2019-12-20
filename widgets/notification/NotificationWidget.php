<?php


namespace app\modules\admin\widgets\notification;


use app\modules\admin\widgets\notification\assets\NotificationWidgetAsset;
use yii\base\Widget;

class NotificationWidget extends Widget
{
    public $type = 'success';
    public $message = 'it works!';

    public function init()
    {
        parent::init();
        NotificationWidgetAsset::register($this->view);
    }

    public function run()
    {
        $this->view->registerJs('
            Command: toastr[type](message)

  toastr.options = {
  "closeButton": false,
  "debug": false,
  "newestOnTop": false,
  "progressBar": false,
  "positionClass": "toast-top-right",
  "preventDuplicates": false,
  "onclick": null,
  "showDuration": "300",
  "hideDuration": "1000",
  "timeOut": "5000",
  "extendedTimeOut": "1000",
  "showEasing": "swing",
  "hideEasing": "linear",
  "showMethod": "fadeIn",
  "hideMethod": "fadeOut"
}
        ');
        return $this->render('notification', [
            'type' => $this->type,
            'message' => $this->message,
        ]);
    }
}