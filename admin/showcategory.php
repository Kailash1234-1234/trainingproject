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

$sql= "SELECT * FROM categories";
$result = mysqli_query($con, $sql) or die("SQL QUERY FAILED");
$output="";
if (mysqli_num_rows($result) > 0) {
    $output='<table>
    <thead>
		<tr>
		    <th><input class="check-all" type="checkbox" /></th>
			<th>Category Id</th>
			<th>Name</th>
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
        <td>C@{$row["category_id"]}</td><td>{$row["name"]}</td>
           <!-- Icons -->
           <td>
            <a href='#' title='Edit'><img src='resources/images/icons/pencil.png' alt='Edit' /></a>
            <a title='Delete'  ><img class='delete-cat'  data-cid='{$row["category_id"]}' src='resources/images/icons/cross.png' alt='Delete'  /></a> 
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