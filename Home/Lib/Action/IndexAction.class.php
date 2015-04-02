<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {
    public function index(){
	    //get imgs
		$db=D('Img');
	    $img=$db->relation(true)->order('idate desc')->limit('5')->select();
	    // dump($img);
		  $this->assign('img', $img);
		
	   //get news
	   $essay=M('essay');
	   $news=$essay->field('`eid`,`etitle`,`ebuild`')-> where("`code`='xyxw'")
	       ->order('ebuild desc')->limit('9')->select();
	    foreach($news as &$theNews){
            $theNews['ebuild'] = date("m-d", strtotime($theNews['ebuild']));
        }
        $this->assign('news', $news);

		//get notices
		$essay=M('Essay');
		$notices=$essay->field('`eid`,`etitle`,`ebuild`')->where('`code`="tzgg"')
		    ->order('ebuild desc')->limit('9')->select();
			 foreach($notices as &$theNotices){
            $theNews['ebuild'] = date("m-d", strtotime($theNotices['ebuild']));
        }
        $this->assign('notices', $notices);
		$this->display();
    }
	
	//点击图片获取相应的文章
       public function Get_id(){
	        // dump($_GET['i']);
			// exit;
	        if( isset($_GET['i']) && is_numeric($_GET['i']) ){
			$iid=$_GET['i'];
			$img=M('Img');
			$ititle=$img->where("`iid`=$iid")->field('ititle')->find(); 
			//dump($ititle);//这是一个数组，而不是一个字符串
			//exit;
			$essay=M('Essay');
			$where['etitle']=$ititle['ititle'];  //注意此处应该进行转化
			$id=$essay->where($where)->field('eid')->find();
			//dump($id);
			
			$eid=$id['eid'];
			//dump($eid);
			//exit;

			$essay->where("eid = $eid")->setInc('etimes');  //阅读次数+1
			$theOne = $essay->field('eid, etitle, efrom, code, edetail, etimes, ebuild')->where("eid = $eid")->find();
            $this->assign('essay', $theOne);
            $this->assign('PageTitle', $theOne['etitle']);

            ////////////// 获取栏目信息
            $program= M('program');
            $list = $program->where("code = '".$theOne['code']."'")->find();
            $this->assign("list", $list);   //当前栏目

            $ParCol = $program->where("code = '".$list['pparent']."'")->find();
            $SubCols = $program->where("pparent = '".$ParCol['code']."'")->order('pprior')->select();
            $this->assign("SubCols", $SubCols);
            foreach($ParCol as &$val){
                $val['code'] = ucfirst($val['code']);   //把首字母大写，出于控制器的命名要求
            }
            $this->assign("ParCol", $ParCol);   //父栏目
            $this->assign("active", $ParCol['code']);   //导航栏

            $this->display("Index:content");
        }else{
            $this->redirect('index');
        }
 }
 
	//show 当前模块
	public function showlist($code)
	{
	    if(empty($code)){
	    header('HTTP/1.1 404 Not Found');
        header("status: 404 Not Found");
	    }else{
		$program=M('program');
		$list=$program->where("code='$code'")->find();
		if(empty($list)){
	    header('HTTP/1.1 404 Not Found');
        header("status: 404 Not Found");
	    }else{
	    $this->assign("list", $list);   //当前栏目
        $ParCol = $program->where("code = '".$list['pparent']."'")->find();
        $SubCols = $program->where("pparent = '".$ParCol['code']."'")->order('pprior')->select();
        $this->assign("SubCols", $SubCols);
        foreach($ParCol as &$val){
            $val['code'] = ucfirst($val['code']);   //把首字母大写，出于控制器的命名要求
           }
         $this->assign("ParCol", $ParCol);   //父栏目
         $this->assign("active", $ParCol['code']);   //导航栏
		
		 //分页
		 $essay = M('essay'); 
		 import("ORG.Util.Page");// 导入分页类
		 $count= $essay->where("code='$code'")->count();
		 $Page  = new Page($count,20);   // 每页20条
         $show  = $Page->show();// 分页显示输出
         $showlist = $essay->field('eid, etitle,ebuild')->where("code = '$code'")
              ->order('ebuild desc')->limit($Page->firstRow.','.$Page->listRows)->select();
         $this->assign('page',$show);// 赋值分页输出
         $this->assign('showlist', $showlist);
         $this->assign('PageTitle', $list['pname']);
         $this->display('Index:showlist');
	   }
	  
	}	
}
	    public function content(){
        if( isset($_GET['e']) && is_numeric($_GET['e']) ){
            /////////////// 获取文章
            $eid = $_GET['e'];
            $essay = M('essay');
            $essay->where("eid = $eid")->setInc('etimes');  //阅读次数+1
            $theOne = $essay->field('eid, etitle, efrom, code, edetail, etimes, ebuild')->where("eid = $eid")->find();
            $this->assign('essay', $theOne);
            $this->assign('PageTitle', $theOne['etitle']);

            ////////////// 获取栏目信息
            $program= M('program');
            $list = $program->where("code = '".$theOne['code']."'")->find();
            $this->assign("list", $list);   //当前栏目

            $ParCol = $program->where("code = '".$list['pparent']."'")->find();
            $SubCols = $program->where("pparent = '".$ParCol['code']."'")->order('pprior')->select();
            $this->assign("SubCols", $SubCols);
            foreach($ParCol as &$val){
                $val['code'] = ucfirst($val['code']);   //把首字母大写，出于控制器的命名要求
            }
            $this->assign("ParCol", $ParCol);   //父栏目
            $this->assign("active", $ParCol['code']);   //导航栏

            $this->display();
        }else{
            $this->redirect('index');
        }
		
		
    }
		
 }
 ?>