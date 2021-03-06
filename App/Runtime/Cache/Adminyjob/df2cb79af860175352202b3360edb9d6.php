<?php if (!defined('THINK_PATH')) exit();?>
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
<!-- 开始-->
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
    <!---正文-->
    <section id="main-content">
        <section class="wrapper">
            <section class="panel panel-first">
                <div class="">
                    <div class="panel with-nav-tabs panel-info panel-square panel-no-border">
                        <div class="panel-body body-waiwei">
                            <ul>
                                <li class="lifirst">
                                    红包配置
                                </li>
                               
                                <div class="first-hr">
                                    <hr />
                                </div>
                                 <li class="wx-name">
                                    红包名称
                                </li>
                                <div class="wx-line"></div>
                                <!--<div class="first-hr">
                         
                                </div>-->
                                <form method="post" action="" class="form-horizontal">
                                	
                                	
                                    <li class="personal-li" >
                                        <div class="personal-settings">
                                            <div class="hongbao-left">
                                                <span class="s1">奖项</span>
                                            </div>
                                            <div class="personal-content">
                                                <span style="float:left;margin-left:30px;">奖项名称</span>
                                                <input type="text" name="" class="form-control sms-input" style="float:left;margin-left:10px;">
                                            </div>
                                            <div class="personal-content">
                                                <span style="float:left;margin-left:30px;">金额</span>
                                                <input type="text" name=""  class="form-control sms-input oneMoney" style="float:left;margin-left:10px;">
                                                <span style="float:left">&nbsp;-&nbsp;</span>
                                                <input type="text" name=""  class="form-control sms-input twoMoney" style="float:left;">
                                            </div>
                                            <div class="personal-content">
                                                <span style="float:left;margin-left:30px;">数量</span>
                                                <input type="text" name=""  class="form-control sms-input num" style="float:left;margin-left:10px;">
                                            </div>
                                        </div>
                                    </li>
                                    
                                    
                                    
                                    <li class="personal-li"id="li" >
                                        <div class="personal-settings">
                                            <div class="hongbao-left">
                                                <span class="s1">奖项</span>
                                            </div>
                                            <div class="personal-content">
                                                <span style="float:left;margin-left:30px;">奖项名称</span>
                                                <input type="text" name="" class="form-control sms-input" style="float:left;margin-left:10px;">
                                            </div>
                                            <div class="personal-content">
                                                <span style="float:left;margin-left:30px;">金额</span>
                                                <input type="text" name="" class="form-control sms-input oneMoney" style="float:left;margin-left:10px;">
                                                <span style="float:left">&nbsp;-&nbsp;</span>
                                                <input type="text" name="" class="form-control sms-input twoMoney" style="float:left;">
                                            </div>
                                            <div class="personal-content">
                                                <span style="float:left;margin-left:30px;">数量</span>
                                                <input type="text" name="" class="form-control sms-input num" style="float:left;margin-left:10px;">
                                            </div>
                                        </div>
                                    </li >
                                    
                                    
                                    <li class="personal-li"id="li" >
                                        <div class="personal-settings">
                                            <div class="hongbao-left">
                                                <span class="s1">奖项</span>
                                            </div>
                                            <div class="personal-content">
                                                <span style="float:left;margin-left:30px;">奖项名称</span>
                                                <input type="text" name="" class="form-control sms-input" style="float:left;margin-left:10px;">
                                            </div>
                                            <div class="personal-content">
                                                <span style="float:left;margin-left:30px;">金额</span>
                                                <input type="text" name="" class="form-control sms-input oneMoney" style="float:left;margin-left:10px;">
                                                <span style="float:left">&nbsp;-&nbsp;</span>
                                                <input type="text" name="" class="form-control sms-input twoMoney" style="float:left;">
                                            </div>
                                            <div class="personal-content">
                                                <span style="float:left;margin-left:30px;">数量</span>
                                                <input type="text" name="" class="form-control sms-input num" style="float:left;margin-left:10px;">
                                            </div>
                                        </div>
                                    </li >
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    <li class="personal-li">
                                        <div class="hongbaopz ">
                                            <input type="button" class=" btn  alter-btn" value="增加新任务" id="hban">
                                        </div>

                                    </li >
                                    <li class="personal-li">
                                        <div class="personal-settings">
                                            <div class="hongbao-left">
                                                <span>分销奖配置:</span>
                                            </div>
                                            <div class="personal-radio">
                                                <input type="radio" name="sms" value="0"  id="hongbaok">开启
                                                <input type="radio" name="sms" value="1" checked="checked" id="hongbaog">关闭
                                            </div>
                                        </div>
                                    </li>

                                    <li class="personal-li">
                                        <div class="personal-settings">
                                            <div class="hongbao-left">
                                                <span class="s1">获奖者百分比:</span>
                                            </div>
                                            <div class="personal-content">
                                                <input id="yongjinpz" type="text" name="" disabled="true" class="form-control hongbao-input">
                                            </div>
                                        </div>

                                    </li>
                                    <li class="personal-li">
                                        <div class="personal-settings">
                                            <div class="hongbao-left">
                                                <span class="s1">时间配置</span>
                                            </div>
                                        </div>


                                    </li>

                                    <li class="personal-li">
                                        <div class="personal-settings">
                                            <div class="hongbao-left">
                                                <span class="s1">开始时间:</span>
                                            </div>
                                            <div class="personal-content">
                                                <input type="text" id="hongbao_start_date" name="from"  class=" form-control shijian-input dpd1">
                                            </div>
                                        </div>
                                        <div class="hongbao-settings">
                                            <div class="hongbao-left">
                                                <span class="s1">结束时间:</span>
                                            </div>
                                            <div class="personal-content">
                                                <input type="text" id="hongbao_end_date" name="to" class=" form-control shijian-input dpd2">
                                            </div>
                                        </div>

                                    </li>
                                    <li class="personal-li">
                                        <div class="personal-settings">
                                            <div class="hongbao-left">
                                                <span class="s1">　时间点:</span>
                                            </div>
                                            <div class="personal-content">
                                                <input type="text" name="from" class=" form-control shijian-input timepicker-24">
                                            </div>
                                        </div>
                                    </li>
                                    
                                    <li class="personal-li">
                                        <div class="personal-settings">
                                        	
                                            <div class="hongbao-dibu">
                                            	
                                                <span class="s1">合计:本次抽奖将最大支出XXX元，最小支出XXX元</span>
                                                <button type="submit" class=" btn  wx-button">计算</button>
                                            </div>
                                        </div>


                                    </li>
                                    <div class="personal-bc">
                                        <button type="submit" class=" btn  hongbao-btn">保存</button>
                                    </div>
                                </form>
                            </ul>

                        </div>

                    </div>
                </div>
            </section>
        </section>
    </section>
