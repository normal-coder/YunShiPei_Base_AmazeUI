<?php
namespace Home\Controller;
use Think\Controller;
class ProductsController extends BaseController {
    public function index(){
        $this->display();
    }
    public function pricing()
    {
    	$this->display();
    }
}