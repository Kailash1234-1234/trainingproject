              <div class="col-lg-3 col-md-3 col-sm-4 col-md-pull-9">
                  <aside class="aa-sidebar">
                    <!-- single sidebar -->
                    <div class="aa-sidebar-widget">
                      <h3>Category</h3>
                      <?php
                          include 'admin/config.php';
                          $sql= "SELECT * FROM categories";
                          $result = mysqli_query($con, $sql) or die("SQL QUERY FAILED");
                          
                      if (mysqli_num_rows($result) > 0) {
                            ?>
                             <ul class="aa-catg-nav">
                             <?php
                                while ($row = mysqli_fetch_assoc($result)) {
                                    ?>
                         <li><a href="#"  > <input type="hidden" name="productid" class="showbycat" value='<?php echo $row["category_id"]; ?>'>	<?php echo $row['name']; ?></a></li>
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
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                  <script>
                      // delete data from  database
                    $(document).ready(function(){
                      alert("22222222222222222");
                       $(".showbycat").click(function(){
                       var id= $('.showbycat').val();          
                  }); 
                    });      
                  </script>
            <!-- single sidebar -->
            <div class="aa-sidebar-widget">
              <h3>Tags</h3>
                <div class="tag-cloud">
                  <?php
									     $sql= "SELECT * FROM tags";
									     $result = mysqli_query($con, $sql) or die("SQL QUERY FAILED");
									     if (mysqli_num_rows($result) > 0) {
										      while ($row = mysqli_fetch_assoc($result)) {
											   ?>
                           <a href="#"><?php echo $row['name']; ?></a>
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
       