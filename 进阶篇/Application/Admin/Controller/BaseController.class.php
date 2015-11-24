<?php
namespace Admin\Controller;
use Think\Controller;
class BaseController extends Controller {
	public function _initialize()
	{
		if (isset($_SESSION['username'])) {
			// 已经登陆，跳过
		}else{
			// 未登录，强制转到登陆
			$this->redirect('Public/login');
		}
	}
}