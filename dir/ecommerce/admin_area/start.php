
 <?php 
 include('../includes/db.php');

if(isset($_POST['login'])){
				
				global $conn;
				
				$username=$_POST['username'];
				$pass=$_POST['pass'];
			
				$sel_a = "select * from admins where user_name='$username' && user_pass='$pass'";
				$run_a = mysqli_query($conn,$sel_a);	
				
					if($run_a){
						session_start();
                                        $_SESSION['admin'] = $username;
                                        echo"
                                        <script>alert('Login realizado!.')</script>"; }
                                        
                                        else {
						echo "<script>alert('Nome de usuário e Senha incorretos.')</script>";
						echo "<script>window.open('index.php','_self')</script>";
					}
					
					 }
                                        
?>

<link href="../css/bootstrap.css" rel="stylesheet">
<style>
.panel-info a:hover .btn-default{
  transition: all 0.5s ease 0s;

  -webkit-animation-name: loader-two-after-transition;
  -webkit-animation-duration: 1.5s;
  -webkit-animation-timing-function: linear;
  -webkit-animation-iteration-count: infinite;
  animation-name: loader-two-after-transition;
  animation-duration: 1.5s;
  animation-timing-function: linear;
  animation-iteration-count: infinite;
  }

</style>
<div class="container" style="width: 350px; padding-top: 45px; text-align:center">
<div class="panel" style="border-color:#252525">
<div class="panel-info" style="padding:30px; border-color:#252525">
<a href="orders.php"><p style="padding:30px;" class="btn-default">
Check Orders</p></a>

<a href="prod_control.php"><p class="btn-default" style="padding:30px;">List e Insert Products</p></a>
</div>
</div>
</div>