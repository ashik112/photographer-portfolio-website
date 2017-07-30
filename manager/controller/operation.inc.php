<?php
if (basename($_SERVER['PHP_SELF']) == basename(__FILE__)) {
    die("<center><h3>Forbidden...</h3><h4>Sorry, Direct access not allowed<h4></center>");
}
require_once 'class.database.php';

class Operation {

    public $connection;

    function __construct() {
        $this->connection = new DatabaseManage("localhost", "towfiqchowdhury_bdmybd", "towfiqchowdhury_admin", "!@#$%");
        return $this->connection;
    }

    public function displayDivision() {
        $getdivision = $this->connection->getData('id,division_name', 'add_division');
        foreach ($getdivision as $division) {
            ?>
            <option value="<?php echo $division['id']; ?>"><?php echo $division['division_name']; ?></option>
        <?php
        }
    }

    public function displayShop() {
        $getShop = $this->connection->getData('id,shop_name', 'shopkeeper');
        foreach ($getShop as $shops) {
            ?>
            <option value="<?php echo $shops['id']; ?>"><?php echo $shops['shop_name']; ?></option>
        <?php
        }
    }

    public function displayCategory() {
        $getdivision = $this->connection->getData('*', 'add_category');
        foreach ($getdivision as $division) {
            ?>
            <option value="<?php echo $division['id']; ?>">
            <?php echo $division['category_name']; ?>
            </option>
        <?php
        }
    }

