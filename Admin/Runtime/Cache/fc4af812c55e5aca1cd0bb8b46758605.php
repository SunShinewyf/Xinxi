<?php if (!defined('THINK_PATH')) exit();?><html>
   <html>
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
	   <img src="__PUBLIC__/Images/2.jpg"/><h2>修改管理员信息</h2>
	   <div class="outer-box">
	     <div class="box">
		    <div class="box-title">模块说明</div>
			  <div class="content">
              <p>在本模块里，管理员可以更改登录后台的密码</p>
			</div>
		</div>
	  </div>
	   <div class="outer-box60">
	      <div class="box">
		    <div class="box-title">更改信息</div>
			  <div class="content">
                <form action="__APP__/Admin/change" method="post" id="form">
				   <div class="team">
				      <label for="apassword"> 当前密码:</label></br></br>
				      <input type="password"  name="apassword"	id="password" class="form-control" placeholder="请填入当前密码" autocomplete="off"/>		
				   </div></br>
           	       <div class="team">
				      <label for="confirm">新密码:</label></br></br>
				      <input type="password"  name="newpassword" id="newpassword"  class="form-control" placeholder="请填入新密码" autocomplete="off"/>		
				   </div></br>
				   <div class="team">
				      <label for="confirm">确认密码:</label></br></br>
				      <input type="password"  name="confirm"  id="confirm"  class="form-control" placeholder="请填入新密码" autocomplete="off"/>		
				   </div></br>
				   <div class="team">
				       <input type="submit" id="btn" value="确认修改"/>
					   <input type="reset"  id="reset" value="重置"/>
				   </div>
				</form>
            </div>
	     </div>   
	   </div>
	<script>
	   $(function(){
	      $("#btn").click(check);
		 function check(){
			 var oldpassword=$("#password").val();
			 var newpassword=$("#newpassword").val();
			 var sure=$("#confirm").val();
			 if( oldpassword==''){
			    alert("请填写要修改的密码!");
				$("#oldpassword").focus();
				return false;
			 }
			  if( newpassword==''){
			    alert("请填写新密码!");
				$("#newpassword").focus();
				return false;
			 }
			 	 if( newpassword!=sure){
			    alert("确认密码与新密码不一致！");
				$("#confirm").focus();
				return false;
			 }
		  } 
	   })
	
	</script>
    </body>
</html>