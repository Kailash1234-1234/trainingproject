<?php
require 'admin/config.php';

$id= $_GET["id"];
global $pid,$name;
echo "<script>alert($id)</script>";

$sql = "SELECT * FROM products where product_id={$id}";
$result = mysqli_query($con, $sql) or die("SQL QUERY FAILED");
if (mysqli_num_rows($result) > 0) {
    while ($row=$result->fetch_assoc()) {
        echo $pid = $row["product_id"];
        echo $name = $row["name"];
        echo $price = $row["price"];
        echo $image = $row["image"];
        echo $short_desc = $row["short_desc"];
        echo $pcat=$row["category_id"];
        echo $totalprice =100; 
        echo $pqty=1;
        echo $tags = $row["tags"];
        $sql = "INSERT INTO cart(`pid`, `product_name`, `pprice`, `pimage`, `pqty`, `ptag`,`pcat`,`totalprice`) VALUES ('{$pid}', '{$name}','{$price}','{$image}','{$pqty}','{$tags}','{$pcat}','{$totalprice}')";
        header('location:product.php');
        // $result= mysqli_query($con, $sql) or die($con);
      if (mysqli_query($con, $sql)) {
          echo 1;
      } else {
          print_r(mysqli_error_list($con));
      }
      mysqli_close($con);
        
    }
}

?>