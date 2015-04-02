<?php
    	class CommonAction extends Action{
		   protected function _initialize(){
			//session_start();
			//dump($_SESSION);
			//exit;
            if(!isset($_SESSION['aname']) || $_SESSION['aname']==''){
		                // 尚未登录，清楚该用户所有session
            $this->redirect('Login/login');
        }
    }
      
		//获取栏目信息
		 protected function getColumn(){
        $program = M('Program');
        $ParCol = $program->field('code, pname')->where("pparent = '0'")->select();    //父级栏目
        //dump($ParCol);
		//exit;
        $SubList = array();
        foreach( $ParCol as $ParVal){
            $theCode = $ParVal['code'];
            $arr = array();
            $SubCol = $program->field('code, pname')->where("pparent = '$theCode'")->select();
            foreach( $SubCol as $SubVal){
                $arr[$SubVal['code']] = $SubVal['pname'];
            }
            $SubList[$theCode] = $arr;
        }
        $json_SubList = json_encode($SubList);
        $this->assign('sublist', $json_SubList);
        $this->assign('parcol', $ParCol);   //用来选择父级栏目
    }
	
     protected function getTkind(){
	       $teacher=M('Teacher');
		   $kind=$teacher->field('tkind')->select();
		   $this->assign('kind',$kind);
		 //  dump($kind);
		 //  exit;
	 }
	
	    protected function trimall($str){
			   $qian=array(" ","　","\t","\n","\r");$hou=array("","","","","");
               return str_replace($qian,$hou,$str);
			}
	}



?>