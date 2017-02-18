<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <!-- BEGIN META -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Olive Enterprise">
    <!-- END META -->

    <!-- BEGIN SHORTCUT ICON -->
    <link rel="shortcut icon" href="/Public/Admin/img/favicon.ico">
    <!-- END SHORTCUT ICON -->
    <title>
        <?php echo ($title); ?>
    </title>
    <!-- BEGIN STYLESHEET-->
    <link href="/Public/Admin/css/bootstrap.min.css" rel="stylesheet"><!-- BOOTSTRAP CSS -->
    <link href="/Public/Admin/css/bootstrap-reset.css" rel="stylesheet"><!-- BOOTSTRAP CSS -->
    <link href="/Public/Admin/assets/font-awesome/css/font-awesome.css" rel="stylesheet"><!-- FONT AWESOME ICON CSS -->
    <link href="/Public/Admin/css/style.css" rel="stylesheet"><!-- THEME BASIC CSS -->
    <link href="/Public/Admin/css/style-responsive.css" rel="stylesheet"><!-- THEME RESPONSIVE CSS -->
    <link href="/Public/Admin/assets/morris.js-0.4.3/morris.css" rel="stylesheet"><!-- MORRIS CHART CSS -->
    <!--dashboard calendar-->
    <link href="/Public/Admin/css/clndr.css" rel="stylesheet"><!-- CALENDER CSS -->
    <link href="/Public/Admin/css/css.css" rel="stylesheet">
    <link href="/Public/Admin/css/zp.css" rel="stylesheet">
    <link href="/Public/Admin/css/page.css" rel="stylesheet">
    <link href="/Public/Admin/css/awesome-bootstrap-checkbox.css" rel="stylesheet"><!-- awesome-bootstrap-checkbox.css -->
    <link rel="stylesheet" type="text/css" href="/Public/Admin/assets/bootstrap-wysihtml5/bootstrap-wysihtml5.css"><!-- BOOTSTRAP WYSIHTML5 PLUGIN CSS -->
    <link rel="stylesheet" type="text/css" href="/Public/Admin/assets/bootstrap-fileupload/bootstrap-fileupload.css"><!-- BOOTSTRAP FILEUPLOAD PLUGIN CSS -->
    <link rel="stylesheet" type="text/css" href="/Public/Admin/assets/bootstrap-timepicker/compiled/timepicker.css"><!-- BOOTSTRAP TIMEPICKER PLUGIN CSS -->
	
	<link rel="stylesheet" type="text/css" href="/Public/Admin/wx/css/SimpleTree.css"/>

	<script type="text/javascript" src="/Public/Admin/wx/js/jquery-1.6.min.js"></script>
	<script type="text/javascript" src="/Public/Admin/wx/js/SimpleTree.js"></script>

</head>
<body>
<!-- BEGIN SECTION -->
<section id="container" class="">

    <!-- BEGIN HEADER -->
<!-- BEGIN HEADER -->
<header class="header white-bg">
    <a href="<?php echo U('index/index');?>" class="logo">
        <img src="/Public/admin/img/images/header_06.png" alt="">
    </a>
    <!--LOGO结束-->
    <!--开始用户-->
    <div class="top-nav ">
        <ul class="nav pull-right top-menu">
            <li class="dropdown">
                <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                    <img alt="" src="/Public/admin/img/avatar1_small.jpg">
                    <span class="username">
                  云兼职平台
                </span>
                    <b class="caret">
                    </b>
                </a>
                <ul class="dropdown-menu extended logout">
                    <li class="log-arrow-up">
                    </li>
                    <li>
                        <a href="#">
                            <i class=" fa fa-suitcase">
                            </i>
                            Profile
                        </a>
                    </li>
                    
                    <li>
                        <a href="<?php echo U('login/loginout');?>">
                            <i class="fa fa-key">
                            </i>
                            退出登录
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
    <!-- 用户结束 -->
