<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">  
<html>

   <head>
    <meta charset="utf-8">
<meta http-equiv="content-type" content="text/html;charset=utf-8">
<title>华中农业大学信息学院</title>
  <link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/public.css"/> 
  <script type="text/javascript" src="__PUBLIC__/Js/jquery-1.9.0.js"></script>
  <script type="text/javascript"  src="__PUBLIC__/Js/demo.js"></script>
       <link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/show.css"/> 
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
	  <div id="box">
	  <!--left menu start-->
	    <div class="left">
        <div class="menu">
            <div class="menu-title">服务信息</div>
            <ul class="menu">
                 <li><a href="__URL__/xyh">校友会</a></li>
				 <li><a href="__URL__/wjxz">文件下载</a></li>
            </ul>
	    </div>
		</div>
	<!--left menu end-->
	<!--right list start-->
	  <div class="right">
		    <div class="img"></div>
            <div class="essay">
			   <div class="guide">
			       当前位置:
			       <a href="__APP__/Index/index">首页</a>
			        /
					<a href="__APP__/Fwxx/">服务信息</a>
			        /
			        <strong>下载专区</strong>
			</div>
 
        <div class="content">
            <table class="table-file">
                <?php if(is_array($files)): $i = 0; $__LIST__ = $files;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$fi): $mod = ($i % 2 );++$i;?><tr>
                        <td class="icon"><img src="__PUBLIC__/Images/file.png"></td>
                        <td class="about">
                            <h3 style="font-size:12px;"><?php echo (msubstr($fi['fname'],0,21,"utf-8",true)); ?></h3>
                            <p>文件大小：<?php echo ($fi['fsize']); ?></p>
                            <p>上传时间：<?php echo ($fi['fbuild']); ?></p>
                            <p>详情：<?php echo ($fi['fdescrib']); ?></p>
                        </td>
                        <td class="dl-btn">
                            <a class="btn" style="position:relative;left:20px;" href="__ACTION__/f/<?php echo ($fi['fid']); ?>">立即下载</a>
                            <p>下载量：<?php echo ($fi['ftimes']); ?></p>
                        </td>
                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
            </table>
        </div>
    </div>		
	    <div class="page"><?php echo ($page); ?></div>
        <div class="share">
            <span>将本页分享到：</span>
            <span class="bdsharebuttonbox"></br>
            <a href="#" class="bds_more" data-cmd="more"></a>
            <a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a>
            <a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a>
            <a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a>
            <a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网"></a>
            <a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a>
        </span>
        </div>
		</div>
	   <div style="text-align:center;clear:both"> </div>
      </div>
		<!--right list end-->
     <div id="footer">
        <p>@2014 版权所有 All Rights Reserved.武汉华中农业大学信息学院 
		地址：中国·湖北·武汉 南湖狮子山街一号 430070 </br>
		 技术支持:沸点工作室 </p>
   </div>
  </body>
    <script>
    window._bd_share_config = {
        "common": {
            "bdSnsKey": {},
            "bdText": "【<?php echo ($PageTitle); ?>】 - 来自:华中农业大学信息学院！戳链接阅读原文-->",
            "bdMini": "2",
            "bdMiniList": false,
            "bdPic": "",
            "bdStyle": "1",
            "bdSize": "24"
        },
        "share": {}
    };
    with (document)0[(getElementsByTagName('head')[0] || body).appendChild(createElement('script')).src = 'http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion=' + ~(-new Date() / 36e5)];
</script>
</html>