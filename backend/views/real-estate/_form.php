<?php

use yii\bootstrap4\Html;
use kartik\form\ActiveForm;
use yii\helpers\ArrayHelper;
use common\models\RealEstateType;
use common\models\AdsType;
use common\models\CurrencyType;
use common\models\Status;

/* @var $this yii\web\View */
/* @var $model common\models\RealEstate */
/* @var $form yii\widgets\ActiveForm */
?>

<?php $form = ActiveForm::begin([
    'id' => 'form-real-estate', 
    'type' => ActiveForm::TYPE_VERTICAL,
    'formConfig' => ['labelSpan' => 3, 'deviceSize' => ActiveForm::SIZE_SMALL]
]); ?>

    <div class="card text-right">
        <div class="card-header"><h5> <i class="nav-icon fas fa-users"></i>  العقارات</h5></div>
        <div class="card-body">
            <div class="form-group row mb-0">

                <div class="col-lg-4">
                    <?= $form->field($model, 'ads_name',['showLabels'=>true, 'feedbackIcon' => [
                    'default' => 'ad',
                    'success' => 'ok',
                    'error' => 'exclamation-sign',
                    'defaultOptions' => ['class'=>'text-primary']
                    ]])->textInput(['placeholder'=>'أدخل أسم الأعلان']); ?>
                </div>

                <div class="col-lg-4">
                    <?= $form->field($model, 'realestate_place',['showLabels'=>true, 'feedbackIcon' => [
                    'default' => 'map-marked-alt',
                    'success' => 'ok',
                    'error' => 'exclamation-sign',
                    'defaultOptions' => ['class'=>'text-primary']
                    ]])->textInput(['placeholder'=>'أدخل مكان العقار ']); ?>
                </div>

                <div class="col-lg-4">
                    <?= $form->field($model, 'realestate_type_id',['showLabels'=>true, 'feedbackIcon' => [
                    'default' => 'mosque',
                    'success' => 'ok',
                    'error' => 'exclamation-sign',
                    'defaultOptions' => ['class'=>'text-primary']
                    ]])->dropDownList(ArrayHelper::map(RealEstateType::find()->all(), 'id', 'type'), ['prompt' => 'أختر نوع العقار ...']); ?>
                </div>

            </div>

            <div class="form-group row mb-0">


                <div class="col-lg-4">
                    <?= $form->field($model, 'ads_type_id',['showLabels'=>true, 'feedbackIcon' => [
                    'default' => 'money-bill-alt',
                    'success' => 'ok',
                    'error' => 'exclamation-sign',
                    'defaultOptions' => ['class'=>'text-primary']
                    ]])->dropDownList(ArrayHelper::map(AdsType::find()->all(), 'id', 'type'), ['prompt' => 'أختر نوع الأعلان ...']); ?>
                </div>

                <div class="col-lg-4">
                    <?= $form->field($model, 'latitude',['showLabels'=>true, 'feedbackIcon' => [
                    'default' => 'map-marker-alt',
                    'success' => 'ok',
                    'error' => 'exclamation-sign',
                    'defaultOptions' => ['class'=>'text-primary']
                    ]])->textInput(['placeholder'=>'أدخل الأحداثي السيني ']); ?>
                </div>

                <div class="col-lg-4">
                    <?= $form->field($model, 'longtude',['showLabels'=>true, 'feedbackIcon' => [
                    'default' => 'map-marker-alt',
                    'success' => 'ok',
                    'error' => 'exclamation-sign',
                    'defaultOptions' => ['class'=>'text-primary']
                    ]])->textInput(['placeholder'=>'أدخل الأحداثي الصادي  ']); ?>
                </div>

            </div>

            <div class="form-group row mb-0">


                <div class="col-lg-4">
                    <?= $form->field($model, 'currency_type_id',['showLabels'=>true, 'feedbackIcon' => [
                    'default' => 'money-bill-wave',
                    'success' => 'ok',
                    'error' => 'exclamation-sign',
                    'defaultOptions' => ['class'=>'text-primary']
                    ]])->dropDownList(ArrayHelper::map(CurrencyType::find()->all(), 'id', 'currency'), ['prompt' => 'أختر نوع العملة ...']); ?>
                </div>

                <div class="col-lg-4">
                    <?= $form->field($model, 'realestate_price',['showLabels'=>true, 'feedbackIcon' => [
                    'default' => 'money-bill',
                    'success' => 'ok',
                    'error' => 'exclamation-sign',
                    'defaultOptions' => ['class'=>'text-primary']
                    ]])->textInput(['placeholder'=>'أدخل سعر العقار  ']); ?>
                </div>

                <div class="col-lg-4">
                    <?= $form->field($model, 'phone',['showLabels'=>true, 'feedbackIcon' => [
                    'default' => 'mobile-alt',
                    'success' => 'ok',
                    'error' => 'exclamation-sign',
                    'defaultOptions' => ['class'=>'text-primary']
                    ]])->textInput(['placeholder'=>'أدخل رقم التواصل   ']); ?>
                </div>

            </div>

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
                    <?= $form->field($model, 'realestate_space',['showLabels'=>true, 'feedbackIcon' => [
                    'default' => 'ruler',
                    'success' => 'ok',
                    'error' => 'exclamation-sign',
                    'defaultOptions' => ['class'=>'text-primary']
                    ]])->textInput(['placeholder'=>'أدخل مساحة العقار    ']); ?>
                </div>

                <div class="col-lg-4">
                    <?= $form->field($model, 'flats_number',['showLabels'=>true, 'feedbackIcon' => [
                    'default' => 'warehouse',
                    'success' => 'ok',
                    'error' => 'exclamation-sign',
                    'defaultOptions' => ['class'=>'text-primary']
                    ]])->textInput(['placeholder'=>'أدخل عدد الشقق      ']); ?>
                </div>


            </div>

            <div class="form-group row mb-0">


                <div class="col-lg-4">
                    <?= $form->field($model, 'realestate_recuretment_period',['showLabels'=>true, 'feedbackIcon' => [
                    'default' => 'clock',
                    'success' => 'ok',
                    'error' => 'exclamation-sign',
                    'defaultOptions' => ['class'=>'text-primary']
                    ]])->textInput(['placeholder'=>'أدخل مدة التأجير     ']); ?>
                </div>

                <div class="col-lg-4">
                    <?= $form->field($model, 'rooms_number',['showLabels'=>true, 'feedbackIcon' => [
                    'default' => 'archway',
                    'success' => 'ok',
                    'error' => 'exclamation-sign',
                    'defaultOptions' => ['class'=>'text-primary']
                    ]])->textInput(['placeholder'=>'أدخل عدد الغرف     ']); ?>
                </div>

                <div class="col-lg-4">
                    <?= $form->field($model, 'hols_number',['showLabels'=>true, 'feedbackIcon' => [
                    'default' => 'school',
                    'success' => 'ok',
                    'error' => 'exclamation-sign',
                    'defaultOptions' => ['class'=>'text-primary']
                    ]])->textInput(['placeholder'=>'أدخل عدد الصالات     ']); ?>
                </div>

            </div>

            <div class="form-group row mb-0">


                <div class="col-lg-4">
                    <?= $form->field($model, 'pathrooms_number',['showLabels'=>true, 'feedbackIcon' => [
                    'default' => 'restroom',
                    'success' => 'ok',
                    'error' => 'exclamation-sign',
                    'defaultOptions' => ['class'=>'text-primary']
                    ]])->textInput(['placeholder'=>'أدخل عدد الحمامات      ']); ?>
                </div>

                <div class="col-lg-4">
                    <?= $form->field($model, 'store_number',['showLabels'=>true, 'feedbackIcon' => [
                    'default' => 'cube',
                    'success' => 'ok',
                    'error' => 'exclamation-sign',
                    'defaultOptions' => ['class'=>'text-primary']
                    ]])->textInput(['placeholder'=>'أدخل عدد الأدوار     ']); ?>
                </div>

                <div class="col-lg-4">
                    <?= $form->field($model, 'realestate_age',['showLabels'=>true, 'feedbackIcon' => [
                    'default' => 'monument',
                    'success' => 'ok',
                    'error' => 'exclamation-sign',
                    'defaultOptions' => ['class'=>'text-primary']
                    ]])->textInput(['placeholder'=>'أدخل عمر العقار      ']); ?>
                </div>

            </div>

            <div class="form-group row mb-0">

                <div class="col-lg-12">
                    <?= $form->field($model, 'photo')->fileInput() ?>
                </div>

            </div>

            <div class="form-group row mb-0">

                <div class="col-lg-12">
                    <?= $form->field($model, 'other_info',['showLabels'=>true, 'feedbackIcon' => [
                    'default' => 'book-open',
                    'success' => 'ok',
                    'error' => 'exclamation-sign',
                    'defaultOptions' => ['class'=>'text-primary']
                    ]])->textarea(['placeholder'=>'أدخل معلومات أضافية عن العقار       ', 'rows' => 6]); ?>
                </div>

            </div>


        </div>
        <div class="card-footer">
            <?= Html::resetButton(' <i class="fas fa-redo"></i> إعادة ادخال', ['class' => 'btn btn-secondary']) ?>
            <?= Html::submitButton(' <i class="fas fa-plus"></i> حفظ', ['class' => 'btn btn-success']) ?>
        </div>
    </div>    


<?php ActiveForm::end(); ?>


    
