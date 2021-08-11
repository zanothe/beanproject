<?php 
session_start();
include('../includes/db.php');
include('../funcs/funcs.php');

if(!isset($_SESSION['admin'])){
    header('Location: index.php');
}
?>


<?php 
        if(isset($_GET['changestatus'])){
		$id = $_GET['changestatus'];
                  $get_pro = "select from products where product_id=$id";
                  $run_pro = mysqli_query($conn,$get_pro);

                  	while($row_products = mysqli_fetch_array($run_pro)){
                  		$status = $row_products['status'];
                  }
                  
                  if($status==1){
                   $get_pro = "update products set status=0 where product_id=$id";
                   echo" <script>window.open('prod_control.php','_self')</script>";}
                  else {
                   $get_pro = "update products set status=1 where product_id=$id";
                    echo" <script>window.open('prod_control.php','_self')</script>";
                  }
                }
                
                ?>

<link href="../css/bootstrap.css" rel="stylesheet">



<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.2.6/jquery.min.js"></script>

                                        
<style>
.row {
padding:10px;
}</style>

<div class="container">
	<div class="jumbotron">
     <h2>Insert Product</h2>
   </div>
   
		<div class="panel">
			 <div class="panel-body">
.
                      <form method="post" action="" enctype="multipart/form-data">            

                         <div class="row">
                            <div class="col-md-12">

                              <p>O que aparecerá no display. Utilizar letras maiúsculas devidamente.</p>

                                <input type="text" name="product_title" placeholder="Product Title*">                              
                              </div>                             
                            </div>

                          <div class="row">
                          	<div class="col-md-12">

                              
                              
                            <select name="product_cat">
                                <option>Select a Category</option>
                                     <?php
                                        $get_cats = "select * from category";
					$run_cats = mysqli_query($conn,$get_cats);
				
					while($row_cats = mysqli_fetch_array($run_cats)){
					
						$cat_id = $row_cats['cat_id'];
						$cat_title = $row_cats['cat_title'];
					
						echo "<option value='$cat_id'>$cat_title</option>";
					}
	
                                     ?>
                                     </select>

                             </div>
                            </div>

                          <div class="row">
                            <div class="col-md-12">

                                
                                
                         <select name="product_brand">
                					<option>Select a Brand</option>
                                    <?php
                                  $get_brand = "select * from brands";
                          $run_brand = mysqli_query($conn,$get_brand);
                        
                          while($row_brand = mysqli_fetch_array($run_brand)){
                          
                            $brand_id = $row_brand['brand_id'];
                            $brand_title = $row_brand['brand_title'];
                          
                            echo "<option value='$brand_id'>$brand_title</option>";
                          }
                  
                                ?>
                			</select>
                              </div>                             
                            </div>                           

                          
                          <div class="panel-info" style="background-color:ff9797;">
                          <div class="row">
                            <div class="col-md-12">

                              <p>Imagem 1* - 460px x 460px</p>
                              <input type="file" name="product_img1" placeholder="Image 1*"/>
                              </div>                             
                            </div>
                          </div>


                          <div class="row">
                            <div class="col-md-12">

                              <p>Imagem 2 - 460px x 460px</p>
                              <input type="file" name="product_img2" placeholder="Image 2*"/>
                              </div>                             
                            </div>

                          <div class="row">
                            <div class="col-md-12">

                              <p>Imagem 3 - 460px x 460px</p>
                              <input type="file" name="product_img3" placeholder="Image 3*"/>
                              </div>                             
                            </div>

                          <div class="row">
                            <div class="col-md-12">

                              <p>Apenas números (se $5,90, então 590)</p>
                                <input type="text"  name="product_price" placeholder="Price*">
                              </div>                             
                            </div>

                          <div class="row">
                          <div class="col-md-12">

                              <p>Descrição dc Produto. Para quebra de paragrafo, utiliar &lt;br&gt;.</p>
                                <textarea name="product_desc" id="textre" cols="20" rows="10" placeholder="Product Description*" ></textarea>
                              </div>                             
                            </div>

                          
                           <div class="row">
                            <div class="col-md-12">


                              <p>Em centimetros. apenas numeros (Ex.: se 1 metro, entao 100)</p>
                                <input type="text"  name="width" placeholder="Largura">
                              </div>                             
                            </div>


                          <div class="row">
                            <div class="col-md-12">

                              <p>Em centimetros. apenas numeros (Ex.: se 1 metro, entao 100)</p>
                                <input type="text"  name="height" placeholder="Altura">
                              </div>                             
                            </div>
                           
                           <div class="row">
                            <div class="col-md-12">

                              <p>Em centimetros. apenas numeros (Ex.: se 1 metro, ento 100)</p>
                                <input type="text"  name="lenght" placeholder="Comprimento">
                              </div>                             
                          </div>   
                          
                          <div class="row">
                            <div class="col-md-12">

                              <p>Em kilogramas (Ex.: se  1 kg, entao 1)</p>
                                <input type="text"  name="weight" placeholder="Peso">
                              </div>                             
                            </div>

                          
                          <div class="row">
                            <div class="col-md-12">

                                <input type="text"  name="product_keywords" placeholder="Palavras-chave*">
                              </div>                             
                            </div>

                          <input type="submit" name="insert_product" value="Insert"  class="aa-browse-btn"/>
                          </form>

       </div>
     </div>
   </div>


 <script>
  document.getElementById('textre').innerHTML = 'Exemplo.: Descriçao aqui\n<br>\nDado tecnico aqui';
