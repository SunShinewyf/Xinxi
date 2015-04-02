<?php
//查看所有文章
   class EssayAction extends CommonAction{
   //显示所有文章
       public function showEssay(){
            
            $essay=D('Essay');
			$select=$_GET['select'];
			$key=$_GET['key'];
			if(isset($select))
			{
				switch($select)
				{
					case 'title':
					   $select='标题';
					   $where="`etitle` like '%$key%' ";
					   break;
					case 'resource':
					   $select='来源';
					   $where=" `efrom` like '%$key%' ";
					   break;
					default: break;
				}
				
			}
			$result=$_GET['result'];
			if(isset($result))
			{
				switch($result){
					case 'time':
					$order=' `ebuild` desc';
					break;
					case 'num':
					$order='`etimes` desc';
					break;
					case 'refresh':
					$order='`erevise` desc';
				}
			}
			import('ORG.Util.Page');// 导入分页类
			$count=$essay->count();
			$page = new Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数
			$show=$page->show();
			$list=$essay->relation(true)->limit($page->firstRow.','.$page->listRows)->where($where)->order($order)->select();
			$this->assign('list',$list);
			$this->assign('show',$show);
		    $this->getColumn();
	        $this->display();
	   }
	   
//添加新文章  
        public function buildEssay(){
			$this->getColumn();
		    $this->display();
		}
		 
		 public function add(){
		    $essay=M('Essay');
			$kid=$_POST['kid'];
			$par=$_POST['cpar'];
			$code=$_POST['code'];
			$detail=$_POST['edetail'];
			$data['kid']=$_POST['kid'];
			$data['edetail'] = $_POST['edetail'];
            $data['etitle'] = $_POST['etitle'];
            $data['efrom'] = $_POST['efrom'];
            $data['code'] = $_POST['code'];
		if($kid=="6"){
		    $where['pparent']=$par;
			$where['code']=$code;
			$program=M('Program');
			$db=$program->where($where)->setField("pdescribe",$detail);
			$result=$essay->create($data);
			if($result && $db){
			   $essay->ebuild=date("Y-m-d H:i:s");
			   $essay->erevise=date("Y-m-d H:i:s");
		
			   if($essay->add()){
			      $this->success("添加文章成功!","__APP__/Essay/showEssay");
			   }else{
			      $this->error("添加文章失败");
			   }
			}
		 }
		 if($kid=="7")
		 {
		 	$result=$essay->create($data);
		    if($result){
			$essay->ebuild=date("Y-m-d H:i:s");
		    $essay->erevise=date("Y-m-d H:i:s");
			   if($essay->add()){
			      $this->success("添加文章成功!","__APP__/Essay/showEssay");
			   }else{
			      $this->error("添加文章失败");
			   }
		 }
     }
}
 //删除文章
       public function delEssay(){  
	      $essay=M('Essay');
		  $program=M('Program');
		  $id=$_GET['eid'];
		 // dump($id);
		  //exit;
		  $where['eid']=$id;
		  $result=$essay->where($where)->find();
		  $kid=$result['kid'];
		  $code=$result['code'];
		  if($kid=="6"){
		     $where['code']=$code;
		     $db=$program->where($where)->setField("pdescribe",null);
		  if(!empty($result)&& $db){
		     if($essay->delete($id)){
			    $this->success("文章删除成功！");
			 }else{
			     $this->error("文章删除失败！");
			 }
		  } 
		}
		if($kid=="7"){
		   	  if(!empty($result)){
		     if($essay->delete($id)){
			    $this->success("文章删除成功！");
			 }else{
			     $this->error("文章删除失败！");
			 }
		}
	  }
   }
   
//文章的再编辑
     public function updateEssay(){
	       $essay=M('Essay');
		   $id=$_GET['eid'];
		   $where=array("eid"=>$id);
		   $data=$essay->where($where)->find();
		   $this->assign('data',$data);
		   $this->getColumn();
		   $this->display();
	   }
//保存新编辑的文章
	public function save() {
		$detail = $_POST ['edetail'];
		$data ['eid'] = $_POST ['eid'];
		$data ['kid'] = $_POST ['kid'];
		$data ['edetail'] = $_POST ['edetail'];
		$data ['etitle'] = $_POST ['etitle'];
		$data ['efrom'] = $_POST ['efrom'];
		$data ['code'] = $_POST ['code'];
		$id = $_POST ['eid'];
		$essay = M ( 'Essay' );
		$where ['eid'] = $id;
		$result = $essay->field ( 'kid,code' )->where ( $where )->find ();
		$kid = $result ['kid'];
		$code1 = $result ['code'];
		$code2 = $_POST ['code'];
		if ($kid == "6") {
			$program = M ( 'Program' );
			if ($code1 == $code2) {
				$where ['code'] = $code1;
				$db = $program->where ( $where )->setField ( "pdescribe", $detail );
				$re = $essay->create ( $data );
				if ($re && $db) {
					$essay->erevise = date ( "Y-m-d H:i:s" );
					if ($essay->save ()) {
						$this->success ( "更新文章成功!", "__APP__/Essay/showEssay" );
					} else {
						$this->error ( "更新文章失败" );
					}
				}
			} else {
				
				$db1 = $program->where ( "`code`='$code1'" )->setField ( "pdescribe", null );
				$db2 = $program->where ( "`code`='$code2'" )->setField ( "pdescribe", $detail );
				$re = $essay->create ( $data );
				
				
				if ($re && $db1 && $db2) {
					$essay->erevise = date ( "Y-m-d H:i:s" );
					if ($essay->save ()) {
						$this->success ( "更新文章成功!", "__APP__/Essay/showEssay" );
					} else {
						$this->error ( "更新文章失败" );
					}
				}
			}
		}
		
		if ($kid == "7") {
			$re = $essay->create ( $data );		
			if ($re) {
				$essay->erevise = date ( "Y-m-d H:i:s" );
				if ($essay->save ()) {
					$this->success ( "更新文章成功!", "__APP__/Essay/showEssay" );
				} else {
					$this->error ( "更新文章失败" );
				}
			}
		}
	}
}
?>

	      