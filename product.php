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
require 'header.php' ?> 
  <!-- catg header banner section -->
  <section id="aa-catg-head-banner">
   <img src="img/fashion/fashion-header-bg-8.jpg" alt="fashion img">
   <div class="aa-catg-head-banner-area">
     <div class="container">
      <div class="aa-catg-head-banner-content">
        <h2>Fashion</h2>
        <ol class="breadcrumb">
          <li><a href="index.html">Home</a></li>         
          <li class="active">Women</li>
        </ol>
      </div>
     </div>
   </div>
  </section>
  <!-- / catg header banner section -->

  <!-- product category -->
  <section id="aa-product-category">
    <div class="container">
      <div class="row">
        <div class="col-lg-9 col-md-9 col-sm-8 col-md-push-3">
          <div class="aa-product-catg-content">
            <div class="aa-product-catg-head">
              <div class="aa-product-catg-head-left">
                <form action="" class="aa-sort-form">
                  <label for="">Sort by</label>
                  <select name="">
                    <option value="1" selected="Default">Default</option>
                    <option value="2">Name</option>
                    <option value="3">Price</option>
                    <option value="4">Date</option>
                  </select>
                </form>
                <form action="" class="aa-show-form">
                  <label for="">Show</label>
                  <select name="">
                    <option value="1" selected="12">12</option>
                    <option value="2">24</option>
                    <option value="3">36</option>
                  </select>
                </form>
              </div>
              <div class="aa-product-catg-head-right">
                <a id="grid-catg" href="#"><span class="fa fa-th"></span></a>
                <a id="list-catg" href="#"><span class="fa fa-list"></span></a>
              </div>
            </div>
            <div class="aa-product-catg-body">
              <ul class="aa-product-catg" id="result">
                <!-- start single product item -->
                <?php
                    require 'admin/config.php';
                    $limit_per_page=20;
                    $page="";
                if (isset($_POST["page_no"])) {
                        $page= $_POST["page_no"];

                } else {
                       $page = 1;
                }
                    $offset = ($page-1)* $limit_per_page;

                $sql= "SELECT * FROM products limit {$offset},{$limit_per_page}";
                    $result = mysqli_query($con, $sql) or die("SQL QUERY FAILED");
                    $output="";
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                         <li>
                          <figure>
                            <a class="aa-product-img" href="#"><img src="image/<?php echo $row["image"]; ?>" style="height:300px;" alt="polo shirt img"></a>
                            <form action="" class="form-submit">
                            
                              <a class="aa-add-card-btn addItemBtn"  href="action1.php?id=<?= $row['product_id'];?>" ><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                            </form>
                            <figcaption>
                              <h4 class="aa-product-title"><a href="#"><?php echo $row["name"]; ?></a></h4>
                              <!-- <h4 class="aa-product-title" style="color:green"><i><?php// echo $row["tags"]; ?></i></h4> -->
                              <span class="aa-product-price">$<?php  $desc=($row["price"]*20)/100; echo $res=$row["price"]-$desc; ?></span><span class="aa-product-price"><del>$<?php echo $row["price"]; ?></del>&nbsp;&nbsp;<b>20% OFF</b></span>
                              <p class="aa-product-descrip"><?php echo $row["long_desc"]; ?></p>
                            </figcaption>
                          </figure>                         
                          <div class="aa-product-hvr-content">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                            <a href="#"  data-toggle2="tooltip" data-placement="top" title="Quick View"   data-toggle="modal" data-target="#quick-view-modal"><span data-details="<?php echo $row['product_id']; ?>"  class="fa fa-search  editdetails"></span></a>                            
                          </div>
                          <!-- product badge -->
                          <?php if($desc=($row["price"]*20)/100 ) : ?> 
                          <span class="aa-badge aa-sold-out" href="#">SALE!</span>
                          <?php endif; ?>
                        </li>
                        
                        <!-- start single product item -->
                        <?php
                    }
                       // mysqli_close($con);
                        echo $output;
                } else {
                        echo "data not found"; 
                }
                ?>

                </ul> 
               
              <div class="modal fade" id="quick-view-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">                      
                    <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  
                    <div id="showdetails">

                    </div>
                 
                    </div>                        
                  </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
              </div>
              <!-- / quick view modal -->   
            </div>
            <div class="aa-product-catg-pagination" >
              <nav>
                <ul class="pagination">
                    <?php $sqldata="select * from products";
                    $records= mysqli_query($con, $sqldata) or die("query failed");
                    $total_records=mysqli_num_rows($records);
                    ?>
                    <?php
                    $total_pages = ceil($total_records/$limit_per_page);
                   
                    for ($i=1; $i < $total_pages; $i++) { 
                        ?>
                      <li>
                    <a href="#" id="<?php echo $i; ?>"> <?php echo $i; ?>
                    </a>
                  </li>
                        <?php
                    }
                    ?>
                </ul>
              </nav>
            </div>
          </div>
        </div>
        <?php
           require 'admin/config.php';
        ?>         
         
              <div class="col-lg-3 col-md-3 col-sm-4 col-md-pull-9">
                  <aside class="aa-sidebar">
                    <!-- single sidebar -->
                    <div class="aa-sidebar-widget">
                      <h3>Category</h3>
                      <?php
                          $sql= "SELECT distinct category_id FROM products ORDER BY product_id ASC";
                          $result = mysqli_query($con, $sql) or die("SQL QUERY FAILED"); 
                        if (mysqli_num_rows($result) > 0) {
                            ?>
                             <ul class="aa-catg-nav">
                             <?php
                                while ($row = mysqli_fetch_assoc($result)) {
                                    ?>
                                     <li> <input type="checkbox" id="categoryid" class="filter_check" value="<?php echo $row["category_id"]; ?>" >
                                    <?php echo $row['category_id']; ?> </li>
                                    <?php
                                }
                                ?>
                              </ul>
                            <?php
                        } else {
                            echo "data not found"; 
                        }
                        ?>
            </div>
              
            <!-- single sidebar -->
            <div class="aa-sidebar-widget">
              <h3>Tags</h3>
                <div class="tag-cloud">
                  <?php
                    $sql= "SELECT DISTINCT (tags) FROM products ORDER BY product_id ASC";
                    $result = mysqli_query($con, $sql) or die("SQL QUERY FAILED");
                    if (mysqli_num_rows($result) > 0) { ?>
                      <ul class="aa-catg-nav">
                        <?php
                        while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                        <li>  <input type="checkbox" id="tagid" class="filter_check" value="<?php echo $row['tags']; ?>"> &nbsp;&nbsp;<?php echo $row['tags']; 
                        ?>
                            </li>
                              <?php
                        }
                    } else {
                          echo "data not found"; 
                    }
                    ?>
              </div>
            </div>
            <!-- single sidebar -->
            <div class="aa-sidebar-widget">
              <h3>Shop By Price</h3>              
              <!-- price range -->
              <div class="aa-sidebar-price-range">
               <form action="">
                  <div id="skipstep" class="noUi-target noUi-ltr noUi-horizontal noUi-background">
                  </div>
                  <span id="skip-value-lower" class="example-val">30.00</span>
                 <span id="skip-value-upper" class="example-val">100.00</span>
                 <button class="aa-filter-btn" type="submit">Filter</button>
               </form>
              </div>              

            </div>
            <!-- single sidebar -->
            <div class="aa-sidebar-widget">
              <h3>Shop By Color</h3>
              <div class="aa-color-tag">
                <a class="aa-color-green" href="#"></a>
                <a class="aa-color-yellow" href="#"></a>
                <a class="aa-color-pink" href="#"></a>
                <a class="aa-color-purple" href="#"></a>
                <a class="aa-color-blue" href="#"></a>
                <a class="aa-color-orange" href="#"></a>
                <a class="aa-color-gray" href="#"></a>
                <a class="aa-color-black" href="#"></a>
                <a class="aa-color-white" href="#"></a>
                <a class="aa-color-cyan" href="#"></a>
                <a class="aa-color-olive" href="#"></a>
                <a class="aa-color-orchid" href="#"></a>
              </div>                            
            </div>
            <!-- single sidebar -->
            <div class="aa-sidebar-widget">
              <h3>Recently Views</h3>
              <div class="aa-recently-views">
                <ul>
                  <li>
                    <a href="#" class="aa-cartbox-img"><img alt="img" src="img/woman-small-2.jpg"></a>
                    <div class="aa-cartbox-info">
                      <h4><a href="#">Product Name</a></h4>
                      <p>1 x $250</p>
                    </div>                    
                  </li>
                  <li>
                    <a href="#" class="aa-cartbox-img"><img alt="img" src="img/woman-small-1.jpg"></a>
                    <div class="aa-cartbox-info">
                      <h4><a href="#">Product Name</a></h4>
                      <p>1 x $250</p>
                    </div>                    
                  </li>
                   <li>
                    <a href="#" class="aa-cartbox-img"><img alt="img" src="img/woman-small-2.jpg"></a>
                    <div class="aa-cartbox-info">
                      <h4><a href="#">Product Name</a></h4>
                      <p>1 x $250</p>
                    </div>                    
                  </li>                                      
                </ul>
              </div>                            
            </div>
            <!-- single sidebar -->
            <div class="aa-sidebar-widget">
              <h3>Top Rated Products</h3>
              <div class="aa-recently-views">
                <ul>
                  <li>
                    <a href="#" class="aa-cartbox-img"><img alt="img" src="img/woman-small-2.jpg"></a>
                    <div class="aa-cartbox-info">
                      <h4><a href="#">Product Name</a></h4>
                      <p>1 x $250</p>
                    </div>                    
                  </li>
                  <li>
                    <a href="#" class="aa-cartbox-img"><img alt="img" src="img/woman-small-1.jpg"></a>
                    <div class="aa-cartbox-info">
                      <h4><a href="#">Product Name</a></h4>
                      <p>1 x $250</p>
                    </div>                    
                  </li>
                   <li>
                    <a href="#" class="aa-cartbox-img"><img alt="img" src="img/woman-small-2.jpg"></a>
                    <div class="aa-cartbox-info">
                      <h4><a href="#">Product Name</a></h4>
                      <p>1 x $250</p>
                    </div>                    
                  </li>                                      
                </ul>
              </div>                            
            </div>
          </aside>
        </div>
       
      </div>
    </div>
  </section>
  <!-- / product category -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>   
 <script>
 $(document).ready(function(){
    $(".filter_check").click(function(){
      //alert("=============");
      var action = 'data';
      var category = get_filter_text('categoryid');
      //alert(category);
      var tag = get_filter_text('tagid');
      $.ajax({
        url : 'action.php',
        method : "POST",
        data : {action : action,category:category,tag:tag},
        success : function(data){
          $("#result").html(data);
        }
      })
    })
  // alert("hello i am alert");
   function get_filter_text(text_id){
     var filterData = [];
     $('#'+text_id+':checked').each(function(){
       filterData.push($(this).val());
     })
     return filterData;
   }

   // pagination 

   function loadpage(page){
       $.ajax({
         url : "product.php",
         type : "POST",
         data : {page_no : page},
         success : function(data){
          $("#result").html(data);
         }
       });
   };
    loadpage(page_id);
   // pagination code
   $(document).on("click","#pagination a",function(e){
     e.preventDefault();
     var page_id = $(this).attr("id");
     loadpage(page_id); 
   })


   //
   $(".addItemBtn").click(function(e){
     e.preventDefault();
     var $form = $(this).closest(".form-submit");
    //  var pid = $(".pid").val();
    //  alert(pid);
    //  var pname = $form.find(".pname").val();
    //  var pcat = $form.find(".pcat_name").val();
    //  var ptag = $form.find(".ptag").val();
    //  var pimage = $form.find(".pimage").val();
    //  var pprice = $form.find(".pprice").val();
     $.ajax({
       url : "action1.php",
       type : "GET",
       data : {pid :pid ,pname:pname,pcat:pcat,ptag:ptag,pimage:pimage,pprice:pprice},
       success : function(data){
         $(".added").html(data);
       }
     })
   })

   //targert data 
  
 });
 
 </script>
  
                <script>
                $(document).ready(function(){
                    $(document).on("click", ".editdetails", function(){
                  //  alert("i am detail");
                     var pid= $(this).data("details");
                     var element=this;
                    // alert("hhhhhhhhhhhhhhh");
                   //  alert(pid);

                     $.ajax({
                       url : "productdetailmodel.php",
                       type : "POST",
                       data : {pid:pid},
                       success : function(data){
                        $("#showdetails").html(data);
                       }
                     })
                  })
                })
                         
                 </script>       
<?php require 'footer.php'?>