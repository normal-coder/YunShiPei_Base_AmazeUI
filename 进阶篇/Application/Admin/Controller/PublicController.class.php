<?php
namespace Admin\Controller;
use Think\Controller;
class PublicController extends Controller {
	public function index(){
		$this->display();
	}

	public function login()
	{
		if (isset($_SESSION['username'])) {
			// 已登陆，跳转后台
			$this->redirect('Index/index');
		}else{
			// 未登录
			if ($_SERVER['REQUEST_METHOD']=="POST") {
				$data['username']=I('post.username');
				$data['password']=md5(I('post.password'));
				$user=M('user')->where($data)->find();
				if ($user==null) {
					$this->error('用户名错误或密码错误，请检查您的输入');
				}else{
					$_SESSION=$user;
					$this->redirect('Index/index');
				}
			}else{
				$this->display();
			}
		}
	}


	public function passwd()
	{
		if ($_SERVER['REQUEST_METHOD']=="POST") {
			$data = array('oldpassword' => I('post.oldpassword'),'newpassword' => I('post.newpassword'));
			$where['username']="admin";
			$userdata=M('user')->where($where)->find();
			if ($userdata['password']==md5($data['oldpassword'])) {
				// Update
				$savedata['password']=md5($data['newpassword']);
				$save=M('user')->where($where)->save($savedata);
				if ($save) {
					session_destroy();
					$this->success('密码修改成功',U('Public/login'));
				}else{
					$this->error('密码修改失败');
				}
			}else{
				$this->error('原密码不正确，请检查！');
			}
		}else{
			$this->display();
		}
	}

	public function logout()
	{
		session_destroy();
		$this->success('注销成功，跳转回前台', U("Home/Index/index"));
	}
}