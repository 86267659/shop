<?php
	class ProductAction extends CommonAction{
		public function productList(){
			$this->products = D("Product")->relation(true)->where('bid='.I('get.bid','','intval'))->select();
			$this->categories = D("Category")->getTree();
			$this->nodes = join("|",D('Category')->getFather(4));
			$this->display();
		}
	}