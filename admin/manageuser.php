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
 require 'header.php'; ?>
<?php require 'sidebar.php'; ?>
<div id="main-content"> <!-- Main Content Section with everything -->
    <noscript> <!-- Show a notification if the user has disabled javascript -->
        <div class="notification error png_bg">
            <div>
               Javascript is disabled or is not supported by your browser. Please <a href="http://browsehappy.com/" title="Upgrade to a better browser">upgrade</a> your browser or <a href="http://www.google.com/support/bin/answer.py?answer=23852" title="Enable Javascript in your browser">enable</a> Javascript to navigate the interface properly.
            </div>
        </div>
    </noscript>
    <!-- Page Head -->
    <h2>Welcome John</h2>
    <p id="page-intro">What would you like to do?</p>
    <!-- <ul class="shortcut-buttons-set">
    <li><a class="shortcut-button" href="#">
       <span>
            <img src="resources/images/icons/pencil_48.png" alt="icon" /><br />
            Write an Article
       </span></a>
    </li>
    <li><a class="shortcut-button" href="#">
            <span>
            <img src="resources/images/icons/paper_content_pencil_48.png" alt="icon" /><br />
            Create a New Page
            </span>
        </a>
    </li>
    <li><a class="shortcut-button" href="#">
            <span>
            <img src="resources/images/icons/image_add_48.png" alt="icon" /><br />
            Upload an Image
        </span>
    </a>
    </li>
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
    <div class="content-box-content">
        <div class="tab-content default-tab" id="tab1"> <!-- This is the target div. id must match the href of this div's tab -->
            <div class="notification attention png_bg">
                <a href="#" class="close"><img src="resources/images/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
            <div>
            This is a Content Box. You can put whatever you want in it. By the way, you can close this notification with the top-right cross.
        </div>
    </div>
       <div id="showuser">
           <table>
            </table>
    </div>
</div> <!-- End #tab1 -->
<div class="tab-content" id="tab2">
    <form action="#" method="post">
        <fieldset> <!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->
            <p>
                <label>User Id </label>
                <input class="text-input medium-input" type="text" id="uid" name="medium-input" /> <span class="input-notification success png_bg" style="display:none" >Successful message</span> <!-- Classes for input-notification: success, error, information, attention -->
                <br/>
            </p>
            <p>
                <label>Name </label>
                <input class="text-input medium-input" type="text" id="name" name="medium-input" /> <span class="input-notification success png_bg" style="display:none" >Successful message</span> <!-- Classes for input-notification: success, error, information, attention -->
                <br/>
            </p>
            <p>
                <label>Email</label>
                <input class="text-input medium-input datepicker" type="email" id="email" name="small-input" /> <span class="input-notification error png_bg" style="display:none">Error message</span>
            </p>
            <p>
                <label>Password</label>
                <input class="text-input small-input datepicker" type="password" id="password" name="small-input" /> <span class="input-notification error png_bg" style="display:none">Error message</span>
            </p>
            <p>
                <label>Date Of Birth</label>    
                <input class="text-input small-input datepicker" type="date" id="dob" name="small-input" /> <span class="input-notification error png_bg" style="display:none">Error message</span>
            </p>
            <p>
                <label>Address </label>
                <textarea class="text-input textarea wysiwyg" id="address" name="textfield" cols="79" rows="10"></textarea>
            </p>
            <p>
                <input class="button" id="adduser" type="submit" value="Submit" />
            </p>
        </fieldset>
        <div class="clear"></div><!-- End .clear -->
    </form>
</div> <!-- End #tab2 -->        
</div> <!-- End .content-box-content -->
</div> <!-- End .content-box -->
 <!-- <div class="content-box column-left"> -->
    <!-- <div class="content-box-header">
            <h3>Content box left</h3> 
        </div>  -->
    <!-- End .content-box-header -->
    <!-- <div class="content-box-content">
            <div class="tab-content default-tab">
                <h4>Maecenas dignissim</h4>
                 <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed in porta lectus. Maecenas dignissim enim quis ipsum mattis aliquet. Maecenas id velit et elit gravida bibendum. Duis nec rutrum lorem. Donec egestas metus a risus euismod ultricies. Maecenas lacinia orci at neque commodo commodo.
                </p> -->
       <!-- </div>  --><!-- End #tab3 -->        
   <!-- </div>  --><!-- End .content-box-content 
