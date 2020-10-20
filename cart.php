<?php include 'header.php'; ?>
 
  <!-- catg header banner section -->
  <section id="aa-catg-head-banner">
   <img src="img/fashion/fashion-header-bg-8.jpg" alt="fashion img">
   <div class="aa-catg-head-banner-area">
     <div class="container">
      <div class="aa-catg-head-banner-content">
        <h2>Cart Page</h2>
        <ol class="breadcrumb">
          <li><a href="index.html">Home</a></li>                   
          <li class="active">Cart</li>
        </ol>
      </div>
     </div>
   </div>
  </section>
  <!-- / catg header banner section -->

 <!-- Cart view section -->
 <section id="cart-view">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="cart-view-area">
           <div class="cart-view-table">
             <form action="">
               <div class="table-responsive">
               <?php
                  require 'admin/config.php';
                  $sql = "SELECT * FROM cart";
                  $result = mysqli_query($con, $sql) or die("SQL QUERY FAILED");
                ?>
                  <table class="table">
                    <thead>
                      <tr>
                        <th></th>
                        <th></th>
                        <th>Product</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                      </tr>
                    </thead>
                    <div id="result"></div>
                    <tbody>
                    <?php
                    $total=0;
                    if (mysqli_num_rows($result) > 0) {
                        while ($row=$result->fetch_assoc()) {
                            ?>
                      <tr>
                        <td><a class="remove" href="#"><fa class="fa fa-close"></fa></a></td>
                        <td><a href="#"><img src="image/<?php echo $row['pimage']; ?>" alt="img"></a></td>
                        <td><a class="aa-cart-title" href="#"><?php echo $row['product_name']; ?></a></td>
                        <td><?php echo $row['pprice']; ?></td>
                        <td><input class="aa-cart-quantity" type="number" id="qty" value="<?php echo $row['pqty']; ?>">
                        <input class="aa-cart-quantity" type="hidden" id="pid" value="<?php echo $row['pid']; ?>"></td>
                        <td><?php echo $price = $row["pqty"]*$row['pprice']; ?></td>
                      </tr>
                            <?php 
                            $total = $total+$price;
                        }
                       
                    }
                    ?>

                      <tr>
                        <td colspan="6" class="aa-cart-view-bottom">
                          <div class="aa-cart-coupon">
                            <input class="aa-coupon-code" type="text" placeholder="Coupon">
                            <input class="aa-cart-view-btn" type="submit" value="Apply Coupon">
                          </div>
                          <input class="aa-cart-view-btn" type="submit" value="Update Cart">
                        </td>
                      </tr>
                      </tbody>
                  </table>
                </div>
             </form>
             <!-- Cart Total view -->
             <div class="cart-view-total">
               <h4>Cart Totals</h4>
               <table class="aa-totals-table">
                 <tbody>
                   <tr>
                     <th>Subtotal</th>
                     <td>$<?php echo $total; ?></td>
                   </tr>
                   <tr>
                     <th>Total</th>
                     <td>$<?php echo $total; ?></td>
                   </tr>
                 </tbody>
               </table>
               <a href="checkout.php" class="aa-cart-view-btn">Proced to Checkout</a>
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
 </section>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <script>
  $(document).ready(function(){
    var pqty= $("#qty").val();
    var pid= $("#pid").val();
    function loadpage(){
       $.ajax({
         url : "updateqty.php",
         type : "POST",
         data : {pqty:pqty, pid:pid},
         success : function(data){
           //alert(data);
          $("#result").html(data);
         }
       });
   };
    loadpage();
   })
 </script>


 <!-- / Cart view section -->


 <?php include 'footer.php'; ?>