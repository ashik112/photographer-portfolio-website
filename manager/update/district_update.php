<?php
	session_start();
	if(!isset($_SESSION['id'])&&!isset($_SESSION['USER'])){
		header('location: ../index.php');
		exit();
	}
	if($_SERVER['REQUEST_METHOD']=="POST"){
		include '../controller/valid.inc.function.php';
		include '../controller/operation.inc.php';
		include '../messages.php';
		$id 	= $_POST['id'];
		$name 	= $_POST['name'];
		$dv_id	= $_POST['dv_id'];
		if(validNumber($id)&&validNumber($dv_id)&&checkString($name)){
			$id = validNumber($id);
			$dv_id 	=	validNumber($dv_id);
			$name	=	checkString($name);
			$rowinfo = $data->updateDistrict($name,$dv_id,$id);
			if($rowinfo){
				echo $Success_fade;
			}else{
				echo $fail_fade;
			}
		}else{
			echo $invalid_fade;
		}
	}
?>