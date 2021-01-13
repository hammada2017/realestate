<?php

use yii\bootstrap4\Html;
use kartik\form\ActiveForm;
use yii\helpers\ArrayHelper;
use common\models\RealEstateType;
use common\models\AdsType;
use common\models\Status;


/* @var $this yii\web\View */
/* @var $model common\models\RealEstateSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<?php $form = ActiveForm::begin([
    'action' => ['index'],
    'method' => 'get',
    'id' => 'form-real-estate', 
    'type' => ActiveForm::TYPE_HORIZONTAL,
    'formConfig' => ['labelSpan' => 3, 'deviceSize' => ActiveForm::SIZE_SMALL]
]); ?>

     <div class="card text-right">
        <div class="card-header"><h5> <i class="fas fa-filter"></i>  البحث في العقارات</h5></div>
        <div class="card-body">
            <div class="form-group row mb-0">
            <div class="col-lg-4">
                <?= $form->field($model, 'state',['showLabels'=>true, 'feedbackIcon' => [
                    'default' => 'toggle-on',
                    'success' => 'ok',
                    'error' => 'exclamation-sign',
                    'defaultOptions' => ['class'=>'text-primary']
                    ]])->dropDownList(ArrayHelper::map(Status::find()->all(), 'id', 'state'), ['prompt' => 'أختر الحالة  ...']); ?>
                </div>
                <div class="col-lg-4">
                    <?= $form->field($model, 'realestate_type_id',['showLabels'=>true, 'feedbackIcon' => [
                    'default' => 'mosque',
                    'success' => 'ok',
                    'error' => 'exclamation-sign',
                    'defaultOptions' => ['class'=>'text-primary']
                    ]])->dropDownList(ArrayHelper::map(RealEstateType::find()->all(), 'id', 'type'), ['prompt' => 'أختر نوع العقار ...']); ?>
                </div>
                <div class="col-lg-4">
                    <?= $form->field($model, 'ads_type_id',['showLabels'=>true, 'feedbackIcon' => [
                    'default' => 'money-bill-alt',
                    'success' => 'ok',
                    'error' => 'exclamation-sign',
                    'defaultOptions' => ['class'=>'text-primary']
                    ]])->dropDownList(ArrayHelper::map(AdsType::find()->all(), 'id', 'type'), ['prompt' => 'أختر نوع الأعلان ...']); ?>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <?= Html::submitButton('<i class="fas fa-search"></i>', ['class' => 'btn btn-default']) ?>
            <?= Html::resetButton('<i class="fas fa-redo"></i>', ['class' => 'btn btn-outline-secondary']) ?>
        </div>
    </div>      
<?php ActiveForm::end(); ?>

    

    