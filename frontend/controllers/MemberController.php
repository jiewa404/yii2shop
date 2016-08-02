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


class MemberController extends Controller{

    public $layout = 'common';

    public  function actionAuth()
    {
        return $this->render('auth');
    }

}