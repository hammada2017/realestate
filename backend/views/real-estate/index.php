<?php

use yii\bootstrap4\Html;
use kartik\grid\GridView;
// use kartik\export\ExportMenu;
// use kartik\dynagrid\DynaGrid;


$this->title = 'العقارات';
$this->params['breadcrumbs'][] = $this->title;
?>
<?php echo $this->render('_search', ['model' => $searchModel]); ?>

<div class="card text-right">
    <div class="card-header"><h5> <i class="nav-icon fas fa-city"></i>  العقارات</h5></div>
    <div class="card-body">
        <p>
            <?= Html::a('<i class="fas fa-plus"></i>', ['create'], ['class' => 'btn btn-success']) ?>
            <?= Html::a('<i class="fas fa-redo"></i>', ['index'], ['class' => 'btn btn-secondary']) ?>


    <?= GridView::widget([
        'options' => ['class' => 'table-hover table-condensed text-right'],
        'moduleId' => 'gridviewKrajee', // change the module identifier to use the respective module's settings
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'rowOptions' => function($model){
            if($model->state == '2'){
                return ['class' => 'text-danger'];
            }else{
                return ['class' => 'text-success'];
            }
        },
        'export' => false,
        'pjax' => true,
        'columns' => [
            //'id',
            'ads_name',
            'realestate_place',
            [
                'attribute' => 'realestate_type_id',
                'value' => 'realestateType.type'
            ],
            [
                'attribute' => 'ads_type_id',
                'value' => 'adsType.type'
            ],
            //'latitude',
            //'longtude',
            [
                'attribute' => 'currency_type_id',
                'value' => 'currencyType.currency'
            ],
            'realestate_price',
            //'phone',
            //'created_at',
            [
                'attribute' => 'state',
                'value' => 'state0.state'
            ],
            [
                'attribute' => 'realestate_image',
                'format' => 'raw',
                'value' => function($model){
                    return Html::img('@web/images/'.$model->realestate_image, ['class' => 'img-thumbnail', 'alt' => 'RealEstate', 'style' => ['width' => '100px', 'height' => '100px']]);
                }
            ],
            //'realestate_space',
            //'realestate_recuretment_period',
            //'rooms_number',
            //'hols_number',
            //'pathrooms_number',
            //'store_number',
            //'realestate_age',
            //'other_info:ntext',
            //'flats_number',
            //'user_id',
            //'views_number',

            ['class' => 'kartik\grid\ActionColumn'],
        ],
        'responsive'=>true,
        'hover'=>true
    ]); ?>
    </div>  
    <div class="card-footer">

    </div>  
</div>
    
