<?php
	class CommonAction extends Action{
		public function _initialize(){
			//$data = D('Category')->relation(true)->where('type=1 and pid=0')->order('concat(path,"-",id)')->limit(4)->select();
			$cate = D("Category");
			$data = $cate->select();
			$data = $cate->getTree($data);
			$this->menus = $data;
		}
	}