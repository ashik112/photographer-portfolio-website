<?php include('header_file.php'); ?>
<?php include('menu.php'); ?>

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
						$image			   = $_FILES['image']['name'];
						$keyName 		   = '23456701';	
						if(validNumber($division_id)&&validNumber($district_id)&&validNumber($category_id)&&validNumber($subcate_id)){
							$target_name = $_SERVER['HTTP_HOST']."_".str_shuffle($keyName).$image;
							$upload = $data->uploadHeaderimg($target_name,$_FILES['image']);
							if($upload):
							$getResult = $data->insertProduct($division_id,$district_id,$category_id,$subcate_id,$shop_name,$owner_name,$target_name,$phone_number,$email,$web_address,$facebook,$twiter,$google_plus,$offer_information,$shop_description,$address);
							if($getResult == true){
								echo $success_message;
							}else{
								echo $fail_message;
							}
							else:
								$fail_message;
							endif;									
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
                <form enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="form-horizontal">
                    <fieldset>
						<!--<div class="control-group">
                            <label class="control-label" name="" for="selectError3">                                    
                            DIVISION NAME</label>
                            <div class="controls">
                                <select onchange="selectDivision(this.value)" id="division" name="division">
                           			<option value="0">Select Division</option>		
                           			<?php
                                    	//$data->displayDivision();
                                    ?>							
                                </select>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="inputSuccess">District Name</label>
                            <div class="controls" id="setDistrict">
                                <select id="district" name="district">
                                    <option value="0">District Name</option>
                                </select>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" name="" for="selectError3">CATEGORY NAME</label>
                            <div class="controls">
                                <select onchange="selectCategory(this.value)" id="category_name" name="category_name">
                                    <option value="0">Select Category</option>
									<?php
										//$data->displayCategory();
									?>
                                </select>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="inputSuccess">Sub-Category Name</label>
                            <div class="controls" id="setSubcate">
                                <select id="subcate" name="subcate">
                                    <option value="0">Sub-Category Name</option>
									
                                </select>
                            </div>
                        </div>-->
						<div class="control-group">
                            <label class="control-label" for="inputSuccess">Project Name</label>
                            <div class="controls">
                                <input type="text" name="shop_name"  id="shop_name">
                                <span class="help-inline"></span>
                            </div>
                        </div>
                        <!--<div class="control-group">
                            <label class="control-label" for="inputSuccess">Shopkeeper Name</label>
                            <div class="controls">
                                <input type="text" name="owner_name"  id="owner_name">
                                <span class="help-inline"></span>
                            </div>
                        </div>-->
                        <div class="control-group">
                            <label class="control-label" for="inputSuccess">Header Image</label>
                            <div class="controls">
                                <input type="file" name="image"  id="image">
                                <span class="help-inline"></span>
                            </div>
                        </div>
						<!--<div class="control-group">
                            <label class="control-label" for="inputSuccess">Phone Number</label>
                            <div class="controls">
                                <input type="text" name="phone_number"  id="phone_number">
                                <span class="help-inline"></span>
                            </div>
                        </div>
						<div class="control-group">
                            <label class="control-label" for="inputSuccess">E-Mail</label>
                            <div class="controls">
                                <input type="text" name="email"  id="email">
                                <span class="help-inline"></span>
                            </div>
                        </div>
						<div class="control-group">
                            <label class="control-label" for="inputSuccess">Web Address</label>
                            <div class="controls">
                                <input type="text" name="web_address"  id="web_address">
                                <span class="help-inline"></span>
                            </div>
                        </div>
						<div class="control-group">
                            <label class="control-label" for="inputSuccess">Facebook</label>
                            <div class="controls">
                                <input type="text" name="facebook"  id="facebook">
                                <span class="help-inline"></span>
                            </div>
                        </div>
						<div class="control-group">
                            <label class="control-label" for="inputSuccess">Twiter</label>
                            <div class="controls">
                                <input type="text" name="twiter"  id="twiter">
                                <span class="help-inline"></span>
                            </div>
                        </div>
						<div class="control-group">
                            <label class="control-label" for="inputSuccess">Google Plus</label>
                            <div class="controls">
                                <input type="text" name="google_plus"  id="google_plus">
                                <span class="help-inline"></span>
                            </div>
                        </div>
						<div class="control-group hidden-phone">
                            <label class="control-label" for="textarea2">Offer Information</label>
                            <div class="controls">
                                <div class="cleditorMain" style="width: 500px; height: 250px;">
                                    <textarea class="cleditor" name="offer_information" id="offer_information" rows="3" style="display: none; width: 500px; height: 197px;">
									</textarea>
								</div>
                            </div>
                        </div>-->
						<div class="control-group hidden-phone">
                            <label class="control-label" for="textarea2">Project Description</label>
                            <div class="controls">
                                <div class="cleditorMain" style="width: 500px; height: 250px;">
                                    <textarea class="cleditor" name="shop_description" id="shop_description" rows="3" style="display: none; width: 500px; height: 197px;">
									</textarea>
								</div>
                            </div>
                        </div>
						<!--<div class="control-group hidden-phone">
                            <label class="control-label" for="textarea2">Shop Address</label>
                            <div class="controls">
                                <div class="cleditorMain" style="width: 500px; height: 250px;">
                                    <textarea class="cleditor" name="address" id="address" rows="3" style="display: none; width: 500px; height: 197px;">
									</textarea>
								</div>
                            </div>
                        </div>-->
						<div class="form-actions">
                            <button type="submit" class="btn btn-primary">Save changes</button>
                            <button class="btn">Cancel</button>
                        </div>
                    </fieldset>
                </form>

            </div>
             
        </div>
        <div class="row-fluid">
            <div class="box span12">
                <div class="box span12">
                    <div class="box-header" data-original-title="">
                        <h2><i class="halflings-icon user"></i><span class="break"></span>Shop Details</h2>
                        
                    </div>
					
                    <div class="box-content">
                        <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper" role="grid">
                        	<table class="table table-striped table-bordered bootstrap-datatable datatable dataTable" id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info">
                                <thead>
                                    <tr role="row">
                                    <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Username: activate to sort column descending" style="width: 170px;">Project Name</th>
							
                                 
									<th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Actions: activate to sort column ascending" style="width: 289px;">Actions</th>
                                </tr>
                                </thead>   

                                <tbody role="alert" aria-live="polite" aria-relevant="all">
								<?php
									$table_one = "shopkeeper";
									$table_tow = "social_media";
									$columsOne = array("id","shop_name","shop_description","address","phone_number","email");
									$columsTwo = array("facebook");
									$condition = array("id","shop_id");
									$getdata = $data->getJoindata($table_one,$columsOne,$table_tow,$columsTwo,$condition);
									foreach($getdata as $getfull) {
								?>
									<tr class="odd">
										<td class=" sorting_1"><?php echo $getfull['shop_name']; ?></td>
										
										
                                        <td class="center ">
											<a class="btn btn-info" href="updateimg.php?upid=<?php echo $getfull['id']; ?>">
                                                <i class="halflings-icon white picture"></i>  
                                            </a>
                                        	
											<a class="btn btn-info" href="updateShop.php?update=<?php echo $getfull['id']; ?>">
                                                <i class="halflings-icon white edit"></i>  
                                            </a>
                                            <?php if($_SESSION['role']=="ADMIN"): ?>
                                            <a onclick="return confirm('Are you sure you want to delete this item?')" class="btn btn-danger" href="drop/dropShop.php?drop=<?php echo $getfull['id']; ?>">
                                                <i class="halflings-icon white trash"></i> 
                                            </a>
                                             <?php endif; ?>
                                        </td>
                                    </tr>
								<?php } ?>
                                </tbody></table><div class="row-fluid"></div>            
                        </div>
                    </div>
                
               </div>

            </div>
        </div>
    </div>	
<?php include ('footer.php') ?>
