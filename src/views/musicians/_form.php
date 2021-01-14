<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Musicians */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="musicians-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'musician_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'musician_age')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'musician_nationality')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
