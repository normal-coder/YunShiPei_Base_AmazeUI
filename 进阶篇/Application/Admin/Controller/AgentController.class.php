<?php
namespace Admin\Controller;
use Think\Controller;
class AgentController extends BaseController {
	public function getlist(){
			$agentMess=M('agent')->select();
			$this->assign('agentMess',$agentMess);
			$this->display();
	}

	public function edit()
	{
		if($_SERVER['REQUEST_METHOD']=="POST") {
			$data=$_POST;
			unset($data['id']);
			$where['id']=$_POST['id'];
			$savedata=M('agent')->where($where)->save($data);
			if ($savedata) {
				$this->success('保存成功',U('getlist'));
			}else{
				$this->error('保存失败',U('edit',array('id' => $_POST['id'] )));
			}
		}else{
			$where['id']=I('get.id');
			$agentMess=M('agent')->where($where)->find();
			$this->assign('agentMess',$agentMess);
			$this->display();
		}
	}

	public function del()
	{
		$where['id']=I('get.id');
		$del=M('agent')->where($where)->delete();
		if ($del) {
			$this->success('删除成功',U('getlist'));
		}else{
			$this->error('删除失败',U('getlist'));
		}
	}
}