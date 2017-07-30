<?php
	include_once '../controller/operation.inc.php';	
	include_once '../controller/valid.inc.function.php';	
	include_once '../messages.php';	
	$action = $_REQUEST['action'];
	$name   = $_REQUEST['name'];
	$id = $_REQUEST['id'];
	if($action == 1){
		if(checkString($name)&&validNumber($id)){	
			$name = checkString($name);
			$id   = validNumber($id);
			$result = $data->updateDiv($name,$id);
			if($result == true){
				echo $Success_fade;
			}else{
				echo $fail_fade;
			}
		}else{
			echo $fail_fade;
		}
	}
?>