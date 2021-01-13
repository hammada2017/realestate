<?php

use yii\bootstrap4\Html;
use kartik\form\ActiveForm;

?>

<?php $form = ActiveForm::begin([
    'action' => ['index'],
    'method' => 'get',
    'id' => 'form-branches', 
    'type' => ActiveForm::TYPE_HORIZONTAL,
    'formConfig' => ['labelSpan' => 3, 'deviceSize' => ActiveForm::SIZE_SMALL]
]); ?>

     <div class="card text-right">
        <div class="card-header"><h5> <i class="fas fa-filter"></i>  البحث في المستخدميين</h5></div>
        <div class="card-body">
            <div class="form-group row mb-0">
                <?= Html::activeLabel($model, 'username', ['label'=>'أسم المستخدم', 'class'=>'col-lg-2 col-form-label']) ?>
                <div class="col-lg-4">
                    <?= $form->field($model, 'username',['showLabels'=>false, 'feedbackIcon' => [
                    'default' => 'user',
                    'success' => 'ok',
                    'error' => 'exclamation-sign',
                    'defaultOptions' => ['class'=>'text-primary']
                    ]])->textInput(['placeholder'=>'أدخل أسم المستخدم']); ?>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <?= Html::submitButton('<i class="fas fa-search"></i>', ['class' => 'btn btn-default']) ?>
            <?= Html::resetButton('<i class="fas fa-redo"></i>', ['class' => 'btn btn-outline-secondary']) ?>
        </div>
    </div>      
<?php ActiveForm::end(); ?>


