<?php
   class ImgAction extends CommonAction{
    public function index(){
	    $this->display('Img/addImg');
	}
   
   //展示图片
       public function showImg(){
	        $img=M('Img');
			import('ORG.Util.Page');// 导入分页类
			$count=$img->count();
			$page = new Page($count,8);// 实例化分页类 传入总记录数和每页显示的记录数
			$show=$page->show();
		    //dump($show);
			//exit;
			$list=$img->limit($page->firstRow.','.$page->listRows)->select();
			$this->assign('list',$list);
			$this->assign('show',$show);
	        $this->display();
	   }  
	  
	//添加图片
	  public function add(){
	          //dump($_POST);
			  //exit;
	            $img=M('Img');
				$img->create();
                import('ORG.Net.UploadFile');
				$upload = new UploadFile();// 实例化上传类
				$upload->maxSize  = 3145728 ;// 设置附件上传大小
				$upload->allowExts  = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
				$upload->savePath =  './Uploads/Pictures/images/';// 设置附件上传目录
				if(!$upload->upload()) {// 上传错误提示错误信息
				$this->error($upload->getErrorMsg());
				}else{// 上传成功 获取上传文件信息
					$info =  $upload->getUploadFileInfo();
				}
			//	dump($info);
			//	exit;
			     $img->idescribe=$_POST['idescribe'];
				 $img->ititle=$_POST['ititle'];
				 $img->iname=$info[0]['savename'];
				 $img->idate=date("Y-m-d H:i:s");
				 $res=$img->add();
				 if($res){
				    $this->success("图片添加成功！","__APP__/Img/showImg");
				 }else{
				     $this->error("图片添加失败");
				 }
	  
	  }
	  
	//删除图片
	 public function deleteImg(){
	      $img=M('Img');
		  $id=$_GET['iid'];
		  $where['iid']=$id;
		  $result=$img->where($where)->find();
		//  $result=$img->where(" `iid`= $id ")->find();
		  if(!empty($result))
		  {
		      if($img->delete($id)){
			     unlink('./Uploads/Pictures/images/'.$result['iname']);
				 $this->success("删除成功！");
			  }else{
			     $this->error("删除失败！");
			  }
		  }
	 }  
	 
	 
	 
	 
   }
?>	   