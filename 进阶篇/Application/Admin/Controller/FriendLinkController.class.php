<?php
namespace Admin\Controller;
use Think\Controller;
class FriendLinkController extends BaseController {


	public function index(){
		$limit['status']="1";
		$linkList=M('friendlink')->where($where)->select();
		$this->assign('linklist',$linkList);
		$this->display();
	}


	public function changeStatus()
	{
		$where['id']=I('get.id');
		$linkmess=M('friendlink')->where($where)->find();
		if ($linkmess) {
			if ($linkmess['status']==1) {
				$save['status']=0;
				$mess="禁用成功";
			}else{
				$save['status']=1;
				$mess="启用成功";
			}
			$result=M('friendlink')->where($where)->save($save);

			if ($result) {
				$this->success($mess,U('index'));
			}else{
				$this->error('修改状态失败');
			}
		}else{
			$this->error('不存在该记录，请刷新后重试！');
		}
	}


	public function del()
	{
		$where['id']=I('get.id');
		$result=M('friendlink')->where($where)->delete();
		if ($result) {
			$this->success('删除成功');
		}else{
			$this->success('删除失败');
		}
	}


	public function add()
	{
		if ($_SERVER['REQUEST_METHOD']=="POST") {
			// 添加数据
			$save=M('friendlink')->add($_POST);
			if ($save) {
				$this->success('添加成功',U('index'));
			}else{
				$this->error('添加失败',U('index'));
			}
		}else{
			$this->display();
		}
	}


	public function edit()
	{
		if ($_SERVER['REQUEST_METHOD']=="POST") {
			$where['id']=I('post.id');
			$save=M('friendlink')->where($where)->save($_POST);
			if ($save) {
				$this->success('编辑成功',U('index'));
			}else{
				$this->error('编辑失败',U('index'));
			}
		}else{
			$where['id']=I('get.id');
			$linkmess=M('friendlink')->where($where)->find();
			if ($linkmess) {
				$this->assign('linkmess',$linkmess);
				$this->display();
			}else{
				$this->error('不存在该记录');
			}
		}
	}
}