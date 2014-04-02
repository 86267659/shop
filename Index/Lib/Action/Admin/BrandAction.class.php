<?php
	class BrandAction extends CommonAction{
		public function add(){
			$this->display();
		}

		public function doAdd(){
			$brand = M("Brand");
			if($_FILES['pic']['error']==0){
				import('ORG.Net.UploadFile');
				$upload = new UploadFile();// 实例化上传类
				$upload->thumb = true;
				$upload->thumbMaxWidth = 200;
				$upload->thumbMaxHeight = 100;
				$upload->thumbPrefix = "thumb_";
				$upload->maxSize  = 3145728 ;// 设置附件上传大小
				$upload->allowExts  = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
				$upload->savePath =  './Public/Uploads/Brand/';// 设置附件上传目录
				if(!$upload->upload()) {// 上传错误提示错误信息
					$this->error($upload->getErrorMsg());
				}else{// 上传成功 获取上传文件信息
					$info =  $upload->getUploadFileInfo();
					$_POST['pic'] = $info[0]['savename'];
				}

			}
			if($brand->create()){
				if($brand->add()){
					$this->success('添加品牌成功！');
				}else{
					$this->error('添加失败！');
				}
			}
		}
	}