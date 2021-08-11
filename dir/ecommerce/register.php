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
<title>Fort Luvas | Registro</title>

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
    
  
    
 <script>
 	
function validateForename(field)
{
    if (field == "") { return "O campo Primeiro Nome não foi preenchido.\n"; }
    else {return "";}
};

function validateSurname(field)
 {
    if (field == "") { return "O campo Segundo Nome não foi preenchido.\n";}
    else {
    return "";}
};

function validateCompany(field)
 {
    if (field == "") { return "O campo Empresa não foi preenchido.\n";}
    else {
    return "";}
};

function validaterua(field)
 {
    if (field == "") { return "No Street was entered.\n";}
    else {
    return "";}
};
 
 function validatenumero(field)
 {
    if (field == "") { return "No no was entered.\n";}
    else {
    return "";}
};

function validatecep(field)
 {
    if (field == "") { return "No cep was entered.\n";}
    else if (field.length != 8) { return "invalido\n"; }
    else {
    return "";}
};
 
function validateCnpj(field)
 {
 
 
fator = 5;
total = 0;
for(i=0, i<12, i++) {
total += form.cnpj.charat(i)*fator;
fator--;
if(fator=2) {fator=9;}}

rest = total%11;
if(rest<2){x=0;}
else {x=11-rest;}

fator2 = 6;
total2 = 0;
for(j=0, j<13, j++) {
total2 += form.cnpj.charat(i)*fator2;
fator2--;
if(fator2=2) {fator=9;}}
rest2 = total2%11;
if(rest2<2){y=0;}
else {y=11-rest2;}

if (field == "") { return "No Cnpj was entered.\n";}; 
 
else if (field.length != 14
	    			|| cnpj == "00000000000000" 
	    			|| cnpj == "11111111111111" 
	    			|| cnpj == "22222222222222" 
	    			|| cnpj == "33333333333333" 
	    			|| cnpj == "44444444444444" 
	    			|| cnpj == "55555555555555" 
	    			|| cnpj == "66666666666666" 
	    			|| cnpj == "77777777777777" 
	    			|| cnpj == "88888888888888" 
	    			|| cnpj == "99999999999999") {
		        return "Cnpj inválido!\n"; };

else if(x != form.cnpj.charat(12)) { return "Cnpj inválido\m"; }
else { return true; }

else if(y != form.cnpj.charat(13)) { return "Cnpj inválido\n"; }
else { return true; }

else { return "";} };


function validateEmail(field)
 {
    if (field == "") { return "No Email was entered.\n"; }

        else if (!((field.indexOf(".") > 0) &&
                   (field.indexOf("@") > 0)) ||
                  /[^a-zA-Z0-9.@_-]/.test(field)) {
        return "Por favor, insira um endereço de e-mail válido.\n"; }
        else {
    return ""; }
};

function validate_password(field) {
if (field == "") { return "No Password was entered\n"; }
else if (field != form.passtwo.value) { return "Senhas nao convergem\n"; }
else if (field.length < 6) 
{ return "Passwords must be at least 6 characters\n"; }
else { return ""; }}

 function validate(form)
 { var fail = eval("validateForename(form.f_name.value) + validateSurname(form.l_name.value) + validateCompany(form.company.value) + validateEmail(form.email.value) + validateCnpj(form.cnpj.value) + validate_password(form.pass.value)");
if (fail == "") 
{ return true; }
else { alert('Para efetuar o cadastro o Sr(a). deve corrigir o(s) seguinte(s) erro(s):\n\n' fail); return false; }

}
 
 
 </script>



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
    <img src="img/fashion/fashion-header-bg-8.jpg" alt="fashion img">
    <div class="aa-catg-head-banner-area">
     <div class="container">
      <div class="aa-catg-head-banner-content">
        <h2>Página de Registro</h2>
        <ol class="breadcrumb">
          <li><a href="index.html">Home</a></li>                   
          <li class="active">Registro</li>
        </ol>
      </div>
     </div>
   </div>
  </section>
  <!-- / catg header banner section -->

