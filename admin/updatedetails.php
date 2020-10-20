<?php
    $pid = $_POST["eid"];
    $pname = $_POST["ename"];
    $pcategory = $_POST["ecategory"];
    $ptags = $_POST["etag"];
    $psdesc = $_POST["esdesc"];
    $pldesc = $_POST["eeldesc"];
    require_once "config.php";
    $sql = "UPDATE products SET `name` = '{$pname}',`category_id` = '{$pcategory}',`tags` = '{$ptags}' WHERE product_id = {$pid}";
    if (mysqli_query($conn, $sql)) { 
        echo 1;
    } else {
        echo "Error : " .$sql. "<br>" .$conn -> error;
    }
?>