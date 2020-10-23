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
 $user_id = $_POST['ueid'];
$sql= "SELECT * FROM users WHERE id={$user_id}";
$result = mysqli_query($con, $sql) or die("SQL QUERY FAILED");
$output="<form>";
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $output.='  <p>
                       <label>User Name</label>
                       <input class="text-input medium-input datepicker" type="text" id="name" name="medium-input" value="'.$row['user_name'].'" /> 
                    </p>
                    <p>
                    <label>Email </label>
                        <input class="text-input medium-input" type="email" id="email" name="medium-input"  value="'.$row['email'].'" /> 
                        <br/>
                    </p>
                    <p>
                    <label>Date Of Birth</label>
                        <input class="text-input medium-input" type="date" id="dob" name="medium-input"  value="'.$row['dob'].'" /> 
                        <br/>
                    </p>
                    <p>
                    <label>Address </label>
                        <input class="text-input large-input" type="text" id="address" name="medium-input"  value="'.$row['address'].'" /> 
                        <br/>
                    </p>
                  <p>
					<input class="button edituser"  data-edituserid='.$row["id"].' type="button" value="UPDATE DETAILS" />
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