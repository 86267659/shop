<?php
	class UserModel extends RelationModel{
		public function updateLogin($id){
			$data['logintime'] = time();
			$data['loginip'] = get_client_ip();
			$data['id'] = $id;
			$this->save($data);
		}
	}