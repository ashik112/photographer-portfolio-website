<?php
	$update_id = @$_GET['upid'];
	require_once 'class/control_view.php';
?>
<?php include('header_file.php'); ?>
<?php include('menu.php'); ?>
<?php
	if($_SESSION['ACCESS'] == false){
		header('location: home.php');
		exit();
	}

?>
<div id="content" class="span10">


   <ul class="breadcrumb">
       <li>
           <i class="icon-home"></i>
           <a href="index.php">Home</a> 
           <i class="icon-angle-right"></i>
       </li>
       <li><a href="#">Update Division</a></li>
   </ul>

   <div class="row-fluid">
       <div class="box span10">
          
               <a href="#">
			   <div class="box-content">
				<?php 
					 if($_SERVER['REQUEST_METHOD']=="POST"){
						require_once 'class/control_update.php';
						require_once 'class/control_valid.php';
						$dv_name = $_POST['dv_name'];
						$get_info = valid_division($dv_name);
						if($get_info==false){ ?>
						
							<ul class="tickets metro">
								<li class="ticket red">
									<a href="#">
										<span class="content">
										<span class="status">Status: [ Already Inserted ]</span>
										</span>	                                                       
									</a>
								</li>
							</ul>
						
						<?php }
						else{
							$get_row = update_division($update_id,$dv_name);
							if($get_row==true){ ?>
								<ul class="tickets metro">
									<li class="ticket blue">
										<a href="#">
											<span class="content">
											<span class="status">Status: [ Update Success ]</span>
											</span>	                                                       
										</a>
									</li>
								</ul>
							<?php }
							else{ ?>
								<ul class="tickets metro">
									<li class="ticket red">
										<a href="#">
											<span class="content">
											<span class="status">Status: [ Update Fail ]</span>
											</span>	                                                       
										</a>
									</li>
								</ul>
							
							<?php }
						
						}
					 }
					
				?>
               </div>                                                       
               </a>
          
           <div class="box-header" data-original-title="">
               <h2><i class="halflings-icon edit"></i><span class="break"></span>Division Name</h2>
           </div>
           <div class="box-content">
				<form action="" method="POST" class="form-horizontal">
                   <fieldset>
                       <div class="control-group success">
                           <label class="control-label" for="inputSuccess">DIVISION NAME</label>
                           <div class="controls">
							<?php $view = view_division_by_id($update_id) ?>
                               <input type="text" name="dv_name"  id="dv_name" value="<?php 
								echo $view['dv_name'];
							   ?>">
                               <span class="help-inline"></span>
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

   </div>
<?php include ('footer.php') ?>