</header>
<!-- END HEADER -->
<!-- BEGIN SIDEBAR -->
<aside>
    <div id="sidebar" class="nav-collapse">
        <ul class="sidebar-menu" id="nav-accordion">
            <li >
                <a href="<?php echo U('index/index');?>" class="active">
                    <i class="fa fa-home">
                    </i>
                    <span>
			          系统后台管理
			        </span>
                </a>
            </li>
            
            <li class="sub-menu">
                <a href="javascript:;">
                    <i class="fa fa-briefcase">
                    </i>
                    <span>
							  职位管理
			        		</span>
                    <span class="label label-success span-sidebar">
			          1
			        </span>
                </a>
                <ul class="sub">
                    <li>
                        <a href="<?php echo U('position/job_listings');?>">
                            职位列表
                        </a>
                    </li>
                    <!--<li>
                        <a href="<?php echo U('Position/job_update');?>">
                            职位修改
                        </a>
                    </li>-->
                    
            
                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:;">
                    <i class="fa fa-user">
                    </i>
                    <span>
			          会员管理
			        </span>
                    <span class="label label-info span-sidebar">
			          4
			        </span>
                </a>
                <ul class="sub">
                    <li>
                        <a href="<?php echo U('member/name_authentication');?>">
                            实名认证
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo U('member/part_time_lib');?>">
                            兼职列表
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo U('member/supervisor_lib');?>">
                            督导列表
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo U('member/bd_lib');?>">
                            BD列表
                        </a>
                    </li>
                </ul>
            </li>
            
            <li class="sub-menu">
                <a href="javascript:;">
                    <i class="fa fa-briefcase">
                    </i>
                    <span>
			          企业管理
			        </span>
                    <span class="label label-success span-sidebar">
			        1
			        </span>
                </a>
                <ul class="sub">
       
                    <li>
                        <a href="<?php echo U('business/enterprise_certification');?>">
                            企业认证
                        </a>
                    </li>
                </ul>
            </li>
            
            <li class="sub-menu">
                <a href="javascript:;">
                    <i class="fa fa-file-text">
                    </i>
                    <span>
			          内容管理
			        </span>
                    <span class="label label-inverse span-sidebar">
			          4
			        </span>
                </a>
                <ul class="sub">
                    <li>
                        <a href="<?php echo U('content/content_management');?>">
                            内容管理
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo U('content/add_content');?>">
                            内容添加
                        </a>
                    </li>
                    <!--<li>-->
                    <!--<a href="sort_management.html">-->
                    <!--分类管理-->
                    <!--</a>-->
                    <!--</li>-->
                    <!--<li>-->
                    <!--<a href="region_class.html">-->
                    <!--地区分类-->
                    <!--</a>-->
                    <!--</li>-->
                    <li>
                        <a href="<?php echo U('content/opinion_suggest');?>">
                            意见反馈
                        </a>
                    </li>

                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:;">
                    <i class="fa fa-wrench">
                    </i>
                    <span>
			          工具
			        </span>
                    <span class="label label-primary span-sidebar">
			          4
			        </span>
                </a>
                <ul class="sub">
                    <li>
                        <a href="#">
                            计划任务
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo U('instrument/being_pushed');?>">
                            消息推送
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo U('instrument/bank_card');?>">
                            银行卡查询
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo U('instrument/generalize_query');?>">
                            推广查询
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo U('instrument/hbgl');?>">
                            红包管理
                        </a>
                    </li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:;">
                    <i class="fa fa-cog">
                    </i>
                    <span>
			          系统设置
			        </span>
                    <span class="label label-danger span-sidebar">
			          4
			        </span>
                </a>
                <ul class="sub">
     
                    <li>
                        <a href="<?php echo U('system/personal_settings');?>">
                            基础设置
                        </a>
                    </li>
                    
                    
                    <li>
                        <a href="<?php echo U('system/job_class');?>">
                            分类管理
                        </a>
                    </li>
                    
                    <li>
                        <a href="<?php echo U('system/substation_management');?>">
                            分站管理
                        </a>
                    </li>
 
                    <li>
                        <a href="#">
                            管理员设置
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</aside>
<!-- END SIDEBAR -->
    <!-- END SIDEBAR -->

    <!-- BEGIN MAIN CONTENT -->
    <section id="main-content">
        <!-- BEGIN WRAPPER  -->
        <section class="wrapper">
            <div class="panel with-nav-tabs panel-info panel-square panel-no-border">
                <div class="panel-heading">
                    <!-- 右侧小按钮 -->
                    <div class="pull-right">
                        <input class="form-control search" placeholder="请输入搜索的姓名或手机号" type="text">
                    </div>
                    <ul class="nav nav-tabs">
                        <li class="active">
                            <a href="#example-search-all" data-toggle="tab">
                                全部
                            </a>
                        </li>
                        <li class="">
                            <a href="#example-search-await" data-toggle="tab">
                                等待审核
                            </a>
                        </li>
                        <li class="">
                            <a href="#example-search-notpass" data-toggle="tab">
                                未通过
                            </a>
                        </li>
                        <li class="">
                            <a href="#example-search-pass" data-toggle="tab">
                                已经通过
                            </a>
                        </li>
                    </ul>
                </div>
                <div id="panel-collapse-1" class="collapse in">
                    <div class="panel-body">
                        <div class="container-fluid">
                            <div class="tab-content">
                                <!-- 第一栏 -->
                                <div class="tab-pane fade active in" id="example-search-all">
                                    <!-- 表格 -->
                                    <table class="f-tab table-hover table-condensed table-striped table-bordered table dataTable" >
                                        <thead>
                                        <tr role="row">
                                            <th>&nbsp;</th>
                                            <th>昵称</th>
                                            <th>真实姓名</th>
                                            <th>性别</th>
                                            <th>年龄</th>
                                            <th>出生日期</th>
                                            <th>身份证号</th>
                                            <th>手机号</th>
                                            <th>认证状态</th>
                                            <th>管理</th>
                                        </tr>
                                        </thead>
                                        <tbody role="alert" aria-live="polite" aria-relevant="all">
                                        <!-- 新起一行 -->
                                        <tr>
                                            <td>
                                                <div class="checkbox checkbox-info checkbox-inline checkbox-single">
                                                    <input id="checkbox_a1" type="checkbox">
                                                    <label for="checkbox_a1"></label>
                                                </div>
                                            </td>
                                            <td ><a href="" class="text-blue">凑凑凑凑上八个字</a></td>
                                            <td>刘德华</td>
                                            <td>男</td>
                                            <td>25</td>
                                            <td>
                                                1992.9.25
                                            </td>
                                            <td>
                                                310584199209253154
                                            </td>
                                            <td>
                                                15631548051
                                            </td>
                                            <td>
                                                未通过
                                            </td>
                                            <td>
                                                <a href="#myModal" data-toggle="modal" class="text-primary">查看</a>
                                                <div class="modal fade" id="myModal">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header enterprise-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                                                    ×

                                                                </button>
                                                                <h4 class="modal-title">详细资料</h4>
                                                            </div>
                                                            <div class="modal-body">
                                                                <ul class="p-info">
                                                                    <li class="enterprise-li">
                                                                        <div class="left">昵称:</div>
                                                                        <div class="right">凑凑凑凑上八个字</div>
                                                                    </li>
                                                                    <li class="enterprise-li">
                                                                        <div class="left">真实姓名:</div>
                                                                        <div class="right">刘德华</div>
                                                                    </li>
                                                                    <li class="enterprise-li">
                                                                        <div class="left">性别:</div>
                                                                        <div class="right">男</div>
                                                                    </li>
                                                                    <li class="enterprise-li">
                                                                        <div class="left">身份证号:</div>
                                                                        <div class="right">310584199209253154</div>
                                                                    </li>
                                                                    <li class="enterprise-li">
                                                                        <div class="enterprise-logo-left">
                                                                            <div class="name-logo">证件照片:</div>
                                                                            <div class="enterprise-img">
                                                                                <a href="#"><img src="img/avatar1.jpg"></a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="enterprise-logo-right">
                                                                            <div class="enterprise-zhizhao"></div>
                                                                            <div class="enterprise-img">
                                                                                <a href="#"><img src="img/avatar1.jpg"></a>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </ul>

                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>
                                            </td>
                                        </tr>
                                        <!-- 新起一行 -->
                                        <tr>
                                            <td>
                                                <div class="checkbox checkbox-info checkbox-inline checkbox-single">
                                                    <input id="checkbox_a2" type="checkbox">
                                                    <label for="checkbox_a2"></label>
                                                </div>
                                            </td>
                                            <td ><a href="" class="text-blue">凑凑凑凑上八个字</a></td>
                                            <td>刘德华</td>
                                            <td>男</td>
                                            <td>25</td>
                                            <td>
                                                1992.9.25
                                            </td>
                                            <td>
                                                310584199209253154
                                            </td>
                                            <td>
                                                15631548051
                                            </td>
                                            <td>
                                                未通过
                                            </td>
                                            <td>
                                                <a href="#myModal" data-toggle="modal" class="text-primary">查看</a>
                                            </td>
                                        </tr>
                                        <!-- 新起一行 -->
                                        <tr>
                                            <td>
                                                <div class="checkbox checkbox-info checkbox-inline checkbox-single">
                                                    <input id="checkbox_a3" type="checkbox">
                                                    <label for="checkbox_a3"></label>
                                                </div>
                                            </td>
                                            <td ><a href="" class="text-blue">凑凑凑凑上八个字</a></td>
                                            <td>刘德华</td>
                                            <td>男</td>
                                            <td>25</td>
                                            <td>
                                                1992.9.25
                                            </td>
                                            <td>
                                                310584199209253154
                                            </td>
                                            <td>
                                                15631548051
                                            </td>
                                            <td>
                                                未通过
                                            </td>
                                            <td>
                                                <a href="#myModal" data-toggle="modal" class="text-primary">查看</a>
                                            </td>
                                        </tr>
                                        <!-- 新起一行 -->
                                        <tr>
                                            <td>
                                                <div class="checkbox checkbox-info checkbox-inline checkbox-single">
                                                    <input id="checkbox_a4" type="checkbox">
                                                    <label for="checkbox_a4"></label>
                                                </div>
                                            </td>
                                            <td ><a href="" class="text-blue">凑凑凑凑上八个字</a></td>
                                            <td>刘德华</td>
                                            <td>男</td>
                                            <td>25</td>
                                            <td>
                                                1992.9.25
                                            </td>
                                            <td>
                                                310584199209253154
                                            </td>
                                            <td>
                                                15631548051
                                            </td>
                                            <td>
                                                未通过
                                            </td>
                                            <td>
                                                <a href="#myModal" data-toggle="modal" class="text-primary">查看</a>
                                            </td>
                                        </tr>
                                        <!-- 新起一行 -->
                                        <tr>
                                            <td>
                                                <!-- <input type="checkbox" name="" class="chk"> -->
                                                <div class="checkbox checkbox-info checkbox-inline checkbox-single">
                                                    <input id="checkbox_a5" type="checkbox">
                                                    <label for="checkbox_a5"></label>
                                                </div>
                                            </td>
                                            <td ><a href="" class="text-blue">凑凑凑凑上八个字</a></td>
                                            <td>刘德华</td>
                                            <td>男</td>
                                            <td>25</td>
                                            <td>
                                                1992.9.25
                                            </td>
                                            <td>
                                                310584199209253154
                                            </td>
                                            <td>
                                                15631548051
                                            </td>
                                            <td>
                                                未通过
                                            </td>
                                            <td>
                                                <a href="#myModal" data-toggle="modal" class="text-primary">查看</a>
                                            </td>
                                        </tr>
                                        <!-- 新起一行 -->
                                        <tr>
                                            <td>
                                                <div class="checkbox checkbox-info checkbox-inline checkbox-single">
                                                    <input id="checkbox_a6" type="checkbox">
                                                    <label for="checkbox_a6"></label>
                                                </div>
                                            </td>
                                            <td ><a href="" class="text-blue">凑凑凑凑上八个字</a></td>
                                            <td>刘德华</td>
                                            <td>男</td>
                                            <td>25</td>
                                            <td>
                                                1992.9.25
                                            </td>
                                            <td>
                                                310584199209253154
                                            </td>
                                            <td>
                                                15631548051
                                            </td>
                                            <td>
                                                未通过
                                            </td>
                                            <td>
                                                <a href="#myModal" data-toggle="modal" class="text-primary">查看</a>
                                            </td>
                                        </tr>
                                        <!-- 新起一行 -->
                                        <tr>
                                            <td>
                                                <div class="checkbox checkbox-info checkbox-inline checkbox-single">
                                                    <input id="checkbox_a7" type="checkbox">
                                                    <label for="checkbox_a7"></label>
                                                </div>
                                            </td>
                                            <td ><a href="" class="text-blue">凑凑凑凑上八个字</a></td>
                                            <td>刘德华</td>
                                            <td>男</td>
                                            <td>25</td>
                                            <td>
                                                1992.9.25
                                            </td>
                                            <td>
                                                310584199209253154
                                            </td>
                                            <td>
                                                15631548051
                                            </td>
                                            <td>
                                                未通过
                                            </td>
                                            <td>
                                                <a href="#myModal" data-toggle="modal" class="text-primary">查看</a>
                                            </td>
                                        </tr>
                                        <!-- 新起一行 -->
                                        <tr>
                                            <td>
                                                <div class="checkbox checkbox-info checkbox-inline checkbox-single">
                                                    <input id="checkbox_a8" type="checkbox">
                                                    <label for="checkbox_a8"></label>
                                                </div>
                                            </td>
                                            <td ><a href="" class="text-blue">凑凑凑凑上八个字</a></td>
                                            <td>刘德华</td>
                                            <td>男</td>
                                            <td>25</td>
                                            <td>
                                                1992.9.25
                                            </td>
                                            <td>
                                                310584199209253154
                                            </td>
                                            <td>
                                                15631548051
                                            </td>
                                            <td>
                                                未通过
                                            </td>
                                            <td>
                                                <a href="#myModal" data-toggle="modal" class="text-primary">查看</a>
                                            </td>
                                        </tr>
                                        <!-- 新起一行 -->

                                        </tbody>
                                    </table>
                                    <!-- 表格 -->
                                    <div class="pull-left bottom-btn-group">
                                        <div class="checkbox checkbox-info checkbox-inline">
                                            <input id="checkbox_all" name="full-select" type="checkbox">
                                            <label for="checkbox_all">全选</label>
                                        </div>
                                        <button type="button" class="btn">
                                            通过
                                        </button>
                                        <div class="btn-group">
                                            <button type="button" class="btn">
                                                拒绝
                                            </button>
                                            <div class="btn-group ">

                                                <select class="btn  dropdown-toogle enterprise-jujue">
                                                    <option selected="selected" value="0">请输入拒绝理由</option>
                                                    <option value="1">你长得太丑</option>
                                                    <option value="2">实力太差</option>
                                                    <option value="3">简历不完整</option>
                                                    <option value="4">sadasds</option>
                                                </select>
                                            </div>
                                        </div>

                                    </div>
                                    <!-- 分页 -->
                                    <ul class="pagination success pull-right">
                                        <li class="disabled">
                                            <a href="#fakelink">
                                                首页
                                            </a>
                                        </li>
                                        <li class="disabled">
                                            <a href="#fakelink">
                                                上一页
                                            </a>
                                        </li>
                                        <li class="active">
                                            <a href="#fakelink">
                                                1
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#fakelink">
                                                2
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#fakelink">
                                                3
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#fakelink">
                                                4
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#fakelink">
                                                下一页
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#fakelink">
                                                尾页
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- 第二栏开始 -->
                                <div class="tab-pane fade" id="example-search-await">
                                    <!-- 表格 -->
                                    <table class="f-tab table-hover table-condensed table-striped table-bordered table dataTable" >
                                        <thead>
                                        <tr role="row">
                                            <th>&nbsp;</th>
                                            <th>昵称</th>
                                            <th>真实姓名</th>
                                            <th>性别</th>
                                            <th>年龄</th>
                                            <th>出生日期</th>
                                            <th>身份证号</th>
                                            <th>手机号</th>
                                            <th>认证状态</th>
                                            <th>管理</th>
                                        </tr>
                                        </thead>
                                        <tbody role="alert" aria-live="polite" aria-relevant="all">
                                        <!-- 新起一行 -->
                                        <tr>
                                            <td>
                                                <div class="checkbox checkbox-info checkbox-inline checkbox-single">
                                                    <input id="checkbox_b1" type="checkbox">
                                                    <label for="checkbox_b1"></label>
                                                </div>
                                            </td>
                                            <td ><a href="" class="text-blue">凑凑凑凑上八个字</a></td>
                                            <td>刘德华</td>
                                            <td>男</td>
                                            <td>25</td>
                                            <td>
                                                1992.9.25
                                            </td>
                                            <td>
                                                310584199209253154
                                            </td>
                                            <td>
                                                15631548051
                                            </td>
                                            <td>
                                                等待审核
                                            </td>
                                            <td>
                                                <a href="#myAwiat" data-toggle="modal" class="text-primary">查看</a>
                                                <div class="modal fade" id="myAwiat">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header enterprise-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                                                    ×

                                                                </button>
                                                                <h4 class="modal-title">详细资料</h4>
                                                            </div>
                                                            <div class="modal-body">
                                                                <ul class="p-info">
                                                                    <li class="enterprise-li">
                                                                        <div class="left">昵称:</div>
                                                                        <div class="right">凑凑凑凑上八个字</div>
                                                                    </li>
                                                                    <li class="enterprise-li">
                                                                        <div class="left">真实姓名:</div>
                                                                        <div class="right">刘德华</div>
                                                                    </li>
                                                                    <li class="enterprise-li">
                                                                        <div class="left">性别:</div>
                                                                        <div class="right">男</div>
                                                                    </li>
                                                                    <li class="enterprise-li">
                                                                        <div class="left">身份证号:</div>
                                                                        <div class="right">310584199209253154</div>
                                                                    </li>
                                                                    <li class="enterprise-li">
                                                                        <div class="enterprise-logo-left">
                                                                            <div class="name-logo">证件照片:</div>
                                                                            <div class="enterprise-img">
                                                                                <a href="#"><img src="img/avatar1.jpg"></a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="enterprise-logo-right">
                                                                            <div class="enterprise-zhizhao"></div>
                                                                            <div class="enterprise-img">
                                                                                <a href="#"><img src="img/avatar1.jpg"></a>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </ul>

                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>
                                            </td>
                                        </tr>
                                        <!-- 新起一行 -->
                                        <tr>
                                            <td>
                                                <div class="checkbox checkbox-info checkbox-inline checkbox-single">
                                                    <input id="checkbox_b2" type="checkbox">
                                                    <label for="checkbox_b2"></label>
                                                </div>
                                            </td>
                                            <td ><a href="" class="text-blue">凑凑凑凑上八个字</a></td>
                                            <td>刘德华</td>
                                            <td>男</td>
                                            <td>25</td>
                                            <td>
                                                1992.9.25
                                            </td>
                                            <td>
                                                310584199209253154
                                            </td>
                                            <td>
                                                15631548051
                                            </td>
                                            <td>
                                                等待审核
                                            </td>
                                            <td>
                                                <a href="#myAwiat" data-toggle="modal" class="text-primary">查看</a>
                                            </td>
                                        </tr>
                                        <!-- 新起一行 -->
                                        <tr>
                                            <td>
                                                <div class="checkbox checkbox-info checkbox-inline checkbox-single">
                                                    <input id="checkbox_b3" type="checkbox">
                                                    <label for="checkbox_b3"></label>
                                                </div>
                                            </td>
                                            <td ><a href="" class="text-blue">凑凑凑凑上八个字</a></td>
                                            <td>刘德华</td>
                                            <td>男</td>
                                            <td>25</td>
                                            <td>
                                                1992.9.25
                                            </td>
                                            <td>
                                                310584199209253154
                                            </td>
                                            <td>
                                                15631548051
                                            </td>
                                            <td>
                                                等待审核
                                            </td>
                                            <td>
                                                <a href="#myAwiat" data-toggle="modal" class="text-primary">查看</a>
                                            </td>
                                        </tr>
                                        <!-- 新起一行 -->
                                        <tr>
                                            <td>
                                                <div class="checkbox checkbox-info checkbox-inline checkbox-single">
                                                    <input id="checkbox_b4" type="checkbox">
                                                    <label for="checkbox_b4"></label>
                                                </div>
                                            </td>
                                            <td ><a href="" class="text-blue">凑凑凑凑上八个字</a></td>
                                            <td>刘德华</td>
                                            <td>男</td>
                                            <td>25</td>
                                            <td>
                                                1992.9.25
                                            </td>
                                            <td>
                                                310584199209253154
                                            </td>
                                            <td>
                                                15631548051
                                            </td>
                                            <td>
                                                等待审核
                                            </td>
                                            <td>
                                                <a href="#myAwiat" data-toggle="modal" class="text-primary">查看</a>
                                            </td>
                                        </tr>
                                        <!-- 新起一行 -->
                                        <tr>
                                            <td>
                                                <!-- <input type="checkbox" name="" class="chk"> -->
                                                <div class="checkbox checkbox-info checkbox-inline checkbox-single">
                                                    <input id="checkbox_b5" type="checkbox">
                                                    <label for="checkbox_b5"></label>
                                                </div>
                                            </td>
                                            <td ><a href="" class="text-blue">凑凑凑凑上八个字</a></td>
                                            <td>刘德华</td>
                                            <td>男</td>
                                            <td>25</td>
                                            <td>
                                                1992.9.25
                                            </td>
                                            <td>
                                                310584199209253154
                                            </td>
                                            <td>
                                                15631548051
                                            </td>
                                            <td>
                                                等待审核
                                            </td>
                                            <td>
                                                <a href="#myAwiat" data-toggle="modal" class="text-primary">查看</a>
                                            </td>
                                        </tr>
                                        <!-- 新起一行 -->
                                        <tr>
                                            <td>
                                                <div class="checkbox checkbox-info checkbox-inline checkbox-single">
                                                    <input id="checkbox_b6" type="checkbox">
                                                    <label for="checkbox_b6"></label>
                                                </div>
                                            </td>
                                            <td ><a href="" class="text-blue">凑凑凑凑上八个字</a></td>
                                            <td>刘德华</td>
                                            <td>男</td>
                                            <td>25</td>
                                            <td>
                                                1992.9.25
                                            </td>
                                            <td>
                                                310584199209253154
                                            </td>
                                            <td>
                                                15631548051
                                            </td>
                                            <td>
                                                等待审核
                                            </td>
                                            <td>
                                                <a href="#myAwiat" data-toggle="modal" class="text-primary">查看</a>
                                            </td>
                                        </tr>
                                        <!-- 新起一行 -->
                                        <tr>
                                            <td>
                                                <div class="checkbox checkbox-info checkbox-inline checkbox-single">
                                                    <input id="checkbox_b7" type="checkbox">
                                                    <label for="checkbox_b7"></label>
                                                </div>
                                            </td>
                                            <td ><a href="" class="text-blue">凑凑凑凑上八个字</a></td>
                                            <td>刘德华</td>
                                            <td>男</td>
                                            <td>25</td>
                                            <td>
                                                1992.9.25
                                            </td>
                                            <td>
                                                310584199209253154
                                            </td>
                                            <td>
                                                15631548051
                                            </td>
                                            <td>
                                                等待审核
                                            </td>
                                            <td>
                                                <a href="#myAwiat" data-toggle="modal" class="text-primary">查看</a>
                                            </td>
                                        </tr>
                                        <!-- 新起一行 -->
                                        <tr>
                                            <td>
                                                <div class="checkbox checkbox-info checkbox-inline checkbox-single">
                                                    <input id="checkbox_b8" type="checkbox">
                                                    <label for="checkbox_b8"></label>
                                                </div>
                                            </td>
                                            <td ><a href="" class="text-blue">凑凑凑凑上八个字</a></td>
                                            <td>刘德华</td>
                                            <td>男</td>
                                            <td>25</td>
                                            <td>
                                                1992.9.25
                                            </td>
                                            <td>
                                                310584199209253154
                                            </td>
                                            <td>
                                                15631548051
                                            </td>
                                            <td>
                                                等待审核
                                            </td>
                                            <td>
                                                <a href="#myAwiat" data-toggle="modal" class="text-primary">查看</a>
                                            </td>
                                        </tr>
                                        <!-- 新起一行 -->

                                        </tbody>
                                    </table>
                                    <!-- 表格 -->
                                    <div class="pull-left bottom-btn-group">
                                        <div class="checkbox checkbox-info checkbox-inline">
                                            <input id="checkbox_awiat" name="full-select" type="checkbox">
                                            <label for="checkbox_awiat">全选</label>
                                        </div>
                                        <button type="button" class="btn">
                                            通过
                                        </button>
                                        <div class="btn-group">
                                            <button type="button" class="btn">
                                                拒绝
                                            </button>
                                            <div class="btn-group ">

                                                <select class="btn  dropdown-toogle enterprise-jujue">
                                                    <option selected="selected" value="0">请输入拒绝理由</option>
                                                    <option value="1">你长得太丑</option>
                                                    <option value="2">实力太差</option>
                                                    <option value="3">简历不完整</option>
                                                    <option value="4">sadasds</option>
                                                </select>
                                            </div>
                                        </div>

                                    </div>
                                    <!-- 分页 -->
                                    <ul class="pagination success pull-right">
                                        <li class="disabled">
                                            <a href="#fakelink">
                                                首页
                                            </a>
                                        </li>
                                        <li class="disabled">
                                            <a href="#fakelink">
                                                上一页
                                            </a>
                                        </li>
                                        <li class="active">
                                            <a href="#fakelink">
                                                1
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#fakelink">
                                                2
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#fakelink">
                                                3
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#fakelink">
                                                4
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#fakelink">
                                                下一页
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#fakelink">
                                                尾页
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="tab-pane fade" id="example-search-notpass">
                                    <!-- 表格 -->
                                    <table class="f-tab table-hover table-condensed table-striped table-bordered table dataTable" >
                                        <thead>
                                        <tr role="row">
                                            <th>&nbsp;</th>
                                            <th>昵称</th>
                                            <th>真实姓名</th>
                                            <th>性别</th>
                                            <th>年龄</th>
                                            <th>出生日期</th>
                                            <th>身份证号</th>
                                            <th>手机号</th>
                                            <th>认证状态</th>
                                            <th>管理</th>
                                        </tr>
                                        </thead>
                                        <tbody role="alert" aria-live="polite" aria-relevant="all">
                                        <!-- 新起一行 -->
                                        <tr>
                                            <td>
                                                <div class="checkbox checkbox-info checkbox-inline checkbox-single">
                                                    <input id="checkbox_c1" type="checkbox">
                                                    <label for="checkbox_c1"></label>
                                                </div>
                                            </td>
                                            <td ><a href="" class="text-blue">凑凑凑凑上八个字</a></td>
                                            <td>刘德华</td>
                                            <td>男</td>
                                            <td>25</td>
                                            <td>
                                                1992.9.25
                                            </td>
                                            <td>
                                                310584199209253154
                                            </td>
                                            <td>
                                                15631548051
                                            </td>
                                            <td>
                                                未通过
                                            </td>
                                            <td>
                                                <a href="#myNotpass" data-toggle="modal" class="text-primary">查看</a>
                                                <div class="modal fade" id="myNotpass">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header enterprise-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                                                    ×

                                                                </button>
                                                                <h4 class="modal-title">详细资料</h4>
                                                            </div>
                                                            <div class="modal-body">
                                                                <ul class="p-info">
                                                                    <li class="enterprise-li">
                                                                        <div class="left">昵称:</div>
                                                                        <div class="right">凑凑凑凑上八个字</div>
                                                                    </li>
                                                                    <li class="enterprise-li">
                                                                        <div class="left">真实姓名:</div>
                                                                        <div class="right">刘德华</div>
                                                                    </li>
                                                                    <li class="enterprise-li">
                                                                        <div class="left">性别:</div>
                                                                        <div class="right">男</div>
                                                                    </li>
                                                                    <li class="enterprise-li">
                                                                        <div class="left">身份证号:</div>
                                                                        <div class="right">310584199209253154</div>
                                                                    </li>
                                                                    <li class="enterprise-li">
                                                                        <div class="enterprise-logo-left">
                                                                            <div class="name-logo">证件照片:</div>
                                                                            <div class="enterprise-img">
                                                                                <a href="#"><img src="img/avatar1.jpg"></a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="enterprise-logo-right">
                                                                            <div class="enterprise-zhizhao"></div>
                                                                            <div class="enterprise-img">
                                                                                <a href="#"><img src="img/avatar1.jpg"></a>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </ul>

                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>
                                            </td>
                                        </tr>
                                        <!-- 新起一行 -->
                                        <tr>
                                            <td>
                                                <div class="checkbox checkbox-info checkbox-inline checkbox-single">
                                                    <input id="checkbox_c2" type="checkbox">
                                                    <label for="checkbox_c2"></label>
                                                </div>
                                            </td>
                                            <td ><a href="" class="text-blue">凑凑凑凑上八个字</a></td>
                                            <td>刘德华</td>
                                            <td>男</td>
                                            <td>25</td>
                                            <td>
                                                1992.9.25
                                            </td>
                                            <td>
                                                310584199209253154
                                            </td>
                                            <td>
                                                15631548051
                                            </td>
                                            <td>
                                                未通过
                                            </td>
                                            <td>
                                                <a href="#myNotpass" data-toggle="modal" class="text-primary">查看</a>
                                            </td>
                                        </tr>
                                        <!-- 新起一行 -->
                                        <tr>
                                            <td>
                                                <div class="checkbox checkbox-info checkbox-inline checkbox-single">
                                                    <input id="checkbox_c3" type="checkbox">
                                                    <label for="checkbox_c3"></label>
                                                </div>
                                            </td>
                                            <td ><a href="" class="text-blue">凑凑凑凑上八个字</a></td>
                                            <td>刘德华</td>
                                            <td>男</td>
                                            <td>25</td>
                                            <td>
                                                1992.9.25
                                            </td>
                                            <td>
                                                310584199209253154
                                            </td>
                                            <td>
                                                15631548051
                                            </td>
                                            <td>
                                                未通过
                                            </td>
                                            <td>
                                                <a href="#myNotpass" data-toggle="modal" class="text-primary">查看</a>
                                            </td>
                                        </tr>
                                        <!-- 新起一行 -->
                                        <tr>
                                            <td>
                                                <div class="checkbox checkbox-info checkbox-inline checkbox-single">
                                                    <input id="checkbox_c4" type="checkbox">
                                                    <label for="checkbox_c4"></label>
                                                </div>
                                            </td>
                                            <td ><a href="" class="text-blue">凑凑凑凑上八个字</a></td>
                                            <td>刘德华</td>
                                            <td>男</td>
                                            <td>25</td>
                                            <td>
                                                1992.9.25
                                            </td>
                                            <td>
                                                310584199209253154
                                            </td>
                                            <td>
                                                15631548051
                                            </td>
                                            <td>
                                                未通过
                                            </td>
                                            <td>
                                                <a href="#myNotpass" data-toggle="modal" class="text-primary">查看</a>
                                            </td>
                                        </tr>
                                        <!-- 新起一行 -->
                                        <tr>
                                            <td>
                                                <!-- <input type="checkbox" name="" class="chk"> -->
                                                <div class="checkbox checkbox-info checkbox-inline checkbox-single">
                                                    <input id="checkbox_c5" type="checkbox">
                                                    <label for="checkbox_c5"></label>
                                                </div>
                                            </td>
                                            <td ><a href="" class="text-blue">凑凑凑凑上八个字</a></td>
                                            <td>刘德华</td>
                                            <td>男</td>
                                            <td>25</td>
                                            <td>
                                                1992.9.25
                                            </td>
                                            <td>
                                                310584199209253154
                                            </td>
                                            <td>
                                                15631548051
                                            </td>
                                            <td>
                                                未通过
                                            </td>
                                            <td>
                                                <a href="#myNotpass" data-toggle="modal" class="text-primary">查看</a>
                                            </td>
                                        </tr>
                                        <!-- 新起一行 -->
                                        <tr>
                                            <td>
                                                <div class="checkbox checkbox-info checkbox-inline checkbox-single">
                                                    <input id="checkbox_c6" type="checkbox">
                                                    <label for="checkbox_c6"></label>
                                                </div>
                                            </td>
                                            <td ><a href="" class="text-blue">凑凑凑凑上八个字</a></td>
                                            <td>刘德华</td>
                                            <td>男</td>
                                            <td>25</td>
                                            <td>
                                                1992.9.25
                                            </td>
                                            <td>
                                                310584199209253154
                                            </td>
                                            <td>
                                                15631548051
                                            </td>
                                            <td>
                                                未通过
                                            </td>
                                            <td>
                                                <a href="#myNotpass" data-toggle="modal" class="text-primary">查看</a>
                                            </td>
                                        </tr>
                                        <!-- 新起一行 -->
                                        <tr>
                                            <td>
                                                <div class="checkbox checkbox-info checkbox-inline checkbox-single">
                                                    <input id="checkbox_c7" type="checkbox">
                                                    <label for="checkbox_c7"></label>
                                                </div>
                                            </td>
                                            <td ><a href="" class="text-blue">凑凑凑凑上八个字</a></td>
                                            <td>刘德华</td>
                                            <td>男</td>
                                            <td>25</td>
                                            <td>
                                                1992.9.25
                                            </td>
                                            <td>
                                                310584199209253154
                                            </td>
                                            <td>
                                                15631548051
                                            </td>
                                            <td>
                                                未通过
                                            </td>
                                            <td>
                                                <a href="#myNotpass" data-toggle="modal" class="text-primary">查看</a>
                                            </td>
                                        </tr>
                                        <!-- 新起一行 -->
                                        <tr>
                                            <td>
                                                <div class="checkbox checkbox-info checkbox-inline checkbox-single">
                                                    <input id="checkbox_c8" type="checkbox">
                                                    <label for="checkbox_c8"></label>
                                                </div>
                                            </td>
                                            <td ><a href="" class="text-blue">凑凑凑凑上八个字</a></td>
                                            <td>刘德华</td>
                                            <td>男</td>
                                            <td>25</td>
                                            <td>
                                                1992.9.25
                                            </td>
                                            <td>
                                                310584199209253154
                                            </td>
                                            <td>
                                                15631548051
                                            </td>
                                            <td>
                                                未通过
                                            </td>
                                            <td>
                                                <a href="#myNotpass" data-toggle="modal" class="text-primary">查看</a>
                                            </td>
                                        </tr>
                                        <!-- 新起一行 -->

                                        </tbody>
                                    </table>
                                    <!-- 表格 -->
                                    <div class="pull-left bottom-btn-group">
                                        <div class="checkbox checkbox-info checkbox-inline">
                                            <input id="checkbox_notpass" name="full-select" type="checkbox">
                                            <label for="checkbox_notpass">全选</label>
                                        </div>
                                        <button type="button" class="btn">
                                            通过
                                        </button>
                                        <div class="btn-group">
                                            <button type="button" class="btn">
                                                拒绝
                                            </button>
                                            <div class="btn-group ">

                                                <select class="btn  dropdown-toogle enterprise-jujue">
                                                    <option selected="selected" value="0">请输入拒绝理由</option>
                                                    <option value="1">你长得太丑</option>
                                                    <option value="2">实力太差</option>
                                                    <option value="3">简历不完整</option>
                                                    <option value="4">sadasds</option>
                                                </select>
                                            </div>
                                        </div>

                                    </div>
                                    <!-- 分页 -->
                                    <ul class="pagination success pull-right">
                                        <li class="disabled">
                                            <a href="#fakelink">
                                                首页
                                            </a>
                                        </li>
                                        <li class="disabled">
                                            <a href="#fakelink">
                                                上一页
                                            </a>
                                        </li>
                                        <li class="active">
                                            <a href="#fakelink">
                                                1
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#fakelink">
                                                2
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#fakelink">
                                                3
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#fakelink">
                                                4
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#fakelink">
                                                下一页
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#fakelink">
                                                尾页
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="tab-pane fade" id="example-search-pass">
                                    <!-- 表格 -->
                                    <table class="f-tab table-hover table-condensed table-striped table-bordered table dataTable" >
                                        <thead>
                                        <tr role="row">
                                            <th>&nbsp;</th>
                                            <th>昵称</th>
                                            <th>真实姓名</th>
                                            <th>性别</th>
                                            <th>年龄</th>
                                            <th>出生日期</th>
                                            <th>身份证号</th>
                                            <th>手机号</th>
                                            <th>认证状态</th>
                                            <th>管理</th>
                                        </tr>
                                        </thead>
                                        <tbody role="alert" aria-live="polite" aria-relevant="all">
                                        <!-- 新起一行 -->
                                        <tr>
                                            <td>
                                                <div class="checkbox checkbox-info checkbox-inline checkbox-single">
                                                    <input id="checkbox_d1" type="checkbox">
                                                    <label for="checkbox_d1"></label>
                                                </div>
                                            </td>
                                            <td ><a href="" class="text-blue">凑凑凑凑上八个字</a></td>
                                            <td>刘德华</td>
                                            <td>男</td>
                                            <td>25</td>
                                            <td>
                                                1992.9.25
                                            </td>
                                            <td>
                                                310584199209253154
                                            </td>
                                            <td>
                                                15631548051
                                            </td>
                                            <td>
                                                通过
                                            </td>
                                            <td>
                                                <a href="#myPass" data-toggle="modal" class="text-primary">查看</a>
                                                <div class="modal fade" id="myPass">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header enterprise-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                                                    ×

                                                                </button>
                                                                <h4 class="modal-title">详细资料</h4>
                                                            </div>
                                                            <div class="modal-body">
                                                                <ul class="p-info">
                                                                    <li class="enterprise-li">
                                                                        <div class="left">昵称:</div>
                                                                        <div class="right">凑凑凑凑上八个字</div>
                                                                    </li>
                                                                    <li class="enterprise-li">
                                                                        <div class="left">真实姓名:</div>
                                                                        <div class="right">刘德华</div>
                                                                    </li>
                                                                    <li class="enterprise-li">
                                                                        <div class="left">性别:</div>
                                                                        <div class="right">男</div>
                                                                    </li>
                                                                    <li class="enterprise-li">
                                                                        <div class="left">身份证号:</div>
                                                                        <div class="right">310584199209253154</div>
                                                                    </li>
                                                                    <li class="enterprise-li">
                                                                        <div class="enterprise-logo-left">
                                                                            <div class="name-logo">证件照片:</div>
                                                                            <div class="enterprise-img">
                                                                                <a href="#"><img src="img/avatar1.jpg"></a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="enterprise-logo-right">
                                                                            <div class="enterprise-zhizhao"></div>
                                                                            <div class="enterprise-img">
                                                                                <a href="#"><img src="img/avatar1.jpg"></a>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </ul>

                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>
                                            </td>
                                        </tr>
                                        <!-- 新起一行 -->
                                        <tr>
                                            <td>
                                                <div class="checkbox checkbox-info checkbox-inline checkbox-single">
                                                    <input id="checkbox_d2" type="checkbox">
                                                    <label for="checkbox_d2"></label>
                                                </div>
                                            </td>
                                            <td ><a href="" class="text-blue">凑凑凑凑上八个字</a></td>
                                            <td>刘德华</td>
                                            <td>男</td>
                                            <td>25</td>
                                            <td>
                                                1992.9.25
                                            </td>
                                            <td>
                                                310584199209253154
                                            </td>
                                            <td>
                                                15631548051
                                            </td>
                                            <td>
                                                通过
                                            </td>
                                            <td>
                                                <a href="#myPass" data-toggle="modal" class="text-primary">查看</a>
                                            </td>
                                        </tr>
                                        <!-- 新起一行 -->
                                        <tr>
                                            <td>
                                                <div class="checkbox checkbox-info checkbox-inline checkbox-single">
                                                    <input id="checkbox_d3" type="checkbox">
                                                    <label for="checkbox_d3"></label>
                                                </div>
                                            </td>
                                            <td ><a href="" class="text-blue">凑凑凑凑上八个字</a></td>
                                            <td>刘德华</td>
                                            <td>男</td>
                                            <td>25</td>
                                            <td>
                                                1992.9.25
                                            </td>
                                            <td>
                                                310584199209253154
                                            </td>
                                            <td>
                                                15631548051
                                            </td>
                                            <td>
                                                通过
                                            </td>
                                            <td>
                                                <a href="#myPass" data-toggle="modal" class="text-primary">查看</a>
                                            </td>
                                        </tr>
                                        <!-- 新起一行 -->
                                        <tr>
                                            <td>
                                                <div class="checkbox checkbox-info checkbox-inline checkbox-single">
                                                    <input id="checkbox_d4" type="checkbox">
                                                    <label for="checkbox_d4"></label>
                                                </div>
                                            </td>
                                            <td ><a href="" class="text-blue">凑凑凑凑上八个字</a></td>
                                            <td>刘德华</td>
                                            <td>男</td>
                                            <td>25</td>
                                            <td>
                                                1992.9.25
                                            </td>
                                            <td>
                                                310584199209253154
                                            </td>
                                            <td>
                                                15631548051
                                            </td>
                                            <td>
                                                通过
                                            </td>
                                            <td>
                                                <a href="#myPass" data-toggle="modal" class="text-primary">查看</a>
                                            </td>
                                        </tr>
                                        <!-- 新起一行 -->
                                        <tr>
                                            <td>
                                                <!-- <input type="checkbox" name="" class="chk"> -->
                                                <div class="checkbox checkbox-info checkbox-inline checkbox-single">
                                                    <input id="checkbox_d5" type="checkbox">
                                                    <label for="checkbox_d5"></label>
                                                </div>
                                            </td>
                                            <td ><a href="" class="text-blue">凑凑凑凑上八个字</a></td>
                                            <td>刘德华</td>
                                            <td>男</td>
                                            <td>25</td>
                                            <td>
                                                1992.9.25
                                            </td>
                                            <td>
                                                310584199209253154
                                            </td>
                                            <td>
                                                15631548051
                                            </td>
                                            <td>
                                                通过
                                            </td>
                                            <td>
                                                <a href="#myPass" data-toggle="modal" class="text-primary">查看</a>
                                            </td>
                                        </tr>
                                        <!-- 新起一行 -->
                                        <tr>
                                            <td>
                                                <div class="checkbox checkbox-info checkbox-inline checkbox-single">
                                                    <input id="checkbox_d6" type="checkbox">
                                                    <label for="checkbox_d6"></label>
                                                </div>
                                            </td>
                                            <td ><a href="" class="text-blue">凑凑凑凑上八个字</a></td>
                                            <td>刘德华</td>
                                            <td>男</td>
                                            <td>25</td>
                                            <td>
                                                1992.9.25
                                            </td>
                                            <td>
                                                310584199209253154
                                            </td>
                                            <td>
                                                15631548051
                                            </td>
                                            <td>
                                                通过
                                            </td>
                                            <td>
                                                <a href="#myPass" data-toggle="modal" class="text-primary">查看</a>
                                            </td>
                                        </tr>
                                        <!-- 新起一行 -->
                                        <tr>
                                            <td>
                                                <div class="checkbox checkbox-info checkbox-inline checkbox-single">
                                                    <input id="checkbox_d7" type="checkbox">
                                                    <label for="checkbox_d7"></label>
                                                </div>
                                            </td>
                                            <td ><a href="" class="text-blue">凑凑凑凑上八个字</a></td>
                                            <td>刘德华</td>
                                            <td>男</td>
                                            <td>25</td>
                                            <td>
                                                1992.9.25
                                            </td>
                                            <td>
                                                310584199209253154
                                            </td>
                                            <td>
                                                15631548051
                                            </td>
                                            <td>
                                                通过
                                            </td>
                                            <td>
                                                <a href="#myPass" data-toggle="modal" class="text-primary">查看</a>
                                            </td>
                                        </tr>
                                        <!-- 新起一行 -->
                                        <tr>
                                            <td>
                                                <div class="checkbox checkbox-info checkbox-inline checkbox-single">
                                                    <input id="checkbox_d8" type="checkbox">
                                                    <label for="checkbox_d8"></label>
                                                </div>
                                            </td>
                                            <td ><a href="" class="text-blue">凑凑凑凑上八个字</a></td>
                                            <td>刘德华</td>
                                            <td>男</td>
                                            <td>25</td>
                                            <td>
                                                1992.9.25
                                            </td>
                                            <td>
                                                310584199209253154
                                            </td>
                                            <td>
                                                15631548051
                                            </td>
                                            <td>
                                                通过
                                            </td>
                                            <td>
                                                <a href="#myPass" data-toggle="modal" class="text-primary">查看</a>
                                            </td>
                                        </tr>
                                        <!-- 新起一行 -->

                                        </tbody>
                                    </table>
                                    <!-- 表格 -->
                                    <div class="pull-left bottom-btn-group">
                                        <div class="checkbox checkbox-info checkbox-inline">
                                            <input id="checkbox_pass" name="full-select" type="checkbox">
                                            <label for="checkbox_pass">全选</label>
                                        </div>
                                        <button type="button" class="btn">
                                            通过
                                        </button>
                                        <div class="btn-group">
                                            <button type="button" class="btn">
                                                拒绝
                                            </button>
                                            <div class="btn-group ">

                                                <select class="btn  dropdown-toogle enterprise-jujue">
                                                    <option selected="selected" value="0">请输入拒绝理由</option>
                                                    <option value="1">你长得太丑</option>
                                                    <option value="2">实力太差</option>
                                                    <option value="3">简历不完整</option>
                                                    <option value="4">sadasds</option>
                                                </select>
                                            </div>
                                        </div>

                                    </div>
                                    <!-- 分页 -->
                                    <ul class="pagination success pull-right">
                                        <li class="disabled">
                                            <a href="#fakelink">
                                                首页
                                            </a>
                                        </li>
                                        <li class="disabled">
                                            <a href="#fakelink">
                                                上一页
                                            </a>
                                        </li>
                                        <li class="active">
                                            <a href="#fakelink">
                                                1
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#fakelink">
                                                2
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#fakelink">
                                                3
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#fakelink">
                                                4
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#fakelink">
                                                下一页
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#fakelink">
                                                尾页
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- /.tab-content -->
                        </div>
                        <!-- /.container-fluid -->
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.collapse in -->
            </div>
            <!-- /.panel -->

        </section>
        <!-- END WRAPPER  -->
    </section>
