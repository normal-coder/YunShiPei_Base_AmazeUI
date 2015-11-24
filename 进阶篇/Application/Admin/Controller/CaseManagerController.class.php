<?php
namespace Admin\Controller;
use Think\Controller;
class CaseManagerController extends BaseController {

	public function getlist(){
		$limit['status']="1";
		$linkList=M('cast')->where($where)->select();
		$this->assign('linklist',$linkList);
		$this->display();
	}


	public function changeStatus()
	{
		$where['id']=I('get.id');
		$linkmess=M('cast')->where($where)->find();
		if ($linkmess) {
			if ($linkmess['status']==1) {
				$save['status']=0;
				$mess="禁用成功";
			}else{
				$save['status']=1;
				$mess="启用成功";
			}
			$result=M('cast')->where($where)->save($save);

			if ($result) {
				$this->success($mess,U('getlist'));
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
		$result=M('cast')->where($where)->delete();
		if ($result) {
			$this->success('删除成功',U('getlist'));
		}else{
			$this->success('删除失败',U('getlist'));
		}
	}


	public function add()
	{
		if ($_SERVER['REQUEST_METHOD']=="POST") {
			$data=$_POST;
			// 添加数据
			$upload = new \Think\Upload();// 实例化上传类
			$upload->maxSize   =      3145728 ;// 设置附件上传大小
			$upload->savename = '';
			$upload->exts      = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
			$upload->rootPath  = './Public/Upload/cast/'; // 设置附件上传根目录
			$upload->savePath  = ''; // 设置附件上传（子）目录
			// 上传文件 
			$info   =   $upload->upload();
			if(!$info) {// 上传错误提示错误信息
				$this->error($upload->getError());
			}else{// 上传成功
				$data['siteimg']=$info['siteimg']['savepath'].$info['siteimg']['savename'];
				$save=M('cast')->add($data);
				if ($save) {
					$this->success('添加成功',U('getlist'));
				}else{
					$this->error('添加失败',U('getlist'));
				}
			}
		}else{
			$this->display();
		}
	}


	public function edit()
	{
		if ($_SERVER['REQUEST_METHOD']=="POST") {
			$data=$_POST;
			// 添加数据
			$upload = new \Think\Upload();// 实例化上传类
			$upload->maxSize   =      3145728 ;// 设置附件上传大小
			$upload->savename = '';
			$upload->exts      = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
			$upload->rootPath  = './Public/Upload/cast/'; // 设置附件上传根目录
			$upload->savePath  = ''; // 设置附件上传（子）目录
			// 上传文件 
			$info   =   $upload->upload();
			if(!$info) {// 上传错误提示错误信息
				$this->error($upload->getError());
			}else{// 上传成功
				$data['siteimg']=$info['siteimg']['savepath'].$info['siteimg']['savename'];
				$save=M('cast')->add($data);
				if ($save) {
					$this->success('添加成功',U('getlist'));
				}else{
					$this->error('添加失败',U('getlist'));
				}
			}
		}else{
			$where['id']=I('get.id');
			$site=M('cast')->where($where)->find();
			if ($site) {
				$this->assign('site',$site);
				$this->display();
			}else{
				$this->error('不存在该记录');
			}
		}
	}
}