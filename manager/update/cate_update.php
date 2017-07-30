<?php
	if($_SERVER['REQUEST_METHOD']=="POST"){
		$img	=	$_FILES['image'];
		$name	=	$_POST['category_name'];
		$id		=	$_POST['upid'];
		var_dump($img);
	}
?>