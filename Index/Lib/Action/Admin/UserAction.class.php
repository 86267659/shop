<?php
	class UserAction extends CommonAction{
		public function userList(){
			$this->users = M("user")->select();
			$this->display();
		}

		Public function userAdd(){
			$this->display();
		}

		Public function doAdd(){
			//dump(I());
			$user = D("User");
			$_POST['password'] = I('post.password','','md5');
			if($user->create($_POST)){
				if($user->add()){
					$this->success('添加成功！',U('Admin/User/userList','',''));
				}else{
					$this->error('添加失败！',U('Admin/User/add','',''));
				}
			}
		}
	}