<?php include('header_file.php'); ?>
<?php include('menu.php'); ?>

<div id="content" class="span10">
    <ul class="breadcrumb">
        <li>
            <i class="icon-home"></i>
            <a href="index.php">Home</a> 
            <i class="icon-angle-right"></i>
        </li>
        <li><a href="#">Add Division</a></li>
    </ul>
    <div class="row-fluid">
        <div class="box span10">
			<div class="box-content">
				<?php
					if($_SERVER['REQUEST_METHOD']=="POST"){
						$divsion = $_POST['dv_name'];	
						$info = $data->isDivDuble($divsion);
						if($info){
							echo $over_message;
						}else{
							if(checkString($divsion)){
								$divsion = filter_var($divsion, FILTER_SANITIZE_STRING);
								$final = $data->insertDataDivision($divsion);
								if($final){
									echo $success_message;
								}else{
									echo $fail_message;
								}
							}else{
								echo $invalid_message;
							}
						}
					}
				?>
			</div>
            <div class="box-header" data-original-title="">
                <h2><i class="halflings-icon edit"></i><span class="break"></span>Division Name</h2>
            </div>
            <div class="box-content">
                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="form-horizontal">
                    <fieldset>
                        <div class="control-group">
                            <label class="control-label" for="inputSuccess">DIVISION NAME</label>
                            <div class="controls">
                                <input type="text" name="dv_name"  id="dv_name">
                                <span class="help-inline"></span>
                            </div>
                        </div>
                        <div class="form-actions">
                            <button type="submit" class="btn btn-primary">Save changes</button>
                            <input type="reset" class="btn" value="Cancel" />
                        </div>
                    </fieldset>
                </form>

            </div>
             
        </div>
<div class="row-fluid">
            <div class="box span12">
                <div class="box span12">
                    <div class="box-header" data-original-title="">
                        <h2><i class="halflings-icon user"></i><span class="break"></span>ALL DIVISION</h2>
                        
                    </div>
                    <div class="box-content">
                        <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper" role="grid">
						<div class="row-fluid">
							<div class="span6">
								<div class="dataTables_filter" id="DataTables_Table_0_filter"></div>
							</div>
						</div>
						<table class="table table-striped table-bordered bootstrap-datatable datatable dataTable" id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info">
                                <thead>
                                    <tr role="row">
                                    <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Username: activate to sort column descending" style="width: 170px;">DIVISION NAME</th>
                                    
                                    
                                    
                                    <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Actions: activate to sort column ascending" style="width: 289px;">Actions</th>
                                </tr>
                                </thead>   

                                <tbody role="alert" aria-live="polite" aria-relevant="all">
							<?php
								$rows =	$data->Listdata('add_division');
								if($rows != "The add_division is empty"){									
									foreach($rows as $row){
								?>
									<tr class="odd">
	                                        <td class=" sorting_1"><?php echo $row['division_name']; ?></td>
	                                        <td class="center ">
	                       <a class="btn btn-info" href="update_division.php?upid=<?php echo $row['id'] ?>">
	                                                <i class="halflings-icon white edit"></i>  
	                                            </a>
	 											<a onclick="return confirm('Are you sure you want to delete this item?')" class="btn btn-danger" href="drop/dropDivision.php?dropid=<?php echo $row['id']; ?>">
	                                                <i class="halflings-icon white trash"></i> 
	                                            </a>
	                                        </td>
	                                    </tr>
									<?php } 
									}
								?>
                                </tbody>
							</table><div class="row-fluid"></div>            
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>		




<?php include ('footer.php') ?>