</section>

<script src="/Public/Admin/js/hongbao/redEnvelope.js"></script>
                                            
                                            
                                            

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

<script>
    $(document).ready(function(){
        $("#hban").click(function(){
//      	$("#li").clone(true).appendTo("#li");
            $("#li").append('<li class="personal-li" id="li"><div class="personal-settings"> <div class="hongbao-left"> <span class="s1">奖项</span> </div> <div class="personal-content"><span style="float:left;margin-left:30px;">奖项名称</span><input type="text" name="" class="form-control sms-input" style="float:left;margin-left:10px;"></div> <div class="personal-content"> <span style="float:left;margin-left:30px;">金额</span> <input type="text" name="" class="form-control sms-input" style="float:left;margin-left:10px;"> <span style="float:left">-</span> <input type="text" name="" class="form-control sms-input" style="float:left;"> </div> <div class="personal-content"> <span style="float:left;margin-left:30px;">数量</span> <input type="text" name="" class="form-control sms-input" style="float:left;margin-left:10px;"> </div> </div> </li>');
        })
        $("#hongbaog").click(function(){
            $(".hongbao-input").attr("disabled",true)
        })
        $("#hongbaok").click(function(){
            $(".hongbao-input").attr("disabled",false)

        })
    });

</script>
<!-- END JS -->
</body>
</html>