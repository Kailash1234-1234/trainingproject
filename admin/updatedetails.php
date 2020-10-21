<?php
/**
 * Templet File Doc Comment
 * 
 * PHP version /
 * 
 * @category Tenplete_Class
 * @package  Templete_Class
 * @author   Author <author@domain.com>
 * @license  http://opensource.org/MIT MIT License
 * @link     http://localhost/
 */
    $pid = $_POST["eid"];
    $pname = $_POST["ename"];
    $pprice = $_POST["pprice"];
    $pcategory = $_POST["ecategory"];
    $ptags = $_POST["etag"];
    $psdesc = $_POST["esdesc"];
    $pldesc = $_POST["eeldesc"];
    require_once "config.php";
     $sql = "UPDATE products SET `name` = '{$pname}',`category_id` = '{$pcategory}',`tags` = '{$ptags}' WHERE product_id = {$pid}";
  // $sql=" UPDATE `products` SET `category_id`=[$pcategory],`name`=[$pname],`price`=[$pprice],`short_desc`=[value-6],`long_desc`=[value-7],`tags`=[$ptags] WHERE product_id= [$pid]";
if (mysqli_query($conn, $sql)) { 
    echo 1;
} else {
    echo "Error : " .$sql. "<br>" .$conn -> error;
}
?>