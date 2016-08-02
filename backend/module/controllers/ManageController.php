<?php

namespace backend\module\controllers;


use Yii;
use yii\data\Pagination;
use yii\web;
use yii\web\Controller;
use backend\models\Admin;

/**
 * 管理员登录模块
 * author :wangjie404
 * Date: 2016/7/30
 * Time: 13:53
 */
class ManageController extends Controller
{
    public $layout = false;

    /*
     * 管理员修改密码
     */
    public function actionMailchangepass()
    {
        $model = new Admin();
        $time = Yii::$app->request->get('timestamp');
        $token = Yii::$app->request->get('token');
        $adminuser = Yii::$app->request->get('adminuser');
        $validateToken = $model->createToken($adminuser,$time);
        //token验证是否相等
        if($token != $validateToken){
           $this->redirect(['public/login']);
            Yii::$app->end();
        }
        //5分钟失效
        if(time() - $time > 300){
            $this->redirect(['public/login']);
            Yii::$app->end();
        }
        //修改密码
        if(Yii::$app->request->isPost){
            $post = Yii::$app->request->post();
            if($model->changePass($post)){
                Yii::$app->session->setFlash('info','密码修改成功');
            }

        }
        $model->name = $adminuser;
        return $this->render('mailchangepass',['model' => $model]);
    }

    /*
     * 管理员列表
     */
    public function actionManagers(){
        Yii::$app->response->format =  web\Response::FORMAT_JSON;
        $model = Admin::find();
        $pageNum = Yii::$app->request->get('page')?Yii::$app->request->get('page'):'0';
        $count = $model->count();
        if($pageNum > 0){
            $pageNum = $pageNum -1;
        }
        $pageSize = 3;
        $offset = $pageNum * $pageSize;
        $pageTotal = ceil($count/$pageSize);
        return [
            'adminTotal' => $pageTotal,
            'adminUsers' => Admin::find()->offset($offset)->limit($pageSize)->asArray()->all(),
        ];
    }

}