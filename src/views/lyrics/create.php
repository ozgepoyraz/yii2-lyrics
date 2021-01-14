<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Lyrics */

$this->title = 'Create Lyrics';
$this->params['breadcrumbs'][] = ['label' => 'Lyrics', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lyrics-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
