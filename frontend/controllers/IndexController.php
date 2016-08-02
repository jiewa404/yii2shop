<?php
/**
 * User: wangjie404
 * Date: 2016/7/30
 * Time: 11:31
 * 首页
 */


namespace frontend\controllers;

use yii;
use yii\web\Controller;


class IndexController extends Controller{

    public  function actionIndex()
    {
     $this->layout = 'layout';
     return $this->render('index');
    }

}