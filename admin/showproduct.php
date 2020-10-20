<?php
include 'config.php';

$sql= "SELECT * FROM products";
$result = mysqli_query($con, $sql) or die("SQL QUERY FAILED");
$output="";
if (mysqli_num_rows($result) > 0) {
    $output='<table>
    <thead>
		<tr>
		    <th><input class="check-all" type="checkbox" /></th>
			<th>Product Id</th>
			<th>Name</th>
			<th>Picture</th>
            <th>Price</th>
            <th>category</th>
            <th>Short Description</th>
            <th>Long Description</th>
			<th>Action</th>
		</tr>
    </thead>
    <tfoot>
	<tr>
        <td colspan="6">
            <div class="bulk-actions align-left">
                <select name="dropdown">
                    <option value="option1">Choose an action...</option>
                    <option value="option2">Edit</option>
                    <option value="option3">Delete</option>
                </select>
                <a class="button" href="#">Apply to selected</a>
            </div>
            <div class="pagination">
                <a href="#" title="First Page">&laquo; First</a><a href="#" title="Previous Page">&laquo; Previous</a>
                <a href="#" class="number" title="1">1</a>
                <a href="#" class="number" title="2">2</a>
                <a href="#" class="number current" title="3">3</a>
                <a href="#" class="number" title="4">4</a>
                <a href="#" title="Next Page">Next &raquo;</a><a href="#" title="Last Page">Last &raquo;</a>
            </div> <!-- End .pagination -->
            <div class="clear"></div>
        </td>
	</tr>
    </tfoot>
    <tbody>';
    while ($row = mysqli_fetch_assoc($result)) {
       $output .="<tr>
       <td><input type='checkbox' /></td>
       <td>P@{$row["product_id"]}COSS</td><td>{$row["name"]}</td>
       <td><img style='height:20px; width:60px;' src='resources/images/{$row["image"]}' alt='Edit'></td>
       <td>{$row["price"]}</td>
       <td>{$row["category_id"]}</td>
       <td>{$row["short_desc"]}</td><td>{$row["long_desc"]}</td>
       <td>
           <!-- Icons -->
            <a href='#' title='Edit'><img class='update-data' data-editid='{$row["product_id"]}' src='resources/images/icons/pencil.png' alt='Edit' /></a>
            <a title='Delete'  ><img class='delete-data'  data-id='{$row["product_id"]}' src='resources/images/icons/cross.png' alt='Delete'  /></a> 
            <a href='#' title='Edit Meta'><img src='resources/images/icons/hammer_screwdriver.png' alt='Edit Meta' /></a>
       </td>
   </tr>";
    }
    $output.="</tbody></table>";
    mysqli_close($con);
    echo $output;
} else {
    echo "data not found"; 
}
?>