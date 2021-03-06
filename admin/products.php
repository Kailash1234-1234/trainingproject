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
require 'header.php'; 
?>
  <?php require 'sidebar.php'; ?>
 <div id="main-content"> <!-- Main Content Section with everything -->
  <noscript> <!-- Show a notification if the user has disabled javascript -->
      <div class="notification error png_bg">
        <div>
          Javascript is disabled or is not supported by your browser. Please 
          <a href="http://browsehappy.com/" title="Upgrade to a better browser">upgrade</a> your browser or 
          <a href="http://www.google.com/support/bin/answer.py?answer=23852" title="Enable Javascript in your   browser">enable</a>
          Javascript to navigate the interface properly.
        </div>
      </div>
  </noscript>
<!-- Page Head -->
    <h2>Welcome John</h2>
    <p id="page-intro">What would you like to do?</p>
    <!-- <ul class="shortcut-buttons-set">
    <li><a class="shortcut-button" href="#"><span>
    <img src="resources/images/icons/pencil_48.png" alt="icon" /><br />
     Write an Article
    </span></a></li>
    <li><a class="shortcut-button" href="#"><span>
        <img src="resources/images/icons/paper_content_pencil_48.png" alt="icon" /><br />
         Create a New Page
        </span></a>
    </li>
    <li><a class="shortcut-button" href="#"><span>
       <img src="resources/images/icons/image_add_48.png" alt="icon" /><br />
        Upload an Image
       </span></a></li>
    <li><a class="shortcut-button" href="#"><span>
        <img src="resources/images/icons/clock_48.png" alt="icon" /><br />
         Add an Event
        </span></a></li>
    <li><a class="shortcut-button" href="#messages" rel="modal"><span>
        <img src="resources/images/icons/comment_48.png" alt="icon" /><br />
            Open Modal
        </span></a></li>
</ul>  End .shortcut-buttons-set -->
    <div class="clear"></div> <!-- End .clear -->
        <div class="content-box"><!-- Start Content Box -->
            <div class="content-box-header">
                <h3>Products</h3>
                <ul class="content-box-tabs">
                    <li><a href="#tab1" class="default-tab">Manage</a></li> <!-- href must be unique and match the id of target div -->
                    <li><a href="#tab2">Add</a></li>
                </ul>
                <div class="clear"></div>
            </div> <!-- End .content-box-header -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <div class="content-box-content">
               <div class="tab-content default-tab" id="tab1"> <!-- This is the target div. id must match the href of this div's tab -->
                    <div class="notification attention png_bg">
                        <a href="#" class="close"><img src="resources/images/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
                    <div>
                        This is a Content Box. You can put whatever you want in it. By the way, you can close this notification with the top-right cross.
                    </div>
                </div>
                <div id="showtable">
                <table>
                    <thead>
                        <tr>
                            <th><input class="check-all" type="checkbox" /></th>
                            <th>Product Id</th>
                            <th>Name</th>
                            <th>Picture</th>
                            <th>Price</th>
                            <th>Description</th>
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
                    <tbody>
                        <tr>
                            <td><input type="checkbox" /></td>
                            <td>Lorem ipsum dolor</td>
                            <td><a href="#" title="title">Sit amet</a></td>
                            <td>Consectetur adipiscing</td>
                            <td>Donec tortor diam</td>
                            <td>Donec tortor diam</td>
                            <td>
                            <!-- Icons -->
                                <a href="#" title="Edit"><img src="resources/images/icons/pencil.png" alt="Edit" /></a>
                                <a href="#" title="Delete"><img src="resources/images/icons/cross.png" alt="Delete" /></a> 
                                <a href="#" title="Edit Meta"><img src="resources/images/icons/hammer_screwdriver.png" alt="Edit Meta" /></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
           </div>
        </div> <!-- End #tab1 -->
        <div class="tab-content" id="tab2">
        <form>
            <fieldset> <!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->
                <p>
                    <label>Product Id</label>
                    <input class="text-input small-input datepicker" type="number" id="pid" name="medium-input" /> <span class="input-notification error png_bg" style="display:none">Error message</span>
                </p>
                <p>
                    <label>Name </label>
                    <input class="text-input medium-input" type="text" id="name" name="medium-input" /> <span class="input-notification success png_bg" style="display:none" >Successful message</span> <!-- Classes for input-notification: success, error, information, attention -->
                    <br/>
                </p>
                <p>
                    <label>Price</label>
                    <input class="text-input small-input datepicker" type="number" id="price" name="small-input" /> <span class="input-notification error png_bg" style="display:none">Error message</span>
                </p>
                <p>
                    <label>Image</label>
                    <input class="text-input small-input" type="file" id="photo" name="photo" />
                </p>
                <p>
                    <label>Category </label>
                        <?php
                        require 'config.php';
                        $sql= "SELECT distinct name FROM categories";
                        $result = mysqli_query($con, $sql) or die("SQL QUERY FAILED");
                        if (mysqli_num_rows($result) > 0) {
                            ?>
                            <select name="category" id="category" class="small-input">
                            <?php
                            while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                <option value="<?php echo $row['name']; ?>">
                                    <?php echo $row['name']; ?>
                                </option>
                                <?php
                            }
                            ?>
                            </select>
                            <?php
                        } else {
                            echo "data not found"; 
                        }
                        ?>
                </p>
                <p>
                    <label>Tages</label>  
                    <?php
                    $sqli= "SELECT * FROM tags";
                    $results = mysqli_query($con, $sqli) or die("SQL QUERY FAILED");
                    if (mysqli_num_rows($results) > 0) {
                        ?>   
                        <?php
                        while ($row = mysqli_fetch_assoc($results)) {
                            ?>       
                            <input type="checkbox" class="addtag" value="<?php echo $row["name"];?>" />
                                <?php echo $row["name"];  
                        }
                    }	
                    ?>
                </p>
                <p>
                <label>Short Decription </label>
                    <textarea class="text-input textarea wysiwyg" id="sdesc" name="textfield" cols="70" rows="5"></textarea>
                </p>
                <p>
                    <label> Long Description </label>
                    <textarea class="text-input textarea wysiwyg" id="ldesc" name="textfield" cols="70" rows="10"></textarea>
                </p>
                <p>
                    <input class="button" id="addproduct" type="button" value="Submit" />
                </p>
            </fieldset>
            <div class="clear"></div><!-- End .clear -->
        </form>	
    </div> <!-- End #tab2 -->        	
