<?php
	function p($var){
		echo "<pre>";
		var_dump($var);
		echo "</pre>";
	}

	function getOptions($options,$name,$selected=0){
		$str = "<select style='font-size:15px;' class='form_select' name='$name'>";
		foreach($options as $key=>$val){
			if($key==$selected){
				$s = "selected";
			}else{
				$s = "";
			}
			$str .= "<option value='$key' ".$s.">$val</option>";
		}
		$str .= "</select>";
		return $str;
	}