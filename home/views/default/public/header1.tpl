<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title><{$appname}></title>
<link href="<{$public}>/css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary JavaScript plugins) -->
<script src="<{$public}>/js/bootstrap.js"></script>
<!-- Custom Theme files -->
<link href="<{$res}>/css/style.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="University Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="<{$public}>/js/jquery.min.js"></script>
 <script src="<{$public}>/js/bootstrap.js"></script>

</head>
<body>
<!-- banner -->
<script src="<{$public}>/js/responsiveslides.min.js"></script>
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
<div class="banner">	  
	 <div class="header">
			 <div class="logo">
				 <a href="<{$app}>/index"><img src="<{$res}>/images/logo.jpg" alt=""/></a>
			 </div>
			 <div class="top-menu">
				 <span class="menu"></span>
				 <ul class="navig">
					 <li class="active"><a href="<{$app}>/index">首页</a></li>
					 <li><a href="<{$app}>/dynamic">最新动态</a></li>
					 <li><a href="<{$app}>/about">专业概况</a></li>					
					 <li><a href="<{$app}>/achievements">科研成果</a></li>
					 <li><a href="<{$app}>/member">人员</a></li>
					 <li><a href="<{$app}>/recruit">招生招聘</a></li>
					 <li><a href="<{$app}>/kepu">核能科普</a></li>
					 <li><a href="<{$app}>/contact">联系我们</a></li>
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