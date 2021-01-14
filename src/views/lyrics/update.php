<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Lyrics */

$this->title = 'Update Lyrics: ' . $model->lyrics_id;
$this->params['breadcrumbs'][] = ['label' => 'Lyrics', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->lyrics_id, 'url' => ['view', 'id' => $model->lyrics_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="lyrics-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
