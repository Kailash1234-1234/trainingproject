<?php
include 'admin/config.php';

$sql= "SELECT * FROM products";
$result = mysqli_query($con, $sql) or die("SQL QUERY FAILED");
$output="";
if (mysqli_num_rows($result) > 0) {
    $output .='<li>';
   
    while ($row = mysqli_fetch_assoc($result)) {
      
    $output.="</li>";
    mysqli_close($con);
    echo $output;
} else {
    echo "data not found"; 
}
?>