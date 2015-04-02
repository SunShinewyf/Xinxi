<?php
    class AdminAction extends CommonAction{
	
  //显示页面
	    public function updateInfo(){
		
		     $this->display();
		}
	
	     public function change(){
			$pwd = md5($_POST['apassword']);
			$newpassword=md5($_POST['newpassword']);
		     if(isset($_POST)){
		     $admin=M('Admin');
			 $result=$admin->find();
			 if(empty($pwd)|| $pwd != $result['apassword']){
			      $this->error("旧密码不正确！");
			   }else{
			      $result['apassword']=$newpassword;
				  $result['abuild']=date("Y-m-d H:i:s");
			       $res = $admin->save($result);
                if(! $res){
                    $this->error('保存新密码失败，请重试！');
                }else{
                    $this->success('修改密码成功！');
			    }
		    }
	    }
	 }
}
?>
