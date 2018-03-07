<?php
namespace app\index\controller;
class Index extends Base
{
    public function index()
    {
        //$this -> view -> isLogin();//判断是否登录

        $this -> assign("title","教学管理系统");
        $this -> assign("header","教学管理系统");

        return $this -> fetch();//页面渲染
    }
}
