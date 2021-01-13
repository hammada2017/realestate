<?php
namespace api\controllers;

use api\models\LoginForm;
use yii\rest\ActiveController;
use yii;
use yii\helpers\ArrayHelper;
use yii\filters\auth\QueryParamAuth;


class UserController extends ActiveController
{
    public $modelClass = 'api\models\User';

    public function behaviors()
    {
        return ArrayHelper::merge(parent::behaviors(), [
            'authenticatior' => [
                'class'=> QueryParamAuth:: className (), // Implementing access token authentication
                'except'=> ['login'], /// There is no need to validate the access token method. Note the distinction between $noAclLogin
            ]
        ]);
    }

    public function actions()
    {
        $action= parent::actions(); // TODO: Change the autogenerated stub
        unset($action['index']);
        unset($action['create']);
        unset($action['update']);
        unset($action['delete']);
    }

    public function actionIndex()
    {
        // Your code
    }

    /**
     * landing
     * @return array
     * @throws \yii\base\Exception
     * @throws \yii\base\InvalidConfigException
     */
    public function actionLogin()
    {
        $model = new LoginForm();
        if ($model->load(Yii::$app->getRequest()->getBodyParams(), '') && $model->login()) {
            return [
                'access_token' => $model->login(),
            ];
        } else {
            return $model->getFirstErrors();
        }
    }

    public function actionTest()
    {
        return ['status'=>'success'];
    }
}


/*
var headers = {
  'Content-Type': 'application/json',
  'Cookie': '_csrf-api=6d849941027b809c4c7b5585ce1b13963849b8d8ce284e73663f336a134d3eaea%3A2%3A%7Bi%3A0%3Bs%3A9%3A%22_csrf-api%22%3Bi%3A1%3Bs%3A32%3A%229MSgNHGrZYGGw0I493-KoZPrFkjCQwX2%22%3B%7D'
};
var request = http.Request('POST', Uri.parse('http://localhost/realestate/api/web/index.php?r=user/login'));
request.body = '''{\n    "username": "admin",\n    "password": "mohammed"\n\n}''';
request.headers.addAll(headers);

http.StreamedResponse response = await request.send();

if (response.statusCode == 200) {
  print(await response.stream.bytesToString());
}
else {
  print(response.reasonPhrase);
}


*/