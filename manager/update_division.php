<?php include('header_file.php'); ?>
<?php
	$getkey = array_keys($_GET);
	if(count($getkey)==1){
		if($getkey[0]=="upid"){			
			include_once 'controller/operation.inc.php';
			include_once 'controller/valid.inc.function.php';
			$number   = $_GET['upid'];			
			$id = validNumber($number);
			if($id){
				$update_id = $id;
			}else{
				header("location: add_division.php");
				exit();							
			}				
		}else{
			header("location: add_division.php");
			exit();
		}
	}else{
		header("location: add_division.php");
		exit();
	}
?>
<?php include('menu.php'); ?>

<div id="content" class="span10">
    <ul class="breadcrumb">
        <li>
            <i class="icon-home"></i>
            <a href="index.php">Home</a> 
            <i class="icon-angle-right"></i>
        </li>
        <li><a href="#">Add Division</a></li>
    </ul>
    <div class="row-fluid">
        <div class="box span10">
			<div id="updateDiv" class="box-content">
				
			</div>
            <div class="box-header" data-original-title="">
                <h2><i class="halflings-icon edit"></i><span class="break"></span>Division Name</h2>
            </div>
            <div class="box-content">
                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="form-horizontal">
                    <fieldset>
                        <div class="control-group">
                            <label class="control-label" for="inputSuccess">DIVISION NAME</label>
                            <div class="controls">                            
                            	<?php
									if(isset($update_id)){
									$div_data =	$data->getDivisionbyID($update_id);
									if($div_data == true){
									?>									
	<input type="text" name="dv_name"  id="dv_name" value="<?php echo $div_data['division_name']; ?>">
								<?php	}else{
									echo '<script>location.href = "add_division.php";</script>';
									exit();
								}
									}else{
										echo '<script>location.href = "add_division.php";</script>';
										exit();
									}				
								?>
                               
                                <span class="help-inline"></span>
                            </div>
                        </div>
                   

                        <div class="form-actions">
     <button onclick="updateDivision(<?php echo $update_id; ?>)" type="button" class="btn btn-primary">Save changes</button>
                            <button class="btn">Cancel</button>
                        </div>
                    </fieldset>
                </form>

            </div>
             
        </div>

    </div>	
<?php include ('footer.php') ?>
