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

    /*
     * 检测登陆
     */
    public function actionCheck_login()
    {
        $arr = Yii::$app->request->post();
        // 防止SQL注入
        $link= mysqli_connect("127.0.0.1","root","");
        $sql = "select * from we_user where uname='".mysqli_real_escape_string($link,$arr['username'])."'";
        $res = Yii::$app->db->createCommand($sql)->queryOne();
        if($res){
            if($res['upwd']==$arr['password']){
                $session = \Yii::$app->session;
                $session->open();
                $session->set("uid",$res['uid']);
                $session->set("uname",$res['uname']);
                echo "<script>alert('欢迎登陆');location.href='?r=index/index'</script>";
            }else{
                echo "<script>alert('密码错误');location.href='?r=extra/login'</script>";            
            }
        }else{
            echo "<script>alert('该用户不存在，请重新登陆');location.href='?r=extra/login'</script>";
        }
    }


}