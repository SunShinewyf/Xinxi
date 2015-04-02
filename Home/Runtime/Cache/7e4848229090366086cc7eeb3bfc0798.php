<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">  
 <html>
  <head>
  <meta charset="utf-8">
<meta http-equiv="content-type" content="text/html;charset=utf-8">
<title>华中农业大学信息学院</title>
  <link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/public.css"/> 
  <script type="text/javascript" src="__PUBLIC__/Js/jquery-1.9.0.js"></script>
  <script type="text/javascript"  src="__PUBLIC__/Js/demo.js"></script>
      <link rel="stylesheet"  type="text/css" href="__PUBLIC__/Css/home.css"/>
      <link rel="stylesheet" type="text/css" href="__UPLOADS__/Pictures/css/box.css">
      <script language="javascript" type="text/javascript" src="__UPLOADS__/Pictures/js/box.js"></script>
      
  </head>
       <body>
	     
  <div id="header">
			 <div class="logo"></div>
			 <div class="nav">
	<ul>
		<li><a class="xysy" href="__APP__/Index/index">首页</a></li>
		<li class="mainmenu">
			<a class="xygk" href="__APP__/Xygk">学院概况</a>
			<dl>
				<dd><a href="__APP__/Xygk/xyjj">学院简介</a></dd>
				<dd><a href="__APP__/Xygk/xyld">学院领导</a></dd>
				<dd><a href="__APP__/Xygk/zzjg">组织机构</a></dd>
			</dl>
		</li>
		<li class="mainmenu">
			<a class="xydt" href="__APP__/Xydt">学院动态</a>
			<dl>
			    <dd><a href="__APP__/Xydt/tzgg">通知公告</a></dd>
				<dd><a href="__APP__/Xydt/xyxw">学院新闻</a></dd>
				<dd><a href="__APP__/Xydt/ywgk">院务公开</a></dd>
				<dd><a href="__APP__/Xydt/xyzt">学院专题</a></dd>
			</dl>  
		</li>
		<li class="mainmenu">
			<a class="szdw" href="__APP__/Szdw">师资队伍</a>
			<dl>
				<dd><a href="__APP__/Szdw/jsml">教师目录</a></dd>
				<dd><a href="__APP__/Szdw/jsfc">教授风采</a></dd>
				<dd><a href="__APP__/Szdw/dsdw">导师队伍</a></dd>
				<dd><a href="__APP__/Szdw/glzj">各类专家</a></dd>
			</dl>
		</li>
		<li class="mainmenu">
			<a class="kxyj" href="__APP__/Kxyj">科学研究</a>
			<dl>
				<dd><a href="__APP__/Kxyj/kyfx">科研方向</a></dd>
				<dd><a href="__APP__/Kxyj/cgyzl">成果与专利</a></dd>
				<dd><a href="__APP__/Kxyj/kyjd">科研基地</a></dd>
				<dd><a href="__APP__/Kxyj/kyxm">科研项目</a></dd>
			</dl>    
		</li>
		<li class="mainmenu">
			<a class="rcpy" href="__APP__/Rcpy">人才培养</a>
			<dl>
				<dd><a href="__APP__/Rcpy/bksjy">本科生教育</a></dd>
				<dd><a href="__APP__/Rcpy/yjsjy">研究生教育</a></dd>
			</dl>  
		</li>
		<li class="mainmenu">
		    <a class="zsjy" href="__APP__/Zsjy">招生就业</a>
			<dl>
			   <dd><a href="__APP__/Zsjy/bkszs">本科生招生</a></dd>
		        <dd><a href="__APP__/Zsjy/yjszs">研究生招生</a></dd>
				<dd><a href="__APP__/Zsjy/jyfw">就业服务</a></dd>
		    </dl>
		</li>
		<li class="mainmenu">
		    <a class="xysh" href="__APP__/Xysh">校园生活</a>
			<dl>
		        <dd><a href="__APP__/Xysh/djgz">党建工作</a></dd>
				<dd><a href="__APP__/Xysh/txgz">团学工作</a></dd>
				<dd><a href="__APP__/Xysh/xygh">学院工会</a></dd>
		    </dl>
		</li>
		<li class="mainmenu">
		    <a class="fwxx" href="__APP__/Fwxx">服务信息</a>
			<dl>
		        <dd><a href="__APP__/Fwxx/xyh">校友会</a></dd>
				<dd><a href="__APP__/Fwxx/wjxz">文件下载</a></dd>
		    </dl>
		</li>
		<li class="mainmenu">
		   <a class="dwjl" href="__APP__/Dwjl">对外交流</a>
			<dl>
		        <dd><a href="__APP__/Dwjl/xsjz">学术进展</a></dd>
				<dd><a href="__APP__/Dwjl/hzyjl">合作与交流</a></dd>
		    </dl>
		</li>
	</ul>
             </div>
 </div>
		 <div id="content">
		 <!--img start-->
	 <div class="img"></div>
		<div class="main">
	    <div class="box">
	    <p>新闻图片</p>   
    <div id="show" class="d1">  
	<div class="loading">Loading...<br /><img src="__PUBLIC__/Pictures/images/pic1.jpg" width="254" height="270" /></div>  
	<ul class="imgs">
	    <?php if(is_array($img)): $i = 0; $__LIST__ = $img;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ig): $mod = ($i % 2 );++$i;?><li>
		    <span><?php echo ($ig['idate']); ?></span>
		      <a href="__APP__/Index/Get_id/i/<?php echo ($ig['iid']); ?>"><img src="__UPLOADS__/Pictures/images/<?php echo ($ig['iname']); ?>" width="254" height="270" alt="<?php echo ($ig['idescribe']); ?>" /></a>
		   </li><?php endforeach; endif; else: echo "" ;endif; ?>	
	</ul>  
   </div>  
</div>
 <!--img end-->
	 <!--news start-->
			  <div class="news1">
				<p>学院新闻<a href="__APP__/Xydt/xyxw"  class="more">更多<img src="__PUBLIC__/Images/direction.jpg"/></a></p>
                    <ul class="li-hot">
                        <?php if(is_array($news)): $i = 0; $__LIST__ = $news;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ns): $mod = ($i % 2 );++$i;?><li>
                                <span><?php echo ($ns['ebuild']); ?></span>
                                <a href="__APP__/Index/content/e/<?php echo ($ns['eid']); ?>"><?php echo ($ns['etitle']); ?></a>
                            </li><?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
		      </div>
	 <!--news end-->
	 <!--download start-->
			 <div class="other">
			    <p>通知公告<a href="__APP__/Xydt/tzgg"  class="more">更多<img src="__PUBLIC__/Images/direction.jpg"/></a></p>
                <ul class="notice">
                    <?php if(is_array($notices)): $i = 0; $__LIST__ = $notices;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$no): $mod = ($i % 2 );++$i;?><li>
						    <span><?php echo ($no['ebuild']); ?></span>
						    <a href="__APP__/Index/content/e/<?php echo ($no['eid']); ?>"><?php echo ($no['etitle']); ?></a>
					    </li><?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
            </div>
	<!--download end-->
	</div>
</div>
	   <div id="footer">
        <p>@2014 版权所有 All Rights Reserved.武汉华中农业大学信息学院 
		地址：中国·湖北·武汉 南湖狮子山街一号 430070 </br>
		 技术支持:沸点工作室 </p>
   </div>
    </body>
</html>