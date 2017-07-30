<?php include('header_file.php'); ?>
<?php
	include_once 'controller/operation.inc.php';
	include_once 'controller/valid.inc.function.php';
	$number   = $_REQUEST['upid'];			
	$cat_name	= $_REQUEST['cate'];			
	$cateid	= $_REQUEST['cateid'];			
	$id = validNumber($number);
	if($id){
		$update_id = $id;
	}else{
		header("location: sub_category.php");
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
        <li><a href="#">Update Sub-Category</a></li>
    </ul>

    <div class="row-fluid">
        <div class="box span12">
			<div class="box-content">
			<?php				
				if($_SERVER['REQUEST_METHOD']=="POST"){
					$id		= $update_id;
					$is_img = strlen($_FILES['img']['name']);
					$file	= $_FILES['img'];
					$cate_id = $_POST['category_name'];
					$subcatename = $_POST['sub_category_name'];
					$dropsubcate = $_POST['dropsubcate'];
					if(validNumber($cate_id)){
						$cate_id = validNumber($cate_id);
						if(checkString($subcatename)){
						if($is_img>3){
							$second = $data->ImageSubCateEdit($id,$cate_id,$subcatename,$file,$dropsubcate);
							if($second){
								echo $Success_fade;
							}else{
								echo $fail_fade;
							}
						}else{
							$first =	$data->WithoutImgSubcateUpdate($id,$cate_id,$subcatename);
							if($first){
								echo $Success_fade;
							}else{
								echo $fail_fade;
							}
						}
					}else{
						echo $invalid_fade;
					}
					}else{
						echo $invalid_fade;
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
						<div class="box span7">
                        <div class="control-group">
                            <label class="control-label" name="" for="selectError3">CATEGORY NAME</label>
                            <div class="controls">
                                <select id="category_name" name="category_name">
                                    <option value="<?php echo $cateid; ?>"><?php echo $cat_name; ?></option>
									<?php
										$data->displayCategory();
									?>
                                </select>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="inputSuccess">Sub-Category Name</label>
                            <?php
                            	$subcatedata = $data->getSubcateID($update_id);
                            ?>
                            <div class="controls">   
                            <input type="hidden" name="upid" value="<?php echo $update_id; ?>" />                            
                            <input type="hidden" name="cateid" value="<?php echo $cateid; ?>" />                            
                            <input type="hidden" name="cate" value="<?php echo $cat_name; ?>" />                            
    <input type="hidden" name="dropsubcate" value="<?php echo $subcatedata['image']; ?>" />                            
         <input type="text" name="sub_category_name"  id="sub_category_name" value="<?php echo $subcatedata['sub_category_name']; ?>">
                                <span class="help-inline"></span>
                            </div>
                        </div>
						
						
						
						<div class="control-group">
								<label class="control-label">Sub-Category Image</label>
								<div class="controls">
								  <div class="uploader"><input name="img" type="file"><span class="filename" style="-webkit-user-select: none;">No file selected</span><span class="action" style="-webkit-user-select: none;">Choose File</span></div>
								</div>
						</div>
                   

                        <div class="form-actions">
                            <button type="submit" class="btn btn-primary">Save changes</button>
                            <button class="btn">Cancel</button>
                        </div>
					</div>
                            <div class="controls">
                                <img style="margin-left: 135px; height: 180px; width: 180px;" src = "../site_img/sub_cat_image/<?php echo $subcatedata['image']; ?>" alt="" height="" width=""/>
                            </div>
                       
                    </fieldset>
				
                </form>

				</div>
			
             
        </div>
      
    </div>		

<?php include ('footer.php') ?>
