<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\RealEstate */

$this->title = 'تحديث العقار: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'العقارات', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'تعديل';
?>
<div class="real-estate-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
