<?php

use yii\bootstrap4\Html;
use kartik\form\ActiveForm;
use yii\helpers\ArrayHelper;
use common\models\Menus;

/* @var $this yii\web\View */
/* @var $model common\models\CategoriesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<?php $form = ActiveForm::begin([
    'action' => ['index', 'menuId' => $menuId],
    'method' => 'get',
    'id' => 'form-branches', 
    'type' => ActiveForm::TYPE_HORIZONTAL,
    'formConfig' => ['labelSpan' => 3, 'deviceSize' => ActiveForm::SIZE_SMALL]
]); ?>

    <div class="card text-right">
        <div class="card-body bg-light">
            <div class="form-group row mb-0">
                <?= Html::activeLabel($model, 'cat_name', ['label'=>'أسم الصنف', 'class'=>'col-lg-2 col-form-label']) ?>
                <div class="col-lg-8">
                    <?= $form->field($model, 'cat_name',['showLabels'=>false, 'feedbackIcon' => [
                    'default' => 'pizza-slice',
                    'success' => 'ok',
                    'error' => 'exclamation-sign',
                    'defaultOptions' => ['class'=>'text-primary']
                    ]])->textInput(['placeholder'=>'أدخل أسم الصنف']); ?>
                </div>
                <div class="col-lg-2">
                    <?= Html::submitButton('<i class="fas fa-search"></i>', ['class' => 'btn btn-default']) ?>
                    <?= Html::resetButton('<i class="fas fa-redo"></i>', ['class' => 'btn btn-outline-secondary']) ?>
                </div>
            </div>
        </div>
    </div>   
<?php ActiveForm::end(); ?>


