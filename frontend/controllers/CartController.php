<?php
/**
 * User: wangjie404
 * Date: 2016/7/30
 * Time: 11:31
 * 商品分类页
 */

namespace frontend\controllers;

use Yii;
use yii\web\Controller;


class CartController extends Controller{
    public $layout = 'layout';


    public  function actionIndex()
    {
        return $this->render('index');
    }
    

}