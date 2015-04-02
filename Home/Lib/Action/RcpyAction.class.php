<?php
     class RcpyAction  extends Action{
      public function index(){
	     $this->bksjy();
	  }
	  

	   public function bksjy(){
        R('Index/showlist',array(__FUNCTION__));
    }
	   public function yjsjy(){
        R('Index/showlist',array(__FUNCTION__));
    } 
	
   }
?>