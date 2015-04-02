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
    <img src="__PUBLIC__/Images/2.jpg"/><h2>更新文章</h2>
	   	<div class="outer-box">
			<div class="box">
			  <div class="box-title">版块说明</div>
			  <div class="content">
			     <p>你可以在本模块进行对已发文章的再编辑，只需要在下方编辑信息即可。<span>注意下方的表单必须填写完整</span></p>
			  </div>
			</div>
	   </div>
  
	   <div class="outer-box">
			<div class="box">
			  <div class="box-title">填写相应信息并提交</div>
			  <div class="content">
			     <form action="__APP__/Essay/save" method="post">
				 <div class="wrap">
				  <div class="team">
				    <label for="etitle">*文章标题：</label></br></br>
					<input type="text" name="etitle" class="form-control" id="title" value="<?php echo ($data['etitle']); ?>"/>
				  </div></br>
				  <div class="team">
					 <label for="efrom">*文章作者/来源：</label></br></br>
					 <input type="text" name="efrom" class="form-control"id="from" value="<?php echo ($data['efrom']); ?>"/>
				  </div></br>
				  <div class="team">
                     <label for="eprogram"> *选择所属栏目：</label> </br></br>
				      <select class="form-control" id="cpar" name="cpar">
                        <option value="" selected>先选择父栏目</option>
                           <?php if(is_array($parcol)): $i = 0; $__LIST__ = $parcol;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$parcol): $mod = ($i % 2 );++$i;?><option value="<?php echo ($parcol['code']); ?>"><?php echo ($parcol['pname']); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                      </select>
                    <p class="help-block">选择父栏目后，选择子栏目</p>
                    <select class="form-control" id="code" name="code" style="display:none" >
                        <option value="0" selected>请先选择父栏目</option>
                    </select>
				 </div></br>
				 <div class="team">
				   <label>文章在页面的显示形式</label>
				    <select class="form-control" id="kid" name="kid">请选择文章的显示形式
					  <option value="">请选择文章在页面的显示形式</option>
					  <option value="6">以文章内容显示</option>
					  <option value="7">以文章标题显示</option>
				    </select>
				 </div></br>
				  <div class="team">
				     <input type="hidden" name="eid" value="<?php echo ($data['eid']); ?>"></input>
                     <input type="submit" id="submit" value="确认提交"/>	
					 <input type="reset"  id="reset" value="重置"/>	
                  </div>	
              	</div>	
				   <div class="team">
				      <textarea id="editor_id" name="edetail" style="width:100% ;height:350px">
					       <?php echo ($data['edetail']); ?>
				      </textarea>
				   </div>
				 </form>
			  </div>
			</div>
	   </div>
	 </div>
	   <script>

	       $(function(){
		       $("#form").submit(function(){return false;});
			   $("#submit").click(check);
			   function check(){
			       editor.sync();
		       var title=$("#title").val();
			   var from=$("#from").val();
			   var detail=$("#editor_id").val();
			   var cpar=$("#cpar").val();
			   var code=$("#code").val();
			   var kid=$("#kid").val();
			   if(detail==''){
			      alert("请编辑正文！");
				  $("#editor_id").focus();
				  return false;
			   }   
			   if(title==''){
			      alert("请填写文章标题！");
				  $("#title").focus();
			      return false;
			   }
		       if(from==''){
			      alert("请填写文章来源");
				  $("#from").focus();
				  return false;
			   }
			   if(cpar==''){
			      alert("请选择父级栏目！");
				  return false;
			   }
			      if(code==''){
			      alert("请填写子级栏目！");
			      return false;
			   }
			   if(kid==""){
			     alert("请选择文章的显示形式！");
				 return false;
			   }
    }	  
   $('#cpar').change(function(){
        var CurSelected = $(this).val();
        if( CurSelected != '0' ){
		    $("#code").css("display","block");
            $("#code").html('<option value="" selected>请选择子栏目</option>');
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