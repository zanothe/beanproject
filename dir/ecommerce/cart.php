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
<title>Fort Luvas | Carrinho</title>

<!-- Font awesome -->
<link href="css/font-awesome.css" rel="stylesheet">re
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
    
<!--script>
  
  
  <!--
var xhr = ajaxRequest();

xhr.onload = function (e) {
  if (xhr.readyState === 4) {
    if (xhr.status === 200) {
      
    } else {
      console.error(xhr.statusText);
    }
  }   
  
  
  
  
      <div id='info'>This sentence will be replaced</div>
  
      params  = "url=amazon.com/gp/aw"
      request = new ajaxRequest()
      request.open("POST", "urlpost.php", true)
      request.setRequestHeader("Content-type",
        "application/x-www-form-urlencoded")
      request.setRequestHeader("Content-length", params.length)
      request.setRequestHeader("Connection", "close")
      request.onreadystatechange = function()
      {
        if (this.readyState == 4)
        {
        	
        	
          if (this.status == 200)
          {
            if (this.responseText != null)
            {
              document.getElementById('info').innerHTML =
                this.responseText
            }
            else alert("Ajax error: No data received")
          }
          else alert( "Ajax error: " + this.statusText)
        }
      }
      request.send(params)
      
      function ajaxRequest()
      {
        try
        {
          var request = new XMLHttpRequest()
        }
        catch(e1)
        {
          try
          {
            request = new ActiveXObject("Msxml2.XMLHTTP")
          }
Using XMLHttpRequest      |      399
          catch(e2)
          {
            try
            {
              request = new ActiveXObject("Microsoft.XMLHTTP")
            }
            catch(e3)
            {
              request = false
            }
          }
        }
        return request
      }


function choosesize(x){
  	document.readyState = x }
  	
  	
  	
</script-->

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
          
        </div>
        <!--/.nav-collapse --> 
      </div>
    </div>
  </div>
</section>
<!-- / menu --> 
 
  <!-- catg header banner section -->
  <section id="aa-catg-head-banner">
   <img src="img/#.jpg" alt="#">
   <div class="aa-catg-head-banner-area">
     <div class="container">
      <div class="aa-catg-head-banner-content">
        <h2>Carrinho</h2>
        <ol class="breadcrumb">
          <li><a href="index.php">Home</a></li>                   
          <li class="active">Meu Carrinho de Compras</li>
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
             <form action="" method="post" enctype="multipart/form-data">
               <div class="table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Remover</th>
                        <th></th>
                        <th>Produto</th>
                        <th>Preço</th>
                        <th>Quantidade</th>
                        <th>Tamanho</th>
                        <th>Total</th>
                      </tr>
                    </thead>
                    <tbody>
    <?php
    $total=0;
	global $conn;
	$ip=getIp();
	$get_items = "select * from cart where ip_add='$ip'";
	$run_items = mysqli_query($conn,$get_items);
	
	while($p_price=mysqli_fetch_array($run_items)){
		
		$pro_id = $p_price['p_id'];
		$qty = $p_price['qty'];
		/*$size = $p_price['size'];*/
		$pro_price="select * from products where product_id='$pro_id'"; 
		$run_pro_price = mysqli_query($conn,$pro_price);
		
			while($pp_price=mysqli_fetch_array($run_pro_price)){
					$product_price = array($pp_price['price']);
					$product_title = $pp_price['product_title'];
					$product_image = $pp_price['product_img1'];
					$single_price = $pp_price['price'];
					$product_c_id = $pp_price['cat_id'];
					$qty_price = $single_price * $qty;
					$total+=$qty_price;
					}
			
		/*$g_id_boots="select * from products where cat_id='1'";
		$get_one = mysqli_query($conn, $g_id_boots);
			while($ct=mysqli_fetch_array($get_one)){
						$ct_id = array($ct['cat_id']);
						}*/

                    echo ('
                      <tr>
                       <!-- <td><a class="remove" href="#"><fa class="fa fa-close"></fa></a></td>-->
                      	<td><input type="checkbox" class="remove" name="remove[]" value="$pro_id"></td>
                        <td><a href="#"><img src="admin_area/product_images/$product_image" alt="img"></a></td>
                        <td><a class="aa-cart-title" href="#">$product_title</a></td>
                        <td>$. "$single_price"</td> ');
                    echo "
                        <td><input class='aa-cart-quantity' type='number' min='1' max='999' size='4' value='$qty' name='qty'></td>";
		                  
                     if($product_c_id==1){
                     	echo "<td><select 
                        ";
                     
                     	}
                        else { echo "<td>Único</td>"; } 
                     
							

                     echo "	 
                        <td>$. $qty_price</td>
                      </tr>";
                     } ?> 
                                       
                      <tr>
                        <td colspan="6" class="aa-cart-view-bottom">
                        
                        <input style="margin-left:50px" class="aa-cart-view-btn" type="submit" name="update_cart" value="Update Cart">  	
                        <input style="margin-left:50px" class="aa-cart-view-btn" type="submit" name="continue" value="Continue Shopping">
						
                        </td>
                      </tr>
                      
                      </tbody>
                  </table>
                
             </form>
             
                  <?php 
                  if(isset($_POST['update_cart'])){
								
								$get_cart = "select * from cart where ip_add='$ip' && p_id='$pro_id'";
								$run_cat = mysqli_query($conn,$get_cart);
								
								while($carts=mysqli_fetch_array($run_cat)){
									
									$pro_id=$carts['p_id'];
									$new_sz=$_POST['sz'];
									$new_qty=$_POST['qty'];
									$update_qty = "update cart set qty='$new_qty' and size='$new_sz' where p_id='$pro_id'";
									$run_up_qty = mysqli_query($conn,$update_qty);
									
								}
								echo "<script>window.open('cart.php','_self')</script>";
							}
             	
			function updatecart(){
				global $conn;
				$ip=getIp();
				if(isset($_POST['update_cart'])){
					foreach($_POST['remove'] as $remove_id){
						$delete_product = "delete from cart where p_id='$remove_id' && ip_add='$ip'";
						$run_delete = mysqli_query($conn,$delete_product);
						if($run_delete){
							echo "<script>window.open('cart.php','_self')</script>";
						}						
					}
				}
				if(isset($_POST['continue'])){
					echo "<script>window.open('index.php','_self')</script>";
				}
		
			}
			
			updatecart(); ?>
            
           
             </div>
             <!-- Cart Total view -->
             <div class="cart-view-total">
               
               <h4>Total no Carrinho</h4>
               <table class="aa-totals-table">
                 <tbody>
                   <tr>
                     <th>Subtotal</th>
                     <td>$. $total</td>
                   </tr>
                   <tr>
                     <th>Total</th>
                     <td>$. <?php $total ?></td>
                   </tr>
                 </tbody>
               </table>
               <a href="checkout.php" class="aa-cart-view-btn">Prosseguir para Checkout</a>
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
 </section>'
 
 <!-- / Cart view section --> 


  <!-- Subscribe section
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