</div> -->
<!-- End .content-box -->
<!-- <div class="content-box column-right closed-box"> -->
    <!--<div class="content-box-header"> --> 
           <!-- Add the class "closed" to the Content box header to have it closed by default -->
         <!-- <h3>Content box right</h3> -->
    <!--</div>  --><!-- End .content-box-header -->
   <!-- <div class="content-box-content">  -->
       <!-- <div class="tab-content default-tab"> -->
           <!-- <h4>This box is closed by default</h4>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed in porta lectus. Maecenas dignissim enim quis ipsum mattis aliquet. Maecenas id velit et elit gravida bibendum. Duis nec rutrum lorem. Donec egestas metus a risus euismod ultricies. Maecenas lacinia orci at neque commodo commodo.
                </p> -->
       <!-- </div> --><!-- End #tab3 -->        
  <!-- </div> --><!-- End .content-box-content -->
<!-- </div>  --><!-- End .content-box -->
     <div class="clear"></div>
    <!-- Start Notifications -->
<!--<div class="notification attention png_bg">
        <a href="#" class="close"><img src="resources/images/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
    <div>
    Attention notification. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vulputate, sapien quis fermentum luctus, libero. 
    </div>
</div>
    <div class="notification information png_bg">
        <a href="#" class="close"><img src="resources/images/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
        <div>
            Information notification. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vulputate, sapien quis fermentum luctus, libero.
        </div>
    </div>
    <div class="notification success png_bg">
        <a href="#" class="close"><img src="resources/images/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
    <div>
        Success notification. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vulputate, sapien quis fermentum luctus, libero.
    </div>
</div>
    <div class="notification error png_bg">
       <a href="#" class="close"><img src="resources/images/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
    <div>
     Error notification. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vulputate, sapien quis fermentum luctus, libero.
    </div>
</div>--><!-- End Notifications -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    function loaduser(){
        $.ajax({
            url : "showuser.php",
            type : "POST",
            success : function(data){
                $("#showuser").html(data);
                }
        });
    }
    loaduser();
    $("#adduser").on('click', function(e){
        //alert("kailash chandra yadav");
        e.preventDefault();
        var id= $("#uid").val();
        var name= $("#name").val();
        var email= $("#email").val();
        var password= $("#password").val();
        var dob= $("#dob").val();
        var address= $("#address").val();
        $.ajax({
        url : "adduser.php",
        type : "POST",
        data : {
           uid : id,
           name : name,
           email : email,
           password : password, 
           dob : dob, 
           address : address
        },  										
        success : function(data){
        //alert(data);
            if(data==1){
                alert("successfully added user");
                loaduser();
            } else {
                alert("Can't add user Something went wrong try again");
            }
        }
        })
    });
    // delete data from  database
    $(document).on("click", ".delete-user", function(){
    // alert("iam delete butoon");
        if(confirm("DO YOU REALLY WANT TO DELETE THIS PRODUCT ??")){
            var uid= $(this).data("uid");
            var element=this;
            alert(uid);
            $.ajax({
                url : "deleteuser.php",
                type : "POST",
                data : {uid : uid},
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
     //update user details
    $(document).on("click", ".update-user", function(){
        var ueid= $(this).data("ueid");
        var element=this;
        $.ajax({
        url : "updateuser.php",
        type : "POST",
        data : {ueid : ueid},
        success : function(data){
           $("#showuser").html(data); 
          }
        })
    });
    // update data
    $(document).on("click", ".edituser", function(){
        var uId= $(this).data("edituserid");
        var element=this;
        var uname= $("#name").val();
        var uemail= $("#email").val();
        var udob= $("#dob").val();
        var uaddress= $("#address").val();
        //alert(uId+uname);
        $.ajax({
            url : "updateuserdetails.php",
            type : "POST",
            data : {uid :uId, uname:uname, uemail:uemail, udob:udob, uaddress:uaddress},
            success : function(data){
            //alert(data); 
            loaduser();
                }
        })
    });
});
</script>
<?php  require 'footer.php'; ?>

