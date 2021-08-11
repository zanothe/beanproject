
<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4>Login</h4>
        <form class="aa-login-form" action="" method="post">
          <label for="">E-mail:<span>*</span></label>
          <input type="text" name="email" placeholder="Username or email" required>
          <label for="">Senha:<span>*</span></label>
          <input type="password" name="pass" placeholder="Password" required>
          <button class="aa-browse-btn" name="login" type="submit">Login</button>
          <label for="rememberme" class="rememberme">
            <input type="checkbox" id="rememberme" >
            Lembrar-me </label>
          <p class="aa-lost-password"><a href="passrecover.php">Esqueceu a senha?</a></p>
          <div class="aa-register-now"> Não tem uma conta?<a href="register.php">Registrar agora!</a> </div>
        </form>
        
        <?php 
if(isset($_POST['login'])){
				
				global $conn;
				
				$c_email=$_POST['email'];
				$c_pass=$_POST['pass'];
			
				$sel_c = "select * from customers where customer_email='$c_email' && customer_pass='$c_pass'";
				$run_c = mysqli_query($conn,$sel_c);
				
				$check_customer = mysqli_num_rows($run_c);
					
					if($check_customer==0){
						echo "<script>alert('E-mail e Senha incorretos. Por favor, tente novamente.')</script>";
						echo "<script>window.open('index.php','_self')</script>";
					}
					
					else {
						
					$ip=getIp();
					$sel_cart ="select * from cart where ip_add='$ip'";
					$run_cart = mysqli_query($conn,$sel_cart);
					$check_cart = mysqli_num_rows($run_cart);

						$query  = "SELECT * FROM customers ORDER BY customer_email='$c_email'";
						$result = mysqli_query($conn, $query);
						$row = mysqli_fetch_array($result);
		
						
						while($row = mysqli_fetch_array($result)) {
										
										session_start();
										$_SESSION['customer_email'] = $c_email;
										$_SESSION['customer_fname'] = $row[2];
				 						$_SESSION['customer_lname']  = $row[3];
										$_SESSION['customer_country']  = $row[6];
										$_SESSION['customer_city']  = $row[7];
										$_SESSION['Adress']  = $row[9];
										$_SESSION['customer_contact']  = $row[10];			
						  }		
						  	
				if($check_customer>0 && $check_cart==0){
					echo "<script>window.open('index.php','_self')</script>";
				}
				else{
					echo "<script>window.open('checkout.php','_self')</script>";
				}
			}
			}
			?>
        
        
      </div>
    </div>

  </div>

</div>
        
  
