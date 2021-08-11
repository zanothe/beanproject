
 <?php 
 include('../includes/db.php');

if(isset($_POST['login'])||isset($_POST['guest'])){
				
				global $conn;
				if(isset($_POST['login'])) {
				$username=$_POST['username']; } else { $username=$_POST['guest'];}
				$pass=$_POST['pass'];
			
				$sel_a = "select * from admins where user_name='$username' && user_pass='$pass'";
				$run_a = mysqli_query($conn,$sel_a);	
				
					if($run_a){

                                        $_SESSION['admin'] = $username;
                                        echo"
                                        <script>alert('Obrigado!')</script>"; }
                                        
                                        else {
	
						echo "<script>alert('Credenciais invalidas!.')</script>
                                                <script>window.open('index.php','_self')</script>";
					}
					
					 } 
                                         
                    else {
                                         echo "<script>window.open('index.php','_self')</script>";}
                       
                                        
?>

<link href="../css/bootstrap.css" rel="stylesheet">
<style> .list-item-group li { padding:10px; } </style>
<div class="container"><p style="padding:10px; font-size: 15">Directories</p>
<div class="panel" style="border-color:#cfcfcf">
        <ul class="list-item-group">
                <li><a href="curriculum/index.php">../curriculum</a></li>
                <!--li><a href="portfolium/index.php">../Portfolium</a></li-->

                <li><a href="ecommerce/index.php">../e-commerce</a></li>

        </ul>
     <div></div>