<?php
class LoginAction extends Action {
   public function login(){
  
	    $this->display();
	}
	public function check(){
	  
		if($_POST['aname']==''||$_POST['apassword']==''){
		   $this->error("账户名或密码不得为空！！");
		}else{
		   $aname=$_POST['aname'];
		   $apassword=md5($_POST['apassword']);
		 
		   $admin=M('Admin');
		   $result=$admin->field('`aname`,`apassword`,`aid`,`abuild`')->select();
		 
		   if($aname!=$result[0]['aname']){
		      $this->error("用户名错误！");
		   }	
           if($apassword!=$result[0]['apassword']){
		      $this->error("密码错误！");
		   }
           else{
		      session('aname',$aname);
			  session('apassword',$apassword);
		      $this->success("登录成功！","__APP__/Index/index");
		   
		   }		   
		
		}
		//dump($_POST);
		//exit;
		$this->redirect("__APP__/Index/index");
		
	}
      
}
?>