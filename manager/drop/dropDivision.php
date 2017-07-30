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
				header("location: ../add_division.php?fail");
				exit();
			}			
 			$result = $data->deleteCate("add_division","id=",$id);
 			$result2 = $data->deleteCate("add_sub_division","division_name=",$id);
 			if($result && $result2){
				header("location: ../add_division.php?success");
				exit();
			}else{
				header("location: ../add_division.php?fail");
				exit();
			}
			if($result){
				header("location: ../add_division.php?fail");
				exit();
			}else{
				die("<center><h3>Operation not complited</h3><a href='../category.php'>Click me</a></center>");
			}
		}else{
			header("location: ../add_division.php?fail");
			exit();
		}
	}else{
		header("location: ../add_division.php?fail");
		exit();
	}	
	
?>
