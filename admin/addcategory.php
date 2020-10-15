<?php

require 'config.php';
  $id=$_POST["catid"];
  $name=$_POST["cname"];
  $sql = "INSERT INTO categories(`category_id`, `name`) VALUES ('{$id}', '{$name}')";
 // $result= mysqli_query($con, $sql) or die($con);
if (mysqli_query($con, $sql)) {
    echo 1;
} else {
    print_r(mysqli_error_list($con));
}
mysqli_close($con);
?>