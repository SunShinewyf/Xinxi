<?php
   class DwjlAction  extends Action{
      public function index(){
	     $this->xsjz();
	  }
	  
	   public function xsjz(){
        R('Index/showlist',array(__FUNCTION__));
    }
	   public function hzyjl(){
        R('Index/showlist',array(__FUNCTION__));
    }
   }
?>