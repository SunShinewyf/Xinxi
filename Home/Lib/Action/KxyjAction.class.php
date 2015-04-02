<?php
   class KxyjAction  extends Action{
      public function index(){
	     $this->kyfx();
	  }
	  
	   public function kyfx(){
        R('Index/showlist',array(__FUNCTION__));
    }
	   public function cgyzl(){
        R('Index/showlist',array(__FUNCTION__));
    }
	   public function kyjd(){
        R('Index/showlist',array(__FUNCTION__));
    } 
	
	   public function kyxm(){
        R('Index/showlist',array(__FUNCTION__));
    } 
   }
?>