</section>
</body>
</html>

<script src="/Public/Admin/js/jquery-1.8.3.min.js" ></script><!-- BASIC JQUERY 1.8.3 LIB. JS -->
<script src="/Public/Admin/js/zp/zp.js"></script>
<script src="/Public/Admin/js/bootstrap.min.js" ></script><!-- BOOTSTRAP JS -->
<script src="/Public/Admin/js/jquery.dcjqaccordion.2.7.js"></script><!-- ACCORDIN JS -->
<script src="/Public/Admin/js/jquery.scrollTo.min.js" ></script><!-- SCROLLTO JS -->
<script src="/Public/Admin/js/jquery.nicescroll.js" ></script><!-- NICESCROLL JS -->
<script src="/Public/Admin/js/respond.min.js" ></script><!-- RESPOND JS -->
<script src="/Public/Admin/js/common-scripts.js" ></script><!-- BASIC COMMON JS  -->
<script src="/Public/Admin/assets/fuelux/js/spinner.min.js"></script><!-- FUELUX JS  -->
<script src="/Public/Admin/assets/bootstrap-fileupload/bootstrap-fileupload.js"></script><!-- BOOTSTRAP FILEUPLOAD JS  -->
<!--Morris-->
<script src="/Public/Admin/js/jquery.sparkline.js"></script><!-- SPARKLINE JS -->
<script src="/Public/Admin/js/sparkline-chart.js"></script><!-- SPARKLINE CHART JS -->
<script src="/Public/Admin/js/count.js"></script><!-- COUNT JS -->

