<?php

namespace backend\module\controllers;

use yii\web\Controller;
use backend\models\Admin;
use Yii;

/**
 * 管理员登录模块
 * author :wangjie404
 * Date: 2016/7/30
 * Time: 13:53
 */
class PublicController extends Controller
{

    public $layout = false;
    /**
     * 管理员登陆
     * @return string
     */
    public function actionLogin()
    {
        $model = new Admin;
        //验证是否为post提交
        if(Yii::$app->request->isPost){
          $post = Yii::$app->request->post();
          if($model->login($post)){
             $this->redirect(['default/index']);
             Yii::$app->end();
          }
        }
        return $this->render('login', [
            'model' => $model,
        ]);
    }
    /**
     * 管理员退出登录
     * @return string
     */
    public function actionLogout()
    {
        Yii::$app->session->removeAll();
        if(!isset(Yii::$app->session['admin']['isLogin'])){
            $this->redirect(['public/login']);
            Yii::$app->end();
        }
        $this->goBack();
    }

    /**
     * 找回密码
     * @return string
     */
    public function actionSeekpassword()
    {
        $model = new Admin();
        if(Yii::$app->request->isPost){

            $post = Yii::$app->request->post();
            if($model->seekPass($post)){
                Yii::$app->session->setFlash('info','电子邮件发送成功，请注意查收！');
            }
        }
        return $this->render('seekpassword', [
            'model' => $model,
        ]);
    }
}
