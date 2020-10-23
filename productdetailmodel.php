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
require 'admin/config.php';
$pid=$_POST["pid"];
$sql= "SELECT * FROM products where product_id={$pid} ";
$result = mysqli_query($con, $sql) or die("SQL QUERY FAILED");
$output=" <div class='row'>";
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
          $output.=' <div class="col-md-6 col-sm-6 col-xs-12">                              
          <div class="aa-product-view-slider">                                
            <div class="simpleLens-gallery-container" id="demo-1">
              <div class="simpleLens-container">
                  <div class="simpleLens-big-image-container">
                      <a class="simpleLens-lens-image" data-lens-image="img/view-slider/large/polo-shirt-1.png">
                          <img src="image/'.$row['image'].'" class="simpleLens-big-image">
                      </a>
                  </div>
              </div>
              <div class="simpleLens-thumbnails-container">
                  <a href="#" class="simpleLens-thumbnail-wrapper"
                     data-lens-image="img/view-slider/large/polo-shirt-1.png"
                     data-big-image="img/view-slider/medium/polo-shirt-1.png">
                      <img src="img/view-slider/thumbnail/polo-shirt-1.png">
                  </a>                                    
                  <a href="#" class="simpleLens-thumbnail-wrapper"
                     data-lens-image="img/view-slider/large/polo-shirt-3.png"
                     data-big-image="img/view-slider/medium/polo-shirt-3.png">
                      <img src="img/view-slider/thumbnail/polo-shirt-3.png">
                  </a>

                  <a href="#" class="simpleLens-thumbnail-wrapper"
                     data-lens-image="img/view-slider/large/polo-shirt-4.png"
                     data-big-image="img/view-slider/medium/polo-shirt-4.png">
                      <img src="img/view-slider/thumbnail/polo-shirt-4.png">
                  </a>
              </div>
            </div>
          </div>
        </div>
        <!-- Modal view content -->
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="aa-product-view-content">
            <h3>'.$row['name'].'</h3>
            <div class="aa-price-block">
              <span class="aa-product-view-price">$'.$row['price'].'</span>
              <p class="aa-product-avilability">Avilability: <span>In stock</span></p>
            </div>
            <p>'.$row['long_desc'].'</p>
            <h4>Size</h4>
            <div class="aa-prod-view-size">
              <a href="#">S</a>
              <a href="#">M</a>
              <a href="#">L</a>
              <a href="#">XL</a>
            </div>
            <div class="aa-prod-quantity">
              <form action="">
                <select name="" id="">
                  <option value="0" selected="1">1</option>
                  <option value="1">2</option>
                  <option value="2">3</option>
                  <option value="3">4</option>
                  <option value="4">5</option>
                  <option value="5">6</option>
                </select>
              </form>
              <p class="aa-prod-category">
                Category: <a href="#">'.$row['category_id'].'</a>
              </p>
            </div>
            <div class="aa-prod-view-bottom">
              <a  class="aa-add-to-cart-btn addItemBtn" href="action1.php?id='.$row['product_id'].'"><span class="fa fa-shopping-cart " ></span>Add To Cart</a>
              <a href="product-detail.php" class="aa-add-to-cart-btn">View Details</a>
                        
          
            
            </div>
          </div>
        </div>'
        ;
    }
 
}
$output.="</div>";
echo $output;

                      
                       
                     

                        
