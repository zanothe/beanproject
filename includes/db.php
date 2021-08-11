<?php         
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
        

?>	
