<?php

namespace api\controllers;

use yii\rest\ActiveController;
use common\models\RealEstate;


class RealEstateController extends ActiveController{

    //\Yii::$app->response->format = \yii\web\Response::FORMAT_JSON; // this will return response in json
    public $modelClass = RealEstate::class;
}