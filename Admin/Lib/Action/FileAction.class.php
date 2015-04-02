<?php
   class FileAction extends CommonAction{
   //显示文件
       public  function showFile(){
	        $file=D('File');
		 	import('ORG.Util.Page');// 导入分页类
			$count=$file->count();
			$page = new Page($count,4);// 实例化分页类 传入总记录数和每页显示的记录数
			$show=$page->show();
			$list=$file->relation(true)->limit($page->firstRow.','.$page->listRows)->select();
			$this->assign('list',$list);
			$this->assign('show',$show);
	        $this->display();
	   }
	   
	 //添加文件
	   public function addFile(){
	       	    $file=M('File');
				$file->create();
                import('ORG.Net.UploadFile');
				$upload = new UploadFile();// 实例化上传类
				$upload->saveRule = '';
				$upload->maxSize  = 3145728 ;// 设置附件上传大小
				$upload->savePath =  './Uploads/Files/';// 设置附件上传目录
				if(!$upload->upload()) {// 上传错误提示错误信息
				$this->error($upload->getErrorMsg());
				}else{// 上传成功 获取上传文件信息
					$info =  $upload->getUploadFileInfo();
				}
				 $file->fname=$info[0]['savename'];
				 $file->fsize=$info[0]['size'];
				 $file->fbuild=date("Y-m-d H:i:s");
				 $res=$file->add();
				 if($res){
				    $this->success("文件添加成功！");
				 }else{
				     $this->error("文件添加失败");
				 }
	   }
	   
   //删除文件
        public function deleteFile(){
	       $file=M('File');
		   $id=$_GET['fid'];
		   $where['fid']=$id;
		   $result=$file->where($where)->find();
		   if(!empty($result)){
		       if($file->delete($id)){
			      unlink('./Uploads/Files/'.$result['fname']);
				  $this->success("文件删除成功！");
			   }else{
			       $this->error("文件删除失败！"); 
			   }
		   }   
	   }
   }
?>