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
				header("location: ../category.php");
				exit();
			}
			$info = $data->ListCategorybyid($id);
			$subinfo = $data->SubCategorybycate($id);
			$file = $info[0]['image'];
			$path = "../../site_img/cat_image/$file";			
			foreach($subinfo as $subcate){
				$subPath = "../../site_img/sub_cat_image/".$subcate['image'];
				unlink($subPath);
				$subresult = $data->deleteSubCate("sub_category","category_id=",$id);
			}
 			$result = $data->deleteCate("add_category","id=",$id);
			if($result){
				if (unlink($path)){
					header("location: ../category.php");
					exit();
				}
			}else{
				die("<center><h3>Operation not complited</h3><a href='../category.php'>Click me</a></center>");
			}
		}else{
			header("location: ../category.php");
			exit();
		}
	}else{
		header("location: ../category.php");
		exit();
	}	
	
?>
