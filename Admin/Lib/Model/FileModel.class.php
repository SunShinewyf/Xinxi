<?php
    class FileModel extends RelationModel{
	   protected $_link=array(
	       'admin'=> array(  
				'mapping_type'=>BELONGS_TO,
				'foreign_key'=>'aid',
				'mapping_name'=>'aid',
				'mapping_fields'=>'aname',
				'as_fields'=>'aname',
            ),
	   );
	}
?>