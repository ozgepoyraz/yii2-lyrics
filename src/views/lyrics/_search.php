<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\LyricsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="lyrics-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'lyrics_id') ?>

    <?= $form->field($model, 'musicians_musician_id') ?>

    <?= $form->field($model, 'lyrics_title') ?>

    <?= $form->field($model, 'lyrics_content') ?>

    <?= $form->field($model, 'lyrics_genre') ?>

    <?php // echo $form->field($model, 'lyrics_created_at') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
