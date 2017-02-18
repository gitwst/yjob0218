<?php

    
    $Data = M('Data'); // 实例化Data数据对象  date 是你的表名
    import('ORG.Util.Page');// 导入分页类
    $count = $Data->where($map)->count();// 查询满足要求的总记录数 $map表示查询条件
    $Page = new Page($count);// 实例化分页类 传入总记录数
    $show = $Page->show();// 分页显示输出
    // 进行分页数据查询
    $list = $Data->where($map)->order('id')->limit($Page->firstRow.','.$Page->listRows)->select(); // $Page->firstRow 起始条数 $Page->listRows 获取多少条
    $this->assign('list',$list);// 赋值数据集
    $this->assign('page',$show);// 赋值分页输出
    $this->display(); // 输出模板
	
?>