<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;

class IndexController extends Controller
{
    /*
     * 登录
     */
    public $layout='project';
    function actionIndex(){
        return $this->render('index');
    }

    function actionFrontend_one_page(){
        return $this->render('frontend-one-page');
}
}