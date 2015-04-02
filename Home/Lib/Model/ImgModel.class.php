<?php
      class ImgModel extends RelationModel{
	   protected $_link=array(
	       'Essay'=> array(  
				'mapping_type'=>BELONGS_TO,
				'foreign_key'=>'eid',
				'mapping_name'=>'essay',
				'mapping_fields'=>'etitle',
				//'as_fields'=>'eid',
            ),
	   );
	}
?>