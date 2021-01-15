<?php

namespace ozgepoyraz\lyrics\controllers;
use ozgepoyraz\lyrics\models\Lyrics;
use ozgepoyraz\lyrics\models\Musicians;
use yii\helpers\ArrayHelper;

class RandomController extends \yii\web\Controller{

    public function actionIndex(){
	    return $this->render('index');
    }

    public function actionLyrics(){
        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        return [
            'random_lyric' => Lyrics::find()->all()[array_rand(Lyrics::find()->all())],
        ];
    }

    public function actionMusicians(){
        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        return [
            'random_musician' => Musicians::find()->all()[array_rand(Musicians::find()->all())],
        ];
    }

}
