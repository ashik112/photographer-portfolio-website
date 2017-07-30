<?php
	session_start();
	if(!isset($_SESSION['id'])&&!isset($_SESSION['USER'])){
		header('location: ../index.php');
		exit();
	}
	if($_SESSION['role']!="ADMIN"):
		header('location: ../home.php');
		exit();
	endif;
	$getkey = array_keys($_GET);
	if(count($getkey)==1){
		if($getkey[0]=="drop"){			
			include_once '../controller/operation.inc.php';
			include_once '../controller/valid.inc.function.php';
			$number   = $_GET['drop'];
			$id = validNumber($number);
			if($id){
				$setdrop = $data->dropWholeData($id);
				if($setdrop){
					header("location: ../add_shop.php?Delete_successfully");
				}else{
					header("location: ../add_shop.php?fail_to_delete");
				}
			}else{
				header("location: ../add_shop.php");
				exit();
			}
		}else{
			header("location: ../add_shop.php");
			exit();
		}
	}else{
		header("location: ../add_shop.php");
		exit();
	}	
	
?>