</script>


<?php 
                  if(isset($_POST['insert_product'])){
                  
                  global $conn;
                  
                  $img1 = $_FILES['product_img1']['tmp_name'];
                  $img2 = $_FILES['product_img2']['tmp_name'];
                  $img3 = $_FILES['product_img3']['tmp_name'];
                   
                  $title = $_POST['product_title'];
                  $brand_id = $_POST['product_brand'];

                  $date = date("l jS \of F Y h:i:s A");
                  $cat = $_POST['product_cat'];
                  
                  $product_img1 = $_FILES['product_img1']['name'];
                  $product_img2 = $_FILES['product_img2']['name'];
                  $product_img3 = $_FILES['product_img3']['name'];
                  
                  $setfile1 = move_uploaded_file($img1, "product_images/$product_img1");
                  $setfile2 = move_uploaded_file($img2, "product_images/$product_img2");
                  $setfile3 = move_uploaded_file($img3, "product_images/$product_img3");
                  
                  $price = $_POST['product_price'];
                  $description = $_POST['product_desc'];
                  $width = $_POST['width'];
                  $height = $_POST['height'];
                  $lenght = $_POST['lenght'];
                  $weight = $_POST['weight'];

                  $status = true;
                  $keywords = $_POST['product_keywords'];
                  
                 if($setfile1 || $setfile2 || $setfile3) {
                  
								$insert = "insert into products (cat_id, brand_id, date, product_title, product_img1, product_img2, product_img3, price, product_desc, status, width, height, lenght, weight) VALUES 
                              ('$cat', '$brand_id', 'NOW()', '$title', '$product_img1', '$product_img2', '$product_img3', '$price', '$description', '$status', '$width', '$height', '$lenght', '$weight')";
								
                $run = mysqli_query($conn,$insert);
              if($run) {
                                                                	
								echo "<script>alert('Produto cadastrado com sucesso.')</script>
                      <script>window.open('prod_control.php','_self')</script>";
               }
               else { echo "<script>alert('Ups.')</script>";}
              }
            } 
                                                        
?>


<div class="container" style="padding:25px;">
  <div class="info" style="margin 10px;">

	<div class="jumbotron">
     <h2>Product Control</h2>
   </div>


<table>
<tr>
<th>Id</th>
<th>Título</th>
<th>Categoria</th>
<th>Descrição</th>
<th>Preço</th>
<th>Imagem</th>
<th>Status</th>
</tr>
<form method="post">




<?php 
 function displayprods() {
 
 global $conn;
 $get_products = "select * from products order by cat_id";
 $run_products = mysqli_query($conn,$get_products);
 	$nrows = mysqli_num_rows($run_products);
        
		if($nrows==0){
			echo "<br><br>Não existem produtos cadastrados<br><br>";	
		}
		else {
					while($row_products = mysqli_fetch_array($run_products)){
						$pro_id = $row_products['product_id'];
						$pro_title = $row_products['product_title'];
						$pro_cat = $row_products['cat_id'];
						$pro_desc = $row_products['product_desc'];
						$pro_price = $row_products['price'];
						$pro_img1 = $row_products['product_img1'];
            $status = $row_products['status'];
				
	echo "
                      <tr>
                      <td>$pro_id</td>
                      <td>$pro_title</td>
                      <td>$pro_cat</td>
                      <td>$pro_desc</td>
                      <td>$pro_price</td>
                      <td><img src='product_images/$pro_img1' width='20%' height='auto'></td>
                      <td>"; if($status) {echo"<a href='prod_control.php?changestatus=$pro_id'><p style='color:green;'><b>In</b></p></a>";} else {echo"<a href='prod_control.php?changestatus=$pro_id'><p style='color:red'><b>Out</b></p></a>";}
                      echo"
                      </td>
                      </tr>";
                    
                    }}}

	displayprods();  ?>
	
	
                
                
   </table>

    <input type="submit" class="btn-default" name="update_stock" value="Atualizar Estoque">
    </form>
  </div>
  </div>

