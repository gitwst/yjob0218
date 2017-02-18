<?php
namespace Adminyjob\Controller;
use Think\Controller;
use Adminyjob\RemoteModel\JobRemoteModel;
class MemberController extends PublicController{
    public function bd_lib(){
        $title = "BD列表";
        $this->assign('title',$title);
        $this->display();
    }
    public function name_authentication(){
        $title = "实名认证";
        $this->assign('title',$title);
        $this->display();
    }
    public function part_time_lib(){
        $title = "兼职列表";
        $this->assign('title',$title);  
              
        $data =[
        	'uid'  => 1,
        	'page' => 2,
        	'size' => 2,
        ];
        $JobRemoteModel = new JobRemoteModel();
        $jobFavJobList = $JobRemoteModel ->jobFavJobList($data);
        echo 2;
        print_r($jobFavJobList);exit;
        
        $this->display();
    }
    public function supervisor_lib(){
        $title = "督导列表";
        $this->assign('title',$title);
        $this->display();
    }
}