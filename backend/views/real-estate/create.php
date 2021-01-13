<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\RealEstate */

$this->title = 'إنشاء عقار';
$this->params['breadcrumbs'][] = ['label' => 'العقارات ', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="real-estate-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
