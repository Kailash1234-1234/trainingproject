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
    $tagid = $_POST["tagid"];
    $tagname = $_POST["tagname"];
     $sql = "UPDATE tags SET `name` = '{$tagname}' WHERE id = {$tagid}";
if (mysqli_query($con, $sql)) { 
        echo 1;
} else {
        echo "Error : " .$sql. "<br>" .$con -> error;
}
?>