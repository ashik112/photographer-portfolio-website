<?php include('header_file.php'); ?>
<?php include('menu.php'); ?>
<?php
	if(!isset($_REQUEST['update'])){
		$_REQUEST['update'] = 0;
	}
	$update_id = validNumber($_REQUEST['update']);
?>
<div id="content" class="span10">
    <ul class="breadcrumb">
        <li>
            <i class="icon-home"></i>
            <a href="index.php">Home</a> 
            <i class="icon-angle-right"></i>
        </li>
        <li><a href="#">Project</a></li>
    </ul>
    <div class="row-fluid">
        <div class="box span10">
			<div class="box-content">					
				<?php
					if($_SERVER['REQUEST_METHOD']=="POST"){
						//$division_id       = $_POST['division'];
						$division_id       = '1';
						//$district_id       = $_POST['district'];
						$district_id       = '1';
						//$category_id       = $_POST['category_name'];
						$category_id       = '1';
						//$subcate_id        = $_POST['subcate'];
						$subcate_id        = '1';
						$shop_name         = $_POST['shop_name'];
					//	$owner_name         = $_POST['owner_name'];
						$owner_name         = "1";
						//$phone_number      = $_POST['phone_number'];
						$phone_number      = '0167777777';
						//$email             = $_POST['email'];
						$email             = "test@test.com";
						//$web_address       = $_POST['web_address'];
						$web_address       = '1';
						$facebook          = '1';
						$twiter            = '1';
						$google_plus       = '1';
						$offer_information = '1';
						$shop_description  = $_POST['shop_description'];
						$address           = '1';
						//$image			   = $_FILES['image']['name'];
						//$keyName 		   = '23456701';	
						$update	           = $_POST['update'];
						if(validNumber($division_id)&&validNumber($district_id)&&validNumber($category_id)&&validNumber($subcate_id)){
							
							$getResult = $data->updateProduct($division_id,$district_id,$category_id,$subcate_id,$shop_name,$owner_name,$phone_number,$email,$web_address,$facebook,$twiter,$google_plus,$offer_information,$shop_description,$address,$update);
							if($getResult == true){
								echo $success_message;
							}else{
								echo $fail_fade;
							}								
						}else{
							echo $invalid_message;
						}
					}	
				?>
			</div>
            <div class="box-header" data-original-title="">
                <h2><i class="halflings-icon edit"></i><span class="break"></span>Add Project Details</h2>
             
            </div>
            <div class="box-content">
            <?php
            	
            	$getrow = $data->getProductData($update_id);            	
            
            ?>
                <form enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="form-horizontal">
                    <fieldset>
						<!--<div class="control-group">
                            <label class="control-label" name="" for="selectError3">                                   
                            DIVISION NAME</label>
                            <div class="controls">
                                <select onchange="selectDivision(this.value)" id="division" name="division">														
                                	<?php 
                                		//$division =	$data->ListSinglebyid("add_division",$getrow['division_id']);
                                	 ?>
                           			<option value="<?php echo $division['id'] ?>"><?php echo $division['division_name'] ?></option>		
                           			<?php
                                    	//$data->displayDivision();
                                    ?>							
                                </select>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="inputSuccess">District Name</label>
                            <div class="controls" id="setDistrict">
                            	<?php 
                                		//$district =	$data->ListSinglebyid("add_sub_division",$getrow['sub_division_id']);
                            	?>
                                <select id="district" name="district">
                                    <option value="<?php echo $district['id']; ?>"><?php echo $district['sub_division_name']; ?></option>
                                </select>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" name="" for="selectError3">CATEGORY NAME</label>
                            <div class="controls">
                                <select onchange="selectCategory(this.value)" id="category_name" name="category_name">
                                <?php 
                                		//$category =	$data->ListSinglebyid("add_category",$getrow['category_id']);
                            	?>
                <option value="<?php echo $category['id'] ?>"><?php echo $category['category_name'] ?></option>
									<?php
									//	$data->displayCategory();
									?>
                                </select>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="inputSuccess">Sub-Category Name</label>
                            <div class="controls" id="setSubcate">
                                <select id="subcate" name="subcate">
                                <?php 
     //   $subcategory =	$data->ListSinglebyid("sub_category",$getrow['sub_category_id']);
                            	?>
                                     <option value="<?php echo $subcategory['id'] ?>"><?php echo $subcategory['sub_category_name'] ?></option>
									
                                </select>
                            </div>
                        </div>-->
						<div class="control-group">
                            <label class="control-label" for="inputSuccess">Project Name</label>
                            <div class="controls">
                                <input type="text" value="<?php echo $getrow['shop_name'] ?>" name="shop_name"  id="shop_name">
                                <input type="hidden" name="update" value="<?php echo $update_id; ?>" />
                                <span class="help-inline"></span>
                            </div>
                        </div>
                       <!-- <div class="control-group">
                            <label class="control-label" for="inputSuccess">Shopkeeper Name</label>
                            <div class="controls">
                                <input type="text" value="<?php //echo $getrow['owner'] ?>" name="owner_name"  id="owner_name">
                                <span class="help-inline"></span>
                            </div>
                        </div>
						<div class="control-group">
                            <label class="control-label" for="inputSuccess">Phone Number</label>
                            <div class="controls">
                                <input type="text" value="<?php //echo $getrow['phone_number'] ?>"  name="phone_number"  id="phone_number">
                                <span class="help-inline"></span>
                            </div>
                        </div>
						<div class="control-group">
                            <label class="control-label" for="inputSuccess">E-Mail</label>
                            <div class="controls">
                                <input type="text" value="<?php// echo $getrow['email'] ?>"  name="email"  id="email">
                                <span class="help-inline"></span>
                            </div>
                        </div>
						<div class="control-group">
                            <label class="control-label" for="inputSuccess">Web Address</label>
                            <div class="controls">
                                <input type="text" value="<?php// echo $getrow['web_address'] ?>"  name="web_address"  id="web_address">
                                <span class="help-inline"></span>
                            </div>
                        </div>
						<div class="control-group">
                            <label class="control-label" for="inputSuccess">Facebook</label>
                            <div class="controls">
                                <input type="text" value="<?php// echo $getrow['facebook'] ?>"  name="facebook"  id="facebook">
                                <span class="help-inline"></span>
                            </div>
                        </div>
						<div class="control-group">
                            <label class="control-label" for="inputSuccess">Twiter</label>
                            <div class="controls">
                                <input type="text" value="<?php //echo $getrow['twiter'] ?>"  name="twiter"  id="twiter">
                                <span class="help-inline"></span>
                            </div>
                        </div>
						<div class="control-group">
                            <label class="control-label" for="inputSuccess">Google Plus</label>
                            <div class="controls">
                                <input type="text" value="<?php// echo $getrow['google_plus'] ?>"  name="google_plus"  id="google_plus">
                                <span class="help-inline"></span>
                            </div>
                        </div>
						<div class="control-group hidden-phone">
                            <label class="control-label" for="textarea2">Offer Information</label>
                            <div class="controls">
                                <div class="cleditorMain" style="width: 500px; height: 250px;">
                                    <textarea class="cleditor" name="offer_information" id="offer_information" rows="3" style="display: none; width: 500px; height: 197px;">
                                    <?php //echo $getrow['offer_imformation'] ?>
									</textarea>
								</div>
                            </div>
                        </div>-->
						<div class="control-group hidden-phone">
                            <label class="control-label" for="textarea2">Project Description</label>
                            <div class="controls">
                                <div class="cleditorMain" style="width: 500px; height: 250px;">
                                    <textarea class="cleditor" name="shop_description" id="shop_description" rows="3" style="display: none; width: 500px; height: 197px;">
                                    <?php //echo $getrow['shop_description'] ?>
									</textarea>
								</div>
                            </div>
                        </div>
						<!--<div class="control-group hidden-phone">
                            <label class="control-label" for="textarea2">Shop Address</label>
                            <div class="controls">
                                <div class="cleditorMain" style="width: 500px; height: 250px;">
                                    <textarea class="cleditor" name="address" id="address" rows="3" style="display: none; width: 500px; height: 197px;">
                                    <?php //echo $getrow['address'] ?>
									</textarea>
								</div>
                            </div>
                        </div>-->
						<div class="form-actions">
                            <button type="submit" class="btn btn-primary">Update</button>
                            <input type="reset" value="Cancle" class="btn">
                        </div>
                    </fieldset>
                </form>
            </div>             
        </div>
    </div>	
<?php include ('footer.php') ?>
