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
  $uid=$_POST['uid']; 
  
$sql = "DELETE FROM users WHERE id={$uid}";
if (mysqli_query($con, $sql)) {
    echo 1;
} else {
    echo 0;
}
mysqli_close($con);
?>