<?php include('header_file.php'); ?>
<?php include('menu.php'); ?>
<div id="content" class="span10">
    <ul class="breadcrumb">
        <li>
            <i class="icon-home"></i>
            <a href="index.php">Home</a> 
            <i class="icon-angle-right"></i>
        </li>
        <li><a href="#">Add District</a></li>
    </ul>
    <div class="row-fluid">
        <div class="box span10">
            <div class="box-content">
                <?php
                if ($_SERVER['REQUEST_METHOD'] == "POST") {
                    $dv_id = $_POST['dv_id'];
                    $district_name = $_POST['district_name'];
                    if (validNumber($dv_id) && checkString($district_name)) {
                        $district_name = checkString($district_name);
                        $dv_id = validNumber($dv_id);
                        $info = $data->checkDistDouble($dv_id, $district_name);
                        if (!$info) {
                            $insertinfo = $data->insertDistrict($dv_id, $district_name);
                            if ($insertinfo) {
                                echo $Success_fade;
                            } else {
                                echo $fail_fade;
                            }
                        } else {
                            echo $over_fade;
                        }
                    } else {
                        echo $fail_fade;
                    }
                }
                ?>								
            </div>
            <div class="box-header" data-original-title="">
                <h2><i class="halflings-icon edit"></i><span class="break"></span>District</h2>
            </div>
            <div class="box-content">
                <form  action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="form-horizontal">
                    <fieldset>
                        <div class="control-group">
                            <label class="control-label" name="" for="selectError3">DIVISION NAME</label>
                            <div class="controls">
                                <select id="dv_id" name="dv_id">
                                    <option value="0">Select Division</option>
                                    <?php
                                    $data->displayDivision();
                                    ?>	
                                </select>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="inputSuccess">District Name</label>
                            <div class="controls">
                                <input type="text" name="district_name"  id="district_name">
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

        <div class="row-fluid">        
            <div class="box span12">            
                <div class="box span12">               
                    <div class="box-header" data-original-title="">
                        <h2><i class="halflings-icon user"></i><span class="break"></span>ALL DISTRICT</h2>

                    </div>
                    <div class="box-content">
                        <div id="drop_info">
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
                                        $getDis = $data->getJoindata("add_sub_division", array("id", "sub_division_name"), "add_division", array('division_name'), array("division_name", "id"));
                                        if ($getDis) {
                                            foreach ($getDis as $row) {
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
                                        }
                                        ?>
                                    </tbody></table><div class="row-fluid"></div>            
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>		

    <?php include ('footer.php') ?>
