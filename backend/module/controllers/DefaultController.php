<?php

namespace backend\module\controllers;


use Yii;
use yii\web;
use backend\models\Menu;
use yii\web\Controller;


/**
 * Default controller for the `admin` module
 */
class DefaultController extends Controller
{

    public $layout = 'layout';
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /*菜单管理*/
    public function actionMenu()
    {
        //设置返回的格式 为json
        Yii::$app->response->format =  web\Response::FORMAT_JSON;
        $res = Menu::find()->select('id, pid, name, route, icon')->asArray()->all();
        return $this->combine($res);
    }

    /*菜单管理 设置key 为id*/
    public function combine($arr=[]){
        if(isset($arr)){
            foreach ($arr as $key => $value){
                $combine[$value['id']]=$value;
            }
        }
        return $combine;
    }

    public function actionTest(){
        $this->layout = 'layout';
        echo 1;
    }

}
