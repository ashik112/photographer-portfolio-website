<?php include('header_file.php'); ?>
<?php
	include_once 'controller/operation.inc.php';
	include_once 'controller/valid.inc.function.php';
	$number   = $_REQUEST['upid'];			
	$id = validNumber($number);
	if($id){
		$update_id = $id;
	}else{
		header("location: category.php");
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
        <li><a href="#">Update Category</a></li>
    </ul>

    <div class="row-fluid">
        <div class="box span10">
			<div id="cate_result" class="box-content">
			<?php
				if($_SERVER['REQUEST_METHOD']=="POST"){
					$name = $_POST['category_name'];
					$image = $_FILES['image'];		
					if(checkString($name)&&isset($_FILES['image'])){
						$file_image         = $_FILES['image'];
						$dropCateImg         = $_POST['dropid'];						
					$final =	$data->cate_file_transfer($update_id,$name,$file_image,$dropCateImg);
						if($final){
							echo $Success_fade;
						}else{
							echo $fail_fade;
						}
					}else{
						echo $fail_fade;
					}
				}		 
			?>				
			</div>
            <div class="box-header" data-original-title="">
                <h2><i class="halflings-icon edit"></i><span class="break"></span>CATEGIORY</h2>
             
            </div>
            <div class="box-content">
                <form id="cateform" name="cateform" enctype="multipart/form-data"  action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="form-horizontal">
                    <fieldset>
                        <div class="control-group">
                            <label class="control-label" for="inputSuccess">Category Name</label>
                            <div class="controls">
                            <?php
                            	if(isset($update_id)){
									$cateName = $data->ListCategorybyid($update_id);
								}
                            ?>
                                <input type="text" name="category_name"  id="category_name" value="<?php echo $cateName[0]['category_name']; ?>">
                                <span class="help-inline"></span>
                            </div>
                        </div>
     <div>                  <img style="float: right; margin-right: 304px; margin-top: -45px; width: 100px; height: 90px;" src="../site_img/cat_image/<?php echo $cateName[0]['image']; ?>" alt="" /></div> 
						<div class="control-group">
								<label class="control-label">Category Image</label>
								<div class="controls">
								  <div class="uploader">
					<input type="hidden" name="upid" value="<?php echo $update_id; ?>" />
					<input type="hidden" name="dropid" value="<?php echo $cateName[0]['image']; ?>" />
										<input id="image" name="image" type="file">
								  <span class="filename" style="-webkit-user-select: none;">No file selected</span><span class="action" style="-webkit-user-select: none;">Choose File</span>
								  </div>
								</div>
						</div>
                        <div class="form-actions">
                            <button id="upload" type="submit" class="btn btn-primary">Save changes</button>
                            <button class="btn">Cancel</button>
                        </div>
                    </fieldset>
                </form>

            </div>
             
        </div>
      
    </div>		

<?php include ('footer.php') ?>
