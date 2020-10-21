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
require_once "config.php";
    $uid = $_POST["uid"];
    $uname = $_POST["uname"];
    $uemail = $_POST["uemail"];
    $udob = $_POST["udob"];
    $uaddress = $_POST["uaddress"];
     $sql = "UPDATE users SET `user_name` = '{$uname}',`email` = '{$uemail}',`dob` = '{$udob}',
     `address` = '{$uaddress}' WHERE id = {$uid}";
if (mysqli_query($con, $sql)) { 
        echo 1;
} else {
        echo "Error : " .$sql. "<br>" .$con -> error;
}
?>