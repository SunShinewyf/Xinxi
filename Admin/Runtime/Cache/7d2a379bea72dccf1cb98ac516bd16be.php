<?php if (!defined('THINK_PATH')) exit();?><html>
<script charset="utf-8" src="__PUBLIC__/Editor/kindeditor.js"></script>
<script charset="utf-8" src="__PUBLIC__/Editor/lang/zh_CN.js"></script>
</head>
<script>
     /*   var editor;
        KindEditor.ready(function(K) {
            editor = K.create('#editor_id');
		    KE.sync('editor_id');

        });*/
		  KindEditor.ready(function(K) {
          window.editor = K.create('#editor_id',{
            resizeType: '1',    //高度可拖动
            width: '75%',
            height: '400px',
            cssData: 'body { font-size: 14px; }',
            fillDescAfterUploadImage: 'true',
            uploadJson: '__URL__/upload_json',
            afterCreate: function(){ $('.ke-container').css("border", "none")},
            items: [
                'source', 'preview', '|', 'undo', 'redo', 'cut', 'copy', 'paste',
                'plainpaste', '|', 'justifyleft', 'justifycenter', 'justifyright',
                'justifyfull', 'insertorderedlist', 'insertunorderedlist', 'indent', 'outdent', 'subscript',
                'superscript', 'clearhtml', 'quickformat', 'selectall', '|', 'fullscreen', '/',
                'formatblock', 'fontname', 'fontsize', '|', 'forecolor', 'hilitecolor', 'bold',
                'italic', 'underline', 'strikethrough', 'lineheight', 'removeformat', '|', 'image',
                'insertfile', 'table', 'hr', 'emoticons', 'baidumap',
                'anchor', 'link', 'unlink', '|', 'about'
            ]
			//afterBlur : function(){this.sync();}//需要添加的
        });
   });	
		
</script>
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
	   <img src="__PUBLIC__/Images/2.jpg"/><h2>添加新人物</h2>
	   <div class="outer-box">
			<div class="box">
			  <div class="box-title">板块说明</div>
			  <div class="content">
			    <p>在该板块里，可以实现对前台人物的添加，以下所有项，必须填写完整</p>
				
			  </div>
			</div>
	   </div>
	   <div class="outer-box">
			<div class="box">
			  <div class="box-title">添加新人物</div>
			  <div class="content">
	              <form action="__APP__/Teacher/save" method="post"  id="form" enctype="multipart/form-data">
				    <div class="wrap">
				     <div id="team">
				       <label for="tname">人名</label></br>
                       <input type="text" id="tname" class="form-control" name="tname" value="<?php echo ($data['tname']); ?>"/>
					 </div></br>
				    <div id="team">
				       <label for="tkind">人物类别</label></br>
					     <select class="form-control" id="kid" name="kid">
                           <option value="" selected>先选择人物类别</option>
                             <option value="1">老师</option>
							 <option value="2">教授</option>
							 <option value="3">导师</option>
						     <option value="4">专家</option>
							 <option value="5">领导</option>
                         </select>
					 </div></br>
		     		 <div id="team">
				       <label for="cname">教师所在系别</label></br>
               <input type="text" name="cname" id="cname" class="form-control" value="<?php echo ($data['cname']); ?>" style="display:none;"/>
					 </div></br>
					  <div id="team">
					   <input type="hidden" value="<?php echo ($data['tid']); ?>" name="tid"/>
					   <input type="submit" id="submit" value="提交" />
					   <input type="reset" id="reset" value="重置"/>
					  </div>
					  </div>
				    <div class="team">
					    <label for="tinformation">人物信息</label></br>
					    <textarea  name="tinformation"  class="form-control" id="editor_id" >	
						   <?php echo ($data['tinformation']); ?>
                        </textarea>						
					</div></br>
				  </form>		

				  </div>
			</div>
	   </div>
    </div>
	<script>
	   $(function(){
	       $("#submit").click(check);
		   function check(){
		    editor.sync();
	       var name=$("#tname").val();
		   var pic=$("#tpic").val();
		   var cname=$("#cname").val();
		   var tinformation=$("#editor_id").val();
		   var kid=$("#kid").val();
		   if(name==''){
		      alert("请填写教师姓名！");
			  $("#tname").focus();
			  return false;
		   }
		   if(cname==''){
		       alert("请填写教师所在系别！");
			   $("#cname").focus();
			   return false;
		   }
		   if(kid==''){
		       alert("请填写教师类别");
			   return false;
		   }
		   if(tinformation==''){
		       alert("请填写教师的相关信息！");
			   $("#editor_id").focus();
			   return false;
		   }
		 }
		     $("#kid").change(function(){
			    var result=$(this).val();
				if(result==1){
				   $("#cname").show();
				}else{
				    $("cname").hide();
				}
			});
	   });
	
	</script>
</body>
</html>