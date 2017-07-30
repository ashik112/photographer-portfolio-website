<?php include('header_file.php'); ?>
<?php include('menu.php'); 
//error_reporting(0);
?>
<script language="javascript">
    function addRow(tableID) {

        var table = document.getElementById(tableID);



        var rowCount = table.rows.length;
        var row = table.insertRow(rowCount);

        var cell1 = row.insertCell(0);
        var element1 = document.createElement("input");
        element1.type = "checkbox";
        element1.name = "chkbox[]";
        cell1.appendChild(element1);

        var cell2 = row.insertCell(1);
        cell2.innerHTML = rowCount + 0;


        var cell3 = row.insertCell(2);
        var element3 = document.createElement("input");
        element3.type = "text";
        element3.name = "image_description[]";
        cell3.appendChild(element3);

        var cell3 = row.insertCell(3);
        var element4 = document.createElement("input");
        element4.type = "file";
        element4.name = "file[]";
        cell3.appendChild(element4);
    }

    function deleteRow(tableID) {
        try {
            var table = document.getElementById(tableID);
            var rowCount = table.rows.length;

            for (var i = 0; i < rowCount; i++) {
                var row = table.rows[i];
                var chkbox = row.cells[0].childNodes[0];
                if (null != chkbox && true == chkbox.checked) {
                    table.deleteRow(i);
                    rowCount--;
                    i--;
                }


            }
        } catch (e) {
            alert(e);
        }
    }

</script>
<div id="content" class="span10">
    <ul class="breadcrumb">
        <li>
            <i class="icon-home"></i>
            <a href="index.php">Home</a> 
            <i class="icon-angle-right"></i>
        </li>
        <li><a href="#">Project's Images</a></li>
    </ul>

    <div class="row-fluid">
        <div class="box span10">
            <div class="box-content">
                <?php
                if ($_SERVER['REQUEST_METHOD'] == "POST") {
                    $shopkeeper_id = $_POST['shopkeeper_id'];
                    $image_description = $_POST['image_description'];
                    ;
                    $file_image = $_FILES['file']['name'];
                    $file_type = $_FILES['file']['type'];
                    $file_size = $_FILES['file']['size'];
                    $file_temp = $_FILES['file']['tmp_name'];
                    $keyName = '2345678901';
                    $path = 'site_img/item_image/';
                    $success_count = 0;
                    $fail_count = 0;
                    $ovlerLoad = false;
                    if (validNumber($shopkeeper_id)) {
                        $coutold = $data->getImgcountbyShopid($shopkeeper_id);
                        $counter = count($file_temp) + $coutold['count(id)'];
                        if ($counter <= 30):
                            for ($i = 0; $i < count($file_temp); $i++) {
                                if (checkString($image_description[$i])) {
                                    $imgname = $_SERVER['HTTP_HOST'] . "_" . str_shuffle($keyName) . $file_image[$i];
                                    $type = strtolower($file_type[$i]);
                                    if ($type == "image/jpeg" || $type == "image/jpg" || $type == "image/png" || $type == "image/bmp") {
                                        $kb = $file_size[$i] / 1024;
                                        $mb = round($kb / 1024);
                                        if ($mb <= 8) {
                                            if (move_uploaded_file($file_temp[$i], $path . $imgname)) {
                                                $oparation = $data->insertImg($shopkeeper_id, $imgname, $image_description[$i], $path);
                                                if ($oparation) {
                                                    $success_count = $success_count + 1;
                                                } else {
                                                    $fail_count = $fail_count + 1;
                                                }
                                            } else {
                                                $fail_count = $fail_count + 1;
                                            }
                                        } else {
                                            $fail_count = $fail_count + 1;
                                        }
                                    } else {
                                        $fail_count = $fail_count + 1;
                                    }
                                } else {
                                    $fail_count = $fail_count + 1;
                                }
                            }
                        else:
                            $ovlerLoad = true;
                        endif;
                    }else {
                        $fail_count = $fail_count + 1;
                    }
                    ?>

                    <?php
                    if ($ovlerLoad == true):
                        echo $limit_fade;
                    else :
                        ?>
                        <ul class="tickets metro">
                        <?php if ($success_count > 0): ?>
                                <li class="ticket blue">
                                    <span class="content">
                                        <span class="status">
            <?php echo $success_count; ?> File Upload Successfull</span>
                                </li>
                                            <?php
                                        endif;
                                        if ($fail_count > 0):
                                            ?>
                                <li class="ticket red">
                                    <span class="content">
                                        <span class="status">
            <?php echo $fail_count; ?> File Upload Fail</span>
                                </li>
                                        <?php endif; ?>
                        </ul>	
                        <?php
                        endif;
                        ?>				
                <?php }
                ?>
            </div>
            <div class="box-header" data-original-title="">
                <h2><i class="halflings-icon edit"></i><span class="break"></span>ADD PROJECT'S IMAGES</h2>

            </div>
            <div class="box-content">
                <form enctype="multipart/form-data"  action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="form-horizontal">
                    <table id="dataTable" class="table table-bordered">
                        <div class="control-group">
                            <label class="control-label" for="selectError3">Project NAME</label>
                            <div class="controls">
                                <select id="shopkeeper_id" name="shopkeeper_id">
                                    <option value="0">Select Project Name</option>
