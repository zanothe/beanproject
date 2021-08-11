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

<?php include("includes/header.php"); ?>

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
           	
						<?php getCatsMainNav(); ?>
		
            
            <li style="float:right"><a>
            <?php
				if(isset($_SESSION['customer_email'])){
					echo "Boas compras, " . $_SESSION['customer_fname'] . "!";
				}
				else{
					echo "Bem-vindo(a)!";
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

<?php if(!isset($_SESSION['customer_email'])) {

echo "
<!-- Start slider -->
<section id='aa-slider'>
  <div class='aa-slider-area'>
    <div id='sequence' class='seq'>
      <ul class='seq-canvas'>
        <!-- single slide item -->
        <li>
          <div class='seq-model'> <img data-seq src='img/slider/slider1.jpg' alt='Men slide img' /> </div>
          <div class='seq-title'>
          <span data-seq>Confira</span>
            <h2 data-seq>A MAIS COMPLETA LINHA<br>DE EPI'S</h2>
            <p data-seq>Com os melhores preços.</p>
            <a data-seq href='' data-toggle='modal' data-target='#login-modal' class='aa-shop-now-btn aa-secondary-btn'>COMPRAR AGORA</a> </div>
        </li>
        
      </ul>

        <fieldset class='seq-nav' aria-controls='sequence' aria-label='Slider buttons'>
          <a type='button' class='seq-prev' aria-label='Previous'><span class='fa fa-angle-left'></span></a>
          <a type='button' class='seq-next' aria-label='Next'><span class='fa fa-angle-right'></span></a>
        </fieldset>

    </div>
  </div>
</section>
<!-- / slider --> ";} ?>

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
                    <?php getPro(); ?>
				  </ul>                    
				 </div>
             
                <!-- / men product category --> 
                </div>
              </div>
              
              <!-- quick view modal -->
              <div class="modal fade" id="quick-view-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
            
						         
              
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
<!-- Support section -->
<section id="aa-support">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="aa-support-area"> 
          <!-- single support -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="aa-support-single"> <span class="fa fa-truck"></span>
              <h4>FRETE?</h4>
              <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam, nobis.</P>
            </div>
          </div>
          <!-- single support -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="aa-support-single"> <span class="fa fa-clock-o"></span>
              <h4>GARANTIA?</h4>
              <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam, nobis.</P>
            </div>
          </div>
          <!-- single support -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="aa-support-single"> <span class="fa fa-phone"></span>
              <h4>SUPORTE?</h4>
              <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam, nobis.</P>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- / Support section --> 

<!-- Testimonial
<section id="aa-testimonial">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="aa-testimonial-area">
          <ul class="aa-testimonial-slider">
            <!-- single slide -
            <li>
              <div class="aa-testimonial-single"> <img class="aa-testimonial-img" src="img/testimonial-img-2.jpg" alt="testimonial img"> <span class="fa fa-quote-left aa-testimonial-quote"></span>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt distinctio omnis possimus, facere, quidem qui!consectetur adipisicing elit. Sunt distinctio omnis possimus, facere, quidem qui.</p>
                <div class="aa-testimonial-info">
                  <p>Allison</p>
                  <span>Designer</span> <a href="#">Drcom</a> </div>
              </div>
            </li>
            <!-- single slide 
            <li>
              <div class="aa-testimonial-single"> <img class="aa-testimonial-img" src="img/testimonial-img-1.jpg" alt="testimonial img"> <span class="fa fa-quote-left aa-testimonial-quote"></span>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt distinctio omnis possimus, facere, quidem qui!consectetur adipisicing elit. Sunt distinctio omnis possimus, facere, quidem qui.</p>
                <div class="aa-testimonial-info">
                  <p>KEVIN MEYER</p>
                  <span>CEO</span> <a href="#">Alphabet</a> </div>
              </div>
            </li>
            <!-- single slide 
            <li>
              <div class="aa-testimonial-single"> <img class="aa-testimonial-img" src="img/testimonial-img-3.jpg" alt="testimonial img"> <span class="fa fa-quote-left aa-testimonial-quote"></span>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt distinctio omnis possimus, facere, quidem qui!consectetur adipisicing elit. Sunt distinctio omnis possimus, facere, quidem qui.</p>
                <div class="aa-testimonial-info">
                  <p>Luner</p>
                  <span>COO</span> <a href="#">Kinatic Solution</a> </div>
              </div>
            </li> 
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- / Testimonial --> 



<!-- Client Brand -->
<section id="aa-client-brand">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="aa-client-brand-area">
          <ul class="aa-client-brand-slider">
            <li><a href="http://www.3m.com.br"><img src="img/Logo-pt.png" alt="Logo 3M"></a></li>
             <li><a href="http://www.epibrasil.com.br"><img src="img/Logo-epibrasil.png" alt="Logo EPI Brasil"></a></li>
             <li><a href="http://www.epibrasil.com.br"><img src="img/Logo-epibrasil.png" alt="Logo EPI Brasil"></a></li>

          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- / Client Brand --> 

<!-- Subscribe section -->
<section id="aa-subscribe">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="aa-subscribe-area">
          <h3>Cadastre-se em nossa newsletter </h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex, velit!</p>
          <form action="newsletter.php" class="aa-subscribe-form">
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



<!-- Choosing Size Modal 
<div class="modal fade" id="choosingsizeandqtty" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
  				<h4>Selecione o tamanho:</h4>
  				 <form class="aa-login-form" action="" method="post">
  				<input type="range" id="choosesize" value="40" min="38" max="44" onchange="otpchoosesize.value = inpchoosesize.value" oninput="choosesize(inpchoosesize.value)">
				<output for="inpchoosesize" id="otpchoosesize" value="40">40</output>
		       <?php echo "<p class='aa-add-card-btn'>Para selecionar a quantidade de unidades <a href='index.php?add_cart=$pro_id'>aqui!</a></p>" ?>
						<a class='aa-add-card-btn' href='index.php?add_cart=$pro_id'>
							<span class='fa fa-shopping-cart'></span>Add Now!
						</a>
        </form>
        
      </div>
    </div>
    <!-- /.modal-conten -
  </div>
  <!-- /.modal-dialog 
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
