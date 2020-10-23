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
				
				<li><a class="shortcut-button" href="#"><span>
					<img src="resources/images/icons/pencil_48.png" alt="icon" /><br />
					Write an Article
				</span></a></li>
				
				<li><a class="shortcut-button" href="#"><span>
					<img src="resources/images/icons/paper_content_pencil_48.png" alt="icon" /><br />
					Create a New Page
				</span></a></li>
				
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
						 <div id="showcategory">
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
						</table>
                       </div>
					</div> <!-- End #tab1 -->
					
					<div class="tab-content" id="tab2">
					
						
					<form id="category-form">
						<fieldset> <!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->
							<p>
								<label>Category Id </label>
										<input class="text-input medium-input" type="text" id="cid" name="cid" /> <span class="input-notification success png_bg" style="display:none" >Successful message</span> <!-- Classes for input-notification: success, error, information, attention -->
										<br/>
								</p>
								<p>
									<label>Name</label>
									<input class="text-input medium-input datepicker" type="text" id="name" name="cname" /> <span class="input-notification error png_bg" style="display:none">Error message</span>
								</p>
								<p>
									<input class="button" id="addcategory" type="submit" value="Add Category" />
								</p>
								
							</fieldset>
							<div class="clear"></div><!-- End .clear -->
							
						</form>
						


					</div> <!-- End #tab2 -->        
					
						
				     
					
				</div> <!-- End .content-box-content -->
				
			</div> <!-- End .content-box -->
			        <script>
						$(document).ready(function(){
							// show table record 
                            function loadcat(){
								$.ajax({
										url : "showcategory.php",
										type : "POST",
										success : function(data){
											$("#showcategory").html(data);
										}
									});
								}
								loadcat();
                            //add product into the database
							$("#category-form").submit(function(e){
								e.preventDefault();
								var categoryId= $("#cid").val();
								var name= $("#name").val();
							   	if(name != '' && categoryId !=''){	
								$.ajax({
									url : "addcategory.php",
									type : "POST",
									data : {
										catid : categoryId,
										cname : name
										},  
									success : function(data){
										if(data==1){
											alert("successfully added category");
											loadcat();
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
							  var productId= $(this).data("cid");
							  var element=this;
							 alert(productId);
							 $.ajax({
								 url : "deletecategory.php",
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
            
						 });
					</script>

			 <!-- <div class="content-box column-left"> -->
				
				<!-- <div class="content-box-header">
					
					<h3>Content box left</h3> 
					
				 </div>  -->
				<!-- End .content-box-header -->
<!-- 				
				<div class="content-box-content">
					
					<div class="tab-content default-tab">
					
						<h4>Maecenas dignissim</h4>
						<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed in porta lectus. Maecenas dignissim enim quis ipsum mattis aliquet. Maecenas id velit et elit gravida bibendum. Duis nec rutrum lorem. Donec egestas metus a risus euismod ultricies. Maecenas lacinia orci at neque commodo commodo.
						</p>
						 -->
					<!-- </div>  -->
					<!-- End #tab3 -->        
					
				<!-- </div>  -->
				<!-- End .content-box-content 
				
			</div> -->
			<!-- End .content-box -->
			
			<!-- <div class="content-box column-right closed-box"> -->
				
				<!-- <div class="content-box-header"> --> 
					 <!-- Add the class "closed" to the Content box header to have it closed by default -->
					
					<!-- <h3>Content box right</h3> -->
					
				<!-- </div>  -->
				<!-- End .content-box-header -->
			
				<!-- <div class="content-box-content">  -->
					
					<!-- <div class="tab-content default-tab"> -->
					
						<!-- <h4>This box is closed by default</h4>
						<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed in porta lectus. Maecenas dignissim enim quis ipsum mattis aliquet. Maecenas id velit et elit gravida bibendum. Duis nec rutrum lorem. Donec egestas metus a risus euismod ultricies. Maecenas lacinia orci at neque commodo commodo.
						</p> -->
						
					<!-- </div> -->
					 <!-- End #tab3 -->        
					
				<!-- </div> -->
				 <!-- End .content-box-content -->
				
			<!-- </div>  -->
			<!-- End .content-box -->
			<div class="clear"></div>
			
			
			<!-- Start Notifications -->
<!-- 			
			<div class="notification attention png_bg">
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
			</div>
			 -->
			<!-- End Notifications -->
<?php  include('footer.php');  ?>			