<?php
$data->displayShop();
?>
                                </select>
                            </div>
                        </div>

                        <tr>
                            <th>Cheek box</th>
                            <th>No</th>
                            <th> Image Description</th>
                            <th>Chose File</th>
                        </tr>   

                        <tr>
                            <TD><input type="checkbox" name="chkbox[]"/></TD>
                            <TD>1</TD>
                            <td> <input type ="text" name ="image_description[]" /></td>

                            <td> <input type ="file" name ="file[]" /> </td>


                        </tr>


                    </table>
                    <table align="center"><tr><td>
                                <input name="submit" type="submit" value="Submit" class="btn btn-primary"/>
                                </form>
                                <input type="button" value="Add Row" onClick="addRow('dataTable')" class="btn btn-primary" />

                                <input type="button" value="Delete Row" onClick="deleteRow('dataTable')" class="btn btn-primary" /></td></tr>
                    </table>


            </div>

        </div>
        <div class="row-fluid">
            <div class="box span12">
                <div class="box span12">
                    <div class="box-header" data-original-title="">
                        <h2><i class="halflings-icon user"></i><span class="break"></span>Project Details</h2>

                    </div>
                    <div class="box-content">
                        <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper" role="grid"><div class="row-fluid"><div class="span6"><div class="dataTables_filter" id="DataTables_Table_0_filter"></div></div></div><table class="table table-striped table-bordered bootstrap-datatable datatable dataTable" id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info">
                                <thead>
                                    <tr role="row">
                                        <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Username: activate to sort column descending" style="width: 170px;">Proect Name</th>

                                        <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Username: activate to sort column descending" style="width: 170px;">Images</th>
                                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Actions: activate to sort column ascending" style="width: 289px;">Actions</th>
                                    </tr>
                                </thead>   

                                <tbody role="alert" aria-live="polite" aria-relevant="all">
<?php
$img_row = $data->joinShopImg();
foreach ($img_row as $rows_img):
    ?>
                                        <tr class="odd">
                                            <td class=" sorting_1"><?php echo $rows_img['shop_name']; ?></td>
                                            <td class=" sorting_1"><?php echo $rows_img['count_img']; ?></td>

                                            <td class="center ">
                                                <a class="btn btn-info" href="updata_img.php?imgid=<?php echo $rows_img['shopid']; ?>">
                                                    <i class="halflings-icon white edit"></i>  
                                                </a>
                                                <a class="btn btn-danger" href="#">
                                                    <i class="halflings-icon white trash"></i> 
                                                </a>
                                            </td>
                                        </tr>
<?php endforeach; ?>
                                </tbody></table><div class="row-fluid"></div>            
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>		

<?php include ('footer.php') ?>
