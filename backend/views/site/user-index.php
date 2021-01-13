<?php

use yii\bootstrap4\Html;
use kartik\grid\GridView;
// use kartik\export\ExportMenu;
// use kartik\dynagrid\DynaGrid;


$this->title = 'المستخدميين';
$this->params['breadcrumbs'][] = $this->title;
?>
<?php echo $this->render('_search', ['model' => $searchModel]); ?>

<div class="card text-right">
    <div class="card-header"><h5> <i class="nav-icon fas fa-users"></i>  المستخدميين</h5></div>
    <div class="card-body">
        <p>
            <?= Html::a('<i class="fas fa-plus"></i>', ['create'], ['class' => 'btn btn-success']) ?>
            <?= Html::a('<i class="fas fa-redo"></i>', ['index'], ['class' => 'btn btn-secondary']) ?>
            <?php

                $gridColumns = [
                    //['class' => 'yii\grid\SerialColumn'],

                    'username',
                    'email',
                    'status',

                    ['class' => 'kartik\grid\ActionColumn'],
                ];

                // echo ExportMenu::widget([
                //     'dataProvider' => $dataProvider,
                //     'columns' => $gridColumns,
                //     'dropdownOptions' => [
                //         'label' => 'تصدير الكل',
                //         'class' => 'btn btn-light'
                //     ]
                // ]);
            ?>
        </p>
        <?= GridView::widget([
            'options' => ['class' => 'table-bordered text-right'],
            'moduleId' => 'gridviewKrajee', // change the module identifier to use the respective module's settings
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'rowOptions' => function($model){
                if($model->status == '9'){
                    return ['class' => 'text-danger'];
                }else{
                    return ['class' => 'text-success'];
                }
            },
            'export' => false,
            'pjax' => true,
            'columns' => $gridColumns,
            'responsive'=>true,
            'hover'=>true
        ]); ?>
    </div>  
    <div class="card-footer">

    </div>  
</div>

