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
  $id=$_POST["uid"];
  $name=$_POST["name"];
  $email=$_POST["email"];
  $password=$_POST["password"];
  $dob=$_POST["dob"];
  $address=$_POST["address"];
  //echo $id.$email.$password;
  $sql = "INSERT INTO users(`id`, `user_name`, `password`, `email`, `dob`, `address`) VALUES ('{$id}', '{$name}','{$password}','{$email}','{$dob}','{$address}')";
  // $result= mysqli_query($con, $sql) or die($con);
if (mysqli_query($con, $sql)) {
    echo 1;
} else {
    print_r(mysqli_error_list($con));
}
mysqli_close($con);
?>