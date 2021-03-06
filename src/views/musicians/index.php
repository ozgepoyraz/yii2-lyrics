<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\MusiciansSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Musicians';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="musicians-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Musicians', ['create'], ['class' => 'btn btn-success']) ?>
        <?= Html::a('Return Menu', ['/lyrics'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'musician_id',
            'musician_name',
            'musician_age',
            'musician_nationality',
            'musician_created_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
