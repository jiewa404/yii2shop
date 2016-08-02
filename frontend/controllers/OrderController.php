<?php
/**
 * User: wangjie404
 * Date: 2016/7/30
 * Time: 11:31
 * 订单页面
 */


namespace frontend\controllers;

use Yii;
use yii\web\Controller;


class OrderController extends Controller{
    
    public  function actionIndex()
    {
       $this->layout = 'common';
        return $this->render('index');
    }
    public  function actionCheck()
    {
        $this->layout = 'layout';
        return $this->render('check');
    }

}