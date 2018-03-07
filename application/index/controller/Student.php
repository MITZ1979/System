<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/29
 * Time: 0:33
 */

namespace app\index\controller;

use think\Request;

class Student extends Base
{
    /**
     * @return string
     */
    public function student(){

        return $this->fetch();
    }

    public function login(){

    	return $this->fetch();
    }


}