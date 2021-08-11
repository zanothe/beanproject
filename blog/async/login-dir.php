<?php 
 include('../includes/db.php');
 
 ?php
 $servername ="fdb23.awardspace.net";
	$username="3153135_fldb";
	$password="3153135_fldbfl";
	$dbname="3153135_fldb";

	//create connection
	$conn = mysqli_connect("$servername", "$username", "$password", "$dbname");
	//check connection
	if(!$conn){
		die("Connection failed: ").mysqli_connect_error();
	}

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
                                        ok"; }
                                        
                                        else {
	
						echo "Credenciais invalidas!";
                                                
					}
					
					 } 
                                         
                    else {
                                         echo "<script>window.open('index.php','_self')</script>";}
                       
                                        
?>