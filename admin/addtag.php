<?php

require 'config.php';
  $id=$_POST["tagid"];
  $name=$_POST["tagname"];
  $sql = "INSERT INTO tags(`id`, `name`) VALUES ('{$id}', '{$name}')";
 // $result= mysqli_query($con, $sql) or die($con);
if (mysqli_query($con, $sql)) {
    echo 1;
} else {
    print_r(mysqli_error_list($con));
}
mysqli_close($con);
?>