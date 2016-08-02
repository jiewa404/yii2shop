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


class Admin extends ActiveRecord{

    public $rememberMe = true;//记住账号
    public $confirmPass; //确认密码


    public static function tableName()
    {
        return "{{%admin}}";
    }

    /*
     * rules 验证规则
     */
    public function rules()
    {
        return [
            ['name','required','message' => '管理员账号不能为空','on' => ['login','seekpass','changepass']],
            ['pass','required','message' => '管理员密码不能为空','on' => ['login','changepass']],
            ['rememberMe','boolean','on' => ['login']],
            ['pass','validatePass','on' => ['login']],
            ['email','required','message' => '电子邮箱不能为空','on' => ['seekpass']],
            ['email','email','message' => '电子邮箱格式不正确','on' => ['seekpass']],
            ['email','validateEmail','on' => ['seekpass']],
            ['confirmPass','required','message' => '两次密码不一致','on' => ['changepass']],
            ['confirmPass','compare','compareAttribute' => 'pass','message' => '两次密码不一致','on' => ['changepass']],

        ];
    }

    /*
     *验证管理员密码
     */
    public function validatePass(){
          //之前验证都是正确的情况下
        if(!$this->hasErrors()){
            $data = self::find()->where(
                'name = :name and pass = :pass',
                [
                    ":name" => $this->name,
                     ":pass" => md5($this->pass)
                ])->one();
            if(is_null($data)){
                $this->addError("pass","用户名或者密码错误");
            }
        }
    }

    /*
     * 验证登陆
     */
    public function login($data){

     //设置登陆场景
     $this->scenario = "login";
     if($this->load($data) && $this->validate()){
         $lifetime = $this->rememberMe ? 24*3600 :0;
         $session = Yii::$app->session;
         session_set_cookie_params($lifetime);
         $session['admin'] = [
             'name' => $this->name,
             'isLogin' => 1,
         ];
         $this->updateAll(['last_login_time' => time(),'last_login_ip' =>ip2long(Yii::$app->request->userIP)],'name = :name',['name'=>$this->name]);
         return (bool)$session['admin']['isLogin'];
     }
        return false;

    }

    /*
     * 验证邮件发送
     */
    public function seekPass($data){
        $this->scenario = "seekpass";
        if($this->load($data) && $this->validate()){
            //验证成功
            $time = time();
            $token = $this->createToken($data['Admin']['name'],$time);
            $mailer = Yii::$app->mailer->compose('seekpass.php',[
                'adminuser' => $this->name,
                'time' => $time,
                'token' => $token,
            ]);
            $mailer ->setFrom('18380358053@163.com');
            $mailer ->setTo($data['Admin']['email']);
            $mailer ->setSubject('后台-找回密码');
            if($mailer->send()){
                return true;
            }
        }
        return false;


    }
    /*
     * 验证邮件是否属于该用户
     */
    public function validateEmail(){
        if(!$this->hasErrors()){
         $data = self::find()->where(
             'name = :name and email = :email',
             [
                 ':name' => $this->name,
                 ':email'=> $this->email,
             ])->one();
         if(is_null($data)){
             $this->addError('email','账号邮箱不匹配');
         }
        }
    }

    /*
     * 生成邮箱验证token
     */
    public function createToken($user,$time){

        return md5(md5($user).base64_encode(Yii::$app->request->userIP).md5($time));
    }

    /*
     * 修改管理员密码
     */
    public function changePass($data){
        $this->scenario = "changepass";
        if($this->load($data) && $this->validate()){
           return (bool)$this->updateAll(['pass' => md5($this->pass)],'name = :name',['name'=>$this->name]);

        }
        return false;

    }


}


