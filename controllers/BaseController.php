<?php


namespace app\modules\admin\controllers;


use Yii;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\web\Controller;

class BaseController extends Controller
{
    public $rbacManager;

    public function __construct($id, $module, $config = [])
    {
        $this->rbacManager = Yii::$app->getModule('auth')->rbac;
        $this->view->params['adminPermissions'] = $this->rbacManager->haveAdminPermissions();
        $this->view->params['editorPermissions'] = $this->rbacManager->haveEditorPermissions();

        parent::__construct($id, $module, $config);
    }

    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::class,
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
                'access' => [
                    'class' => AccessControl::class,
                    'rules' => [
                        [
                            'allow' => true,
                            'roles' => ['@'],
                        ],
                    ],
                ],
            ]);
    }
}