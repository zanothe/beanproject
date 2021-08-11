<?php

session_start();
include("includes/db.php");
include("funcs/funcs.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Fluvas | Home</title>

<!-- Font awesome -->
<link href="css/font-awesome.css" rel="stylesheet">
<!-- Bootstrap -->
<link href="css/bootstrap.css" rel="stylesheet">
<!-- SmartMenus jQuery Bootstrap Addon CSS -->
<link href="css/jquery.smartmenus.bootstrap.css" rel="stylesheet">
<!-- Product view slider -->
<link rel="stylesheet" type="text/css" href="css/jquery.simpleLens.css">
<!-- slick slider -->
<link rel="stylesheet" type="text/css" href="css/slick.css">
<!-- price picker slider -->
<link rel="stylesheet" type="text/css" href="css/nouislider.css">
<!-- Theme color -->
<link id="switcher" href="css/theme-color/default-theme.css" rel="stylesheet">

<!-- Main style sheet -->
<link href="css/style.css" rel="stylesheet">

<!-- Google Font -->
<link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
<style>
.nav navbar-nav {
	display: inlne-block;
	}
</style>

</head>
<body>

    
<!-- wpf loader Two -->
<div id="wpf-loader-two">
  <div class="wpf-loader-two-inner"> <span>Loading</span> </div>
</div>
<!-- / wpf loader Two --> 
<!-- SCROLL TOP BUTTON --> 
<a class="scrollToTop" href="#"><i class="fa fa-chevron-up"></i></a> 
<!-- END SCROLL TOP BUTTON --> 

<header id="aa-header"> 
  <div class="aa-header-top">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-header-top-area"> 
            <!-- start header top left -->
            <div class="aa-header-top-left"> 
              <!-- start language -->
              <div class="aa-language">
                <div class="dropdown"> <a class="btn dropdown-toggle" href="#" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> <img src="img/flag/english.jpg" alt="english flag">ENGLISH <span class="caret"></span> </a>
                  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                    <li><a href="#"><img src="img/flag/french.jpg" alt="">FRENCH</a></li>
                    <li><a href="#"><img src="img/flag/english.jpg" alt="">ENGLISH</a></li>
                  </ul>
                </div>
              </div>
              <!-- / language --> 
              
              <!-- start currency -->
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
              
                <li class="hidden-xs"><a href="cart.php">My Cart</a></li>

                   <?php
					if(isset($_SESSION['customer_email'])){
						echo '<li><a href="myaccount.php">My Account</a></li><li class="hidden-xs"><a href="cart.php">Wishlist</a></li><li class="hidden-xs"><a href="checkout.php">Checkout</a></li><li><a href="logout.php">Logout</a></li>' ;	
					}
					else{
						echo '<li><a href="" data-toggle="modal" data-target="#login-modal">Login</a></li>';
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
              <!-- Text based logo --> 
              <a href="index.html"> <span class="fa fa-shopping-cart"></span>
              <p>FORT<strong>LUVAS</strong> <span>E-commerce</span></p>
              </a> 
              <!-- img based logo --> 
              <!-- <a href="index.html"><img src="img/logo.jpg" alt="logo img"></a> --> 
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
              <form action="research.php" method="post">
                <input type="text" name="keyword" id="" placeholder="Pesquisar ex. 'Botas' ">
                <button type="submit"><span class="fa fa-search"></span></button>
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

<!-- menu -->
<section id="menu">
  <div class="container">
    <div class="menu-area"> 
      <!-- Navbar -->
      <div class="navbar navbar-default" role="navigation">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        </div>
        <div class="navbar-collapse collapse"> 
          <!-- Left nav -->
          
          <?php getIp(); ?>
          <?php cart(); ?>
          <ul class="nav navbar-nav">
            <li><a href="index.php">Home</a></li>
			
			
						<?php getCatsMainNav(); ?>
		
            
            <li style="float:right"><a>
            <?php
				if(isset($_SESSION['customer_email'])){
					echo "Welcome " . $_SESSION['customer_fname'];
				}
				else{
					echo "Welcome Guest";
				}
				
			?></a>
            </li>
          </ul>
        </div>
        <!--/.nav-collapse --> 
      </div>
    </div>
  </div>
</section>
<!-- / menu --> 

<!-- Start slider -->
<section id="aa-slider">
  <div class="aa-slider-area">
    <div id="sequence" class="seq">
      <ul class="seq-canvas">
        <!-- single slide item -->
        <li>
          <div class="seq-model"> <img data-seq src="img/slider/slider-1.jpg" alt="Men slide img" /> </div>
          <div class="seq-title"> <span data-seq>Save Up to 75% Off</span>
            <h2 data-seq>Best Collection</h2>
            

                  
            <p data-seq>Shop at the lowest prices.</p>
            <a data-seq href="#" class="aa-shop-now-btn aa-secondary-btn">SHOP NOW</a> </div>
        </li>
        
      </ul>

        <fieldset class="seq-nav" aria-controls="sequence" aria-label="Slider buttons">
          <a type="button" class="seq-prev" aria-label="Previous"><span class="fa fa-angle-left"></span></a>
          <a type="button" class="seq-next" aria-label="Next"><span class="fa fa-angle-right"></span></a>
        </fieldset>

    </div>
  </div>
</section>
<!-- / slider --> 
<!-- Products section -->
<section id="aa-product">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="row">
          <div class="aa-product-area">
            <div class="aa-product-inner"> 
              <!-- start prduct navigation -->
              <ul class="nav nav-tabs aa-products-tab">
             
              </ul>
              
              <!-- Tab panes -->
              <div class="tab-content"> 
                <!-- Start men product category -->
                <div class="tab-pane fade in active" id="men">
               
                               
                  <ul class="aa-product-catg">
            
                      <div class="panel">
				            <ul class="product">

				            </ul>
				            </div>
            
                    <!-- start single product item -->
                   
                   
					<?php 
					function research(){


if(!empty($_POST('keyword')){
	
      $aKeyword = explode(" ", $_POST['keyword']);
      $query ="SELECT * FROM products WHERE product_title like '%" . $aKeyword[0] . "%'";
     
     for($i = 1; $i < count($aKeyword); $i++) {
		if(!empty($aKeyword[$i])) {
			$query .= " OR product_title like '%" . $aKeyword[$i] . "%'";
		}
      }
    
     $result = mysqli_query($db, $query);
     echo "<br>You have searched for keywords: " . $_POST['keyword'];
					
     if(mysqli_num_rows($result) > 0) {

		echo "<br>Result Found: ";
		echo "<br><table border='1'>";
		
		foreach (mysqli_fetch_array($result) as $row) {
						$pro_id = $row['product_id'];
						$pro_title = $row['product_title'];
						$pro_cat = $row['cat_id'];
						$pro_desc = $row['product_desc'];
						$pro_price = $row['price'];
						$pro_img1 = $row['product_img1'];

		echo "
                      <li>
					  <figure> 
					  	<a class='aa-product-img href='#'>
							<img src='admin_area/product_images/$pro_img1' alt='$pro_img1' >
						</a> 
						<a class='aa-add-card-btn' href='index.php?add_cart=$pro_id'>
							<span class='fa fa-shopping-cart'></span>Add To Cart
						</a>
                        <figcaption>
                          <h4 class='aa-product-title'><a href='#'>$pro_title</a></h4>
                          <span class='aa-product-price'>$ $pro_price</span>
						  
						</figcaption>
                      </figure>
                      
					  <div class='aa-product-hvr-content'> 
					  	<a href='#' data-toggle='tooltip' data-placement='top' title='Add to Wishlist'>
					  		<span class='fa fa-heart-o'></span>
					  	</a> 
					  	<a href='#' data-toggle='tooltip' data-placement='top' title='Compare'>
							<span class='fa fa-exchange'></span>
						</a> 
						<a href='modal.php?Id=$pro_id' data-toggle2='tooltip' data-placement='top' title='Quick View' data-toggle='modal'
						 data-target='#quick-view-modal'>
							<span class='fa fa-search'></span>
						</a> 
					</div>
                      <!-- product badge --> 
                      <span class='aa-badge aa-sale' href='#'>SALE!</span> </li>
                   ";
		}
    }
    else {
		echo "<br>Result Found: NONE";
    }
}     ?>              
                   
                   
                   
                   
				  </ul>                    
                  <a class="aa-browse-btn" href="index.php">Browse all Product <span class="fa fa-long-arrow-right"></span></a> </div>
             
                <!-- / men product category --> 
                </div>
              </div>
              
              <!-- quick view modal -->
              <div class="modal fade" id="quick-view-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                  	<!------------------->
                  		<!------------------->
                        <!-- From modal.php-->
                        <!------------------->
                        <!------------------->
              
                  </div>
                  <!-- /.modal-content --> 
                </div>
                <!-- /.modal-dialog --> 
              </div>
              <!-- / quick view modal --> 
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- / Products section --> 







<!-- Subscribe section -->
<section id="aa-subscribe">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="aa-subscribe-area">
          <h3>Subscribe our newsletter </h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex, velit!</p>
          <form action="" class="aa-subscribe-form">
            <input type="email" name="" id="" placeholder="Enter your Email">
            <input type="submit" value="Subscribe">
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- / Subscribe section --> 

<footer id="aa-footer"> 
  <!-- footer bottom -->
  <div class="aa-footer-top">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-footer-top-area">
            <div class="row">
              <div class="col-md-3 col-sm-6">
                <div class="aa-footer-widget">
                  <h3>Menu Principal/h3>
                  <ul class="aa-footer-nav">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Nossos Serviços</a></li>
                    <li><a href="#">Nossos Produtos</a></li>
                    <li><a href="#">Sobre</a></li>
                    <li><a href="contact.php">Contato</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="aa-footer-widget">
                  <div class="aa-footer-widget">
                    <h3>Links Uteis</h3>
                    <ul class="aa-footer-nav">
                      <li><a href="#">Site Map</a></li>
                      <li><a href="#">Busca</a></li>
                      <li><a href="#">Fornecedores</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="aa-footer-widget">
                  <div class="aa-footer-widget">
                    <h3>Contactar-nos</h3>
                    <address>
                    <p> 25 Astor Pl, NY 10003, USA</p>
                    <p><span class="fa fa-phone"></span>+1 212-982-4589</p>
                    <p><span class="fa fa-envelope"></span>email@_____.com</p>
                    </address>
                    <div class="aa-footer-social"> <a href="#"><span class="fa fa-facebook"></span></a> <a href="#"><span class="fa fa-twitter"></span></a> <a href="#"><span class="fa fa-google-plus"></span></a> <a href="#"><span class="fa fa-youtube"></span></a> </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- footer-bottom -->
  <div class="aa-footer-bottom">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-footer-bottom-area">
            <p>Designed by <a href="http://www.markups.io/">MarkUps.io</a></p>
            <div class="aa-footer-payment"> <span class="fa fa-cc-mastercard"></span> <span class="fa fa-cc-visa"></span> <span class="fa fa-paypal"></span> <span class="fa fa-cc-discover"></span> </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>

<!-- Login Modal -->
<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4>Login or Register</h4>
        <form class="aa-login-form" action="auth.php" method="post">
          <label for="">Nome de Usuário ou E-mail<span>*</span></label>
          <input type="text" name="email" placeholder="Username or email" required>
          <label for="">Senha<span>*</span></label>
          <input type="password" name="pass" placeholder="Password" required>
          <button class="aa-browse-btn" name="login" type="submit">Login</button>
          <label for="rememberme" class="rememberme">
            <input type="checkbox" id="rememberme">
            Remember me </label>
          <p class="aa-lost-password"><a href="#">Esqueceu a senha?</a></p>
          <div class="aa-register-now"> Não tem uma conta?<a href="register.php">Registrar agora!</a> </div>
        </form>
        
      </div>
    </div>
    <!-- /.modal-content --> 
  </div>
  <!-- /.modal-dialog --> 
</div>

<!-- jQuery library --> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="js/bootstrap.js"></script> 
<!-- SmartMenus jQuery plugin --> 
<script type="text/javascript" src="js/jquery.smartmenus.js"></script> 
<!-- SmartMenus jQuery Bootstrap Addon --> 
<script type="text/javascript" src="js/jquery.smartmenus.bootstrap.js"></script> 
<!-- Product view slider --> 
<script type="text/javascript" src="js/jquery.simpleGallery.js"></script> 
<script type="text/javascript" src="js/jquery.simpleLens.js"></script> 
<!-- slick slider --> 
<script type="text/javascript" src="js/slick.js"></script> 
<!-- Price picker slider --> 
<script type="text/javascript" src="js/nouislider.js"></script> 

<!-- Custom js --> 
<script src="js/custom.js"></script>
</body>
</html>