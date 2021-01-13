<?php

use yii\bootstrap4\Html;
use kartik\grid\GridView;
//use kartik\export\ExportMenu;
use kartik\dynagrid\DynaGrid;


?>


<?php echo $this->render('_search', ['model' => $searchModel, 'menuId' => $menuId]); ?>

        <?php

            $gridColumns = [
                //['class' => 'yii\grid\SerialColumn'],

                //'id',
                //'uid',
                'cat_name',
                // [
                //     'attribute'=>'menu_id',
                //     'value'=>'menu.menu_name',
                // ],
                'cat_price',
                [
                    'label' => '',
                    'format' => 'raw',
                    'value' => function($model){
                        return Html::a('طلب', ['orders/create', 'id' => $model->id], ['class' => 'btn btn-primary']);
                    },
                ],
                // [
                //     'attribute'=>'cat_status',
                //     'value'=>'status.state',
                // ],

                //['class' => 'kartik\grid\ActionColumn'],
            ];
        ?>

        <?= GridView::widget([
            'tableOptions' => ['class' => 'table-bordered text-right bg-light'],
            'moduleId' => 'gridviewKrajee', // change the module identifier to use the respective module's settings
            'dataProvider' => $dataProvider,
            //'filterModel' => $searchModel,
            'rowOptions' => ['class' => 'bg-secondary'],
            'export' => [
                'fontAwesome' => true
            ],
            'pjax' => true,
            'columns' => $gridColumns,
            'containerOptions' => ['style' => 'overflow: auto'], // only set when $responsive = false
            'headerRowOptions' => ['class' => 'kartik-sheet-style'],
            'filterRowOptions' => ['class' => 'kartik-sheet-style'],
            
            'responsive'=>true,
            'hover'=>true,
            
        ]); ?>