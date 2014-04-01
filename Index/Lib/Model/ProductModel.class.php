<?php
	class ProductModel extends RelationModel{
		Protected $_link = array(
				'Productcategory'=>array(
					'mapping_type'=>HAS_MANY,
					'class_name'=>'Productcategory',
					'foreign_key'=>'pid',
					'mapping_fields'=>'cid',
					//'as_fields'=>'cid:cname',
					//'condition'=>'type=1',
					),
				'Pic'=>array(
					'mapping_type'=>HAS_MANY,
					'class_name'=>'Pic',
					'foreign_key'=>'pid',
					'mapping_fields'=>'pic',
					'condition'=>'type=1'
					),
				'Face'=>array(
					'mapping_type'=>HAS_ONE,
					'class_name'=>'Pic',
					'foreign_key'=>'pid',
					'mapping_fields'=>'pic',
					'condition'=>'type=0',
					'as_fields'=>'pic:face'
					),
			);
	}