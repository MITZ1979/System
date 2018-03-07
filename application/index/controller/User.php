<?php
/**
 * Created by PhpStorm.
 * User: Adminis
 * Date: 2018/1/17
 * Time: 13:01
 */

namespace app\index\controller;

use app\index\controller\Base;
use think\Request;

class User extends Base
{
    //渲染登陆界面
    public function login(){
        return $this->fetch();
    }

    //验证登陆界面
    public function checkLogin()
    {

    }

    //退出登陆
    public function logout(){

    }
}