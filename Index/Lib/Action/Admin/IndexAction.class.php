<?php
	class IndexAction extends Action{
		Public function login(){
			C('LAYOUT_ON',false);
			$this->display();
		}

		Public function verify(){
		    import('ORG.Util.Image');
		    Image::buildImageVerify(1,1,'png','110','40','vcode');
		}

		Public function dologin(){
			$username = I("post.username");
			$password = I("post.password",'','md5');
			$vcode = I("post.vcode",'','md5');

			//验证验证码
			if($_SESSION['vcode']!=$vcode){
				$this->error('验证码错误！',U('login'));
			}

			//验证用户名和密码
			$user = M("user");
			$data = $user->where("username='$username' and password='$password'")->find();
			if($data){
				$this->success('登陆成功！',U('index',''));
			}else{
				$this->error('登陆失败！',U('login'));
			}
		}

		Public function index(){
			$this->display();
		}

	}