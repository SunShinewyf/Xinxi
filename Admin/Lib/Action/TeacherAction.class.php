<?php
    class TeacherAction extends CommonAction{

	//显示教师名录
	     
         public function showTeacher(){
		    $teacher=D('Teacher');
			import('ORG.Util.Page');// 导入分页类
			$count=$teacher->count();
			$page = new Page($count,12);// 实例化分页类 传入总记录数和每页显示的记录数
			$show=$page->show();
			$list=$teacher->relation(true)->limit($page->firstRow.','.$page->listRows)->select();
			$this->assign('list',$list);
			$this->assign('show',$show);
		    $this->display();
		 
		 }	
	
	//添加新的教师
	   public function addTeacher(){
	       $teacher=M('Teacher');
		   $cname=$teacher->field('cname')->select();
		   //dump($cname);
		  // exit;
		   $this->assign('cname',$cname);
	       $this->display();
	   }  
  
	   
	   public function add(){
	       $teacher=M('Teacher');
		    import('ORG.Net.UploadFile');
			$upload = new UploadFile();// 实例化上传类
			$upload->maxSize  = 3145728 ;// 设置附件上传大小
			$upload->savePath =  './Uploads/Teacher/';// 设置附件上传目录
			if(!$upload->upload()) {// 上传错误提示错误信息
			$this->error($upload->getErrorMsg());
			}else{// 上传成功 获取上传文件信息
				$info = $upload->getUploadFileInfo();
			} 
		    $result=$teacher->create();
		    $teacher->tpic=$info[0]['savename'];
		    $teacher->tbuild=date("Y-m-d H:i:s");
		    $cname=$_POST['cname'];
			$teacher->cname=$this->trimall($cname);
			//dump($cname);
			//exit;
		    if($result){
			  if($teacher->add()){
			     $this->success("添加成功！","__APP__/Teacher/showTeacher");
			  }else{
			     $this->error("添加失败！");
			  }
		   
		   }
	   }	   
 

	//删除现有名录
	     public function delTeacher(){
	      $teacher=M('Teacher');
		  $id=$_GET['tid'];
		  $where['tid']=$id;
		  $result=$teacher->where($where)->find();
		  if(!empty($result)){
		     if($teacher->delete($id)){
			     unlink('./Uploads/Teacher/'.$result['tpic']);
			    $this->success("教师删除成功！");
			 }else{
			     $this->error("教师删除失败！");
			 }
		  } 
	  }
	  
	//教师信息的再编辑
	   public function updateTeacher(){	 
	       $teacher=M('Teacher');
		   $cname=$teacher->field('cname')->select();
		   //dump($cname);
		  // exit;
		   $id=$_GET['tid'];
		   $where['tid']=$id;
		   $data=$teacher->where($where)->find();
		  // dump($data);
		   //exit;
		   $this->assign('cname',$cname);
		   $this->assign('data',$data);
		   $this->display();  
	   }
	 
	//教师再编辑信息的保存
	   public function save(){
	      $teacher=M('Teacher');
		  $result=$teacher->create();
		 
		  if($result){
		     if($teacher->save()){
			     $this->success("信息更新成功！","__APP__/Teacher/showTeacher");
			 }else{
			     $this->error("信息更新失败！");
			 }
	   }
	}   
}
?>
