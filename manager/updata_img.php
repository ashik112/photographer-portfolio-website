<?php include('header_file.php'); ?>
<?php include('menu.php'); ?>
<!-- start: Content -->

<div id="content" class="span10">
 <div class="row-fluid">
    <ul class="breadcrumb">
        <li>
            <i class="icon-home"></i>Home
            <i class="icon-angle-right"></i>
        </li>
        <li>
            <i class="icon-home"></i>Image
            <i class="icon-angle-right"></i>
        </li>
        <li><a href="#">Update</a></li>
    </ul>
    <?php
    	if(count($_GET)==1):
    		$image_id = $_GET['imgid'];
    	else:
    		echo '<script type="text/javascript">
    			location.href = "home.php";
    		</script>';
    	endif;    
    ?>
    <div class="row-fluid">
            <div class="box span12">
                <div class="box span12">
                 <span id="ajax_result"></span>
                    <div class="box-header" data-original-title="">
                        <h2><i class="halflings-icon user"></i><span class="break"></span>Image Details</h2>
                        
                    </div>
                    <div class="box-content">
                        <table class="table table-striped table-bordered bootstrap-datatable datatable dataTable" id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info">
                                <thead>
                                    <tr role="row">
                                    <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Username: activate to sort column descending" style="width: 170px;">Image</th>
                                    
                                     <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Username: activate to sort column descending" style="width: 170px;">Images Details</th>
                                    <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Actions: activate to sort column ascending" style="width: 289px;">Actions</th>
                                </tr>
                                </thead>   

                                <tbody role="alert" aria-live="polite" aria-relevant="all">
								<?php
									$img_row =	$data->GetImgList($image_id);
									if($img_row):
									foreach($img_row as $rows_img ):
								?>
									<tr class="odd">
										<td class=" sorting_1">
											<img style="height: 60px; width: 250px;" src="site_img/item_image/<?php echo $rows_img['img_name']; ?>" alt="" />
										</td>
										<td class=" sorting_1"><?php echo $rows_img['image_description']; ?></td>
										
                                        <td class="center ">
											<a class="btn btn-info" href="updata_image.php?imgid=<?php echo $rows_img['id']; ?>">
                                                <i class="halflings-icon white edit"></i>  
                                            </a>
   <a class="btn btn-danger" href="drop/drop_image.php?img_id=<?php echo $rows_img['id']; ?>&backid=<?php echo $image_id; ?>">
                                                <i class="halflings-icon white trash"></i> 
                                            </a>
                                        </td>
                                     </tr>
                                <?php 
                                	endforeach;
                                	endif;
                                ?>
                                </tbody></table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
   </div>
  
    
<?php include ('footer.php') ?>
