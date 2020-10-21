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
 $product_id = $_POST['editid'];
$sql= "SELECT * FROM products WHERE product_id={$product_id}";
$result = mysqli_query($con, $sql) or die("SQL QUERY FAILED");
$output="<form>";
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $output.='  <p>
                       <label>Product Name</label>
                       <input class="text-input medium-input datepicker" type="text" id="ename" name="medium-input" value="'.$row['name'].'" /> 
                    </p>
                    <p>
                    <label>Price </label>
                        <input class="text-input medium-input" type="number" id="eprice" name="medium-input"  value="'.$row['price'].'" /> 
                        <br/>
                    </p>
                    <p>
                    <label>Category </label>
                        <input class="text-input medium-input" type="text" id="ecategory" name="medium-input"  value="'.$row['category_id'].'" /> 
                        <br/>
                    </p>
                    <p>
                    <label>Tag </label>
                        <input class="text-input medium-input" type="text" id="etags" name="medium-input"  value="'.$row['tags'].'" /> 
                        <br/>
                    </p>
                    <p>
                    <label>Short Decription </label>
                        <textarea class="text-input textarea wysiwyg" id="esdesc" name="textfield" cols="70" rows="5"  value="'.$row['name'].'"></textarea>
                    </p>
                    <p>
					<label>long Decription </label>
					    <textarea class="text-input textarea wysiwyg" id="eldesc" name="textfield" cols="70" rows="5"  value="'.$row['name'].'"></textarea>
                  </p>
                  <p>
					<input class="button editproduct"  data-editdataid='.$row["product_id"].' type="button" value="UPDATE DETAILS" />
								</p>
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