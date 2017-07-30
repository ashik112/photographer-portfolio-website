<?php include('header_file.php'); ?>
<?php include('menu.php'); ?>

<div id="content" class="span10">
    <ul class="breadcrumb">
        <li>
            <i class="icon-home"></i>
            <a href="index.php">Home</a> 
            <i class="icon-angle-right"></i>
        </li>
        <li><a href="#">Sub-Category</a></li>
    </ul>
    <div class="row-fluid">
        <div class="box span10">
			<div class="box-content">
			<?php
				if($_SERVER['REQUEST_METHOD']=="POST"){
					$category_id 		= $_POST['category_id'];
					$sub_category_name 	= $_POST['sub_category_name'];
					$subcate_img 		= $_FILES['subcate_img']['name'];
					$file_type          = $_FILES['subcate_img']['type'];
					$file_size          = $_FILES['subcate_img']['size'];
					$file_temp          = $_FILES['subcate_img']['tmp_name'];	
					$keyName            = '2345678901';			
					$path				= "../site_img/sub_cat_image/";	
					if(validNumber($category_id)&&checkString($sub_category_name)){
						$category_id 		= validNumber($category_id);
						$sub_category_name	= checkString($sub_category_name);
						$result = $data->checkSubcate($category_id,$sub_category_name);
						if($result == false){							
							$imgname = date("dmYHis").str_shuffle($keyName).$subcate_img;
							$type = strtolower($file_type);			
								if($type == "image/jpeg" || $type == "image/jpg" || $type == "image/png" || $type == "image/bmp"){
									$kb = $file_size/1024;	
									$mb = round($kb/1024);
									if($mb<=2){
										if(move_uploaded_file($file_temp,$path.$imgname)){
											$insertdata =$data->insertSubcate($category_id,$sub_category_name,$imgname);
											if($insertdata){
												echo $success_message;
											}else{
												echo $fail_message;
											}
										}else{
											echo $fail_message;
										}
									}else{
										echo $invalid_Size;
									}
							}else{
								echo $invalid_type;
							}
						}else{
							echo $over_message;
						}
					}else{
						echo $invalid_message;
					}						
				}				
			?>
			</div>
            <div class="box-header" data-original-title="">
                <h2><i class="halflings-icon edit"></i><span class="break"></span>Sub-Category</h2>
            </div>
            <div class="box-content">
                <form enctype="multipart/form-data"  action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="form-horizontal">
                    <fieldset>
                        <div class="control-group">
                            <label class="control-label" name="" for="selectError3">CATEGORY NAME</label>
                            <div class="controls">
                                 <select id="category_id" name="category_id">
                                    <option value="0">Select Category</option>
									<?php
										$data->displayCategory();
									?>
                                </select>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="inputSuccess">Sub-Category Name</label>
                            <div class="controls">
                                <input type="text" name="sub_category_name"  id="sub_category_name">
                                <span class="help-inline"></span>
                            </div>
                        </div>
						<div class="control-group">
								<label class="control-label">Sub-Category Image</label>
								<div class="controls">
								  <div class="uploader"><input name="subcate_img" type="file">
								  <span class="filename" style="-webkit-user-select: none;">No file selected</span><span class="action" style="-webkit-user-select: none;">Choose File</span></div>
								</div>
						</div>
                   

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
                        <h2><i class="halflings-icon user"></i><span class="break"></span>ALL SUB CATEGORY</h2>
                        
                    </div>
                    <div class="box-content">
                        <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper" role="grid"><div class="row-fluid"><div class="span6"><div class="dataTables_filter" id="DataTables_Table_0_filter"></div></div></div><table class="table table-striped table-bordered bootstrap-datatable datatable dataTable" id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info">
                                <thead>
                                    <tr role="row">
                                    <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Username: activate to sort column descending" style="width: 170px;">Category Name</th>
                                    
                                     <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Username: activate to sort column descending" style="width: 170px;">Sub-Category Name</th>
                                    <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Username: activate to sort column descending" style="width: 170px;">Sub-Category Image</th>
                                    <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Actions: activate to sort column ascending" style="width: 289px;">Actions</th>
                                </tr>
                                </thead>   

                                <tbody role="alert" aria-live="polite" aria-relevant="all">
									<?php
										$Subtcate = $data->ListSubcate();
										if(sizeof($Subtcate) > 0){										
										foreach($Subtcate as $sub_cate){ ?>	
										<tr class="odd">
	                                       
											<td class=" sorting_1"><?php echo $sub_cate['category_name']; ?></td>
											<td class=" sorting_1"><?php echo $sub_cate['sub_category_name']; ?></td>
											 <td class=" sorting_1">
											 <img style="height: 66px; width: 110px;border: 1px solid rgb(125, 120, 120);" class="" src="../site_img/sub_cat_image/<?php echo $sub_cate['image']; ?>" alt=""></td><!--sir arif if need use image height and width-->
	                                        <td class="center ">
<a class="btn btn-info" href="update_sub_category.php?upid=<?php echo $sub_cate['id']; ?>&cate=<?php echo $sub_cate['category_name']; ?>&cateid=<?php echo $sub_cate['cateid']; ?>">
	                                                <i class="halflings-icon white edit"></i>  
	                                            </a>
	                    <a onclick="return confirm('Are you sure you want to delete this item?')" class="btn btn-danger" href="drop/dropSubCate.php?dropid=<?php echo $sub_cate['id']; ?>">
	                                                <i class="halflings-icon white trash"></i> 
	                                            </a>
	                                        </td>
	                                    </tr>
									<?php 
											}
										} ?> 
                                </tbody></table><div class="row-fluid"></div>            
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>		

<?php include ('footer.php') ?>
