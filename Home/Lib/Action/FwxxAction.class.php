<?php
   class FwxxAction  extends Action{
      public function index(){
	     $this->xyh();
	  }
	  
	   public function xyh(){
        R('Index/showlist',array(__FUNCTION__));
    }
	   public function wjxz(){
         if(empty($_GET['f'])||!is_numeric($_GET['f']))
		 {
		    $file=M('file');
			import("ORG.Util.Page");// 导入分页类
			$count=$file->count();
			$Page  = new Page($count,15);   // 每页20条
            $show  = $Page->show();// 分页显示输出
            $files = $file->order('`fbuild` desc')
                ->limit($Page->firstRow.','.$Page->listRows)->select();
		     foreach($files as &$val){
                $size = intval($val['fsize']);
                if($size > 1024*1024){
                    $unit = ' MB';
                    $size = $size / (1024*1024);
                }else{
                    $unit = ' KB';
                    $size = $size / 1024;
                }
                $size = round($size, 1);
                $val['fsize'] = $size.$unit;

            }
            $this->assign('files',$files);// 赋值分页输出
            $this->assign('page',$show);// 赋值分页输出
            $this->assign('PageTitle', '文件列表 下载专区');
            $this->display('file_list'); // 输出模板
		 }else{
		     $file = M('file');
            $fid = $_GET['f'];
            $inc = $file->where("`fid` = $fid")->setInc('ftimes');
            $filename = $file->where("`fid` = $fid")->getField('fname');
           if(false === $inc || false === $filename){
                $this->error('找不到文件', 'wjxz');
            }

            $filePath = './Uploads/Files/'.$filename;
            // 中文可能会出现问题
             if(!file_exists($filePath)){
                $filePath = mb_convert_encoding($filePath, "gbk", "utf-8");
                $filename = mb_convert_encoding($filename, "gbk", "utf-8");
                if(!file_exists($filePath)){
                    $this->error('没有找到文件');
                }
            }
            header("Content-type: application/octet-stream");
            header('Content-Disposition: attachment; filename="'.$filename.'"');
            header("Content-Length: ". filesize($filePath));
            readfile($filePath);
        }
    }
   }

?>