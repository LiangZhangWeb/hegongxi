<?php /* Smarty version 2.6.18, created on 2016-01-03 10:26:25
         compiled from public/header.tpl */ ?>
<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title><?php echo $this->_tpl_vars['appname']; ?>
</title>
<link href="<?php echo $this->_tpl_vars['public']; ?>
/css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary JavaScript plugins) -->
<script src="<?php echo $this->_tpl_vars['public']; ?>
/js/bootstrap.js"></script>
<!-- Custom Theme files -->
<link href="<?php echo $this->_tpl_vars['res']; ?>
/css/style.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="University Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="<?php echo $this->_tpl_vars['public']; ?>
/js/jquery.min.js"></script>
 <script src="<?php echo $this->_tpl_vars['public']; ?>
/js/bootstrap.js"></script>

 
</head>
<body>
<!-- banner -->
<script src="<?php echo $this->_tpl_vars['public']; ?>
/js/responsiveslides.min.js"></script>
<script>  
    $(function () {
      $("#slider").responsiveSlides({
      	auto: true,
      	nav: true,
      	speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });
</script>  
<div class="banner2">	  
	 <div class="header">
			 <div class="logo">
				 <a href="<?php echo $this->_tpl_vars['app']; ?>
/index"><img src="<?php echo $this->_tpl_vars['res']; ?>
/images/logo.jpg" alt=""/></a>
			 </div>
			 <div class="top-menu">
				 <span class="menu"></span>
				 <ul class="navig">
					 <li class="active"><a href="<?php echo $this->_tpl_vars['app']; ?>
/index">首页</a></li>					 
					 <li><a href="<?php echo $this->_tpl_vars['app']; ?>
/dynamic">最新动态</a></li>
					 <li><a href="<?php echo $this->_tpl_vars['app']; ?>
/about">专业概况</a></li>
					 <li><a href="<?php echo $this->_tpl_vars['app']; ?>
/achievements">科研成果</a></li>
					 <li><a href="<?php echo $this->_tpl_vars['app']; ?>
/member">人员</a></li>
					 <li><a href="<?php echo $this->_tpl_vars['app']; ?>
/recruit">招生招聘</a></li>
					 <li><a href="<?php echo $this->_tpl_vars['app']; ?>
/kepu">核能科普</a></li>
					 <li><a href="<?php echo $this->_tpl_vars['app']; ?>
/contact">联系我们</a></li>
				 </ul>
			 </div>
			  <!-- script-for-menu -->
		 <script>
				$("span.menu").click(function(){
					$("ul.navig").slideToggle("slow" , function(){
					});
				});
		 </script>
		 <!-- script-for-menu -->

			 <div class="clearfix"></div>
	 </div>
</div>