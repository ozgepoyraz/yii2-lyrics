<?php

namespace ozgepoyraz\lyrics\controllers;

class DefaultController extends \yii\web\Controller{

	public function actionIndex(){
	    return $this->render('index');
    }

}
