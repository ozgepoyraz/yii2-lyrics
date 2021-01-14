<?php

use yii\helpers\ArrayHelper;
use ozgepoyraz\lyrics\models\Musicians;

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Lyrics */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="lyrics-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'musicians_musician_id')->dropDownList(
        ArrayHelper::map(Musicians::find()->all(), 'musician_id','musician_name'),
        ['prompt' => 'Select A Musician']
    ) ?>

    <?= $form->field($model, 'lyrics_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lyrics_content')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'lyrics_genre')->textInput(['maxlength' => true]) ?>


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
