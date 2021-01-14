<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\LyricsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

/*
<?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'lyrics_id',
            'musiciansMusician.musician_name',
            'lyrics_title',
            'lyrics_content:ntext',
            'lyrics_genre',
            //'lyrics_created_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

*/

$this->title = 'Lyrics';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lyrics-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Lyrics', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'lyrics_id',

            [
                'attribute' => 'musicians_musician_id',
                'value' => 'musiciansMusician.musician_name',
            ],

            'lyrics_title',
            'lyrics_content:ntext',
            'lyrics_genre',
            //'lyrics_created_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
