<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends BaseController {
	public function index(){
		$mess=date("Y-m-d H:i:s");
		$this->assign('mess',$mess);
		$this->display();
	}
}