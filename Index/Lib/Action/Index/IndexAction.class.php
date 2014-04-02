<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends CommonAction {
    public function index(){
    	$data = D("Product")->relation(true)->where('ishot=1')->select();
    	$this->products = $data;
    	$this->brands = M("brand")->select();
    	$this->display();
    }
}