<!-- Register section -->
 <section id="checkout" background-image="url('img/bkgr.png')">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
        <div class="checkout-area">
       <form action="" onsubmit="return validate(this)" method="post">
            <div class="row">
              <div class="col-md-8">
                <div class="checkout-left">
                  <div class="panel-group" id="accordion">
                    <!-- Shipping Address -->
                    <div class="panel panel-default aa-checkout-billaddress">
                      <div class="panel-heading">
                        <h4 class="panel-title">
                          <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
                            Preencha o formulário para registrar-se e efetuar compras
                          </a>
                        </h4>
                        <h4 class="panel-title">Não será necessário digitar novamente ao fazer o checkout</h4>
                      </div>
                        <div class="panel-body">
                         <div class="row">
                            <div class="col-md-6">
                              <div class="aa-checkout-single-bill">
                                <input type="text" id="f_name" name="f_name" placeholder="Primeiro Nome">                              
                              </div>                             
                            </div>
                            <div class="col-md-6">
                              <div class="aa-checkout-single-bill">
                                <input type="text" name="l_name" placeholder="Segundo Nome" >
                              </div>
                            </div>
                          </div> 
                          
                          
                          <div class="row">
                            <div class="col-md-6">
                              <div class="aa-checkout-single-bill">
                                <input type="text" name="company" placeholder="Empresa">                              
                              </div>                             
                            </div>
                            <div class="col-md-6">
                              <div class="aa-checkout-single-bill">
                                <input type="text" class="cnpj" name="cnpj" placeholder="Cnpj" maxlength="18">
                              </div>
                            </div>
                          </div> 
                  
                          <div class="row">
                            <div class="col-md-12">
                              <div class="aa-checkout-single-bill">
                                <input type="email" name="email" placeholder="Endereço de E-mail">
                              </div>                             
                            </div>                            
                          </div>  
                          <div class="row">
                            <div class="col-md-6">
                              <div class="aa-checkout-single-bill">
                              	<input type="password" name="pass" placeholder="Senha">
                              </div>                             
                            </div>
                       
                          
                            <div class="col-md-6">
                              <div class="aa-checkout-single-bill">
                              	<input type="password" name="passtwo" placeholder="Repetir Senha">
                              </div>                             
                            </div>
                          </div>
                        
                          <!-- div class="row">
                            <div class="col-md-12">
                              <div class="aa-checkout-single-bill">
                                <select <select name="country">>
                                  <option value="0">Select Your Country</option>
                                  <option value="Australia">Australia</option>
                                  <option value="Afganistan">Afganistan</option>
                                  <option value="Bangladesh">Bangladesh</option>
                                  <option value="Belgium">Belgium</option>
                                  <option value="Brazil">Brazil</option>
                                  <option value="Canada">Canada</option>
                                  <option value="China">China</option>
                                  <option value="Denmark">Denmark</option>
                                  <option value="Egypt">Egypt</option>
                                  <option value="India">India</option>
                                  <option value="Iran">Iran</option>
                                  <option value="Israel">Israel</option>
                                  <option value="Mexico">Mexico</option>
                                  <option value="Pakistan">Pakistan</option>
                                  <option value="UAE">UAE</option>
                                  <option value="UK">UK</option>
                                  <option value="USA">USA</option>
                                </select>
                              </div>                             
                            </div>                           
                          </div-->
                          
                          <div class="row">
                            <div class="col-sm-8">
                              <div class="aa-checkout-single-bill">
                                <input type="text" name="adress" placeholder="Logradouro"></textarea>
                              </div>                             
                            </div>
                            
                            <div class="col-sm-4">
                              <div class="aa-checkout-single-bill">
                                <input type="text" name="num" placeholder="Número"></textarea>
                              </div>                             
                            </div>
                                </div>
                                <div class="row">
                            <div class="col-md-12">
                              <div class="aa-checkout-single-bill">
                                <input type="text" name="complement" placeholder="Complemento"></textarea>
                              </div>                             
                            </div>
                          </div> 
                          
                          <div class="row">
                             <div class="col-md-12">
                              <div class="aa-checkout-single-bill">
                                <input type="text" name="postalcode" placeholder="CEP"></textarea>
                              </div>   
                              </div>  
                             </div>
                             
                          <div class="row">
                        
                            <div class="col-sm-8">
                              <div class="aa-checkout-single-bill">
                                <input type="text"  name="city" placeholder="Cidade">
                              </div>                             
                          
                          </div> 
                         
                            <div class="col-sm-4">
                              <div class="aa-checkout-single-bill">
                                <div class="aa-checkout-single-bill">
                                <select name="district">
                                  <option value="AC">Acre</option>
                                        <option value="AL">Alagoas</option>
                                        <option value="AP">Amapá</option>
                                        <option value="AM">Amazonas</option>
                                        <option value="BA">Bahia</option>
                                        <option value="CE">Ceará</option>
                                        <option value="DF">Distrito Federal</option>
                                        <option value="ES">Espírito Santo</option>
                                        <option value="GO">Goiás</option>
                                        <option value="MA">Maranhão</option>
                                        <option value="MT">Mato Grosso</option>
                                        <option value="MS">Mato Grosso do Sul</option>
                                        <option value="MG">Minas Gerais</option>
                                        <option value="PA">Pará</option>
                                        <option value="PB">Paraíba</option>
                                        <option value="PR">Paraná</option>
                                        <option value="PE">Pernambuco</option>
                                        <option value="PI">Piauí</option>
                                        <option value="RJ">Rio de Janeiro</option>
                                        <option value="RN">Rio Grande do Norte</option>
                                        <option value="RS">Rio Grande do Sul</option>
                                        <option value="RO">Rondônia</option>
                                        <option value="RR">Roraima</option>
                                        <option value="SC">Santa Catarina</option>
                                        <option value="SP">São Paulo</option>
                                        <option value="SE">Sergipe</option>
                                        <option value="TO">Tocantins</option>
                                </select>
                              </div>    
                              </div>                             
                            </div>
                          </div>
                          
                             <div class="row">
                          	<div class="col-md-12">
                              <div class="aa-checkout-single-bill">
                                 <input type="tel" name="contact" placeholder="Telefone">
                             </div>
                            </div>
                          </div>
                                <input type="submit" onsubmit="return validate(this)" value="Register" name="register" class="aa-browse-btn">
                                         
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
          </form>
          
         </div>
       </div>
     </div>
   </div>
 </section>
 <!-- / Register section -->



 <?php 
 include('includes/footer.php'); 
 include('includes/loginmodal.php');
 ?>



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


