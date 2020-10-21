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
if (isset($_POST['action'])) {
    $sql = "SELECT * FROM products WHERE category_id !=''";
    if (isset($_POST['category'])) {
         $category = implode("','", $_POST['category']);
         $sql.="AND category_id IN('".$category."')";
    }
    if (isset($_POST['tag'])) {
        $tag = implode("','", $_POST['tag']);
        $sql.="AND tags IN('".$tag."')";
    }
    $result = $con->query($sql);
    $output= '<ul class="aa-product-catg" id="result">';
    if ($result->num_rows>0) {
        while ($row=$result->fetch_assoc()) {
            $output.='<li>
            <figure>
              <a class="aa-product-img" href="#"><img src="image/'.$row["image"].'" style="height:300px;" alt="polo shirt img"></a>
              <a class="aa-add-card-btn" href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
              <figcaption>
                <h4 class="aa-product-title"><a href="#">'.$row["name"].'</a></h4>
                <h4 class="aa-product-title" style="color:green"> <i>'.$row["tags"].'</i> </h4>
                <span class="aa-product-price">$ '.$row["price"].'</span>
                <span class="aa-product-price"><del>$'. $res=($row["price"]*20/100).'</del>&nbsp;&nbsp;<b>20% OFF</b></span>
                <p class="aa-product-descrip">'.$row["long_desc"].'</p>
              </figcaption>
          </figure>                         
          <div class="aa-product-hvr-content">
            <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
            <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
            <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>                            
          </div>
          <!-- product badge -->
          <?php if($desc=($row["price"]*20)/100 ) : ?> 
          <span class="aa-badge aa-sale" href="#">SALE!</span>
          <?php endif; ?>
        </li>';
        }
    } else {
         $output="no product find"  ;
    }
   
    echo $output;
}

?>