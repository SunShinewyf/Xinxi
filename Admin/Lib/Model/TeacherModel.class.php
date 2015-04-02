<?php
    class TeacherModel extends RelationModel{
	   protected $_link=array(
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