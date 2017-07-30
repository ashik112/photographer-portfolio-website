<?php include('header_file.php'); ?>
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
			
									<ul class="tickets metro">
										<li class="ticket blue">
											<a href="#">
												<span class="content">
												<span class="status">Status: [ Update Success ]</span>
												</span>	                                                       
											</a>
										</li>
									</ul>
								
									<ul class="tickets metro">
										<li class="ticket red">
											<a href="#">
												<span class="content">
												<span class="status">Status: [ Fail To Update ]</span>
												</span>	                                                       
											</a>
										</li>
									</ul>
									
								<ul class="tickets metro">
									<li class="ticket red">
										<a href="#">
											<span class="content">
											<span class="status">Status: [ All Filled Must be filled ]</span>
											</span>	                                                       
										</a>
									</li>
								</ul>
								
			</div>
            <div class="box-header" data-original-title="">
                <h2><i class="halflings-icon edit"></i><span class="break"></span>Sub-Category</h2>
             
            </div>
            <div class="box-content">
                <form  action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="form-horizontal">
                   
					<fieldset>
						<div class="box span7">
                        <div class="control-group">
                            <label class="control-label" name="" for="selectError3">CATEGORY NAME</label>
                            <div class="controls">
                                <select id="category_name" name="category_name">
                                    <option value="">Select Category</option>
									
                                </select>
                            </div>
                        </div>
                        <div class="control-group success">
                            <label class="control-label" for="inputSuccess">Sub-Category Name</label>
                            <div class="controls">
                                <input type="text" name="sub_category_name"  id="sub_category_name" value="">
                                <span class="help-inline"></span>
                            </div>
                        </div>
						
						
						
						<div class="control-group">
								<label class="control-label">Sub-Category Image</label>
								<div class="controls">
								  <div class="uploader"><input type="file"><span class="filename" style="-webkit-user-select: none;">No file selected</span><span class="action" style="-webkit-user-select: none;">Choose File</span></div>
								</div>
						</div>
                   

                        <div class="form-actions">
                            <button type="submit" class="btn btn-primary">Save changes</button>
                            <button class="btn">Cancel</button>
                        </div>
					</div>
					<div class="box span3">
						<div class="control-group success" style="margine-left:-200px">
                            <label class="control-label" for="inputSuccess">Image Name</label>
                            <div class="controls">
                                <img src = "img/demo.png" alt="" height="" width=""/>
                            </div>
                        </div>
					</div>
                    </fieldset>
				
                </form>

				</div>
			
             
        </div>
      
    </div>		

<?php include ('footer.php') ?>
