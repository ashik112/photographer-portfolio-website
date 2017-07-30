<?php
 	if(basename($_SERVER['PHP_SELF']) == basename(__FILE__)){
		die("<center><h3>Forbidden...</h3><h4>Sorry, Direct access not allowed<h4></center>");
	}
	require_once 'class.config.inc.php';
	class DatabaseManage{
		private $connection;
		public function __construct($host,$dbname,$user,$password){
			$dbmanager = new MyDBConnection;
			$this->connection = $dbmanager->connection($host,$dbname,$user,$password);
			return $this->connection;
		}
		public function getAllData($table){
			$sql   = "SELECT * FROM $table";
			$query = $this->connection->prepare($sql);
			$query->execute();
			$display = $query->fetchAll(PDO::FETCH_ASSOC);
			$counter =  $query->rowCount();
			if($counter>0){
				return $display;
			}else{
				return "The $table is empty";
			}
		}
		public function dropData($table,$condition,$value){
			$sql   = "DELETE FROM $table WHERE $condition ?";
			$query = $this->connection->prepare($sql);			
			$query->execute(array($value));
			$counter =  $query->rowCount();
			if($counter>0){
				return true;
			}else{
				return false;
			}
		}
		public function getData($columns,$table){	
			$sql = "SELECT $columns FROM $table ORDER BY id DESC";
			$query = $this->connection->prepare($sql);
			$query->execute();
			$display = $query->fetchAll(PDO::FETCH_ASSOC);
			$counter = $query->rowCount();
			if($counter>0){
				return $display;
			}else{
				return false;
			}
		}
		public function getCountDataCondition($column,$table,$condition,$values){
			$sql = "SELECT count($column) FROM $table WHERE $condition ?";
			$Value = array($values);
			$query = $this->connection->prepare($sql);
			$query->execute($Value);
			$display = $query->fetch(PDO::FETCH_ASSOC);
			$counter = $query->rowCount();
			if($counter>0){
				return $display;
			}else{
				return false;
			}
		}
		
		public function LimitDataCondition($table,$condition,$values,$prolimit,$postlimit){
			$sql = "SELECT * FROM $table WHERE $condition ? ORDER BY `id` DESC LIMIT $prolimit,$postlimit";
			$Value = array($values);
			$query = $this->connection->prepare($sql);
			$query->execute($Value);
			$display = $query->fetchALL(PDO::FETCH_ASSOC);
			$counter = $query->rowCount();
			if($counter>0){
				return $display;
			}else{
				return false;
			}
		}
		
		public function countDataCondition($table,$condition,$values){
			$sql = "SELECT * FROM $table WHERE $condition ?";
			$Value = array($values);
			$query = $this->connection->prepare($sql);
			$query->execute($Value);
			$display = $query->fetchALL(PDO::FETCH_ASSOC);
			$counter = $query->rowCount();
			if($counter>0){
				return $counter;
			}else{
				return false;
			}
		}
		
		public function getDataCondition($columns,$table,$condition,$values){
			$sql = "SELECT $columns FROM $table WHERE $condition ?";
			$Value = array($values);
			$query = $this->connection->prepare($sql);
			$query->execute($Value);
			$display = $query->fetchALL(PDO::FETCH_ASSOC);
			$counter = $query->rowCount();
			if($counter>0){
				return $display;
			}else{
				return false;
			}
		}
		public function getSingleDataCondition($columns,$table,$condition,$values){
			$sql = "SELECT $columns FROM $table WHERE $condition ?";
			$Value = array($values);
			$query = $this->connection->prepare($sql);
			$query->execute($Value);
			$display = $query->fetch(PDO::FETCH_ASSOC);
			$counter = $query->rowCount();
			if($counter>0){
				return $display;
			}else{
				return false;
			}
		}
		public function getDataDoubleCondition($columns,$table,$condition1,$values,$condition2,$Value2){
			$sql = "SELECT $columns FROM $table WHERE $condition1 ? AND $condition2 ?";
			$Value = array($values,$Value2);
			$query = $this->connection->prepare($sql);
			$query->execute($Value);
			$display = $query->fetchALL(PDO::FETCH_ASSOC);
			$counter = $query->rowCount();
			if($counter>0){
				return $display;
			}else{
				return false;
			}
		}
		
		public function getDataLimitDB($columns,$table,$condition1,$values,$condition2,$Value2,$prolimit,$postlimit){
			$sql = "SELECT $columns FROM $table WHERE $condition1 ? AND $condition2 ? ORDER BY `id` DESC LIMIT $prolimit,$postlimit";
			$Value = array($values,$Value2);
			$query = $this->connection->prepare($sql);
			$query->execute($Value);
			$display = $query->fetchALL(PDO::FETCH_ASSOC);
			$counter = $query->rowCount();
			if($counter>0){
				return $display;
			}else{
				return false;
			}
		}
		
		public function countByDoubleCondition($table,$condition1,$values,$condition2,$Value2){
			$sql = "SELECT * FROM $table WHERE $condition1 ? AND $condition2 ?";
			$Value = array($values,$Value2);
			$query = $this->connection->prepare($sql);
			$query->execute($Value);
			$display = $query->fetchALL(PDO::FETCH_ASSOC);
			$counter = $query->rowCount();
			if($counter>0){
				return $counter;
			}else{
				return false;
			}
		}
		public function matchForLogin($columns,$table,$matchcols,$matchvalues){
			if(is_array($matchcols)&&is_array($matchvalues)&&count($matchcols)==2&&count($matchvalues)==2){				
				list($a, $b) = $matchcols;
				$sql = "SELECT $columns FROM $table WHERE $a = ? AND $b = ?";			
				$query = $this->connection->prepare($sql);
				$query->execute($matchvalues);
				$display = $query->fetch(PDO::FETCH_ASSOC);
				$counter = $query->rowCount();
				if($counter==1){
					return $display;
				}else{
					return false;
				}
			}
		}
		public function getSingleData($columns,$table,$condition,$values){
			$sql = "SELECT $columns FROM $table WHERE $condition ?";
			$Value = array($values);
			$query = $this->connection->prepare($sql);
			$query->execute($Value);
			$display = $query->fetch(PDO::FETCH_ASSOC);
			$counter = $query->rowCount();
			if($counter==1){
				return $display;
			}else{
				return false;
			}
		}
		public function insertData($table,$columns,$values){
			$array_cols = explode(",",$columns);
			$array_values = explode(",",$values);
			$count_cols = count($array_cols);
			$count_values = count($array_values);
			$statement = "";
			if($count_cols == $count_values){
				for($i=0;$i<$count_cols;$i++){
					$statement = $statement."?,";
				}
				$sql_value = rtrim($statement,",");
				$sql = "INSERT INTO $table($columns) VALUES ($sql_value)";
				$query = $this->connection->prepare($sql);
				$query->execute($array_values);
				$counter = $query->rowCount();
				$last_id = $this->connection->lastInsertId();
				if($counter>0){
					return $last_id;
				}else{
				return false;
				}
			}else{
				return false;
			}			
		}
		
		public function insertDataLong($table,$columns,$values){
			$array_cols = explode(",",$columns);
			$array_values = explode("*",$values);
			$count_cols = count($array_cols);
			$count_values = count($array_values);
			$statement = "";
			if($count_cols == $count_values){
				for($i=0;$i<$count_cols;$i++){
					$statement = $statement."?,";
				}
				$sql_value = rtrim($statement,",");
				$sql = "INSERT INTO $table($columns) VALUES ($sql_value)";
				$query = $this->connection->prepare($sql);
				$query->execute($array_values);
				$counter = $query->rowCount();
				$last_id = $this->connection->lastInsertId();
				if($counter>0){
					return $last_id;
				}else{
				return false;
				}
			}else{
				return false;
			}			
		}
		
		public function updateData($table,$columns,$value,$condition,$id){
			$columns_array = explode(",",$columns);
			$value_array = explode(",",$value);
			$statement = "";
			if(count($value_array) == count($columns_array)){				
				for($i = 0; $i<count($columns_array); $i++){
					$statement = "$statement $columns_array[$i] = ?,";
				}
				$statement = rtrim($statement,",");
				$sql = "UPDATE $table SET $statement WHERE $condition ?";
				$query = $this->connection->prepare($sql);				
				$input_arr   = array_push($value_array,$id);
				$query->execute($value_array);
				$counter = $query->rowCount();
				if($counter>0){
						return true;
					}else{
					return false;
				}
			}else{
				return false;
			}
		}
		
		function joinTowTableCondition($one,$colums_one,$two,$colums_two,$condition,$match,$data,$type="INNER"){
			if(is_array($colums_one)&&is_array($colums_two)&&is_array($condition)&&count($condition)==2){
				$part = "";
				list($a, $b) = $condition;
				foreach($colums_one as $colsone){
					$part = $part." ".$one.".".$colsone.", ";
				}
				foreach($colums_two as $colsone){
					$part = $part." ".$two.".".$colsone.",";
				}
				$statement = rtrim($part,",");
				$sql = 	"SELECT $statement FROM $one $type JOIN $two ON $one.$a=$two.$b WHERE $match ? LIMIT 1";  $query = $this->connection->prepare($sql);
				$query->execute(array($data));
				$display = $query->fetch(PDO::FETCH_ASSOC);
				$counter =  $query->rowCount();
				if($counter>0){
					return $display;
				}else{
					return false;
				}
			}else{
				return false;
			}
		}
		
		function joinTowOverDoulicate($one,$colums_one,$two,$colums_two,$condition,$type="INNER"){
			if(is_array($colums_one)&&is_array($colums_two)&&is_array($condition)&&count($condition)==2){
				$part = "";
				list($a, $b) = $condition;
				foreach($colums_one as $colsone){
					if(strpos($colsone, '(') == true) {
						$explor = explode("(",$colsone);						
							$part .= "$explor[0]($two.$explor[1],";				
						}else{						
							$part = $part." ".$one.".".$colsone.", ";
						}
				}
				foreach($colums_two as $colsone){					
					if(strpos($colsone, '(') == true) {
						$explor = explode("(",$colsone);						
							$part .= "$explor[0]($two.$explor[1],";						  
						   
						}else{
							$part = $part." ".$two.".".$colsone.",";
						}					
				}
				$statement = rtrim($part,",");
				$sql = 	"SELECT $statement FROM $one $type JOIN $two ON $one.$a=$two.$b  GROUP BY shopid ORDER BY $one.id DESC";  
				$query = $this->connection->prepare($sql);
				$query->execute();
				$display = $query->fetchAll(PDO::FETCH_ASSOC);
				$counter =  $query->rowCount();
				if($counter>0){
					return $display;
				}else{
					return false;
				}
			}else{
				return false;
			}
		}	
		
		function joinTowTable($one,$colums_one,$two,$colums_two,$condition,$type="INNER"){
			if(is_array($colums_one)&&is_array($colums_two)&&is_array($condition)&&count($condition)==2){
				$part = "";
				list($a, $b) = $condition;
				foreach($colums_one as $colsone){
					if(strpos($colsone, '(') == true) {
						$explor = explode("(",$colsone);						
							$part .= "$explor[0]($two.$explor[1],";				
						}else{						
							$part = $part." ".$one.".".$colsone.", ";
						}
				}
				foreach($colums_two as $colsone){					
					if(strpos($colsone, '(') == true) {
						$explor = explode("(",$colsone);						
							$part .= "$explor[0]($two.$explor[1],";						  
						   
						}else{
							$part = $part." ".$two.".".$colsone.",";
						}					
				}
				$statement = rtrim($part,",");
				$sql = 	"SELECT $statement FROM $one $type JOIN $two ON $one.$a=$two.$b";  
				$query = $this->connection->prepare($sql);
				$query->execute();
				$display = $query->fetchAll(PDO::FETCH_ASSOC);
				$counter =  $query->rowCount();
				if($counter>0){
					return $display;
				}else{
					return false;
				}
			}else{
				return false;
			}
		}		
		
		public function updateDatabyArray($table,array $data,array $condition){		
			try{
				$statement = "";
				foreach($data as $key => $value){
					$statement .= $key." = ?,";
				}
				foreach($condition as $conkey => $convalue){
					$condition_key = $conkey;
					$condition_val = $convalue;
				}
				$statement = rtrim($statement,",");
				$sql = "UPDATE $table SET $statement WHERE $condition_key ?";
				$value_array = array_values($data);
				array_push($value_array,$condition_val);
				$query = $this->connection->prepare($sql);
				$query->execute($value_array);
				$counter = $query->rowCount();
				if($counter>0){
						return true;
					}else{
					return false;
				}	
			} catch (PDOException $e) {
				 die($e->getMessage());
			}
		}
		
		function joinTowTableGroup($one,$colums_one,$two,$colums_two,$condition,$type="INNER"){
			if(is_array($colums_one)&&is_array($colums_two)&&is_array($condition)&&count($condition)==2){
				$part = "";
				list($a, $b) = $condition;
				foreach($colums_one as $colsone){
					if(strpos($colsone, '(') == true) {
						$explor = explode("(",$colsone);						
							$part .= "$explor[0]($two.$explor[1],";				
						}else{						
							$part = $part." ".$one.".".$colsone.", ";
						}
				}
				foreach($colums_two as $colsone){					
					if(strpos($colsone, '(') == true) {
						$explor = explode("(",$colsone);						
							$part .= "$explor[0]($two.$explor[1],";						  
						   
						}else{
							$part = $part." ".$two.".".$colsone.",";
						}					
				}
				$statement = rtrim($part,",");
				$sql = 	"SELECT $statement FROM $one $type JOIN $two ON $one.$a=$two.$b GROUP BY id";  
				$query = $this->connection->prepare($sql);
				$query->execute();
				$display = $query->fetchAll(PDO::FETCH_ASSOC);
				$counter =  $query->rowCount();
				if($counter>0){
					return $display;
				}else{
					return false;
				}
			}else{
				return false;
			}
		}	
		
	}
	$connection = new DatabaseManage("localhost","towfiqchowdhury_bdmybd","towfiqchowdhury_admin","!@#$%");	
									//Server Name,Database Name, User Name, User Password
?>