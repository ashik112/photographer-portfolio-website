<?php
	session_start();
	if(!isset($_SESSION['id'])&&!isset($_SESSION['USER'])){
		header('location: ../index.php');
		exit();
	}
	if($_SESSION['role']!="ADMIN"):
		header('location: ../updata_img.php');
		exit();
	endif;
	if(count($_GET)==2):
		$id = $_GET['img_id'];
		$urlid = $_GET['backid'];
		include '../controller/operation.inc.php';
		$opt = new Operation();		
		if($opt->dropImgdata($id)==true){
			header("location: ../updata_img.php?imgid=$urlid?Success");
		}else{
			header("location: ../updata_img.php?imgid=$urlid?Fail_to_delete");
		}
		
	else:
		header('location: ../home.php');
		exit();
	endif;

?>