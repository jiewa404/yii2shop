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


class ProductController extends Controller{
    public $layout = 'common';


    public  function actionIndex()
    {
        return $this->render('index');
    }

    public  function actionDetail()
    {
        return $this->render('detail');
    }

}