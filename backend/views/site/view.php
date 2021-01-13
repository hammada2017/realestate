<?php

use yii\bootstrap4\Html;
use kartik\detail\DetailView;
use yii\helpers\ArrayHelper;


$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'المستخدميين', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>

<div class="card text-right">
    <div class="card-header"><h5> <i class="fas fa-users"></i>  المستخدميين</h5></div>
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
            // 'panel'=>[
            //     'heading'=>'القطار# ' . $model->id,
            //     'type'=>DetailView::TYPE_INFO,
            // ],
            'attributes' => [
                'id',
                'username',
                'email',
                'status',
            ],
        ]) ?>
    </div>
    <div class="card-footer">

    </div>
</div>