if(isset($_POST['register'])){

	global $conn;
		$c_ip = getIp();
		$c_fname = $_POST['f_name'];
		$c_lname = $_POST['l_name'];
		$c_email = $_POST['email'];
		$c_pass = $_POST['pass'];
		$c_contact = $_POST['contact'];
		$c_country = $_POST['country'];
		$c_city = $_POST['city'];
		$c_address = $_POST['adress'];
                $c_number = $_POST['num'];
                $c_complement = $_POST['complement'];
                $distric = $_POST['district'];
                $postalcode = $_POST['cep'];
                
		$insert_c = "insert into customers ( customer_ip, customer_fname, customer_lname, customer_email, customer_pass, customer_country,
		customer_city, customer_contact, Address, num, district, postalcode) 
					values ('$c_ip','$c_fname','$c_lname','$c_email','$c_pass','$c_country','$c_city','$c_contact','$c_address')";
			
		$run_c = mysqli_query($conn,$insert_c);
		
		$sel_cart = "select * from cart where ip_add='$ip'";
		$run_cart = mysqli_query($conn,$sel_cart);
		
		$check_cart = mysqli_num_rows($_cart);
		$ssn = session_start();
		$_SESSION['customer_email']=$c_email;
		if($check_cart==0 && $ssn==true){
		
			echo "<script>alert('Registro Realizado !');</script>";
			echo "<script>window.open('index.php','_self')</script>";	
        }
        else{
    		echo "<script>window.open('checkout.php','_self')</script>";	    	
        	
        }
	};
        
 
?>