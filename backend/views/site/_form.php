<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\bootstrap4\Html;
use kartik\form\ActiveForm;
use yii\helpers\ArrayHelper;

?>
<?php $form = ActiveForm::begin([
    'id' => 'form-user', 
    'type' => ActiveForm::TYPE_VERTICAL,
    'formConfig' => ['labelSpan' => 3, 'deviceSize' => ActiveForm::SIZE_SMALL]
]); ?>

    <div class="card text-right">
        <div class="card-header"><h5> <i class="nav-icon fas fa-users"></i>  المستخدميين</h5></div>
        <div class="card-body">
            <div class="form-group row mb-0">
                <?php //echo Html::activeLabel($model, 'username', ['label'=>'أسم المستخدم', 'class'=>'col-lg-2 col-form-label']) ?>
                <div class="col-lg-6">
                    <?= $form->field($model, 'username',['showLabels'=>true, 'feedbackIcon' => [
                    'default' => 'user',
                    'success' => 'ok',
                    'error' => 'exclamation-sign',
                    'defaultOptions' => ['class'=>'text-primary']
                    ]])->textInput(['placeholder'=>'أدخل أسم المستخدم']); ?>
                </div>

                <?php //echo Html::activeLabel($model, 'email', ['label'=>'البريد الإلكتروني', 'class'=>'col-lg-1 col-form-label']) ?>
                <div class="col-lg-6">
                    <?= $form->field($model, 'email',['showLabels'=>true, 'feedbackIcon' => [
                    'default' => 'envelope',
                    'success' => 'ok',
                    'error' => 'exclamation-sign',
                    'defaultOptions' => ['class'=>'text-primary']
                    ]])->textInput(['placeholder'=>'أدخل البريد الإلكتروني']); ?>
                </div>

            </div>


            <div class="form-group row mb-0">
                <?php //echo Html::activeLabel($model, 'password', ['label'=>'كلمة المرور', 'class'=>'col-lg-1 col-form-label']) ?>
                <div class="col-lg-12">
                    <?= $form->field($model, 'password',['showLabels'=>true, 'feedbackIcon' => [
                    'default' => 'lock',
                    'success' => 'ok',
                    'error' => 'exclamation-sign',
                    'defaultOptions' => ['class'=>'text-primary']
                    ]])->passwordInput(['placeholder'=>'أدخل كلمة المرور']); ?>
                </div>
            </div>

        </div>
        <div class="card-footer">
            <?= Html::resetButton(' <i class="fas fa-redo"></i> إعادة ادخال', ['class' => 'btn btn-secondary']) ?>
            <?= Html::submitButton(' <i class="fas fa-plus"></i> حفظ', ['class' => 'btn btn-success']) ?>
        </div>
    </div>    

<?php ActiveForm::end(); ?>
        
