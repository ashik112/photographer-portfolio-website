<?php
	include_once '../controller/operation.inc.php';
	$number   = $_REQUEST['data'];
	$action = $_REQUEST['action'];
	if($action == 1){  ?>
		<select class="type-catagore" id="district" name="district">
			<option value="0">District Name</option>
		<?php		
			$row = $data->displayDistrict($number);
		if($row){ 
			foreach($row as $rows){ 	?>
				<option value="<?php echo $rows['id']; ?>"><?php echo $rows['sub_division_name']; ?></option>	
	<?php	}
		} ?>
		</select>
<?php
	 }
	 if($action == 2){  ?>
		<select class="type-catagore" id="subcate" name="subcate">
        	<option>Sub-Category Name</option>
		<?php		
			$row = $data->displaySubcate($number);
		if($row){ 
			foreach($row as $rows){ 	?>
				<option value="<?php echo $rows['id']; ?>"><?php echo $rows['sub_category_name']; ?></option>	
	<?php	}
		} ?>
		</select>
<?php
	 }
?>