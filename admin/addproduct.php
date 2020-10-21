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
  require 'config.php'; 
  $name=$_POST["pname"];
  $price=$_POST["pprice"];
  $photo=$_POST["pphoto"];
  echo $photo;
  $category=$_POST["pcategory"];
  $tags=$_POST["tags"];
  $sdesc=$_POST["psdesc"];
  $ldesc=$_POST["pldesc"];
  $productid = $_POST["pid"];
  //echo $place.$email.$password1;
  $sql = "INSERT INTO products(`category_id`, `name`, `price`, `short_desc`, `long_desc`, `tags`,`product_id`) VALUES ('{$category}', '{$name}','{$price}','{$sdesc}','{$ldesc}','{$tags}','{$productid}')";
  // $result= mysqli_query($con, $sql) or die($con);
if (mysqli_query($con, $sql)) {
    echo 1;
} else {
    print_r(mysqli_error_list($con));
}
mysqli_close($con);
?>