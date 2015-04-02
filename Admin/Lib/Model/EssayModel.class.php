<?php
    class EssayModel extends RelationModel{
	   protected $_link=array(
	       'program'=> array(  
				'mapping_type'=>BELONGS_TO,
				'foreign_key'=>'code',
				'mapping_name'=>'code',
				'mapping_fields'=>'pname',
				'as_fields'=>'pname',
            ),
			
			   'kind'=> array(  
				'mapping_type'=>BELONGS_TO,
				'foreign_key'=>'kid',
				'mapping_name'=>'kid',
				'mapping_fields'=>'kname',
				'as_fields'=>'kname',
            ),
	   );
	}
?>