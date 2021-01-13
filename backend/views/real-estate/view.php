<?php

use yii\bootstrap4\Html;
use kartik\detail\DetailView;
use yii\helpers\ArrayHelper;
use common\models\RealEstateType;
use common\models\AdsType;
use common\models\CurrencyType;
use common\models\Status;


$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'العقارات', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>

<div class="card text-right">
    <div class="card-header"><h5> <i class="fas fa-city"></i>  العقارات</h5></div>
    <div class="card-body">
        <p class="float-left">
            <?= Html::a('<i class="fas fa-edit"></i>', ['update', 'id' => $model->id], ['class' => 'btn btn-default']) ?>
            <?= Html::a('<i class="fas fa-trash"></i>', ['delete', 'id' => $model->id], [
                'class' => 'btn btn-default',
                'data' => [
                    'confirm' => 'هل انت متأكد من أنك تريد حذف هذا العنصر؟',
                    'method' => 'post',
                ],
            ]) ?>
        </p>
    <?= DetailView::widget([
        'options' => ['class' => 'text-right'],
        'model' => $model,
        'condensed'=>true,
        'hover'=>true,
        'mode'=>DetailView::MODE_VIEW,
        'attributes' => [
            'id',
            'ads_name',
            'realestate_place',
            [
                'attribute' => 'realestate_type_id',
                'value' => $model->realestateType->type,
                'type'=>DetailView::INPUT_SELECT2, 
                'widgetOptions'=>[
                    'data'=>ArrayHelper::map(RealEstateType::find()->orderBy('type')->asArray()->all(), 'id', 'type'),
                ]
            ],
            [
                'attribute' => 'ads_type_id',
                'value' => $model->adsType->type,
                'type'=>DetailView::INPUT_SELECT2, 
                'widgetOptions'=>[
                    'data'=>ArrayHelper::map(AdsType::find()->orderBy('type')->asArray()->all(), 'id', 'type'),
                ]
            ],
            'latitude',
            'longtude',
            [
                'attribute' => 'currency_type_id',
                'value' => $model->currencyType->currency,
                'type'=>DetailView::INPUT_SELECT2, 
                'widgetOptions'=>[
                    'data'=>ArrayHelper::map(CurrencyType::find()->orderBy('currency')->asArray()->all(), 'id', 'currency'),
                ]
            ],
            'realestate_price',
            'phone',
            [
                'attribute' => 'created_at',
                'format' => 'raw',
                'value' => '<p>'. Yii::$app->formatter->asDatetime($model->created_at) . '</p>',
                'type'=>DetailView::INPUT_DATE,
                'widgetOptions' => [
                    'pluginOptions'=>['format'=>'yyyy-mm-dd']
                ],
            ],
            [
                'attribute' => 'state',
                'value' => $model->state0->state,
                'type'=>DetailView::INPUT_SELECT2, 
                'widgetOptions'=>[
                    'data'=>ArrayHelper::map(Status::find()->orderBy('state')->asArray()->all(), 'id', 'state'),
                ]
            ],
            'realestate_space',
            'realestate_recuretment_period',
            'rooms_number',
            'hols_number',
            'pathrooms_number',
            'store_number',
            'realestate_age',
            'other_info:ntext',
            'flats_number',
            'views_number',
            [
                'attribute' => 'realestate_image',
                'format' => 'raw',
                'value' => Html::img('@web/images/'.$model->realestate_image, ['alt' => 'RealEstate', 'style' => ['width' => '100px', 'height' => '100px']]),
                
            ],
        ],
    ]) ?>
    </div>
    <div class="card-footer">

    </div>
</div>
