<?php
	class ProductModel extends RelationModel{
		Protected $_link = array(
				'Category'=>array(
					'mapping_type'=>BELONGS_TO,
					'class_name'=>'Category',
					'foreign_key'=>'cid',
					'mapping_fields'=>'name',
					'as_fields'=>'name:cname',
					),
				'Brand'=>array(
					'mapping_type'=>BELONGS_TO,
					'class_name'=>'Brand',
					'foreign_key'=>'bid',
					'mapping_fields'=>'name',
					'as_fields'=>'name:bname',
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