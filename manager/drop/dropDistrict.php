<?php
	session_start();
	if(!isset($_SESSION['id'])&&!isset($_SESSION['USER'])){
		header('location: ../index.php');
		exit();
	}
	if($_SESSION['role']!="ADMIN"):
		header('location: ../home.php');
		exit();
	endif;
	$getkey = array_keys($_GET);
	if(count($getkey)==1){
		if($getkey[0]=="dropid"){			
			include_once '../controller/operation.inc.php';
			include_once '../messages.php';
			include_once '../controller/valid.inc.function.php';
			$number   = $_GET['dropid'];
			$id = validNumber($number);
			if(!$id){
				echo $fail_fade;
				exit();
			}else{
				$dropinfo =	$data->dropDistrict("add_sub_division","id =",$id);
				if($dropinfo){
					echo $Success_fade;
					?>
					                        <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper" role="grid"><div class="row-fluid"><div class="span6"><div class="dataTables_filter" id="DataTables_Table_0_filter"></div></div></div><table class="table table-striped table-bordered bootstrap-datatable datatable dataTable" id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info">
                                <thead>
                                    <tr role="row">
                                    <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Username: activate to sort column descending" style="width: 170px;">Division Name</th>
                                    
                                     <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Username: activate to sort column descending" style="width: 170px;">District Name</th>
                                    
                                    <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Actions: activate to sort column ascending" style="width: 289px;">Actions</th>
                                </tr>
                                </thead>   

                                <tbody role="alert" aria-live="polite" aria-relevant="all">
								<?php
						$getDis = $data->getJoindata("add_sub_division",array("id","sub_division_name"),"add_division",array('division_name'),array("division_name","id"));
								if($getDis){					
									foreach($getDis as $row){								
								?>	
									<tr class="odd">
                                        <td class=" sorting_1"><?php echo $row['division_name']; ?></td>
										<td class=" sorting_1"><?php echo $row['sub_division_name']; ?></td>
                                        <td class="center ">
											<a class="btn btn-info" href="update_district.php?upid=<?php echo $row['id']; ?>">
                                                <i class="halflings-icon white edit"></i>  
                                            </a>
                                            <button type="button" onclick="drop_district(<?php echo $row['id']; ?>)" class="btn btn-danger" href="#">
                                                <i class="halflings-icon white trash"></i> 
                                            </button>
                                        </td>
                                    </tr>
								<?php 								
								}								
									} ?>
                                </tbody></table><div class="row-fluid"></div>            
                        </div>
					
					<?php
				}else{
					echo $fail_fade;
				}
			}	
		}else{
			echo $fail_fade;
			exit();
		}
	}
?>