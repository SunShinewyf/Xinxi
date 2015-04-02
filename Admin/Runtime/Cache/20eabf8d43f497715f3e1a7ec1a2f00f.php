<?php if (!defined('THINK_PATH')) exit();?> 
<html>
           <head>
	   <title>信息学院后台管理系统</title> 
	   <meta charset="utf-8">
	   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	   <link  rel="stylesheet" type="text/css" href="__PUBLIC__/Css/admin.css"/>
	   <link  rel="stylesheet" type="text/css" href="__PUBLIC__/Css/style.css"/>
	   <script type="text/javascript"  src="__PUBLIC__/Js/jquery.min.js"></script>
	   <script type="text/javascript"  src="__PUBLIC__/Js/left.js"></script>
	</head>
	<body>
	   <div id="header">
	       <img src="__PUBLIC__/Images/header.jpg"/>
	       <div class="topic">
		      <a href="__APP__/Admin/updateInfo">修改信息</a> &nbsp &nbsp
			  <a onclick="if (confirm('确定要退出吗？')) return true; else return false;" href="__APP__/Index/logOut">退出系统</a>
			  <span><a href="/xinxi/index.php/Index/index">前端首页</a></span>
		   </div>
	   </div>
	   
       
	   <div id="left">
	      <div class="img"></div>
		  <ul class="accordion">
	   <li id="zero" class="artitle"> <a href="#zero">后台管理栏目</a>
	   <li id="one" class="personal"> <a href="#one">管理员空间</a>
		  <ul class="sub-menu">
			<li><a href="__APP__/Admin/updateInfo">修改个人信息</a></li>
			<li><a href="__APP__/Index/index">帮助信息</a></li>
		  </ul>
	   </li>
	   <li id="two" class="imges"> <a href="#two">首页图片</a>
		  <ul class="sub-menu">
			<li><a href="__APP__/Img/showImg">图片管理</a></li>
			<li><a href="__APP__/Img/addImg">图片添加</a></li>
		  </ul>
	   </li>
	   <li id="three" class="artitle"> <a href="#three">文章管理</a>
		  <ul class="sub-menu">
			<li><a href="__APP__/Essay/showEssay">所有文章</a></li>
			<li><a href="__APP__/Essay/buildEssay">添加新文章</a></li>
		  </ul>
	   </li>
	   <li id="four" class="file"> <a href="#four">文件下载</a>
		  <ul class="sub-menu">
			<li><a href="__APP__/File/showFile">文件管理</a></li>
		  </ul>
	   </li>
	   	   <li id="five" class="teacher"> <a href="#five">教师信息</a>
		  <ul class="sub-menu">
			<li><a href="__APP__/Teacher/showTeacher">教师名录管理</a></li>
			<li><a href="__APP__/Teacher/addTeacher">添加新教师</a></li>
		  </ul>
	   </li>
	  </ul>
	</div>		
  </div>
	   <div id="right">
	      <img src="__PUBLIC__/Images/2.jpg"/><h2>欢迎进入后台管理系统</h2>
		  <div class="outer-box">
			<div class="box">
			  <div class="box-title">欢迎</div>
			  <div class="content">
			    <p>欢迎进入信息学院后台管理系统</p>
			  </div>
			</div>
		  </div>
		  <div class="outer-box">
			<div class="box">
			  <div class="box-title">使用系统说明</div>
			  <div class="content">
			    <p>本系统的使用可以参照左方导航的指示，通过点击不同的模块可以进入到相应的模块，在模块中又可以执行不同的功能</p>
				<p>比如查看以及添加功能</p>
			  </div>
			</div>
		  </div>
		    <div class="outer-box">
			<div class="box">
			  <div class="box-title">关于本系统</div>
			  <div class="content">
			    <p>本系统版权由华中农业大学信息学院沸点工作室所有</p>
				<p>如在使用过程中有任何错误的地方，或遇到什么纰漏，可以联系沸点工作室</p>
				<p>沸点工作室地址：逸夫楼A405</p>
			  </div>
			</div>
		  </div>
	   </div>
	</body>
</html>