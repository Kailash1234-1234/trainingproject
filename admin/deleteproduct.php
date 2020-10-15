<?php
 include 'config.php';
 $product_id=$_POST['id'];
   
$sql = "DELETE FROM products WHERE product_id={$product_id}";

if (mysqli_query($con, $sql)) {
    echo 1;
} else {
    echo 0;
}

mysqli_close($con);
?>