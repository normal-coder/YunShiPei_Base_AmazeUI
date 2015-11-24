<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends BaseController {
    public function index(){
        $this->display();
    }


    public function test()
    {
    	$message=M('cast')->select();
    	dump($message);
    	die;
    }
}