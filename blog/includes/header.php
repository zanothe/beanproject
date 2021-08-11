<header id="aa-header"> 
  <div class="aa-header-top">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-header-top-area"> 
            <!-- start header top left -->
            <div class="aa-header-top-left"> 
            
            <img src="img/icobr.png">
              <!-- start language 
              <div class="aa-language">
                <div class="dropdown"> <a class="btn dropdown-toggle" href="#" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> <img src="img/flag/english.jpg" alt="english flag">ENGLISH <span class="caret"></span> </a>
                  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                    <li><a href="#"><img src="img/flag/french.jpg" alt="">FRENCH</a></li>
                    <li><a href="#"><img src="img/flag/english.jpg" alt="">ENGLISH</a></li>
                  </ul>
                </div>
              </div>
              <!-- / language --> 
              
              <!-- start currency 
              <div class="aa-currency">
                <div class="dropdown"> <a class="btn dropdown-toggle" href="#" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> <i class="fa fa-usd"></i>USD <span class="caret"></span> </a>
                  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                    <li><a href="#"><i class="fa fa-euro"></i>EURO</a></li>
                    <li><a href="#"><i class="fa fa-jpy"></i>YEN</a></li>
                  </ul>
                </div>
              </div>
              <!-- / currency --> 
              <!-- start cellphone -->
              <div class="cellphone hidden-xs">
                <p><span class="fa fa-phone"></span>00-62-658-658</p>
              </div>
              <!-- / cellphone --> 
            </div>
            <!-- / header top left -->
            
            <div class="aa-header-top-right">
              <ul class="aa-head-top-nav-right">
              
                <li class="hidden-xs"><a href="cart.php">Meu carrinho</a></li>

                   <?php
					if(isset($_SESSION['customer_email'])){
						echo "<li class='hidden-xs'><a href='checkout.php'>Checkout</a></li><li><a href='myaccount.php'>Minha conta</a></li><li><a href='logout.php'>Logout</a></li>" ;	
					}
					else{
						echo "<li><a href='' data-toggle='modal' data-target='#login-modal'>Login</a></li>";
					}
				?>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- / header top  --> 
  
  <!-- start header bottom  -->
  <div class="aa-header-bottom">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-header-bottom-area"> 
            <!-- logo  -->
            <div class="aa-logo"> 
              <!-- Text based logo
              <a href="index.html"> <span class="fa fa-shopping-cart"></span>
              <p>FORT<strong>LUVAS</strong> <span>E-commerce</span></p>
              </a> 
              <!-- img based logo --> 
             <a href="index.php"><img src="img/headerlogo.png" alt="Logo Fort Luvas"></a>
            </div>
            <!-- / logo  --> 
            

            
             <!-- cart box -->
            <div class="aa-cartbox"> <a class="aa-cart-link" href="#"> <span class="fa fa-shopping-basket"></span> <span class="aa-cart-title">SHOPPING CART</span> <span class="aa-cart-notify"><?php total_items(); ?></span> </a>
              <div class="aa-cartbox-summary">
                <ul>
                            <?php
											  $total=0;
												global $conn;
												$ip=getIp();
												$get_items = "select * from cart where ip_add='$ip'";
												$run_items = mysqli_query($conn,$get_items);
												
												while($p_price=mysqli_fetch_array($run_items)){
													
													$pro_id = $p_price['p_id'];
													$qty = $p_price['qty'];
													
													$pro_price="select * from products where product_id='$pro_id'"; 
													$run_pro_price = mysqli_query($conn,$pro_price);
													
														while($pp_price=mysqli_fetch_array($run_pro_price)){
																$product_price = array($pp_price['price']);
																$product_title = $pp_price['product_title'];
																$product_image = $pp_price['product_img1'];
																$single_price = $pp_price['price'];
																$qty_price = $single_price * $qty;
																$total+=$qty_price;
														
												
												?>
												
                  <li> <a class="aa-cartbox-img" href="#"><img src="admin_area/product_images/<?php echo $product_image; ?>" alt="img"></a>
                    <div class="aa-cartbox-info">
                      <h4><a href="#"><?php echo $product_title; ?></a></h4>
                      <p><?php echo $qty; ?> x <?php echo "$".$single_price; ?></p>
                    </div>
                    <a class="aa-remove-product" href="#"><span class="fa fa-times"></span></a> </li>
                  <?php }}?> 
                  <li> <span class="aa-cartbox-total-title"> Total </span> <span class="aa-cartbox-total-price"><?php total_price(); ?></span> </li>
                 
                </ul>
                </div>
            </div>
            <!-- / cart box --> 
          
 <!-- search box -->
            <div class="aa-search-box">
              <form action="" method="get">
                <input type="text" name="cat" id="" placeholder="Search here ex. 'man' ">
                <button type="submit"><span class="fa fa-search"><!--img src="img/icosrc.png"--></span></button>
              </form>
            </div>
            <!-- / search box --> 
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- / header bottom  --> 
</header>