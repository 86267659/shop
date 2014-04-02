<?php
	class CategoryAction extends Action{
		public function add(){
			$options = M('Category')->order('concat(path,"-",id)')->select();
			$data[0] = '顶级分类';
			foreach($options as $val){
				$indent = "";
				$num = count(explode('-',$val['path']));
				for($i=1;$i<$num*2;$i++){
					$indent .= "&nbsp;";
				}
				$data[$val['id']] = $indent.$val['name'];
			}
			$this->options = $data;
			$this->display();
		}

		Public function doAdd(){
			$name = I('post.name','');
			$pid = I('post.pid','','intval');
			$cate = M('Category');
			if($pid==0){
				$path = '0';
			}else{
				$path = $cate->where('id='.$pid)->getField('path');
				$path = $path."-".$pid;
			}
			$data['name'] = $name;
			$data['pid'] = $pid;
			$data['path'] = $path;
			if($cate->data($data)->add()){
				$this->success('添加成功',U('Category/cateList',''));
			}else{
				$this->error('添加失败！',U('Category/add'));
			}		
		}
	}