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
?>
<?php
  require "header.php";
?>
<?php
  require "sidebar.php"; 
?>
 
<div id="main-content"> <!-- Main Content Section with everything -->
    <noscript> <!-- Show a notification if the user has disabled javascript -->
        <div class="notification error png_bg">
            <div>
                Javascript is disabled or is not supported by your browser. Please
                <a href="http://browsehappy.com/" title="Upgrade to a better browser">upgrade</a> your browser or 
                <a href="http://www.google.com/support/bin/answer.py?answer=23852" title="Enable Javascript in your browser">enable</a>
                 Javascript to navigate the interface properly.
            </div>
        </div>
    </noscript>
    <!-- Page Head -->
    <h2>Welcome John</h2>
    <p id="page-intro">What would you like to do?</p>
    <div class="clear"></div> <!-- End .clear -->
    <div class="content-box"><!-- Start Content Box -->
        <div class="content-box-header">
            <h3>Categories</h3>
            <ul class="content-box-tabs">
                <li><a href="#tab1" class="default-tab">Manage</a></li> <!-- href must be unique and match the id of target div -->
                <li><a href="#tab2">Add</a></li>
            </ul>
        <div class="clear"></div>
    </div> <!-- End .content-box-header -->
    <div class="content-box-content">
        <div class="tab-content default-tab" id="tab1"> <!-- This is the target div. id must match the href of this div's tab -->
            <div class="notification attention png_bg">
                <a href="#" class="close"><img src="resources/images/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
                <div>
                    This is a Content Box. You can put whatever you want in it. By the way, you can close this notification with the top-right cross.
                </div>
            </div>
            <div id="showtag">
                <table>

                </table>
            </div>

        </div> <!-- End #tab1 -->
        <div class="tab-content" id="tab2">
            <form id="category-form">
                <fieldset> <!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->
                    <p>
                        <label>Tag Id </label>
                        <input class="text-input medium-input" type="text" id="tid" name="tid" /> <span class="input-notification success png_bg" style="display:none" >Successful message</span> <!-- Classes for input-notification: success, error, information, attention -->
                        <br/>
                    </p>
                    <p>
                        <label>Tag Name</label>
                        <input class="text-input medium-input datepicker" type="text" id="tname" name="tname" /> <span class="input-notification error png_bg" style="display:none">Error message</span>
                        </br>
                    </p>
                    <p>
                        <input class="button" id="addcategory" type="submit" value="Add Category"/>
                    </p>
                </fieldset>
                <div class="clear"></div><!-- End .clear -->
            </form>
        </div> <!-- End #tab2 -->        
    </div> <!-- End .content-box-content --> 
</div> <!-- End .content-box -->
<div class="clear"></div><!-- End .clear -->
<script>
$(document).ready(function(){
        // show table record 
        function loadtag(){
            $.ajax({
                url : "showtag.php",
                type : "POST",
                success : function(data){
					$("#showtag").html(data);
				}
			});
		}
		loadtag();
        //add product into the database
        $("#category-form").submit(function(e){
        e.preventDefault();
        var tagId= $("#tid").val();
        var tname= $("#tname").val();
        if(tname != '' && tagId !=''){	
            $.ajax({
                url : "addtag.php",
                type : "POST",
                data : {
                tagid : tagId,
                tagname : tname
                },  
                success : function(data){
                if(data==1){
                    alert("successfully added tag");
                    loadtag();
                } else {
                    alert("some thing went wrong");
                }
                }
            });
        } else {
            alert("All feilds Are required");
        }	
    });
    // delete data from  database
    $(document).on("click", ".delete-cat", function(){
    // alert("iam delete butoon");
        if(confirm("DO YOU REALLY WANT TO DELETE THIS PRODUCT ??")){
            var productId= $(this).data("tid");
            var element=this;
            //alert(productId);
            $.ajax({
                url : "deletetag.php",
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
	// update tag code..
	$(document).on("click", ".update-tag", function(){
       //alert("i am update tag code");
	    var categoryId=$(this).data("etid");
	    var emt = this;
		//alert(categoryId);
		$.ajax({
			url : "updatetag.php",
			type : "POST",
			data : {catid:categoryId},
			success: function(data){
				$("#showtag").html(data);
			}
		})

	})
	// update data
    $(document).on("click", ".edittag", function(){
        var tagid= $(this).data("edittagid");
        var element=this;
        var tagname= $("#tagname").val();
       // alert(tagid+tagname);
        $.ajax({
            url : "updatetagdetails.php",
            type : "POST",
            data : {tagid :tagid, tagname:tagname},
            success : function(data){
            //alert(data); 
            loadtag();
                }
        })
    });
});
</script>
<?php  require 'footer.php'; ?>			
