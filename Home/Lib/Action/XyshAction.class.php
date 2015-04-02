<?php
   class XyshAction  extends Action{
      public function index(){
	     $this->djgz();
	  }
	  
	   public function djgz(){
        R('Index/showlist',array(__FUNCTION__));
    }
	   public function txgz(){
        R('Index/showlist',array(__FUNCTION__));
    }
	
	   public function xygh(){
        R('Index/showlist',array(__FUNCTION__));
    }
   }
?>