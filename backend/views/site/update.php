<?php

use yii\bootstrap4\Html;

$this->title = 'تعديل مستخدم: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'المستخدميين', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'تعديل';
?>
<div class="rooms-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