    public function img_file_transfer($update_id, $name, $file_image, $dropImg) {
        $keyName = '23456701';
        $droppath = "site_img/item_image/$dropImg";
        $id = $update_id;
        $catename = $name;
        $imageName = $file_image['name'];
        $img_name = $_SERVER['HTTP_HOST'] . "_" . str_shuffle($keyName) . $imageName;
        $path = "site_img/cat_image/$img_name";
        $result = $this->fileUpload($file_image, $path);
        if ($result) {
            $update_info = $this->connection->updateData('add_category', 'category_name,image', "$catename,$img_name", "id=", $id);
            if ($update_info) {
                if (unlink($droppath)) {
                    return true;
                } else {
                    return false;
                }
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    public function cate_file_transfer($update_id, $name, $file_image, $dropCateImg) {
        $keyName = '23456701';
        $droppath = "site_img/cat_image/$dropCateImg";
        $id = $update_id;
        $catename = $name;
        $imageName = $file_image['name'];
        $img_name = $_SERVER['HTTP_HOST'] . "_" . str_shuffle($keyName) . $imageName;
        $path = "site_img/cat_image/$img_name";
        $result = $this->fileUpload($file_image, $path);
        if ($result) {
            $update_info = $this->connection->updateData('add_category', 'category_name,image', "$catename,$img_name", "id=", $id);
            if ($update_info) {
                if (unlink($droppath)) {
                    return true;
                } else {
                    return false;
                }
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    public function ImageSubCateEdit($id, $cate_id, $subcatename, $file_image, $dropsubcate) {
        $keyName = '23456701';
        $dropfile = "site_img/sub_cat_image/$dropsubcate";
        $sub_id = $id;
        $cateId = $cate_id;
        $subName = $subcatename;
        $imageName = $file_image['name'];
        $target_name = $_SERVER['HTTP_HOST'] . "_" . str_shuffle($keyName) . $imageName;
        $path = "site_img/sub_cat_image/$target_name";
        $result = $this->fileUpload($file_image, $path);
        if ($result) {
            $updateinfo = $this->connection->updateData('sub_category', 'category_id,sub_category_name,image', "$cateId,$subName,$target_name", "id=", $sub_id);
            if ($updateinfo) {
                if (unlink($dropfile)) {
                    return true;
                } else {
                    return false;
                }
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    public function uploadHeaderimg($target_name, $file) {
        $path = "site_img/header_image/$target_name";
        $info = $this->fileUpload($file, $path);
        if ($info) {
            return true;
        } else {
            return false;
        }
    }

    public function upDateDetail($update_id, $description) {
        $updateinfo = $this->connection->updateData('product_image', 'image_description', "$description", "id=", $update_id);
        if ($updateinfo) {
            return true;
        } else {
            return false;
        }
    }

    public function upDateImg($update_id, $dropImg, $description, $file_image) {
        $drop_img = "site_img/item_image/$dropImg";
        unlink($drop_img);
        $keyName = '23456701';
        $imageName = $file_image['name'];
        $target_name = $_SERVER['HTTP_HOST'] . "_" . str_shuffle($keyName) . $imageName;
        $path = "site_img/item_image/$target_name";
        $result = $this->fileUpload($file_image, $path);
        if ($result) {
            $updateinfo = $this->connection->updateData('product_image', 'img_name,image_description', "$target_name,$description", "id=", $update_id);
            if ($updateinfo) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    public function fileUpload($file, $path) {
        $file_type = $file["type"];
        $file_size = $file['size'];
        $file_temp = $file['tmp_name'];
        $type = strtolower($file_type);
        if ($type == "image/jpeg" || $type == "image/jpg" || $type == "image/png" || $type == "image/bmp") {
            $kb = $file_size / 1024;
            $mb = round($kb / 1024);
            if ($mb <= 8) {
                if (move_uploaded_file($file_temp, $path)) {
                    return true;
                } else {
                    return false;
                }
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    public function Listdata($string) {
        return $this->connection->getData('*', $string);
    }

    public function ListCategory() {
        return $this->connection->getData('*', 'add_category');
    }

    public function ListSinglebyid($table, $id) {
        return $this->connection->getSingleData("*", $table, "id=", $id);
    }

    public function ListDistrictbyid($id) {
        return $this->connection->getDataCondition("*", "add_sub_division", "division_name=", $id);
    }

    public function GetSingleImgbyid($id) {
        return $this->connection->getDataCondition("*", "product_image", "id=", $id);
    }

    public function ListCategorybyid($id) {
        return $this->connection->getDataCondition("*", "add_category", "id=", $id);
    }

    public function SubCategorybycate($id) {
        return $this->connection->getDataCondition("*", "sub_category", "category_id=", $id);
    }

    public function ListSubcate() {
        $table_one = "add_category";
        $columsOne = array("id as cateid,category_name");
        $table_tow = "sub_category";
        $columsTwo = array("id", "sub_category_name", "image");
        $condition = array("id", "category_id");
        return $this->connection->joinTowTable($table_one, $columsOne, $table_tow, $columsTwo, $condition);
    }

    public function dropImgdata($id) {
        $list = $this->connection->getSingleData('*', "product_image", "id = ", $id);
        $file = "../site_img/item_image/" . $list['img_name'];
        unlink($file);
        return $this->connection->dropData("product_image", "id=", $id);
    }

    public function GetImgList($id) {
        return $this->connection->getDataCondition('*', "product_image", "shopkeeper_id = ", $id);
    }

    public function joinShopImg() {
        $table_one = "shopkeeper";
        $columsOne = array("id as shopid", "shop_name");
        $table_tow = "product_image";
        $columsTwo = array("id", "COUNT(shopkeeper_id) as count_img");
        $condition = array("id", "shopkeeper_id");
        return $this->connection->joinTowOverDoulicate($table_one, $columsOne, $table_tow, $columsTwo, $condition);
    }

    public function updateProduct($division_id, $district_id, $category_id, $subcate_id, $shop_name, $owner_name, $phone_number, $email, $web_address, $facebook, $twiter, $google_plus, $offer_information, $shop_description, $address, $update) {
        $shopdata = array(
            "division_id" => $division_id,
            "sub_division_id" => $district_id,
            "category_id" => $category_id,
            "sub_category_id" => $subcate_id,
            "shop_name" => $shop_name,
            "owner" => $owner_name,
            "shop_description" => $shop_description,
            "address" => $address,
            "phone_number" => $phone_number,
            "email" => $email,
            "web_address" => $web_address,
            "offer_imformation" => $offer_information,
        );
        $shopCon = array(
            "id=" => $update,
        );
        $shopupdate = $this->connection->updateDatabyArray("shopkeeper", $shopdata, $shopCon);
        $socialdata = array(
            "facebook" => $facebook,
            "twiter" => $twiter,
            "google_plus" => $twiter,
        );
        $sociCon = array(
            "shop_id=" => $update,
        );

        $socialupdate = $this->connection->updateDatabyArray("social_media", $socialdata, $sociCon);
        if ($shopupdate == true || $socialupdate == true) {
            return true;
        } else {
            return false;
        }
    }

    public function displayDistrict($id) {
        return $this->connection->getDataCondition('*', "add_sub_division", "division_name = ", $id);
    }

    public function displayDistrictId($id) {
        return $this->connection->getDataCondition('sub_division_name', "add_sub_division", "id = ", $id);
    }

    public function displaySubcateId($id) {
        return $this->connection->getDataCondition('*', "sub_category", "id = ", $id);
    }

    public function displaySubcate($id) {
        return $this->connection->getDataCondition('*', "sub_category", "category_id = ", $id);
    }

    public function isCateDuble($name) {
        return $this->connection->getDataCondition('*', "add_category", "category_name = ", $name);
    }

    public function isDivDuble($name) {
        return $this->connection->getDataCondition('*', "add_division", "division_name = ", $name);
    }

    public function getImgcountbyShopid($id) {
        return $this->connection->getCountDataCondition("id", "product_image", "shopkeeper_id=", $id);
    }

    public function insertProduct($division_id, $district_id, $category_id, $subcate_id, $shop_name, $owner_name, $target_name, $phone_number, $email, $web_address, $facebook, $twiter, $google_plus, $offer_information, $shop_description, $address) {
        $date = date("Y-m-d");
        $getid = $this->connection->insertDataLong("shopkeeper", "division_id,sub_division_id,category_id,sub_category_id,shop_name,owner,header_img,shop_description,inset_time,address,phone_number,email,web_address,offer_imformation", "$division_id*$district_id*$category_id*$subcate_id*$shop_name*$owner_name*$target_name*$shop_description*$date*$address*$phone_number*$email*$web_address*$offer_information");
        if ($getid) {
            $getMedia = $this->connection->insertData("social_media", "shop_id,facebook,twiter,google_plus", "$getid,$facebook,$twiter,$google_plus");
            if ($getMedia) {
                return true;
            } else {
                return false;
            }
        }
    }

    public function WithoutImgSubcateUpdate($id, $cate_id, $subcatename) {
        return $this->connection->updateData('sub_category', "category_id,sub_category_name", "$cate_id,$subcatename", "id=", $id);
    }

    public function getJoindata($table_one, $columsOne, $table_tow, $columsTwo, $condition) {
        return $this->connection->joinTowTableGroup($table_one, $columsOne, $table_tow, $columsTwo, $condition);
    }

    public function getSubcateID($id) {
        return $this->connection->getSingleData("*", "sub_category", "id=", $id);
    }

    public function getDataID($table, $condition, $id) {
        return $this->connection->getSingleData("*", $table, $condition, $id);
    }

    public function deleteCate($table, $condition, $value) {
        return $this->connection->dropData($table, $condition, $value);
    }

    public function deleteSubCate($table, $condition, $value) {
        return $this->connection->dropData($table, $condition, $value);
    }

    public function insertSubcate($category_id, $sub_category_name, $imgname) {
        return $this->connection->insertData("sub_category", "category_id,sub_category_name,image", "$category_id,$sub_category_name,$imgname");
    }

    public function checkSubcate($category_id, $sub_category) {
        return $this->connection->getDataDoubleCondition("*", "sub_category", "category_id =", $category_id, "sub_category_name =", $sub_category);
    }

    public function checkDistDouble($dv_id, $district_name) {
        return $this->connection->getDataDoubleCondition("*", "add_sub_division", "division_name =", $dv_id, "sub_division_name =", $district_name);
    }

    public function insertDistrict($dv_id, $district_name) {
        return $this->connection->insertData("add_sub_division", "division_name,sub_division_name", "$dv_id,$district_name");
    }

    public function getImgbyid($id) {
        return $this->connection->getDataCondition("*", "product_image", "shopkeeper_id=", $id);
    }

    public function getProductData($id) {
        $table_one = "shopkeeper";
        $columsOne = array("id as shopid,category_id,division_id,sub_division_id,sub_category_id,shop_name,owner,shop_description,address,phone_number,email,web_address,offer_imformation");
        $table_tow = "social_media";
        $columsTwo = array("facebook", "twiter", "google_plus");
        $condition = array("id", "shop_id");
        return $this->connection->joinTowTableCondition($table_one, $columsOne, $table_tow, $columsTwo, $condition, "shopkeeper.id=", $id);
    }

    public function header_img_transfer($image, $update_id) {
        $keyName = '2345678901';
        $img_name = $_SERVER['HTTP_HOST'] . "_" . str_shuffle($keyName) . $image['name'];
        $path = "../site_img/header_image/$img_name";
        $result = $this->fileUpload($image, $path);
        if ($result == true) {
            $drop = $this->ListSinglebyid("shopkeeper", $update_id)['header_img'];
            $dropimg = "../site_img/header_image/" . $drop;
            $dateimg = array(
                "header_img" => $img_name,
            );
            $condi_img = array(
                "id=" => $update_id,
            );
            $getinfo = $this->connection->updateDatabyArray("shopkeeper", $dateimg, $condi_img);
            if ($getinfo == true) {
                unlink($dropimg);
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    public function dropWholeData($id) {
        $get_img = $this->getImgbyid($id);
        $headImg = $this->connection->getSingleData("header_img", "shopkeeper", "id=", $id);
        $headerDrop = "../site_img/header_image/" . $headImg['header_img'];
        if ($headImg) {
            unlink($headerDrop);
        }
        if ($get_img) {
            foreach ($get_img as $getimg):
                $dropimg = "../site_img/item_image/" . $getimg['img_name'];
                unlink($dropimg);
            endforeach;

            $dropImgrow = $this->connection->dropData("product_image", "shopkeeper_id=", $id);
        }
        $dropSocial = $this->connection->dropData("social_media", "shop_id=", $id);
        if ($dropSocial) {
            $final = $this->connection->dropData("shopkeeper", "id=", $id);
            if ($final):
                return true;
            else:
                return false;
            endif;
        }else {
            return false;
        }
    }

    public function getCountData($table, $subcate, $district) {
        return $this->connection->countByDoubleCondition($table, "sub_division_id=", $district, "sub_category_id=", $subcate);
    }

    public function getCountDatabyCate($cate_id) {
        return $this->connection->countDataCondition("sub_category", "category_id=", $cate_id);
    }

    public function getCountDatabySubCate($subCateid) {
        return $this->connection->countDataCondition("shopkeeper", "sub_category_id=", $subCateid);
    }

    public function getLimtData($table, $condition, $values, $prolimit, $postlimit) {
        return $this->connection->LimitDataCondition($table, $condition, $values, $prolimit, $postlimit);
    }

    public function getDatabyLimit($table, $subcate, $district, $prolimit, $postlimit) {
        return $this->connection->getDataLimitDB("*", $table, "sub_division_id=", $district, "sub_category_id=", $subcate, $prolimit, $postlimit);
    }

    public function dropDistrict($table, $condition, $value) {
        return $this->connection->dropData($table, $condition, $value);
    }

    public function updateDistrict($name, $dv_id, $id) {
        return $this->connection->updateData("add_sub_division", "division_name,sub_division_name", "$dv_id,$name", "id=", $id);
    }

    public function insertImg($shopkeeper_id, $imgname, $image_description, $path) {
        return $this->connection->insertData("product_image", "shopkeeper_id,img_name,image_description,path", "$shopkeeper_id,$imgname,$image_description,$path");
    }

    public function insertDataDivision($string) {
        return $this->connection->insertData("add_division", "division_name", $string);
    }

    public function getDivisionbyID($id) {
        return $this->connection->getSingleData("division_name", "add_division", "id=", "$id");
    }

    public function updateDiv($name, $id) {
        return $this->connection->updateData("add_division", "division_name", $name, "id=", $id);
    }

    public function insertCateImg($category_name, $imgname) {
        return $this->connection->insertData("add_category", "category_name,image", "$category_name,$imgname");
    }

    public function stringToWord($line, $number) {
        $line = trim($line);
        $spilt = explode(" ", $line);
        $part = implode(" ", array_splice($spilt, 0, $number));
        return $part;
    }

}

$data = new Operation();
?>	
