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
	   <img src="__PUBLIC__/Images/2.jpg"/><h2>文章管理</h2>
	   <div class="outer-box">
			<div class="box">
			  <div class="box-title">模块说明</div>
			  <div class="content">
			     <p>在该模块里，管理员可以查看所有文章，还可以进行对已有文章的再编辑和删除操作</p>
			  </div>
			</div>
	   </div>
	   <div class="outer-box">
			<div class="box">
			  <div class="box-title">文章搜索</div>
			     <div class="type">
				    <form method="get">
				     <div class="search-type">搜索条件：</div>
					 <select name="select" class="select">
					    <option value="title" selected>按标题搜索</option>
						<option value="resource">按作者/来源搜索</option>
					 </select>
					 
					 <input name="key" type="text" class="key"/>
                     <input type="submit" value="搜索" class="se-btn"/>			
                     </form>					 
				 </div>
				 
				 <div class="type">
				 <form method="get">
				     <div class="search-type" style="margin-top:-22px">对当前结果：</div>
					 <select name="result" class="select">
					     <option value="time" selected>按发布时间进行排序</option>
						 <option value="num">按阅读次数进行排序</option>
						 <option value="refresh">按更新时间进行排序</option>
					 </select>
					 <input type="submit" value="排序" class="se-btn"/>
				 </form>
				 </div>
			  
			</div>
	   </div>


       <div class="outer-box">
	      <div class="box">
		    <div class="box-title">文章列表</div>
			  <div class="content">
			     <table class="table">
				    <tr>
					   <th>文章号</th>
					   <th>标题</th>
					   <th>作者/文章来源</th>
					   <th>文章的显示形式</th>
					   <th>所属栏目</th>
					   <th>阅读次数</th>
					   <th>发布时间</th>
					   <th>最近修改时间</th>
					   <th>操作</th>
					</tr>
				<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
					  <th><?php echo ($vo['eid']); ?></th>
					  <th><?php echo ($vo['etitle']); ?></th>
					  <th><?php echo ($vo['efrom']); ?></th>
					  <th><?php echo ($vo['kname']); ?></th>
					  <th><?php echo ($vo['pname']); ?></th>
					  <th><?php echo ($vo['etimes']); ?></th>
					  <th><?php echo ($vo['ebuild']); ?></th>
					  <th><?php echo ($vo['erevise']); ?></th>
					  <th>
					      <a href="__ROOT__/index.php/Index/content/e/<?php echo ($vo['eid']); ?>">查看</a>
					      <a onclick="if (confirm('确定要删除吗？')) return true; else return false;" 
						  href="__APP__/Essay/delEssay?eid=<?php echo ($vo['eid']); ?>">删除</a>
						  <a href="__APP__/Essay/updateEssay?eid=<?php echo ($vo['eid']); ?>">更新</a>
					  </th>
					</tr><?php endforeach; endif; else: echo "" ;endif; ?>
				</table>
				  <<?php echo ($show); ?>>
			  </div>
			</div>
		  </div>
	   </div>
    </div> 
	
	<script>
	
	    $(function(){
		     ///////////////////// 文章列表，筛选，选择栏目
    $(".essayfilter #code").change(function(){
        var code = $(this).val();
        var actionUrl = $("#essayfilter").attr("action");
        if( code != '0' ){
            window.location.href = actionUrl+"/code/"+code;
        }
    });
		
		
		
		
	      $('#cpar').change(function(){
        var CurSelected = $(this).val();
        if( CurSelected != '0' ){
		    $("#code").css("display","block");
            $("#code").html('<option value="0" selected>请选择子栏目</option>');
            var theSelected = SelectData[CurSelected];
            for( key in theSelected ){
                $("#code").append('<option value="'+key+'">'+theSelected[key]+'</option>');
            }
            $('#code').show();
        }else{
            $('#code').hide();
        }
    });
     var SelectData = $.parseJSON('<?php echo ($sublist); ?>');
    var isRevise = "<?php echo ($isRevise); ?>", par = "<?php echo ($par); ?>", sub = "<?php echo ($sub); ?>", essay = $.parseJSON('<?php echo ($essay); ?>');/**/
    $(document).ready(CheckSelectData);
    $(document).ready(CheckRevise); 
})
	</script>
	</body>
</html>