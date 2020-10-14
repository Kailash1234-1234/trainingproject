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
$siteurl="http://localhost/training/mysql/";
$sitename="User Registration";
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="myproduct";
//create connection
$con = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
if ($con->connect_errno) {
     die("connection failed ".$con->connect_errno);
}
//echo "successfully connected";
?>