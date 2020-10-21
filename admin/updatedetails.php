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
    $pprice = $_POST["eprice"];
    $pcategory = $_POST["ecategory"];
    $ptags = $_POST["etag"];
    $psdesc = $_POST["esdesc"];
    $pldesc = $_POST["eldesc"];
    require_once "config.php";
     $sql = "UPDATE products SET `category_id` = '{$pcategory}',`name` = '{$pname}',`price` = '{$pprice}',
     `short_desc` = '{$psdesc}', `long_desc` = '{$pldesc}' WHERE product_id = {$pid}";
   //$sql=" UPDATE `products` SET `category_id`=[$pcategory],`name`=[$pname],`price`=[$pprice],`short_desc`=[value-6],`long_desc`=[value],`tags`=[$etags] WHERE product_id= [$pid]";
if (mysqli_query($con, $sql)) { 
        echo 1;
} else {
        echo "Error : " .$sql. "<br>" .$con -> error;
}
?>