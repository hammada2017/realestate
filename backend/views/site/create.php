<?php

use yii\bootstrap4\Html;

$this->title = 'إنشاء مستخدم';
$this->params['breadcrumbs'][] = ['label' => 'المستخدميين', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rooms-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
