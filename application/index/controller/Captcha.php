<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/2/20
 * Time: 13:41
 */

namespace app\index\controller;


class Captcha
{
//类文件位于extend/other/Captcha.php
    //控制器中 获取验证码
    public function get_captcha(){
        //使用memcheck 设置session
        Session::init(['prefix'=> 'wll_','type'=> '','auto_start' => true]);
        $captcha = new \other\Captcha(86,48,4);
        echo $captcha->showImg();
        Session::set('code',$captcha->getCaptcha());
        exit;
    }
}