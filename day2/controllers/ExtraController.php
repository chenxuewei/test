<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;

class ExtraController extends Controller
{



   //加载模板页面
    public $layout='login';


    /*
     * 判断是否安装
     */


    /*
     * 登录
     */
    function actionLogin(){
        return $this->render('extra-signin');
    }

}