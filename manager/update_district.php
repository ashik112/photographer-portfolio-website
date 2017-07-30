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
				header("location: add_district.php");
				exit();							
			}				
		}else{
			header("location: add_district.php");
			exit();
		}
	}else{
		header("location: add_district.php");
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
        <li><a href="#">Add District</a></li>
    </ul>

    <div class="row-fluid">
        <div class="box span10">
			<div class="box-content" id="resultid">
			</div>
            <div class="box-header" data-original-title="">
                <h2><i class="halflings-icon edit"></i><span class="break"></span>District</h2>
             
            </div>
            <div class="box-content">
                <form  action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="form-horizontal">
                    <fieldset>
                        <div class="control-group">
                            <label class="control-label" for="selectError3">DIVISION NAME</label>
                            <div class="controls">
                                <select id="dv_id" name="dv_id">
                                    <option value="0">Select Division</option>
									<?php
                                    	$data->displayDivision();
                                    ?>	
                                </select>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="inputSuccess">District Name</label>
                            <div class="controls">
                            <?php
                            	$rowdata = $data->displayDistrictId($update_id); 
                            	if($rowdata == false){ ?>
									<script type="text/javascript">location.href = "add_district.php";</script>
						<?php		}
                            ?>
                                <input type="text" name="district_name"  id="district_name" value="<?php	echo $rowdata[0]['sub_division_name']; ?>">
                                <span class="help-inline"></span>
                            </div>
                        </div>
                   

                        <div class="form-actions">
                            <button onclick="updataDistrict(<?php echo $update_id; ?>)" type="button" class="btn btn-primary">Save changes</button>
                            <button class="btn">Cancel</button>
                        </div>
                    </fieldset>
                </form>

            </div>
             
        </div>
       
    </div>		

<?php include ('footer.php') ?>
