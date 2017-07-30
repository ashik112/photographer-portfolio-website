<?php include('header_file.php'); ?>
<?php include('menu.php'); ?>
<?php
	if($_SESSION['ACCESS'] == false){
		header('location: home.php');
		exit();
	}

?>
<?php $update_id= $_GET['up_id'] ?>
<?php include('class/control_view.php'); ?>
<div id="content" class="span10">
   <ul class="breadcrumb">
       <li>
           <i class="icon-home"></i>
           <a href="index.php">Home</a> 
           <i class="icon-angle-right"></i>
       </li>
       <li><a href="#">Update District</a></li>
   </ul>
   <div class="row-fluid">
		<div class="box span10">
			<div class="box-content">
				<?php 
					if($_SERVER['REQUEST_METHOD']=="POST"){
						require_once('class/control_update.php');
						require_once('class/control_valid.php');
						$up_dv   = $_GET['dv_id'];
						$up_name = $_POST['district_name'];
						$get_result = valid_district($up_name);
						if($get_result==true){
							$up_result = update_district($update_id,$up_dv,$up_name);
							if($up_result == true){ ?>
								<ul class="tickets metro">
										<li class="ticket blue">
											<a href="#">
												<span class="content">
												<span class="status">Status: [ Update Success ]</span>
												</span>	                                                       
											</a>
										</li>
									</ul>
							<?php 
								}else{ ?>
								<ul class="tickets metro">
									<li class="ticket red">
										<a href="#">
											<span class="content">
											<span class="status">Status: [ Update Fail ]</span>
											</span>	                                                       
										</a>
									</li>
								</ul>
						<?php	}
						}
						else{ ?>
							<ul class="tickets metro">
								<li class="ticket red">
									<a href="#">
										<span class="content">
										<span class="status">Status: [ Already Inserted ]</span>
										</span>	                                                       
									</a>
								</li>
							</ul>
						<?php
						}
					}
					
				?>
			</div>
           <div class="box-header" data-original-title="">
               <h2><i class="halflings-icon edit"></i><span class="break"></span>Division Name</h2>

           </div>
           <div class="box-content">
				<form  action="" method="POST" class="form-horizontal">
                   <fieldset>
                       <div class="control-group success">
                           <label class="control-label" for="inputSuccess">DIVISION NAME</label>
                           <select name="dv_id" id="dv_id">
                            <option value="<?php echo $_GET['dv_id'] ?>"><?php echo $_GET['dv_name'] ?></option>                         
						   <?php 
								$option_view = view_division_up($_GET['dv_id']);
								while($row_op = mysql_fetch_assoc($option_view)){?>
									<option value="<?php echo $row_op['id']; ?>"><?php echo $row_op['dv_name']; ?></option>
							<?php	}
							?>
							</select>
                       </div>
                       <div class="control-group success">
							<label class="control-label" for="inputSuccess">DISTRICT NAME</label>
							<?php 
								$get_discrict= view_district_by_id($update_id);
							?>
							<input type="text" name="district_name" id="district_name" value="<?php echo $get_discrict['district_name']; ?> " />
                       </div>

                       <div class="form-actions">
                           <button type="submit" class="btn btn-primary">Save changes</button>
                           <button class="btn">Cancel</button>
                       </div>
                   </fieldset>
               </form>

           </div>

       </div>

   </div>
   <?php include ('footer.php') ?>