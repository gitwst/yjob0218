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
			<section class="wrapper">
				<section class="panel panel-first">
					<div class="">
						<div class="panel with-nav-tabs panel-info panel-square panel-no-border">
							<div class="panel-body body-waiwei">
								<ul>
									<li class="first-font">
										职位列表
									</li>
									<div class="opinion-hr">
										<hr />
									</div>
									<li>
										<div class="panel-body body-waiwei">
											<ul>
												<li>
													<div class="content-nature">
														<div class="job-zd">
															<span>选择分站:</span>
														</div>
														<div data-toggle="buttons" class="btn-group job-jzz">
															<label class="btn active btn-default checkbox-label" for="checkbox-bx">
                                                            <input type="checkbox" name="classify" value="不限" id="checkbox-bx">不限
                                                        </label>
															<label class="btn btn-default label-a1">
                                                            <input type="checkbox" name="classify" value="上海" class="checkbox-a1">上海
                                                        </label>
															<label class="btn btn-default label-a1">
                                                            <input type="checkbox" name="classify" value="深圳" class="checkbox-a1">深圳
                                                        </label>
															<label class="btn btn-default label-a1">
                                                            <input type="checkbox" name="classify" value="广州" class="checkbox-a1">广州
                                                        </label>
															<label class="btn btn-default label-a1">
                                                            <input type="checkbox" name="classify" value="福建" class="checkbox-a1">福建
                                                        </label>
															<label class="btn btn-default label-a1">
                                                            <input type="checkbox" name="classify" value="香港" class="checkbox-a1">香港
                                                        </label>
															<label class="btn btn-default label-a1">
                                                            <input type="checkbox" name="classify" value="太原" class="checkbox-a1">太原
                                                        </label>
															<label class="btn btn-default label-a1">
                                                            <input type="checkbox" name="classify" value="西安" class="checkbox-a1">西安
                                                        </label>
															<label class="btn btn-default label-a1">
                                                            <input type="checkbox" name="classify" value="厦门" class="checkbox-a1">厦门
                                                        </label>
															<label class="btn btn-default label-a1">
                                                            <input type="checkbox" name="classify" value="广东" class="checkbox-a1">广东
                                                        </label>
															<label class="btn btn-default label-a1">
                                                            <input type="checkbox" name="classify" value="大同" class="checkbox-a1">大同
                                                        </label>
															<label class="btn btn-default label-a1">
                                                            <input type="checkbox" name="classify" value="运城" class="checkbox-a1">运城
                                                        </label>
															<label class="btn btn-default label-a1">
                                                            <input type="checkbox" name="classify" value="重庆" class="checkbox-a1">重庆
                                                        </label>
															<label class="btn btn-default label-a1">
                                                            <input type="checkbox" name="classify" value="温州" class="checkbox-a1">温州
                                                        </label>
															<label class="btn btn-default label-a1">
                                                            <input type="checkbox" name="classify" value="青岛" class="checkbox-a1">青岛
                                                        </label>
															<label class="btn btn-default label-a1">
                                                            <input type="checkbox" name="classify" value="福州" class="checkbox-a1">福州
                                                        </label>
															<label class="btn btn-default label-a1">
                                                            <input type="checkbox" name="classify" value="郑州" class="checkbox-a1">郑州
                                                        </label>
															<label class="btn btn-default label-a1">
                                                            <input type="checkbox" name="classify" value="郑州" class="checkbox-a1">郑州
                                                        </label>
															<label class="btn btn-default label-a1">
                                                            <input type="checkbox" name="classify" value="郑州" class="checkbox-a1">郑州
                                                        </label>
															<label class="btn btn-default label-a1">
                                                            <input type="checkbox" name="classify" value="郑州" class="checkbox-a1">郑州
                                                        </label>
														</div>
													</div>
												</li>
												<hr class="opinion-hr" />
												<li>
													<span class="pull-left job-span">有效状态:</span>
													<div data-toggle="buttons" class="btn-group content-jz">
														<label class="btn active btn-default">
                                                        <input type="radio" name="classify" value="不限" >不限
                                                    </label>
														<label class="btn btn-default">
                                                        <input type="radio" name="classify" value="有效职位">有效职位<span>(30)</span>
                                                    </label>
														<label class="btn btn-default">
                                                        <input type="radio" name="classify" value="无效职位">无效职位<span>(71)</span>
                                                    </label>

													</div>
												</li>
												<hr class="opinion-hr" />
												<li>
													<span class="pull-left job-span">审核状态:</span>
													<div data-toggle="buttons" class="btn-group content-jz">
														<label class="btn active btn-default">
                                                        <input type="radio" name="classify" value="不限" >不限
                                                    </label>
														<label class="btn btn-default">
                                                        <input type="radio" name="classify" value="审核通过">审核通过<span>(71)</span>
                                                    </label>
														<label class="btn btn-default">
                                                        <input type="radio" name="classify" value="等待审核">等待审核<span>(3)</span>
                                                    </label>
														<label class="btn btn-default">
                                                        <input type="radio" name="classify" value="审核未通过">审核未通过<span>(0)</span>
                                                    </label>

													</div>
												</li>

											</ul>
										</div>

									</li>
								</ul>

								<table class="f-tab table-hover table-condensed table-striped table-bordered table dataTable">

									<thead>
										<tr role="row">
											<th>&nbsp;</th>
											<th>职位名称</th>
											<th>发布公司</th>
											<th>审核状态</th>
											<th>添加时间</th>
											<th>到期时间</th>
											<th>刷新时间</th>
											<th>点击量</th>
											<th>收到简历</th>
											<th>修改</th>
										</tr>

									</thead>

								<form action="" method="post">

									<tbody role="alert" aria-live="polite" aria-relevant="all">
										
							<!--循环开始-->
							<!--<?php if(is_array($jobList)): foreach($jobList as $key=>$v): ?>-->
								<?php if(is_array($jobList["data"]["list"])): $i = 0; $__LIST__ = $jobList["data"]["list"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr>
                                    <td>
                                        <div class="checkbox checkbox-info checkbox-inline checkbox-single">
                                            <input id="checkbox_a8" type="checkbox">
                                            <label for="checkbox_a8"></label>
                                        </div>
                                    </td>
                                    <td ><a href="#" class="text-blue"><?php echo ($v['job_name']); ?></a></td>
                                    <td><?php echo ($v['company_name']); ?></td>
                                    <td><?php echo ($v['status']); ?></td>
                                    <td><?php echo (date('Y-m-d',$v['create_time'])); ?></td>
                                    <td><?php echo (date( 'Y-m-d',$v['update_time'])); ?></td>
                                    <td><?php echo (date( 'Y-m-d',$v['refurbish_time'])); ?></td>
                                    <td>66次</td>
                                    <td>240份</td>
                                    <td>
                                        <a href="<?php echo U('position/job_update');?>" class="text-primary">编辑</a>
                                        <a href="<?php echo U('del_job_listings',array('id' => $v['id']));?>" class="text-primary">删除</a>
                                        <a href="" class="text-primary">暂停</a>
                                    </td>
                                </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                            <!--<?php endforeach; endif; ?>-->
                            <!--循环结束-->
                                <!--第二条-->
                                <!--<tr>
                                    <td>
                                        <div class="checkbox checkbox-info checkbox-inline checkbox-single">
                                            <input id="checkbox_a8" type="checkbox">
                                            <label for="checkbox_a8"></label>
                                        </div>
                                    </td>
                                    <td ><a href="#" class="text-blue">餐饮服务员</a></td>
                                    <td>云兼职</td>
                                    <td>已通过</td>
                                    <td>2017-01-07</td>
                                    <td>2017-02-07</td>
                                    <td>2017-01-11</td>
                                    <td>66次</td>
                                    <td>240份</td>
                                    <td>
                                        <a href="" class="text-primary">编辑</a>
                                        <a href="" class="text-primary">删除</a>
                                        <a href="" class="text-primary">暂停</a>
                                    </td>
                                </tr>-->
                                </tbody>
                                </form>
								</table>
								
								
								
								<div class="pull-left bottom-btn-group">
									<div class="checkbox checkbox-info checkbox-inline">
										<input id="checkbox_qx" name="full-select" type="checkbox">
										<label for="checkbox_qx">全选</label>
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
								<ul class="pagination success pull-right" name="data">
									<?php echo ($page); ?>
								</ul>
							
							</div>
							</li>
							</ul>
						</div>
					</div>
					</div>
				</section>
			</section>
		</section>
	</section>

	
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