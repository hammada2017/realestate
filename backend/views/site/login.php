<?php

use yii\bootstrap4\Html;
use yii\bootstrap4\ActiveForm;

?>
<?php $form = ActiveForm::begin([
    'id' => 'login-form',
    'options' => ['class' => 'text-right'],
    ]); ?>

    <?= $form->field($model, 'username', [
        'template' => '{label} <div class="input-group mb-3"><div class="input-group-append input-group-text"><span class="fas fa-user"></span></div>{input}{error}{hint}</div>',
        'inputOptions' => ['placeholder' => $model->getAttributeLabel('username'), 'class' => ['form-control']],
    ])->textInput(['maxlength' => true])->label(false) ?>

    <?= $form->field($model, 'password', [
        'template' => '{label} <div class="input-group mb-3"><div class="input-group-append input-group-text"><span class="fas fa-lock"></span></div>{input}{error}{hint}</div>',
        'inputOptions' => ['placeholder' => $model->getAttributeLabel('password'), 'class' => ['form-control']],
    ])->passwordInput(['maxlength' => true])->label(false) ?>

    <?= $form->field($model, 'rememberMe', [
        'template' => '{label} <div class="row"><div class="col-8"><div class="icheck-primary">{input}{error}{hint}</div></div></div>',
    ])->checkbox() ?>


    <div class="form-group">
        <?= Html::submitButton('دخول', ['class' => 'btn btn-primary btn-block btn-flat', 'name' => 'login-button']) ?>
    </div>

<?php ActiveForm::end(); ?>
