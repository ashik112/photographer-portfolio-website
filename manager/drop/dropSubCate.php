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
		if($getkey[0]=="dropid"){			
			include_once '../controller/operation.inc.php';
			include_once '../controller/valid.inc.function.php';
			$number   = $_GET['dropid'];			
			$id = validNumber($number);
			if(!$id){
				header("location: ../sub_category.php");
				exit();
			}else{
				$img = $data->displaySubcateId($id)[0]['image'];
				$path = "../../site_img/sub_cat_image/$img";
				if(unlink($path)){
					$subresult = $data->deleteSubCate("sub_category","id=",$id);
					if($subresult){
						header("location: ../sub_category.php");
						exit();	
					}else{
						header("location: ../sub_category.php");
						exit();
					}
				}else{
					header("location: ../sub_category.php");
					exit();
				}				
			}				
		}else{
			header("location: ../sub_category.php");
			exit();
		}
	}else{
		header("location: ../sub_category.php");
		exit();
	}	
	
?>
