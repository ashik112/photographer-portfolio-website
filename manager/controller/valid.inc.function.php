<?php
	function validNumber($number){
		if(isset($number)){
			if(strlen($number)!=0){
				$number = filter_var($number,FILTER_SANITIZE_NUMBER_INT);
				if($number >= 1){
					return $number;
				}else{
					return false;
				}
			}else{
				return false;
			}
		}else{
			return false;
		}
	}
	function checkString($string){
		if(isset($string)){
			if(strlen($string)>=3){
				return  htmlentities($string);
			}else{				
				return false;
			}
		}else{			
			return false;
		}
	}
	
	function checkEmail($email){
		if(isset($email)){
			if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
   				return true;
			}else{
				return false;
			}
		}else{
			return false;
		}
	}	
?>