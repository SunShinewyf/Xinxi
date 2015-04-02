<?php
   class SzdwAction  extends Action{
      public function index(){
	     $this->dsdw();
	  }
	  
	   public function dsdw(){
           $teacher=M('Teacher');
			$list=$teacher->field('`tid`,`tname`')->where('kid="3"')->select();
		    $this->assign('list',$list);
			$this->display('glzj');
	  
    }
	   public function jsml(){ 
		   
		    $teacher=M('Teacher');
			$where['kid']="1";
		    $list=$teacher->Distinct(true)->where($where)->field('cname')->group("cname")->select();
			$courselen=count($list);
			
		    for($i=0;$i<$courselen;$i++){
		      $result[$i]['cname']=$list[$i]['cname'];			  
			  $where['cname']=$list[$i]['cname'];
			 // dump($where);
		
			  $result[$i]['data']=$teacher->field(array('tid','tname'))->where($where)
			    ->order('tid desc')->select();
				
		   }
		    $result[$i-1]['mark']=1;
			//dump($result);
			//exit;
		    $this->assign('result',$result);
		    $this->display('teacher_list');
	   
    }


	public function jsfc(){   
		$teacher=M('Teacher');
	    $list=$teacher->field('`tid`,`tname`')->where('kid="2"')->select();
		$this->assign('list',$list);
	    $this->display('glzj');
    } 
	
	   public function glzj(){ 
	      
		  $teacher=M('Teacher');
		  $list=$teacher->field('`tid`,`tname`')->where('kid="4"')->select();
		  $this->assign('list',$list);
	      $this->display();
		   
		   
    } 
	  public function Get_info(){
	       // dump($_GET);
			//exit;
	        $teacher=M('Teacher');
			//dump($name);
			//exit;
	      if(isset($_GET['t']) && is_numeric($_GET['t'])){
		     $tid=$_GET['t'];
		     $teacher=M('Teacher');
			 $where['tid']=$tid;
			 $list=$teacher->field('`tinformation`,`tpic`,`tname`')->where($where)->find();
			// dump($list);
			// exit;
			 $this->assign('list',$list);

			 $this->display();
		  
		  }
	  }
	
	
	

   }
?>