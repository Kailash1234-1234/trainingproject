<?php

require 'config.php';
  $name=$_POST["pname"];
  $price=$_POST["pprice"];
  $photo=$_POST["pphoto"];
  $category=$_POST["pcategory"];
  $sdesc=$_POST["psdesc"];
  $ldesc=$_POST["pldesc"];
  //echo $place.$email.$password1;
  $sql = "INSERT INTO products(`category_id`, `name`, `price`, `short_desc`, `long_desc`) VALUES ('{$category}', '{$name}','{$price}','{$sdesc}','{$ldesc}')";
 // $result= mysqli_query($con, $sql) or die($con);
if (mysqli_query($con, $sql)) {
    echo 1;
} else {
    print_r(mysqli_error_list($con));
}
?>