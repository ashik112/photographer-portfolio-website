<?php include('header_file.php'); ?>
<?php
	include_once 'controller/operation.inc.php';
	include_once 'controller/valid.inc.function.php';
	$number   = $_REQUEST['imgid'];			
	$id = validNumber($number);
	if($id){
		$update_id = $id;
	}else{
		header("location: add_product.php");
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
					$detail = $_POST['image_description'];
					$image = $_FILES['image'];	
					if(checkString($detail)&&isset($_FILES['image'])){
						$file_image         = $_FILES['image'];
						$dropImg       		= $_POST['dropid'];	
						$description       	= $_POST['image_description'];	
						$is_img = strlen($_FILES['image']['name']);		
							if($is_img>3){
							$updata_ins =	$data->upDateImg($update_id,$dropImg,$description,$file_image);
								if($updata_ins){
									echo $Success_fade;
								}else{
									echo $fail_fade;
								}
							}else{
								$updata_ins	=	$data->upDateDetail($update_id,$description);
								if($updata_ins){
									echo $Success_fade;
								}else{
									echo $fail_fade;
								}
							}
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
                            <label class="control-label" for="inputSuccess">Image Description</label>
                            <div class="controls">
                            <?php
                            	if(isset($update_id)){
									$img_detail = $data->GetSingleImgbyid($update_id);
								}
                            ?>
                                <input type="text" name="image_description"  id="image_description" value="<?php echo $img_detail[0]['image_description']; ?>">
                                <span class="help-inline"></span>
                            </div>
                        </div>
     <div>                  <img style="float: right; margin-right: 304px; margin-top: -45px; width: 100px; height: 90px;" src="site_img/item_image/<?php echo $img_detail[0]['img_name']; ?>" alt="" /></div> 
						<div class="control-group">
								<label class="control-label">Upload Image</label>
								<div class="controls">
								  <div class="uploader">
					<input type="hidden" name="imgid" value="<?php echo $update_id; ?>" />
					<input type="hidden" name="dropid" value="<?php echo $img_detail[0]['img_name']; ?>" />
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
