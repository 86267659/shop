<?php
	class CommonAction extends Action{
		public function _initialize(){
			$username = session('username');
			if(empty($username)){
				U('Admin/Index/Login','','',true);
			}
		}
	}