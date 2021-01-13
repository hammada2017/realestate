<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\bootstrap4\Html;
use yii\bootstrap4\ActiveForm;
use yii\helpers\ArrayHelper;
use common\models\Branches;
use common\models\Employees;

$this->title = 'Signup';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-signup">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Please fill out the following fields to signup:</p>

    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>

                <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

                <?= $form->field($model, 'branch_id')->dropDownList(ArrayHelper::map(Branches::find()->all(), 'id', 'branch_name')) ?>

                <?= $form->field($model, 'emp_id')->dropDownList(ArrayHelper::map(Employees::find()->all(), 'id', 'emp_name')) ?>
                
                <?= $form->field($model, 'email') ?>

                <?= $form->field($model, 'password')->passwordInput() ?>

                <?= $form->field($model, 'permission')->dropDownList(['1' => 'مشرف', '2' => 'كاشير'], ['prompt' => 'أختر صلاحية المستخدم...']) ?>

                <div class="form-group">
                    <?= Html::submitButton('تسجيل', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
