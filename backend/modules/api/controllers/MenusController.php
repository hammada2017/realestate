<?php

namespace backend\modules\api\controllers;

use backend\modules\api\models\Menus;

class MenusController extends \yii\web\Controller
{

    public $enableCsrfValidation = false;
    
    public function actionIndex()
    {
        
        return $this->render('index');
    }

    public function actionCreateMenus()
    {
        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON; // this will return response in json
        $menus = new Menus();
        $menus->scenario = Menus::SCENARIO_CREATE;
        $menus->attributes = \Yii::$app->request->post();

        if($menus->validate()){

            $menus->uid = \Yii::$app->MyComponent->genUid();
            $menus->save();
            return array('status' => true, 'data' => 'Menu created successfully.');
        }else{
            return array('status' => false, 'data' => $menus->getErrors());
        }
    }

    public function actionListMenus()
    {
        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON; // this will return response in json
        $menus = Menus::find()->all();

        if(count($menus) > 0){
            return array('status' => true, 'data' => $menus);
        }else{
            return array('status' => false, 'data' => 'No Menus Found.');
        }
    }

}
