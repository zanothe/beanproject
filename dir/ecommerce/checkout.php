<?php

session_start();
include("includes/db.php");
include("funcs/funcs.php");

/*if(!isset($_SESSION['customer_email'])){
		echo "<script>alert('You must register to place an order')</script>";
                echo "<script>window.open('register.php','_self')</script>";
				}*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Fluvas | Checkout</title>

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
    
<script src="https://js.stripe.com/v3/"></script>




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

<?php include('includes/header.php') ?>

  <!-- catg header banner section -->
  <section id="aa-catg-head-banner">
    <img src="img/#.jpg" alt="Checkout Page">
    <div class="aa-catg-head-banner-area">
     <div class="container">
      <div class="aa-catg-head-banner-content">
        <h2>Checkout Page</h2>
        <ol class="breadcrumb">
          <li><a href="index.html">Home</a></li>                   
          <li class="active">Checkout</li>
        </ol>
      </div>
     </div>
   </div>
  </section>
  <!-- / catg header banner section -->



`<!-- <?php
	if(isset($_SESSION['customer_email'])){
		//include("account.php"); 
	}
	else{
	//	include("payment.php"); 
	}
?> -->



 <!-- Cart view section -->
 <section id="checkout">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
        <div class="checkout-area">

          <form action="payment.php" method="post">
            <div class="row">
              <div class="col-md-8">
                <div class="checkout-left">
                  <div class="panel-group" id="accordion">
                    <!-- Shipping Address -->
                    <div class="panel panel-default aa-checkout-billaddress">
                      <div class="panel-heading">
                        <h4 class="panel-title">
                          <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
                            Endereço para Envio.
                          </a>
                        </h4>
                      </div>
                        <div class="panel-body">
                         <div class="row">
                            <div class="col-md-6">
                              <div class="aa-checkout-single-bill">
                              
                           
                                <?php echo ('<input type="text" value="')?><?php echo $_SESSION['customer_fname']; ?><?php echo ('">')?>
            
                              </div>                             
                            </div>
                            <div class="col-md-6">
                              <div class="aa-checkout-single-bill">
                                
                                <?php echo ('<input type="text" value="')?><?php echo $_SESSION['customer_lname']; ?><?php echo ('">')?>
                                
                              </div>
                            </div>
                          </div> 
                          <div class="row">
                            <div class="col-md-12">
                              <div class="aa-checkout-single-bill">
                                
                                <?php echo ('<input type="text" value="')?><?php echo $_SESSION['customer_company']; ?><?php echo ('">')?>
                                
                              </div>                             
                            </div>                            
                          </div>  
                          <div class="row">
                            <div class="col-md-6">
                              <div class="aa-checkout-single-bill">
                                
                                <?php echo ('<input type="text" value="')?><?php echo $_SESSION['customer_email']; ?><?php echo ('">')?>
                                
                              </div>                             
                            </div>
                            <div class="col-md-6">
                              <div class="aa-checkout-single-bill">
                                
                                <?php echo ('<input type="text" value="')?><?php echo $_SESSION['customer_contact']; ?><?php echo ('">')?>
                                
                              </div>
                            </div>
                          </div> 
                          <div class="row">
                            <div class="col-md-12">
                              <div class="aa-checkout-single-bill">
                              
                                <textarea cols="8" rows="3"><?php echo $_SESSION['Addres']; ?></textarea>                             
                              </div>                             
                            </div>                            
                          </div>   
                          <!-- div class="row">
                            <div class="col-md-12">
                              <div class="aa-checkout-single-bill">
                                <select >
                                  <option value="0">Select Your Country</option>
                                  <option value="1">Australia</option>
                                  <option value="2">Afganistan</option>
                                  <option value="3">Bangladesh</option>
                                  <option value="4">Belgium</option>
                                  <option value="5">Brazil</option>
                                  <option value="6">Canada</option>
                                  <option value="7">China</option>
                                  <option value="8">Denmark</option>
                                  <option value="9">Egypt</option>
                                  <option value="10">India</option>
                                  <option value="11">Iran</option>
                                  <option value="12">Israel</option>
                                  <option value="13">Mexico</option>
                                  <option value="14">UAE</option>
                                  <option value="15">UK</option>
                                  <option value="16">USA</option>
                                </select>
                              </div>                             
                            </div>                           
                          </div-->
                          <div class="row">
                            <div class="col-md-6">
                              <div class="aa-checkout-single-bill">
                                <input type="text" placeholder="Appartment, Suite etc.">
                              </div>                             
                            </div>
                            <div class="col-md-6">
                              <div class="aa-checkout-single-bill">
                                <input type="text" placeholder="City / Town*">
                              </div>
                            </div>
                          </div>   
                          <div class="row">
                            <div class="col-md-6">
                              <div class="aa-checkout-single-bill">
                                <input type="text" placeholder="District*">
                              </div>                             
                            </div>
                            <div class="col-md-6">
                              <div class="aa-checkout-single-bill">
                                <input type="text" placeholder="Postcode / ZIP*">
                              </div>
                            </div>
                          </div>
                           <div class="aa-checkout-single-bill">
                                             
                              
                           <div class="row">
                            <div class="col-md-12">
                              <div class="aa-checkout-single-bill">
                                <textarea cols="8" rows="3">Observações (opcional)</textarea>
                              </div>                             
                            </div>                            
                          </div>              
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              
              <div class="col-md-4">
                <div class="checkout-right">
                
                  <h4>Order Summary</h4>
                  <div class="aa-order-summary-area">
                    <table class="table table-responsive">
                      <thead>
                        <tr>
                          <th>Product</th>
                          <th>Total</th>
                        </tr>
                      </thead>
                      <tbody>
   
           
                </div>
              </div>
              






              
                  <h4>Payment Method</h4>
                  <div class='aa-payment-method'>                    
                    <label for='cashdelivery'><input type='radio' id='cashdelivery' name='optionsRadios'> Cash on Delivery </label>
                    <label for='paypal'><input type='radio' id='paypal' name='optionsRadios' checked> Via Paypal </label>
                    <img src='https://www.paypalobjects.com/webstatic/mktg/logo/AM_mc_vs_dc_ae.jpg' border='0' alt='PayPal Acceptance Mark'>    
                    <input type='submit' name='place_order' value='Place Orde' class='aa-browse-btn'>                
                  </div>
                </div>
              </div>
            </div>
          </form>
          
          
   <div id="box" style="float:right">
   </div>
   
   
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
			
                echo "
                        <tr>
                          <td>$product_title<strong> x  $qty</strong></td>
                          <td>$.$total</td>
                        </tr>
                  
                         <tr>
                          <th>Total</th><td> ";
                         
                          total_price(); }} ?>                          
                          
                          </td>
                        </tr>
                      </tfoot>
                    </table>
                  </div>
         </div>
       </div>
     </div>
   </div>
 </section>
 
 
 <!-- / Cart view section -->

<?php include('includes/footer.php') ?>

<?php include('includes/loginmodal.php') ?>

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

<?php
		  

session_start();
include("includes/db.php");
include("funcs/funcs.php");	

	  
		  	
			if(isset($_POST['place_order'])){
				
				if(!isset($_SESSION['customer_email'])){
						echo "<script>alert('You must login to place an order')</script>";
				}
				
				else{
						echo "<script>alert('Order placed successfully !')</script>";
						echo "<script>window.open('payment.php','_self')</script>";
				}
			}
			
?>
