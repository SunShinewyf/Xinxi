<?php if (!defined('THINK_PATH')) exit();?><html>
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
	   <img src="__PUBLIC__/Images/2.jpg"/><h2>添加新图片</h2>
	   	   <div class="outer-box">
			<div class="box">
			  <div class="box-title">板块说明</div>
			  <div class="content">
			    <p>-选择文件：请选择本地的图片，一般的图片格式都没问题。建议使用254*190的图片，在上传前可以进行适当的调整和美化，以达到更好的效果</p>
				<p>-上传图片支持多种格式，如'jpg', 'gif', 'png', 'jpeg'格式</p>
                <p>-简单描述：将会显示在首页图片的下方，相当于图片的标题，告诉浏览者这张图片的主题。<span>必须填写</span></p>
                <p>-图片所在新闻的标题：此项填写的是该图片所属新闻的标题，如该项不填写，则点击图片不会有相应的链接.<span>必须填写</span></p>
			  </div>
		   </div>    
		 
       	   <div class="outer-box80">
			<div class="box">
			  <div class="box-title">上传新图片</div>
			  <p style="color:red">建议选择254*190的图片</p>
			  <div class="content">
                  <form  action="__APP__/Img/add"  method="post" enctype="multipart/form-data" id="form">
				    <div class="team">
					  <label for="img">选择图片</label></br>
					  <input type="file" class="form-control" name="img" id="img"/>
				    </div> </br>
					<div class="team">
					  <label for="describe">图片描述</label></br>
					  <input type="describe" name="idescribe" class="form-control" id="idescribe" >
				    </div> </br>
				   <div class="team">
					  <label for="etitle">图片所在新闻的标题</label></br>
					  <input type="text" name="ititle" class="form-control" id="ititle" placeholder="请填写图片所在新闻的标题" autocomplete="off" >
				    </div> </br>
				   <div class="team">
					  <label for="author">图片作者</label></br>
					  <input name="iauthor"  class="form-control" id="iauthor"  placeholder="请填写图片作者" autocomplete="off"/>
				    </div> </br>
				
				    <div class="team">
					  <input type="hidden" name="iid"/>
					  <input type="submit"  class="btn btn-primary" value="确认提交" id="submit" />
					  <input type="reset" value="重置"/>
				    </div> 
				  </form>
			  </div>
			</div>
		  </div>
  </div>
  <script>
      $(function(){
	      $("#submit").click(check);
		  function check(){
		    var etitle=$("#etitle").val();
			if(etitle==''){
			  alert("请填写图片所在新闻的标题！");
			  $("#etitle").focus();
			  return false;
			}
		  }	  
	  })
 
  </script>
</body>

</html>