</div> <!-- End .content-box-content -->
</div> <!-- End .content-box -->
    <script>
        $(document).ready(function(){
        //load product 
            function loadproduct(){
            $.ajax({
            url : "showproduct.php",
            type : "POST",
            success : function(data){
                $("#showtable").html(data);
                }
            });
        }
        loadproduct();
        //add product
        $("#addproduct").on('click', function(e){
            //alert("kailash chandra yadav");
            e.preventDefault();
            var id= $("#pid").val();
            //console.log(id);
            var name= $("#name").val();
            var price= $("#price").val();
            var tags=[];
            $(".addtag").each(function(){
                if($(this).is(":checked")){
                    tags.push($(this).val());
                }
            });
            tags=tags.toString();
            //  console.log(tags);
            var photo= $("#photo").val();
            // alert(phot0);
            var category= $("#category").val();
            var sdesc= $("#sdesc").val();
            var ldesc= $("#ldesc").val();
            $.ajax({
                url : "addproduct.php",
                type : "POST",
                data : {
                        pid : id,
                        pname : name,
                        pprice : price,
                        pphoto : photo, 
                        pcategory : category, 
                        psdesc : sdesc,
                        tags : tags,
                        pldesc : ldesc
                       },  
                success : function(data){
                    //alert(data);
                    if(data==1){
                        alert("successfully Added Product");
                        loadproduct();
                    } else {
                        alert("error");
                    }
                }
            });	
        });
        // delete data from  database
        $(document).on("click", ".delete-data", function(){
        // alert("iam delete butoon");
            if (confirm("DO YOU REALLY WANT TO DELETE THIS PRODUCT ??")) {
                var productId= $(this).data("id");
                var element=this;
                // console.log(productId);
                $.ajax({
                url : "deleteproduct.php",
                type : "POST",
                data : {id : productId},
                success : function(data){
                    if(data==1){
                    $(element).closest("tr").fadeOut();
                    } else {
                    alert("WE CON'T DELETE THIS RECORD ");
                    }
                }
            })
        }
    });
    //update product details
    $(document).on("click", ".update-data", function(){
    // alert("iam update butoon");
        var eid= $(this).data("editid");
        var element=this;
        $.ajax({
            url : "updateproduct.php",
            type : "POST",
            data : {editid : eid},
            success : function(data){
                $("#showtable").html(data); 
            }
        })
    });
    // update data
    $(document).on("click", ".editproduct", function(){
    //alert("iam update data");
    var productId= $(this).data("editdataid");
    var element=this;
    var ename= $("#ename").val();
    var eprice= $("#eprice").val();
    var ecategory= $("#ecategory").val();
    var etags= $("#etags").val();
    var esdesc= $("#esdesc").val();
    var eldesc= $("#eldesc").val();
    //alert(productId);
    $.ajax({
        url : "updatedetails.php",
        type : "POST",
        data : {eid : productId,ename:ename, eprice:eprice, ecategory:ecategory, etag:etags, esdesc:esdesc, eldesc:eldesc},
        success : function(data){
        alert(data); 
        loadproduct();
        }
    })
});
});
</script>	
<?php  require 'footer.php';?>
			
