<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {
    public function index(){
    	$data = D("Product")->relation(true)->where('ishot=2')->select();
    	$this->products = $data;
    	$this->display();
    }
}