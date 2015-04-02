<?php if (!defined('THINK_PATH')) exit();?><html>
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
	   <img src="__PUBLIC__/Images/2.jpg"/><h2>文件显示</h2>
       	   <div class="outer-box">
			<div class="box">
			  <div class="box-title">板块说明</div>
			  <div class="content">
			     <p>本模块可以通过右侧查看所有文件，还可以实行对文件的删除功能，通过右侧，你还可以对进行新文件的上传</p>
			  </div>
			</div>
	     </div>
		  <div class="outer-box70">
			<div class="box">
			  <div class="box-title">显示所有文件</div>
			  <div class="content">
			     <table class="table">
				    <tr>
					   <th>文件号</th>
					   <th>文件名称</th>
					   <th>文件大小</th>
					   <th>文件的相关描述</th>
					   <th>下载次数</th>
					   <th>文件上传时间</th>
					   <th>操作</th>
					</tr>
			<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
					  <th><?php echo ($vo['fid']); ?></th>
					  <th><?php echo ($vo['fname']); ?></th>
					  <th><?php echo ($vo['esize']); ?></th>
					  <th><?php echo ($vo['fdescribe']); ?></th>
					  <th><?php echo ($vo['ftimes']); ?></th>
					  <th><?php echo ($vo['fbuild']); ?></th>
					  <th>
					      <a href="__UPLOADS__/Files/<?php echo ($vo['fname']); ?>">查看</a>
					     <a onclick="if (confirm('确定要删除吗？')) return true; else return false;" href="__APP__/File/deleteFile?fid=<?php echo ($vo['fid']); ?>">删除</a>
					  </th>
					</tr><?php endforeach; endif; else: echo "" ;endif; ?>
				</table>
			  <<?php echo ($show); ?>>
			  </div>
			</div>
	     </div>
		 <div class="outer-box30">
			<div class="box">
			  <div class="box-title">上传新文件</div>
			  <div class="content">
			    <form action="__APP__/File/addFile" method="post" id="form" enctype="multipart/form-data">
				     <div class="team">
					    <label for="file">选择文件</label></br>
					    <input type="file" class="form-control" name="fname" id="file"/>			 
					</div></br>
				     <div class="team">
					    <label for="fdescribe">文件的相关描述</label></br>
					    <textarea  name="fdescribe"  id="fdescribe">	
                        </textarea>						
					</div></br>
					<div class="team">
					<input type="submit" value="上传" id="submit"/>	
					<input type="reset" value="重置" id="reset"/>					
					</div>
				</form>
			  </div>
			</div>
	     </div>
</html>