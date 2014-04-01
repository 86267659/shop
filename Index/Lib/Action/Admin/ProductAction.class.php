<?php
	class ProductAction extends Action{
		public function add(){
			$options = M('Category')->order('concat(path,"-",id)')->select();
			$brand[0] = '无品牌';
			foreach($options as $val){
				if($val['type']=='分类'){
					$indent = "";
					$num = count(explode('-',$val['path']));
					for($i=1;$i<$num*2;$i++){
						$indent .= "&nbsp;";
					}
					$data[$val['id']] = $indent.$val['name'];
				}else{
					$brand[$val['id']] = $val['name'];
				}
			}
			$this->cates = $data;
			$this->brands = $brand;
			$this->display();
		}

		public function doAdd(){
			$product = M("Product");
			$pic = M('pic');
			if($id = $product->add($_POST)){

				if($_FILES['face']['error']==0||$_FILES['pic']['error'][0]==0){
					//执行图片上传
					import('ORG.Net.UploadFile');
					$upload = new UploadFile();// 实例化上传类
					if(!file_exists('./Public/Uploads/products/'.md5($id))){
						mkdir('./Public/Uploads/products/'.md5($id),0755,true);
					}
					$upload->thumb = true;
					$upload->thumbMaxWidth = "260";
					$upload->thumbMaxHeight = "260";
					$upload->thumbPrefix = 'thumb_';
					$upload->savePath =  './Public/Uploads/products/'.md5($id)."/";// 设置附件上传目录
					if(!$upload->upload()) {// 上传错误提示错误信息
						//$this->error($upload->getErrorMsg());
					}else{// 上传成功 获取上传文件信息
						$info =  $upload->getUploadFileInfo();

						foreach($info as $val){
							if($val['key']=='face'){
								$pic->add(array('pid'=>$id,'pic'=>$info[0]['savename'],'type'=>0));
							}else{
								$pic->add(array('pid'=>$id,'pic'=>$info[0]['savename'],'type'=>1));
							}
						}
					}

				}

				if(M("productcate")->add(array('pid'=>$id,'cid'=>I('post.cid')))){
					$this->success('添加成功！');
				}
			}else{
				$this->error('添加失败！');
			}
		}


	}