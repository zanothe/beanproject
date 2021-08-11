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
<title>Fort Luvas | Minha Conta</title>

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


<!--  menu -->
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
            
			
            
           
          </ul>
        </div>
        <!--/.nav-collapse --> 
      </div>
    </div>
  </div>
</section>
<!-- / menu --> 
 
  <!-- catg header banner section -->
  <section id="aa-catg-head-banner">
   <img src="img/banmorders.jpg" alt="Banner">
   <div class="aa-catg-head-banner-area">
     <div class="container">
      <div class="aa-catg-head-banner-content">
        <h2>Minha Conta</h2>
        <ol class="breadcrumb">
          <li><a href="index.php">Home</a></li>                   
          <li class="active">Minha Conta</li>
        </ol>
      </div>
     </div>
   </div>
  </section>
  <!-- / catg header banner section -->
  
  
  <script>
  function readystate(this){
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
   if (this.readyState == 4 && this.status == 200) {
   
                                var el = document.querySelectorAll('p');
                                var newEl = document.createElement('input');
                                newEl.attributes.type = text;
                                newEl.attributes.value = el.attributes.innerHTML;
                                
                                document.getElementByClassName('.btn-default').attributes.type = submit;

                                el.replaceChild(newEl, el);
   }
};
xhttp.open("GET", "myorders.php", true);
xhttp.send();
}
</script>
  
  

  
               
                         <div class="row">
                            <div class="col-md-6">
                         
                              
                              <p>
                                <?php echo $_SESSION['customer_fname']; ?>
                                </p>
                                
                              </div>                             
                            </div>
                            
                            <div class="col-md-6">
                         
                                
                                <p>
                                <?php echo $_SESSION['customer_lname']; ?>
                                </p>
                                
                              </div>
                            
                       
                          <div class="row">
                            <div class="col-md-12">
                            
                              
                                <p>
                                <?php echo $_SESSION['customer_company']; ?>
                                </p>
                                
                              </div>                             
                            </div>                            
                        
                          <div class="row">
                            <div class="col-md-6">
                              
                                <p>
                               <?php echo $_SESSION['customer_email']; ?>
                                </p>
                              </div>                             
                            </div>
                            
                            <div class="col-md-6">
                           
                                
                               <?php echo $_SESSION['customer_contact']; ?>
                                
                              </div>
                         
                        
                          <div class="row">
                            <div class="col-md-12">
                            
                              
                               <?php echo $_SESSION['Addres']; ?>                          
                              </div>                             
                            </div>                            
                        
                          
                           <div class="row">
                            <div class="col-md-12">
                            
                              
                               <?php echo $_SESSION['customer_number']; ?>                          
                              </div>                             
                            </div>                            
                      
                       
                          <div class="row">
                            <div class="col-md-6">
                              
                              
                                <?php echo $_SESSION['complement']; ?>
                                
                              </div>                             
                            </div>
                            
                            <div class="col-md-6">
                              
                                <?php echo $_SESSION['customer_city']; ?>     
                           
                            </div>
                           
                          
                          <div class="row">
                            <div class="col-md-6">
                          
                                <?php echo $_SESSION['customer_city']; ?>   
                                                     
                            </div>
                            
                            <div class="col-md-6">
                              
                                <?php echo $_SESSION['customer_zip']; ?>   
                              </div>
                         
                        
                      

  <button class="btn-default"  style="align:left" onclick="readystate(this)">Editar</button>
  
  
  
  
  
  
<?php
      
function myorders(){
  
    $total=0;
	global $conn;
	$ip=getIp();
	$get_orders = "select * from orders where ip_add='$ip'";
        
	if(mysqli_query($conn,$get_orders)){

                if(mysqli_num_rows($run_orders)) {
                
                        while($orders=mysqli_fetch_array($run_orders)){
                                
                                $order_id=$orders['order_id'];
                                $pro_id=$orders['p_id'];
                                $qty=$orders['qty'];
                                $size=$orders['size'];
                                $bit=$orders['paid'];
                                if($bit==true){$bit_b="Sim";}
                                else{$bit_b="Não";}
                                
                                $pro_price="select * from products where product_id='$pro_id'"; 
                                $run_pro_price = mysqli_query($conn,$pro_price);
                                
                                        while($pp_price=mysqli_fetch_array($run_pro_price)){
                                                        $product_price = array($pp_price['price']);
                                                        $product_title = $pp_price['product_title'];
                                                        $product_image = $pp_price['product_img1'];
                                                        $single_price = $pp_price['price'];
                                                        $pro_c_id = $pp_price['cat_id'];
                                                        $qty_price = $single_price * $qty;
                                                        $total+=$qty_price;
                                                        }						
echo "
 <section id='cart-view'>
   <div class='container'>
     <div class='row'>
       <div class='col-md-12'>
         <div class='cart-view-area'>
           <div class='cart-view-table'>
               <div class='table-responsive'>
                  <table class='table'>
                    <thead>
                      <tr>
                        <th></th>
                        <th></th>
                        <th>Ordem de Serviço</th>
                        <th>Produto</th>
                        <th>Preço</th>
                        <th>Quantidade</th>
                       <th>Total</th>
                       <th>Efetivado</th>
                      </tr>
                    </thead>
                    <tbody>

                      <tr>
                      	<td>$order_id</td>
                        <td><img src='admin_area/product_images/$product_image' alt='img'></td>
                        <td><a class='aa-cart-title'>$product_title</a></td>
                        <td>$.$single_price</td> 
                        <td><input class='aa-cart-quantity' type='number' min='1' max='999' size='4' value='$qty' name='qty.$pro_id'></td>
		                  <td>$.$qty_price</td>
		                  <td>$bit_b</td>
                      </tr>
                                    
                      </tbody>
                  </table>

             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
 </section>";}}}
 
 else { echo "<p align='center'>Não constam ordens de serviço</p>";}}
 
 myorders(); ?>
 
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