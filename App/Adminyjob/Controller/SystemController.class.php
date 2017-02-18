<?php
namespace Adminyjob\Controller;
use  Think\Controller;
class SystemController extends PublicController{
    public function personal_settings(){
        $title = "企业设置";
        $this->assign('title',$title);
        $this->display();
    }
    public function registry_settings(){
        $title = "注册设置";
        $this->assign('title',$title);
        $this->display();
    }
    public function substation_management(){
        $title = "分站管理";
        $this->assign('title',$title);
        $this->display();
    }
    
	//分类管理
	public function job_class(){
		$title = "分类管理";
		$this->assign('title',$title);
	  	$this->display();
	}
	
	//添加子分类
	public function add_childe_class(){
		$title = "子分类添加";
		$this->assign('title',$title);
	  	$this->display();
	}
	  
	//编辑
	public function alter_job_class(){
		$title = "分类编辑";
		$this->assign('title',$title);
		$this->display();
	}
	
	
	
	
}