<script>
$( document ).ready(function() {
    $('#quick-view-modal').on('hidden.bs.modal', function () {
          $(this).removeData('bs.modal');
    });
});

$.fn.simpleLens.defaults = {
    anchor_parent_class: '.simpleLens-lens-image',
    lens_image_attr: 'data-lens-image',
    big_image_class: '.simpleLens-big-image',
    parent_class: '.simpleLens-big-image-container',
    lens_class: 'simpleLens-lens-element',
    cursor_class: 'simpleLens-mouse-cursor',
    loading_image: 'images/loading.gif',
    open_lens_event: 'mouseenter'
};

</script>

<style>

input .aa-add-to-cart-btn {
  border: 1px solid #ccc;
  color: #555;
  display: inline-block;
  font-size: 14px;
  font-weight: bold;
  letter-spacing: 0.5px;
  margin-top: 5px;
  padding: 10px 15px;
  text-transform: uppercase;
  transition: all 0.5s ease 0s;
} 

#quick-view-modal .modal-content .aa-product-view-content .aa-prod-view-bottom input:last-child {
  margin-left: 10px;
}

#aa-product-details .aa-product-details-area .aa-product-details-content .aa-product-view-content .aa-prod-view-bottom input {
  margin-right: 10px;
}

  #quick-view-modal .modal-content .aa-product-view-content .aa-prod-view-bottom input:last-child {
    margin-left: 0;
    margin-top: 10px;
  }

</style>


<?php
include('includes/db.php');

					$prod_Id = $_GET['Id'];
					
					$get_products = "select * from products p join category c on (p.cat_id=c.cat_id) where product_id='$prod_Id'";
					$run_products = mysqli_query($conn,$get_products);
					
					while($row_products = mysqli_fetch_array($run_products)){
					
						$pro_id = $row_products['product_id'];
						$pro_title = $row_products['product_title'];
						$pro_cat = $row_products['cat_title'];
						/*$pro_brand = $row_products['brand_id'];*/
						$pro_desc = $row_products['product_desc'];
						$pro_price = $row_products['price'];
						$pro_img1 = $row_products['product_img1'];
						$pro_img2 = $row_products['product_img2'];
						$pro_img3 = $row_products['product_img3'];
                                                $status = $row_products['status'];

echo "
                <script>
                $('#$pro_id .simpleLens-big-image').simpleLens({
                    loading_image: 'demo/images/loading.gif'
                });
                </script>


			<div class='modal-body'>
                      <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
                      <div class='row'> 
                        <!-- Modal view slider -->
                        <div class='col-md-6 col-sm-6 col-xs-12'>
                          <div class='aa-product-view-slider'>
                            <div class='simpleLens-gallery-container' id='$pro_id'>
                              <div class='simpleLens-container'>
                                <div class='simpleLens-big-image-container'> <a class='simpleLens-lens-image' data-lens-image='img/view-slider/large/bootlarge.jpg' data-big-image='img/view-slider/large/bootlarge.jpg'> <img src='admin_area/product_images/boot.png' height='300' width='250' class='simpleLens-big-image'> </a> </div>
                              </div>
                              
                            </div>
                          </div>
                        </div>
                        <!-- Modal view content -->
                        <div class='col-md-6 col-sm-6 col-xs-12'>
                          <div class='aa-product-view-content'>
                            <h3>$pro_title</h3>
							  <div class='aa-price-block'> <span class='aa-product-view-price'>$
								$pro_price
                                                                
                                                                
                            </span>
                              <p class='aa-product-avilability'>Disponibilidade: <span>";
                              
                              if($status) { echo "Em estoque"; }
                              else { echo "Não disponível no momento"; }
                              
                              echo "</span></p>
                            </div>
                            <p>$pro_desc</p>
                            
                            
                             <div class='aa-prod-quantity'>
              
                           
                            <form method='get' action=''>
                                     
                                     <input type='hidden' name='add_cart'>
                                     <input type='hidden' name='pro_id' value='$pro_id'>
                                     <input type='number' min='1' name='units' max='299' value='1'>";
                                    
                                     if($pro_cat==1) {
                                     echo "<select='size'>
                                     <option value='38'>
                                     <option value='39'>
                                     <option value='40'>
                                     <option value='41'>
                                     <option value='42'>
                                     </select>";} 
                                     else { echo "<input type='hidden' value='null'>"; }
                                     
                                     echo"
                 
                            
                            <input type='submit' value='Adicionar ao carrinho' class='aa-add-to-cart-btn'></form>
                          
                        </div>
                      </div>
                    </div>"; }
                    
                    if(isset($_GET['add_cart'])){
        
                                global $conn;
                                $ip=getIp();
                                $pro_id = $_GET['pro_id'];
                                $units = $_GET['units'];
                                $size = $_GET['size'];
                                
                                $check_pro = "select * from cart where ip_add='$ip' && p_id='$pro_id'";
                                $run_check = mysqli_query($conn,$check_pro);
                                $nrows = mysqli_num_rows($run_check);
                                
                                if($nrows>0){
                                
                                 /*$x = "confirm('Você já adicionou esse produto ao carrinho. Deseja adicioná-lo novamente?\n
                                        Isso é útil, caso queira comprar dois produtos iguais com especificações diferentes.\n
                                        (Ex.: de diferentes tamanhos)')"; */
                                               
                                        $insert_pro = "insert into cart (p_id,ip_add,qty,id_cart) values ('$pro_id','$ip','$units', '$nrows+1')";
                                        $run_pro = mysqli_query($conn,$insert_pro);
                                        if($run_pro){
                                               echo "<script>alert('O produto foi adicionado novamente ao carrinho.\n
                                               Você poderá alterar as especificações antes de fazer o checkout.')</script>
                                               <script>window.open('index.php','_self')</script>";
                                 }}
                                 else{
                                         $insert_pro = "insert into cart (p_id,ip_add,qty,size) values ('$pro_id','$ip','$qty', '$size')";
                                         $run_pro = mysqli_query($conn,$insert_pro);
                                                
                                          echo "<script>window.open('index.php','_self')</script>";
                                  }
 } ?>
                    
					
                  

	


