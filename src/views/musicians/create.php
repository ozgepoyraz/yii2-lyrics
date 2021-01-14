<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Musicians */

$this->title = 'Create Musicians';
$this->params['breadcrumbs'][] = ['label' => 'Musicians', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="musicians-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
