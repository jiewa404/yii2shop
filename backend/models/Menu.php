<?php
/**
 * User: wangjie404
 * Date: 2016/7/31
 * Time: 10:50
 * 后台管理admin model
 */

namespace backend\models;

use yii\db\ActiveRecord;
use Yii;


class Menu extends ActiveRecord{



    public static function tableName()
    {
        return "{{%menu}}";
    }



}


