<?php


namespace app\modules\admin\widgets\notification;


use app\modules\admin\widgets\notification\assets\NotificationWidgetAsset;
use Yii;
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
        $this->view->registerJs("
            Command: toastr[\"success\"](\"My name is Inigo Montoya. You killed my father. Prepare to die!\")

toastr.options = {
  \"closeButton\": false,
  \"debug\": false,
  \"newestOnTop\": false,
  \"progressBar\": false,
  \"positionClass\": \"toast-top-right\",
  \"preventDuplicates\": false,
  \"onclick\": null,
  \"showDuration\": \"300\",
  \"hideDuration\": \"1000\",
  \"timeOut\": \"5000\",
  \"extendedTimeOut\": \"1000\",
  \"showEasing\": \"swing\",
  \"hideEasing\": \"linear\",
  \"showMethod\": \"fadeIn\",
  \"hideMethod\": \"fadeOut\"
}
        ");
    }
}