<script src="/Public/Admin/assets/morris.js-0.4.3/morris.min.js" ></script><!-- MORRIS JS -->
<script src="/Public/Admin/assets/morris.js-0.4.3/raphael-min.js" ></script><!-- MORRIS  JS -->
<script src="/Public/Admin/js/calendar/clndr.js"></script><!-- CALENDER JS -->
<script src="/Public/Admin/js/calendar/moment-2.2.1.js"></script><!-- CALENDER MOMENT JS -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.5.2/underscore-min.js"></script><!-- UNDERSCORE JS -->
<script src="/Public/Admin/assets/jquery-knob/js/jquery.knob.js" ></script><!-- JQUERY KNOB JS -->

<script src="/Public/Admin/assets/bootstrap-wysihtml5/wysihtml5-0.3.0.js"></script><!-- BOOTSTRAP wysihtml5 JS  -->
<script src="/Public/Admin/assets/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script><!-- BOOTSTRAP wysihtml5 JS  -->
<script src="/Public/Admin/assets/bootstrap-datepicker/js/bootstrap-datepicker.js"></script><!-- BOOTSTRAP DATEPICKER JS  -->
<script src="/Public/Admin/assets/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"></script><!-- BOOTSTRAP DATETIMEPICKER JS  -->
<script src="/Public/Admin/assets/bootstrap-daterangepicker/moment.min.js"></script>
<script src="/Public/Admin/assets/bootstrap-daterangepicker/daterangepicker.js"></script><!-- BOOTSTRAP DATERANGEPICKER JS  -->
<!--<script src="/Public/Admin/assets/bootstrap-colorpicker/js/daterangepicker.js"> </script><!-- BOOTSTRAP COLORPICKER JS  -->-->
<script src="/Public/Admin/assets/bootstrap-timepicker/js/bootstrap-timepicker.js"></script><!-- BOOTSTRAP TIMEPICKER JS  -->
<!--<script src="/Public/Admin/assets/jquery-multi-select/js/bootstrap-timepicker.js"></script><!-- BOOTSTRAP MULTISELECT JS  -->-->
<script src="/Public/Admin/assets/jquery-multi-select/js/jquery.multi-select.js"></script>
<script src="/Public/Admin/assets/jquery-multi-select/js/jquery.quicksearch.js"></script>
<script src="/Public/Admin/js/zp/btn-radio.js"></script>
<script src="/Public/Admin/assets/ckeditor/ckeditor.js"></script><!-- CKEDITOR JS  -->
<script src="/Public/Admin/js/advanced-form-components.js" ></script><!-- ADVANCE FORM COMPONENTS PAGE JS  -->


<script >
    //knob
    $(".knob").knob();
</script>
<!-- END JS -->
</body>
</html>