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
        



$ip = $_GET['ip'];
$id = $_GET['postid'];
$sql = "select * from posts_bp where post_id='$id'";
$qry = mysqli_query($conn, $sql);



if($qry) {
        while($rw = mysqli_fetch_array($qry)) {
                $beans = $rw['beans'];
        }
        

        
        if($beans!=null) {
                $beanstoexpl = substr_replace($beans,"",-1,1); 
        

                
          if(preg_match("[a]", $beanstoexpl)>0){
                                        $i = explode("a", $beanstoexpl);
                                        $count = count($i);
                                        $string = strval(implode("-", $i));
                                        }
                                        else{
                                        $i[0] = $beanstoexpl;
                                        $count = 1;
                                        $string = strval($i[0]);
                                       }

     
                if(preg_match("/$ip/", $string)>0) {
                        

                        for($j=0;$j<$count;$j++) { 
                                $ll = $i[$j];
                                if(preg_match("/$ll/", $ip)>0) {                    
                                 array_splice($i, $j, 1);}
                                else{continue;}
                         }

                         
                        if(count($i)==1){
                         $count -= 1; $data =$i[0]."a";} 
                         elseif(count($i)==0){
                         $count-=1;$data=null;}
                         else{
                        $count -= 1; $imp = implode("a", $i); 
                        $data = $imp."*";}}
                        
                else {        
                        $count += 1; $d = $ip."a";  $data = $beans.$d; }}
                     
        else { $count=1;$data = $ip."a";}}
        

        $sql = "update posts_bp set beans='$data' where post_id='$id'";
$qry = mysqli_query($conn, $sql); 
if($qry){
        
        $xml = simplexml_load_string("<main><bean>$count</bean></main>");

        echo"$xml->bean";
        }
        

        ?>