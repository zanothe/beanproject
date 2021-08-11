<?php 
session_start();

include('../includes/db.php');
include('../funcs/funcs.php');

if(!isset($_SESSION['admin'])){
    header('Location: index.php');
}

?>

<link href="../css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="../css/style.css" rel="stylesheet" type="text/css">

<form method="post">
<select id="order" name="order">
    <option value="" default>Select:</option>


<?php 
 function select() {
 global $conn;
 $get_ord = "select * from orders";
 $run_ord = mysqli_query($conn,$get_ord);
 	$nrows = mysqli_num_rows($run_ord);
        
		if($nrows==0){
			echo "<br><br>sem<br><br>";	
		}
		else {
					while($row_ord = mysqli_fetch_array($run_ord)){
						$order_id = $row_ord['order_id'];
						$customer_id = $row_ord['customer_id'];
						$xml = $row_ord['XML'];
					

					echo "<option value='$order_id'>$order_id</option>";
                    
                    }}}

select();
?>
</select>
<input type="submit" value="ok" name="select"></input>
</form>



<?php
if(isset($_POST['select'])) {
    require_once('../includes/keys.php');
    $id = $_POST['order'];
    $cipher = "AES-256-ECB";
    $openfile = fopen("orders/xml/".$id.".xml", "r");
    $cont = stream_get_contents($openfile);
    $xml_dec = openssl_decrypt($cont, $cipher, $key);
    $obj = simplexml_load_string($xml_dec);

echo"
<section id='checkout'>
   <div class='container' style='background-color:#aeaeae; align:center;'>
     <div class='row'>
       <div class='col-md-12'>
        <div class='checkout-area'>
            <div class='row'>
              <div class='col-md-8'>
                <div class='checkout-left'>
                  <div class='panel-group' id='accordion'>
                    <div class='panel panel-default aa-checkout-billaddress'>
                      <div class='panel-heading'>
                        <h4 class='panel-title'>
                            Customer (Shipping Address)
                        </h4>
                      </div>
                        <div class='row'>
                            <div class='col-md-12'>
                                <div class='aa-checkout-single-bill'>
                                    <li>".$obj->customer->name."</li>
                                </div>
                            </div>
                        </div>   
                        <div class='row'>
                            <div class='col-md-12'>
                                <div class='aa-checkout-single-bill'>           
                                    <li>".$obj->customer->company."</li>
                                </div>
                            </div>
                        </div>   
                        <div class='row'>
                            <div class='col-md-12'>
                                <div class='aa-checkout-single-bill'>
                                    <li>".$obj->customer->cpfcnpj."</li>
                                </div>
                            </div>
                        </div>   
                        <div class='row'>
                            <div class='col-md-12'>
                                <div class='aa-checkout-single-bill'>
                                    <li>".$obj->customer->email."</li>
                                </div>
                            </div>
                        </div>   
                        <div class='row'>
                            <div class='col-md-12'>
                                <div class='aa-checkout-single-bill'>
                                    <li>".$obj->customer->address."</li>
                                </div>
                            </div>
                        </div>   
                        <div class='row'>
                            <div class='col-md-12'>
                                <div class='aa-checkout-single-bill'>
                                    <li>".$obj->customer->city."</li>
                                </div>
                            </div>
                        </div>   
                        <div class='row'>
                            <div class='col-md-12'>
                                <div class='aa-checkout-single-bill'>
                                    <li>".$obj->customer->district."</li>
                                </div>
                            </div>
                        </div>   
                        <div class='row'>
                            <div class='col-md-12'>
                                <div class='aa-checkout-single-bill'>
                                    <li>".$obj->customer->zipcode."</li>
                                </div>
                            </div>
                        </div>   
                        <div class='row'>
                            <div class='col-md-12'>
                                <div class='aa-checkout-single-bill'>
                                    <li>".$obj->customer->contact."</li>
                                </div>
                            </div>
                        </div>        
                        <div class='row'>
                            <div class='col-md-12'>
                                <div class='aa-checkout-single-bill'>
                                    <li>".$obj->customer->specialnotes."</li>
                                </div>
                            </div>
                        </div>
                        <div class='panel-heading'>
                            <h4 class='panel-title'>
                                Purchase (Items)
                            </h4>
                        </div>";


    $num_items = count($obj->products);
    foreach($obj->products->item as $items) {
        echo"
        <div class='row'>
            <div class='col-md-12'>
                <div class='aa-checkout-single-bill'>
                    <li>".$items->title."</li>
                </div>
            </div>
        </div>
        <div class='row'>
            <div class='col-md-12'>
                <div class='aa-checkout-single-bill'>
                    <li>".$items->units."</li>
                </div>
            </div>
        </div>
        <div class='row'>
            <div class='col-md-12'>
                <div class='aa-checkout-single-bill'>
                    <li>".$items->size."</li>
                </div>
            </div>
        </div>
        <div class='row'>
            <div class='col-md-12'>
                <div class='aa-checkout-single-bill'>
                    <li>".$items->total_item."</li>
                </div>
            </div>
        </div>";
    }

echo"
        <div class='panel-heading'>
            <h4 class='panel-title'>
                Total
            </h4>
        </div>
        <div class='row'>
            <div class='col-md-12'>
                <div class='aa-checkout-single-bill'>
                    <li>".$items->subtotal."</li>
                </div>
            </div>
        </div>
        <div class='row'>
            <div class='col-md-12'>
                <div class='aa-checkout-single-bill'>
                    <li>".$items->frete."</li>
                </div>
            </div>
        </div>
        <div class='row'>
            <div class='col-md-12'>
                <div class='aa-checkout-single-bill'>
                    <li>".$items->total."</li>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>         
</div>
</div>
</div>
</div>
</section>";
}

