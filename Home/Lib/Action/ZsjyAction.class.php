<?php
   class ZsjyAction  extends Action{
      public function index(){
	     $this->bkszs();
	  }
	  
	   public function bkszs(){
        R('Index/showlist',array(__FUNCTION__));
    }
	   public function yjszs(){
        R('Index/showlist',array(__FUNCTION__));
    }
	   public function jyfw(){
        R('Index/showlist',array(__FUNCTION__));
    } 
	
   }
?>