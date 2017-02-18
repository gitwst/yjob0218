<?php if (!defined('THINK_PATH')) exit();?>﻿
<!DOCTYPE html>
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
<section id="container">
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

      <section id="main-content">
	  <!-- BEGIN WRAPPER  -->
        <section class="wrapper">
		  <!-- BEGIN ROW  -->
          <div class="row state-overview">
            <div class="col-lg-3 col-sm-6">
              <section class="panel">
                <div class="symbol">
                  <i class="fa fa-tags blue">
                  </i>
                </div>
                <div class="value">
                  <h1 class="count">
                    0
                  </h1>
                  <p>
                    总流水
                  </p>
                </div>
              </section>
            </div>
            <div class="col-lg-3 col-sm-6">
              <section class="panel">
                <div class="symbol">
                  <i class="fa fa-money red">
                  </i>
                </div>
                <div class="value">
                  <h1 class=" count2">
                    0
                  </h1>
                  <p>
                    企业数
                  </p>
                </div>
              </section>
            </div>
            <div class="col-lg-3 col-sm-6">
              <section class="panel">
                <div class="symbol">
                  <i class="fa fa-user yellow">
                  </i>
                </div>
                <div class="value">
                  <h1 class=" count3">
                    0
                  </h1>
                  <p>
                    会员数
                  </p>
                </div>
              </section>
            </div>
            <div class="col-lg-3 col-sm-6">
              <section class="panel">
                <div class="symbol">
                  <i class="fa fa-shopping-cart purple">
                  </i>
                </div>
                <div class="value">
                  <h1 class=" count4">
                    0
                  </h1>
                  <p>
                  职位数
                  </p>
                </div>
              </section>
            </div>
          </div>
		   <!-- END ROW  -->
          <div id="morris">
		     <!-- BEGIN ROW  -->
            <div class="row">
              <div class="col-lg-4">
                <div class="panel terques-chart">
                  <div class="panel-body chart-texture">
                    <div class="chart">
                      <div class="heading">
                        <span>
                          Near 10 Days
                        </span>
                        <strong>
                         Mount:1100
                        </strong>
                      </div>
                      <div class="sparkline" data-type="line" data-resize="true" data-height="75" data-width="90%" data-line-width="1" data-line-color="#fff" data-spot-color="#fff" data-fill-color="" data-highlight-line-color="#fff" data-spot-radius="4" data-data="[564,123,890,564,455,200,135,667,333,526,996]">
                      </div>
                    </div>
                  </div>
                  <div class="chart-tittle">
                    <span class="title">
                      会员趋势
                    </span>
                    <span class="value">
                      <a href="#" class="active">
                      
                      </a>
                     
                      <a href="#">
                       
                      </a>
                      
                      <a href="#">
                        
                      </a>
                    </span>
                  </div>
                </div>
                <div class="panel green-chart">
                  <div class="panel-body">
                    <div class="chart">
                      <div class="heading">
                        <span>
                          11月
                        </span>
                        <strong>
                          23 Days | +65%
                        </strong>
                      </div>
                      <div id="designchart">
                      </div>
                    </div>
                  </div>
                  <div class="chart-tittle">
                    <span class="title">
                      流水
                    </span>
                    <span class="value">
                      ¥ 50,23,561
                    </span>
                  </div>
                </div>
              </div>
              <div class="col-lg-2">
                <div class="tiles facebook-tile text-center">
                  <i class="fa fa-facebook icon-lg-size">
                  </i>
                  <h4>
                    <a href="#fakelink">
                      10K likes
                    </a>
                  </h4>
                </div>
                <!-- /.tiles .facebook-tile -->
                <div class="tiles twitter-tile text-center">
                  <i class="fa fa-twitter icon-lg-size">
                  </i>
                  <h4>
                    <a href="#fakelink">
                      2K followers
                    </a>
                  </h4>
                </div>
                <!-- /.tiles .twitter-tile -->
              </div>
              <div class="col-lg-6">
                <section class="panel">
                  <header class="panel-heading">
                    Profit(USD)
                  </header>
                  <div class="panel-body">
                    <div id="hero-area" class="graph">
                    </div>
                  </div>
                </section>
              </div>
            </div>
			 <!-- END ROW  -->
          </div>
		   <!-- BEGIN ROW  -->
          <div class="row">
            <div class="col-lg-8">
              <section class="panel">
                <div class="panel-body">
                  <a href="#" class="task-thumb">
                    <img src="/Public/admin/img/avatar1.jpg" alt="">
                  </a>
                  <div class="task-thumb-details">
                    <h1>
                      <a href="#">
                       流水榜
                      </a>
                    </h1>
                    <p>
                     激活地带
                    </p>
                  </div>
                </div>
                <table class="table table-hover personal-task">
                  <tbody>
                    <tr>
                      <td>
                        1
                      </td>
                      <td>
                       激活地带
                      </td>
                      <td>
                        <span class="badge bg-important">
                          1000.00
                        </span>
                      </td>
                      <td>
                        <div id="work-progress1">
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        2
                      </td>
                      <td>
                       激活地带
                      </td>
                      <td>
                        <span class="badge bg-success">
                          43%
                        </span>
                      </td>
                      <td>
                        <div id="work-progress2">
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        3
                      </td>
                      <td>
                       激活地带
                      </td>
                      <td>
                        <span class="badge bg-info">
                          67%
                        </span>
                      </td>
                      <td>
                        <div id="work-progress3">
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        4
                      </td>
                      <td>
                      激活地带
					  
					  
                      </td>
                      <td>
                        <span class="badge bg-warning">
                          30%
                        </span>
                      </td>
                      <td>
                        <div id="work-progress4">
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        5
                      </td>
                      <td>
                       激活地带
                      </td>
                      <td>
                        <span class="badge bg-primary">
                          15%
                        </span>
                      </td>
                      <td>
                        <div id="work-progress5">
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </section>
            </div>
            <div class="col-lg-4">
              <section class="panel post-wrap pro-box">
                <aside>
                  <div class="post-info">
                    <div class="panel-body">
                      <footer class="social-footer">
                        <ul>
                          <li class="active">
                            <a href="#">
                              <i class="fa fa-twitter">
                              </i>
                            </a>
                          </li>
                        </ul>
                      </footer>
                      <!-- END  FOOTER -->
                      <div class="text-center twite">
                        <h1>
                          We just Launch a New Theme Check it Out at
                          <a href="javascript:;">
                            http://olivethemes.in/
                          </a>
                        </h1>
                        <p >
                          4 Days ago
                        </p>
                      </div>
                    </div>
                  </div>
                </aside>
              </section>
            </div>
          </div>
		   <!-- END ROW  -->
		    <!-- BEGIN ROW  -->
          <!--<div class="row">
            <div class="col-lg-6">
              <div class="panel">
                <div class="panel-body">
                  <div class="media usr-info">
                    <a href="#" class="pull-left">
                      <img class="thumb" src="img/avatar1.jpg" alt="">
                    </a>
                    <div class="media-body">
                      <h4 class="media-heading">
                        Pruthvi Bardolia
                      </h4>
                      <span>
                        Chief-Sarathi
                      </span>
                      <p>
                        I handcraft beautiful websites and application for all kind of devices
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <section class="panel">
                <div class="weather-bg">
                  <div class="panel-body">
                    <div class="row">
                      <div class="col-xs-6">
                        <i class="fa fa-cloud">
                        </i>
                        New Delhi
                      </div>
                      <div class="col-xs-6">
                        <div class="degree">
                          48°
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <footer class="weather-category">
                  <ul>
                    <li class="active">
                      <h5>
                        humidity
                      </h5>
                      45%
                    </li>
                    <li>
                      <h5>
                        winds
                      </h5>
                      5 mph
                    </li>
                  </ul>
                </footer>
                <!-- END  FOOTER -->
              <!--</section>
            </div>
            <div class="col-lg-6">
              <div class="panel">
                <div class="panel-body">
                  <div class="calendar-block ">
                    <div class="cal1">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>-->
		   <!-- END ROW  -->
		    <!-- BEGIN ROW  -->
          <!--<div class="row">
            <div class="col-lg-6">
              <div class="panel">
                <div class="panel-body">
                  <footer class="project-category">
                    <ul>
                      <li class="active">
                        <h5>
                          Project 1
                        </h5>
                        <div id="work-progress6">
                        </div>
                      </li>
                      <li>
                        <h5>
                          Project 2
                        </h5>
                        <div id="work-progress7">
                        </div>
                      </li>
                      <li>
                        <h5>
                          Project 3
                        </h5>
                        <div id="work-progress8">
                        </div>
                      </li>
                    </ul>
                    <h1>
                      Projects accomplished
                    </h1>
                  </footer>
                  <!-- END  FOOTER -->
                <!--</div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="panel">
                <div class="panel-body">
                  <div class="bio-chart">
                    <input class="knob" data-width="100" data-height="100" data-displayPrevious=true data-thickness=".2" value="78" data-fgColor="#f9a3a3" data-bgColor="#e8e8e8">
                    <h4 class="red">
                      Profit
                    </h4>
                  </div>
                  <div class="bio-chart">
                    <input class="knob" data-width="100" data-height="100" data-displayPrevious=true data-thickness=".2" value="63" data-fgColor="#fcce54" data-bgColor="#e8e8e8">
                    <h4 class="yellow">
                      Expansion 
                    </h4>
                  </div>
                </div>
              </div>
            </div>
          </div>-->
		   <!-- END ROW  -->
        </section>
		<!-- END WRAPPER  -->
      </section>
      <!-- END MAIN CONTENT -->
      <!-- BEGIN FOOTER -->
      <footer class="site-footer">
        <div class="text-center">
          2013 &copy; Olive Admin by 
          <a href="" target="_blank">
            Olive Enterprise
          </a>
          <a href="http://www.mycodes.net" class="go-top">
            <i class="fa fa-angle-up">
            </i>
          </a>
        </div>
      </footer>
      <!-- END  FOOTER -->
    </section>
    
    <!-- END JS -->

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