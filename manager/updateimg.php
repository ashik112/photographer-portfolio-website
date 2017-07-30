<?php include('header_file.php'); ?>
<?php
	include_once 'controller/operation.inc.php';
	include_once 'controller/valid.inc.function.php';
	$number   = $_REQUEST['upid'];			
	$id = validNumber($number);
	if($id){
		$update_id = $id;
	}else{
		header("location: home.php");
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
        <li><a href="#">Update Header Image</a></li>
    </ul>

    <div class="row-fluid">
        <div class="box span10">
			<div id="cate_result" class="box-content">
			<?php
				if($_SERVER['REQUEST_METHOD']=="POST"){
					$image 		= $_FILES['image'];							
					$final		=	$data->header_img_transfer($image,$update_id);
					if($final){
						echo $Success_fade;
					}else{
						echo $fail_fade;
					}
					
				}		 
			?>				
			</div>
            <div class="box-header" data-original-title="">
                <h2><i class="halflings-icon edit"></i><span class="break"></span>Header Img</h2>
             
            </div>
            <div class="box-content">
                <form id="cateform" name="cateform" enctype="multipart/form-data"  action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="form-horizontal">
                    <fieldset>
                        
		<div> 
		<?php
			$imgrow = $data->ListSinglebyid("shopkeeper",$update_id);			
		?>             
        	<img style="float: right; margin-right: 225px; width: 255px; height: 89px;"  src="site_img/header_image/<?php echo $imgrow['header_img']; ?>" alt="" /></div> 
						<div class="control-group">
								<label class="control-label">Header Image</label>
								<div class="controls">
								  <div class="uploader">
					<input type="hidden" name="upid" value="<?php echo $update_id; ?>" />
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
