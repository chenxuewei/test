<?php

namespace app\controllers;
use Yii;
use app\models\LoginForm;
class CeshiController extends \yii\web\Controller
{

    public function actionIndex()
    {
    	$model = new LoginForm;
    	if(Yii::$app->request->isPost){
    		
    		$data=Yii::$app->request->post();
    		// print_r($data);die();
    		$model->attributes=$data['LoginForm'];
    		if($model->validate()){
    			echo 123;
    		}else{
    			var_dump($model->getErrors());
    		}
    	}else{
    		return $this->render('index',['model'=>$model]);
    	}
    	
        
    }



}
