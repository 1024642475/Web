<?php

namespace Admin\Controller;    //命名空间
use Think\Controller;        //命名空间引用

class TestController extends Controller {
    public function test1(){
    echo "我是Test控制器下的test1方法";
    $date=date('Y-m-d');
    $this->assign('date',$date);
    $this->display();
    }
    public function test2(){
        echo "我是Test控制器下的test2方法";
        $this->display('test1');
    }
}



