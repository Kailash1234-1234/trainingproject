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
 $cat_id = $_POST['catid'];
$sql= "SELECT * FROM tags WHERE id={$cat_id}";
$result = mysqli_query($con, $sql) or die("SQL QUERY FAILED");
$output="<form>";
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $output.='  <p>
                       <label>Category Id</label>
                       <input class="text-input medium-input datepicker" type="text" id="tagid" name="medium-input" value="'.$row['id'].'" readonly /> 
                    </p>
                    <p>
                    <label>Name </label>
                        <input class="text-input medium-input" type="text" id="tagname" name="medium-input"  value="'.$row['name'].'" /> 
                        <br/>
                    </p>
                    <p>
					<input class="button edittag"  data-edittagid='.$row["id"].' type="button" value="UPDATE DETAILS" />
                  </p>
                ';
    } 
    $output.="</form>";
    mysqli_close($con);
    echo $output;
} else {
    echo "data not found"; 
}
?>