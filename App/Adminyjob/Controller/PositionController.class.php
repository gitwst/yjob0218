<?php
namespace Adminyjob\Controller;
use Think\Controller;
use Adminyjob\RemoteModel\JobRemoteModel;
class PositionController extends PublicController{
//	职位列表
	public function job_listings(){
		$data = [
			'company_id' => 1001,
			'status' => 100,
			'create_time' => time(),
			'refurbish_time' => time(),
			'page' => 4,
			'size' => 20
		];
		$data = json_encode($data);
//		从接口得到数据
		$JobRemoteModel = new JobRemoteModel();
		$jobList = $JobRemoteModel->jobList($data);
//		echo '<pre>';
//		print_r($jobList);exit;
		$this->assign('jobList',$jobList);
		$this->display();
  }
//删除
	public function del_job_listings(){
		$data = [
			'job_ids' => 99,
		];
//		$id = $_post['id'];
		$JobRemoteModel = new JobRemoteModel();
		$jobDelete = $JobRemoteModel->jobDelete($data);
//		echo '<pre>';
//		print_r($jobDelete);exit;
		$jobList->where('id = 101')->delete();
		$this->success('删除成功',U('Position/job_listings'));
		
	}

public function job_update(){
//	for($i;$i<$count;$i++){
//		$a = $list[$i]['id'];
//		$c = $list[$i];
//	}
//	$jobid 	= intval($_GET['id']);
	$id = $_get['id'];
	print_r($id);
	$this->display();
}

}