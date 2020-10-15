<?php
 include 'config.php';
 $cat_id=$_POST['id'];
   
$sql = "DELETE FROM tags WHERE id={$cat_id}";

if (mysqli_query($con, $sql)) {
    echo 1;
} else {
    echo 0;
}

mysqli_close($con);
?>