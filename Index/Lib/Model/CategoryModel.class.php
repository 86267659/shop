<?php
	class CategoryModel extends RelationModel{
		protected $_link = array(
				'Category'=>array(
						'mapping_type'=>HAS_MANY,
						'class_name'=>'Category',
						'foreign_key'=>'pid',
						'parent_key'=>'pid',
						'mapping_fields'=>'id,name'
					)
			);


		public function getTree($data,$pid=0){
			if(empty($data)){
				$data = $this->select();
			}
			foreach($data as $key=>$value){
				if($value['pid']==$pid){
					$cate[$key] = $value;
					$cate[$key]['sons'] = $this->getTree($data,$value['id']);
				}
			}
			return $cate;
		}


		public function getFather($sid){
			static $names;
			$names[] = $this->where('id='.$sid)->getField("name");
			$pid = $this->where('id='.$sid)->getField("pid");
			if($pid!=0){
				$this->getFather($pid);

			}
			return $names;
		}


	}