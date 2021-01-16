<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Yii2 Lyrics Module';
?>

<style>

</style>


    <div>
        <h1><?= Html::encode($this->title) ?></h1>
    </div>

    <div>
    <?= Html::label('Management') ?>
    <br>
    <?= Html::a('Manage Musicians', ['/lyrics/musicians'], ['class'=>'btn btn-primary']) ?>
    <?= Html::a('Manage Lyrics', ['/lyrics/lyrics'], ['class'=>'btn btn-primary']) ?>
           
            <p></p>
            <?= Html::img('https://image.freepik.com/free-vector/cute-astronaut-playing-dj-electronic-music-with-headphone-cartoon-icon-illustration-science-technology-icon-concept_138676-2113.jpg', ['alt' => 'Lyrics Module', 'width' => '260']) ?>
            <p></p>
    
    <?= Html::label('Apis') ?>
    <br>
    <?= Html::a('Random Lyrics', ['random/lyrics'], ['class'=>'btn btn-primary']) ?>
    <?= Html::a('Random Musician', ['random/musicians'], ['class'=>'btn btn-primary']) ?>

    </div>