<?php

if(isset($_POST['update_stock'])) {

 global $conn;
 $get_products = "select * from products";
 $run_products = mysqli_query($conn,$get_products);
 	$nrows = mysqli_num_rows($run_products);

					while($row_products = mysqli_fetch_array($run_products)){
						$pro_id = $row_products['product_id'];
						$pro_title = $row_products['product_title'];

            if($_POST[$pro_title] == 1){
                           $update_status = "update products set status='1' where product_id='$pro_id'";
                           mysqli_query($conn,$update_status);
                           echo "<script>alert('Atualização realizada.')</script>
                           <script>window.open('prod_control.php','_self')</script>";                       
                          }

                        else{
                         $update_status = "update products set status='0' where product_id='$pro_id'";
                         mysqli_query($conn,$update_status);
                         echo "<script>alert('Atualização realizada.')</script>
                         <script>window.open('prod_control.php','_self')</script>";
                             }}
                            }
                             
?>



<!--?php
if(isset($_POST['update_stock'])){
          
                  global $conn;
                  $get_products = "select * from products";
                  $run_products = mysqli_query($db,$get_products);
                  $numrows = mysqli_num_rows($run_products);
                  
                  for ($i=1; $i<=$numrows; $i++){
                          
                          if($_POST['$i']) { continue; }
                          
                          else {
                                        
                                $update_status = "update products set status='0' where product_id='$i'";
                                mysqli_query($conn,$update_status);
                            }
                           
                          }
                  echo "<script>alert('Atualização realizada.')</script>
                        <script>window.open('prod_control.php','_self')</script>";
}
?>
 
 
 <div>



					}
                                        
          echo "</div><div style='float:right;'><form method='post'>";
                                        
                                        while($row_products = mysqli_fetch_array($run_products)){
                                                    $pro_id = $row_products['product_id'];
                                                    $pro_title = $row_products['product_title'];
                                                    $status = $row_products['status'];
                                                    
                                        echo "<label for='$pro_id'>$pro_title</label><br><input type='checkbox' name='$pro_id' value='$status'";
                                        if($status){ echo " checked><br>";}
                                        else { echo "><br>"; }
                                        }
                                        
                }
                }
                
	
        
	if(isset($_POST['insert_product'])){
	
	//text data variables
		$product_title = $_POST['product_title'];
		$product_cat   = $_POST['product_cat'];
		$product_brand = $_POST['product_brand'];
		$product_price = $_POST['product_price'];
		$product_desc = $_POST['product_desc'];
		$status = 'on';
		$product_keywords = $_POST['product_keywords'];
		
	//image names
		$product_img1 = $_FILES['product_img1']['name'];
		$product_img2 = $_FILES['product_img2']['name'];
		$product_img3 = $_FILES['product_img3']['name'];
		
	//image temp names
		$temp_img1 = $_FILES['product_img1']['tmp_name'];
		$temp_img2 = $_FILES['product_img2']['tmp_name'];
		$temp_img3 = $_FILES['product_img3']['tmp_name'];
	
	//uploading images to its folder
		move_uploaded_file($temp_img1,"product_images/$product_img1");
		move_uploaded_file($temp_img2,"product_images/$product_img2");
		move_uploaded_file($temp_img3,"product_images/$product_img3");
	
	//insert query
		$insert_product = "insert into products (cat_id,brand_id,date,product_title, price, product_desc, status,product_img1,product_img2,product_img3) values ('$product_cat','$product_brand',NOW(),'$product_title','$product_price','$product_desc','$status','$product_img1','$product_img2','$product_img3') ";
	
		$run_product= mysqli_query($conn,$insert_product); 
		
		if($run_product){
			echo "<script>alert('Product Inserted successfully')</script>";
		}
		
	} */

