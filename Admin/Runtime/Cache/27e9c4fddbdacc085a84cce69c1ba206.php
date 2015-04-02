<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">  
<html>
    <head>
	   <title>信息学院后台登陆系统</title>
	   <meta charset="utf-8">
       <meta http-equiv="content-type" content="text/html;charset=utf-8">
	   <link rel="stylesheet"  type="text/css" href="__PUBLIC__/Css/login.css"/>
	</head>
	<script type="text/javascript" src="__PUBLIC__/Js/jquery.min.js"></script>
	<!--<script>
	    $(function(){
        /*ajax:验证表单是否提交*/
	    $('#form').submit(function(){return false;}); /*先除去默认提交事件*/
	    $('.submit').click(check);
	    function check(){
        var name=$("#name").val();
		var password=$("#password").val();
		if(name==""){
		   alert("登录账号不得为空！");
		   $("#name").focus();
		   return false;
		}
		if(password==""){
		   alert("登录密码不得为空！");
		   $("#password").focus();
		   return false;
		}
		else{
		   //alert("登录成功");
		  window.location.href="__APP__/Login/check";
		}
	}
});

	</script> -->
	<body>
		  <div id="login-box">
		     <div class="img"></div>
			 <div class="Form">
			      <form action="__APP__/Login/check" method="post" id="form">
				    <strong>管理员账号</strong>:&nbsp  <input type="text"  name="aname"  id="name" placeholder="请填写用户名" autocomplete="off"/></br></br>
					<strong>管理员密码</strong>:&nbsp  <input type="password" name="apassword" id="password"  placeholder="请输入密码" autocomplete="off"/></br> </br> 
                                        <input class="submit" type="submit"  value="登陆"/>
										<input  type="reset"  value="重置" />
				 </form>
		     </div>
		 </div>
	</body>
</html>