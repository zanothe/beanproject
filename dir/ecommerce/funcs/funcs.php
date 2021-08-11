<?php

	$servername ="fdb23.awardspace.net";
	$username="3153135_fldb";
	$password="3153135_fldbfl";
	$dbname="3153135_fldb";

	//create connection
	$db = mysqli_connect($servername,$username,$password,$dbname);
	
//displaying all products
function getPro(){
	global $db;
	if(!isset($_GET['cat'])){
	
					$get_products = "select * from products order by rand() LIMIT 0,15";

	}
	
	//showing particular category products
	else{
				$cat_id = $_GET['cat'];
				
				if(is_int($cat_id)){
						$get_products = "select * from products where cat_id='$cat_id'";
						}
				else{					
					$aKeyword = explode(" ", $_GET['cat']);
				   $get_products ="SELECT * FROM products WHERE product_title like '%" . $aKeyword[0] . "%'";
				   if(count($aKeyword) > 0) {
						   for($i = 1; $i < count($aKeyword); $i++) {
									$get_products .= " OR product_title like '%" . $aKeyword[$i] . "%'";
									} 
									}

			       }
		 }
 	$run_products = mysqli_query($db,$get_products);
 	$count = mysqli_num_rows($run_products);
		if($count==0){
			echo "<br><br>Não existem produtos com estas especificações<br><br>";	
		}
		else {
					while($row_products = mysqli_fetch_array($run_products)){
						$pro_id = $row_products['product_id'];
						$pro_title = $row_products['product_title'];
						$pro_cat = $row_products['cat_id'];
						$pro_brand = $row_products['brand_id'];
						$pro_desc = $row_products['product_desc'];
						$pro_price = $row_products['price'];
						$pro_img1 = $row_products['product_img1'];
						
				

					echo "
                      <li>
					  <figure> 
					  	<a class='aa-product-img href='#'>
							<img src='admin_area/product_images/boot.png' alt='$pro_img1' >
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
	
}

//displaying main categories	
function getCatsMainNav(){
	global $db;
	
              	$get_cats = "select * from category";
				$run_cats = mysqli_query($db,$get_cats);
				
				while($row_cats = mysqli_fetch_array($run_cats)){
					
					$cat_id = $row_cats['cat_id'];
					$cat_title = $row_cats['cat_title'];
					$img = $row_cats['img'];
					
					echo "<li><a href='index.php?cat=$cat_id'>$cat_title<br><img src='admin_area/symb_category/$img'></a></li>";
				}
	
}

//getting user IP
function getIp() {
    $ip = $_SERVER['REMOTE_ADDR'];
 
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }
 
    return $ip;
}

//adding to cart
function cart(){
	
	if(isset($_GET['add_cart'])){
        
     
		global $conn;
		$ip=getIp();
                $str = $_GET['add_cart'];
                $frags = explode("/",$tostr);
                $pro_id = intval($frags[0]);
                $size = intval($frags[1]);
                $qty = intval($frags[2]);
		$check_pro = "select * from cart where ip_add='$ip' && p_id='$pro_id'";
		
		$run_check = mysqli_query($conn,$check_pro);
		
		if(mysqli_num_rows($run_check)>0){
			echo "";	
		}
		else{
			$insert_pro = "insert into cart (p_id,ip_add,qty,size) values ('$pro_id','$ip','$qty','$size')";
			$run_pro = mysqli_query($conn,$insert_pro);
			
			echo "<script>window.open('index.php','_self')</script>";
		}
	}
}

//getting total items in the cart
function total_items(){
	global $conn;
	$ip=getIp();
	$get_items = "select * from cart where ip_add='$ip'";
	$run_items = mysqli_query($conn,$get_items);
	$count_items = mysqli_num_rows($run_items);
	
	echo $count_items;
}

//getting total price pf the cart
function total_price(){
	
	$total=0;
	
	global $conn;
	$ip=getIp();
	$get_items = "select * from cart where ip_add='$ip'";
	$run_items = mysqli_query($conn,$get_items);
	
	while($p_price=mysqli_fetch_array($run_items)){
		
		$pro_id = $p_price['p_id'];
		$pro_price="select * from products where product_id='$pro_id'"; 
		$run_pro_price = mysqli_query($conn,$pro_price);
		
			while($pp_price=mysqli_fetch_array($run_pro_price)){
					$pro_price = array($pp_price['price']);
					$values = array_sum($pro_price);
					
					$total+=$values;
			}
	}
	echo "$ . $total";
}


?>






