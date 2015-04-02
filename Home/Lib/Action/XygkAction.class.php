<?php
   class XygkAction  extends Action{
      public function index(){
	     $this->xyjj();
	  }
	   public function xyjj(){
        R('Index/showlist',array(__FUNCTION__));
    }
	   public function xyld(){
          $lead=M('Teacher');
		  $where['kid']="5";
		  $result=$lead->field('`tname`,`tid`')->where($where)->select();
		 // dump($result);
		  //exit;
		  $this->assign('result',$result);
		  $this->display();
    }
	   public function zzjg(){
        R('Index/showlist',array(__FUNCTION__));
    }
	
		  public function information(){
	 
	        $teacher=M('Teacher');
			$where['kid']="5";
			$result=$teacher->field('`tname`,`tid`')->where($where)->select();
	      if(isset($_GET['t']) && is_numeric($_GET['t'])){
		     $tid=$_GET['t'];
		     $teacher=M('Teacher');
			 $where['tid']=$tid;
			 $list=$teacher->field('`tinformation`,`tpic`,`tname`')->where($where)->find();
		
			// dump($list);
			// exit;
			 $this->assign('list',$list);
			 $this->assign('result',$result);
			 $this->display();
		  
		  }
	  }
	
	
	  
   }
?>