<?php
   class XydtAction  extends Action{
      public function index(){
	     $this->tzgg();
	  }
	  
	   public function tzgg(){
        R('Index/showlist',array(__FUNCTION__));
    }
	
	   public function xyxw(){
        R('Index/showlist',array(__FUNCTION__));
    }
	 
	   public function ywgk(){
        R('Index/showlist',array(__FUNCTION__));
    } 
	
	   public function xyzt(){
        R('Index/showlist',array(__FUNCTION__));
    } 
	
   }

?>