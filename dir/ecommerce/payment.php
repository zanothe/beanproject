

<?php

session_start();
include("includes/db.php");
include("funcs/funcs.php");

if($_POST['place_order']) {

//products
	global $conn;
	$ip=getIp();
	$get_items = "select * from cart where ip_add='$ip'";
	$run_items = mysqli_query($conn,$get_items);
	
	while($p_price=mysqli_fetch_array($run_items)){
		$total=0;	
		$pro_id = $p_price['p_id'];
		$pro_price="select * from products where product_id='$pro_id'"; 
		$run_pro_price = mysqli_query($conn,$pro_price);
		
			while($pp_price=mysqli_fetch_array($run_pro_price)){
					$pro_price = array($pp_price['price']);
					$pr_id = array($pp_price['product_id']);
					$values = array_sum($pro_price);
					
					$total+=$values;
			}
	
	//product units
	$get_units = "select * from cart where p_id='$pro_id'";
	$run_units = mysqli_query($conn,$get_units);
	$row_units = mysqli_fetch_array($run_units);
	$units = $row_units['units'];
	
	//customer details
	$user = $_SESSION['customer_email'];
	$get_c = "select * from customers where customer_email='$user'";
	$run_c = mysqli_query($conn,$get_c);
	$row_c = mysqli_fetch_array($run_c);
	$c_id = $row_c['customer_id'];

	/*$insert_payments = "insert into payment (amount,customer_id,product_id,payment_date)values ('$total','$c_id','$pro_id',NOW());";

  $run_payments = mysqli_query($conn,$insert_payments);*/
  

  function ordrefmatch() {
    global $conn;
    $get_orders = "select * from orders";
    $run_orders = mysqli_query($db,$get_orders);
    if(mysqli_num_rows($run_order)) {
    while($orders=mysqli_fetch_array($run_orders)){
      $order_ref_match = $orders['order_ref'];
      $order_ref = random_int(11);

      if($order_ref==$order_ref_match){
        echo "<script>alert('voce foi contemplado')</script>";
        $order_ref = random_int(11);
        return ordrefmatch();
    }
    }
  }
};

ordrefmatch();
	
	$insert_orders = "insert into orders (order_ref, p_id,c_id,units) values ('$order_ref', '$pro_id','$c_id','$units');";
	$run_orders = mysqli_query($conn,$insert_orders);
	
	
	$empty_cart = "delete from cart where ip_add='$ip'";
	$run_cart = mysqli_query($conn,$empty_cart);	
	}
  
  
  /*echo "<script>window.open('index.php','_self')</script>";*/

  /*$get_products = "select * from products where cat_id='$cat_id'";
  $run_products = mysqli_query($db,$get_products);
  $count = mysqli_num_rows($run_products);*/


  //it was wrote already.
  $total_products = $_POST['count_checkout'];

  $filenameext = "$order_ref.xml";

  fopen("admin_area/orders/xml/$filenameext", "x");

  $xml = "<order>"+
  "<customer>"+
    "<fname>$_POST['fname_checkout']</fname>"+
    "<lname>$_POST['lname_checkout']</lname>"+
    "<cnpjcpf>$_POST['cnpjcpf_checkout']</cnpjcpf>"+
    "<addres>$_POST['address_checkout']</addres>"+
    "<num>$_POST['num_checkout']</num>"+
    "<complement>$_POST['complement_checkout']</complement>"+
    "<city>$_POST['city_checkout']</city>"+
    "<district>$_POST['district_checkout']</district>"+
    "<zipcode>$_POST['zipcode_checkout']</zipcode>"+
    "</customer>"+

    "<products>"+
    "<total>$total_products</total>"+

        for($i=0, $i<$total_products, $i++;) {
          "<description$i>"
          "<title$i>$_POST['title.$i._checkout']</title$i>"+
          "<units$i>$_POST['units.$i._checkout']</units$i>"+
          "<value$i>$_POST['value.$i._checkout']</value$i>"+
          "</description$i>"
        }

    +"<totalvalue>$_POST['total_checkout']</totalvalue>"+
    "</products>"+
    "</order>";

    fwrite("admin_area/orders/xml/$filenameext", "$xml");
    fclose($filenameext);
    
    $savefile = "insert into orders (xml) values ('$filenameext')";
    $run_it = mysqli_query($db,$savefile);:

	}
				
    /*
if($_GET['order_id']) { < --- from mail


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
<title>Fluvas | Forma de pagamento.</title>


<body>

<script src="https://www.paypal.com/sdk/js?client-id=AdsjBzlxtjNl9tlwiUCdYAmyA-yV9SFpH_vum71Lg7sefHJuAMz_t2_eNKYJi8rL_E2XmXyJjzKuX9OG"></script>

<script>
function createXMLHttpRequest( ) {
   var request = false;    
        if (window.XMLHttpRequest) {     
          if (typeof XMLHttpRequest != 'undefined')            
             try {                
               request = new XMLHttpRequest( );
               } catch (e) {
                 request = false;    }    
                } 
                   else if (window.ActiveXObject) {        
                      try {            
                        request = new ActiveXObject('Msxml2.XMLHTTP');  } 
                        catch(e) {            
                           try {               
                              request = new ActiveXObject('Microsoft.XMLHTTP');
                                } catch (e) {    
                                 request = false; }
                                  }
                               }   
                     return request;
                     }

 var request = createXMLHttpRequest( );

 function renderbuttons() { paypal.Buttons({
    createOrder: function(data, request) {
      // This function sets up the details of the transaction, including the amount and line item details.
      return request.order.create(
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {

             var withyou = xhttp.getElementsByTagName("totalvalue").nodeValue;;

    }
};
xhttp.open("GET", "admin_area/orders/xml/<?= echo $filenameext ?>", true);
xhttp.send();

          }
        }]
      });
    }
  }).render('#paypal-button-container');

  renderbuttons();
  </script>
  

</body>





}
