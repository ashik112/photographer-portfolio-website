<?php include('header_file.php'); ?>
<?php
	include_once 'controller/operation.inc.php';
	include_once 'controller/valid.inc.function.php';
	$number   = $_REQUEST['upid'];			
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
        <div class="box span10">
			<div class="box-content">
			
						
								
			</div>
            <div class="box-header" data-original-title="">
                <h2><i class="halflings-icon edit"></i><span class="break"></span>Sub-Category</h2>
             
            </div>
            <div class="box-content">
                <form  action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="form-horizontal">
                    <fieldset>
                        <div class="control-group">
                            <label class="control-label" for="selectError3">CATEGORY NAME</label>
                            <div class="controls">
                                <select id="category_name" name="category_name">
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
                            <?php
                            	$subcatedata = $data->getSubcateID($update_id);
                            ?>
         <input type="text" name="sub_category_name"  id="sub_category_name" value="<?php echo $subcatedata['sub_category_name']; ?>">
                                <span class="help-inline"></span>
                            </div>
                        </div>
						<div class="myrow">
						<div class="control-group">
								<label class="control-label">Sub-Category Image</label>
								<div class="controls">
								  <div class="uploader"><input type="file"><span class="filename" style="-webkit-user-select: none;">No file selected</span><span class="action" style="-webkit-user-select: none;">Choose File</span></div>
								</div>
						</div>
                   		<input type="hidden" name="upid" value="<?php echo $update_id; ?>" />

                        <div class="form-actions">
                            <button type="submit" class="btn btn-primary">Save changes</button>
                            <button class="btn">Cancel</button>
                        </div>
                        <div class="box span3">
						<div class="control-group success" style="margine-left:-200px">
                            <label class="control-label" for="inputSuccess">Image Name</label>
                            <div class="controls">
                                <img src = "img/demo.png" alt="" height="" width=""/>
                            </div>
                        </div>
					</div>
                        </div>
                    </fieldset>
                </form>

            </div>
             
        </div>
      
    </div>		

<?php include ('footer.php') ?>
