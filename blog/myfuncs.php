<?php
 
  function getip()
{
    $client  = $_SERVER['HTTP_CLIENT_IP'];
    $forward = $_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = $_SERVER['REMOTE_ADDR'];

    if(filter_var($client, FILTER_VALIDATE_IP))
    {
        $ip = $client;
    }
    elseif(filter_var($forward, FILTER_VALIDATE_IP))
    {
        $ip = $forward;
    }
    else
    {
        $ip = $remote;
    }

    return $ip;
}
    
	
function display_body() {





$ip0 = getip();
$vr = explode(".", $ip0);
$vr1 = implode("1234", $vr);
$ip = $vr1;



	global $conn;
                                

	if(!isset($_GET['category'])&&!isset($_GET['post'])){
	
		$get_posts = "SELECT * from posts_bp order by post_id desc limit 2";
	}
	
	//showing particular posts
	else if (isset($_GET['subcategory'])){
        $cat_id = $_GET['category'];
                $subcat = $_GET['subcategory'];
                $get_posts = "SELECT * from posts_bp where category_id='$cat_id' AND subcategory='$subcat'";
			
	}
        
        else if(isset($_GET['post'])){ 
        $post_id = $_GET['post'];
        			$get_posts = "SELECT * from posts_bp where post_id='$post_id'";
              
        }
        else {
                      $cat_id = $_GET['category'];
			$get_posts = "SELECT * from posts_bp where category_id='$cat_id' order by post_id desc"; }
                                
					$run_posts = mysqli_query($conn,$get_posts);
					
					$count = mysqli_num_rows($run_posts);
					if($count==0){
						echo "<br><br>No posts found in this category<br><br>";	
					}
					
					while($row_posts = mysqli_fetch_array($run_posts)){
						
						$post_id = $row_posts['post_id'];
						$post_title = $row_posts['title'];
						$post_author = $row_posts['author'];
						$post_data = $row_posts['data'];
						$post_cat = $row_posts['category_id'];
						$post_body = $row_posts['content'];
                                                $post_beans = $row_posts['beans'];
                                            
                                           					
					echo "
					<div style='width:100%'>
   				 <h3>".utf8_encode($post_title)."</h3>
   				 <p class='p-sml'>$post_data por <a href='$post_author_site'><b>$post_author</b></a></p>
   				 
    				<div class='panel-body'>".utf8_encode($post_body)."</div></div>
                                
                                
                                <div style='padding:15px;width:100%;'>";

                                if($post_beans!=null) { 
                                $beanstoexpl = substr_replace($post_beans,"",-1,1);
                                 if(preg_match("[a]", $beanstoexpl)>0){
                                        $c = explode("a", $beanstoexpl);
                                        $count = count($c);
                                        }
                                        else{
                                        $c = $beanstoexpl;
                                        $count = 1;
                                        }
             //var_dump($post_beans);var_dump($ip);var_dump("/$ip/"); 
             
/*var_dump(preg_match("[a]", $beanstoexpl)>0);
             
             var_dump($c);*/
            // var_dump(preg_match("/$ip/", $post_beans)>0);
                                        if(preg_match("/".$ip."/", $post_beans)>0) {
                                        echo"<table>
                                        <tr><td style='margin:auto;vertical-align:middle;text-align:center;' id='bn$post_id'>
                                        $count</td><td>
                                        <img onclick='insertbean($post_id, $ip, true)' id='lmp$post_id' src='SVG/lamponsmall.svg' 
                                        ></td></tr></table>";
                                        } 
                                        else { 
                                        echo"<table><tr><td style='margin:auto;vertical-align:middle;text-align:center;' id='bn$post_id'>
                                        $count</td><td>
                                        <img onclick='insertbean($post_id, $ip, false)' 
                                        id='lmp$post_id' src='SVG/lampsmall.svg' 
                                        ></td></tr></table>";
                                        }}
                                else{
                                $count="0";
                                echo"<table><tr><td style='margin:auto;vertical-align:middle;text-align:center;' id='bn$post_id'>
                                        $count</td><td>
                                        <img onclick='insertbean($post_id, $ip, false)' 
                                        id='lmp$post_id' src='SVG/lampsmall.svg' 
                                        ></td></tr></table>";

                                }
                                echo"</div>";
                                /*spread button
                                echo"
                                <span style='position:absolute;right:0px;;width:50%'><a target='_blank' 
                                href='https://www.facebook.com/sharer/sharer.php?u=
                                https%3A%2F%2Fbeanproject.getenjoyment.net%2FPrincipal%2F
                                index.php?post=$post_id%2F&amp;src=sdkpreparse' 
                                class='fb-xfbml-parse-ignore'>
                                <button style='border:0px;;border-radius:5px;
                                padding:10px;width:100%;background-color:rgb(200,200,200);color:#000'>
                                Spread it out!</button></a></span>
                                </div>";*/
                                                      
    				
                                //displaying comments
    				$get_comments = "select * from comments_bp where post_id=$post_id";
    				$run_query = mysqli_query($conn, $get_comments);
                               
                                if($run_query) {
					
					while($row = mysqli_fetch_array($run_query)) {
						$date = $row['cur_dat'];
                                                $post_id = $row['post_id'];
						$author = $row['author'];
						$website = $row['website'];
						$email = $row ['email'];
						$comment = $row['comment'];
                                                
					
					echo "<div style='padding-top:15px;'><div class='pnl-cmt'>
							<div class='pnl-bd' style='width:100%;text-align: left; color: #454545;'>							
								<p class='p-sml'>$date por $author</p>
								<p class='p-sml'>$website</p>
                                                                <p class='p-sml'>$email</p>
								<p class='show' style='color:#000'><b>$comment</b></p></div>
					</div></div>"; }}
                                else {echo
                                "<p style='color:#000'>Nenhum comentário</p>";}
                                //end comments
					
	
    				echo" <div style='width:100%' style='padding-top:20px;'>
					<p>
    				Deixe o seu comentário </p>
    				<form method='post' action=''>
                                <div class='frm-ctrl'>
                                

    				<input style='width:100%' type='text' name='author' placeholder='Nome'></div>
<div class='frm-ctrl'>
    				<input style='width:100%' type='text' name='website' placeholder='Website'></div>
<div class='frm-ctrl'>
    				<input style='width:100%' type='text' name='email' placeholder='E-mail'></div>
    				<input type='hidden' name='post_id' value='$post_id'>
<div class='frm-ctrl'>
    				<textarea style='width:100%' name='comment' placeholder='Comentário'></textarea></div>
<div class='frm-ctrl'>
    				<input type='submit' name='send' value='Comentar'></div>
    				</form>	
		</div>
                
                </ hr>
                                <div style='padding-bottom:10px;'></div>";
    
					}
					
         if(isset($_POST['send'])) {
	global $conn;
	$post_id = $_POST['post_id'];
						$author = $_POST['author'];
						$website = $_POST['website'];
						$email = $_POST ['email'];
						$comment = $_POST['comment'];
						
	$insert = "insert into `comments_bp` (`cur_date`, `post_id`, `author`, `website`, `email`, `comment`)
        values ('CURRENT_TIMESTAMP', '$post_id', '$author', '$website', '$email', '$comment')";
	$run_insert = mysqli_query($conn,$insert);
        if($run_insert) {
        echo "<script>window.open('index.php?category=$post_id', '_self')";	
        }
}
	
}



//displaying main categories	
function display_nav(){
                                global $conn;
                                
                                
	
				$get_category = "select * from category_bp";
				$run_category = mysqli_query($conn,$get_category);
				
				while($row_category = mysqli_fetch_array($run_category)){
					
					$cat_id = $row_category['category_id'];
					$cat_title = $row_category['category_name'];
	
                                                if(isset($_GET['category'])&&$_GET['category']==$cat_id) {
                                                	echo "<button class='pdd active'><a href='index.php?category=$cat_id'>$cat_title</a></button>";					
						}else{
                                                echo "<button class='pdd'><a href='index.php?category=$cat_id'>".utf8_encode($cat_title)."</a></button>";					
					}
                                        
                                   
				
	}}

function display_idx() {
	global $conn;$i= 0;
       
   function get_catnm() {
             $get_posts0 = "SELECT * from category_bp where category_id=$post_category";
             $run_posts0 = mysqli_query($conn,$get_posts0);
				
             while($row_posts0 = mysqli_fetch_array($run_posts0)){
                    $nm = $row_posts0['category_name'];}
                                
                return $nm;}
	
				$get_posts = "SELECT * from posts_bp order by category_id";
                                $run_posts = mysqli_query($conn,$get_posts);
				
				while($row_posts = mysqli_fetch_array($run_posts)){
						
						$post_id = $row_posts['post_id'];
						$post_category = $row_posts['category_id'];
						$post_title = $row_posts['title'];
						$post_author = $row_posts['author'];
						$post_data = $row_posts['data'];
						$post_body = $row_posts['content'];
					
                                        
					if($i=0) {
                                        
                  $get_posts0 = "SELECT * from category_bp where category_id=$post_category";
                                $run_posts0 = mysqli_query($conn,$get_posts0);
				
			while($row_posts0 = mysqli_fetch_array($run_posts0)){
                                $nm = $row_posts0['category_name'];}
                                
					echo "<p>$nm</p>";	}
					$array[$i] = $post_category;				
					
					if($array[$i]!=$array[$i-1]&&$array[$i-1]==true) {
                                         $get_posts0 = "SELECT * from category_bp where category_id=$post_category";
                                $run_posts0 = mysqli_query($conn,$get_posts0);
				
				while($row_posts0 = mysqli_fetch_array($run_posts0)){
                                $nm = $row_posts0['category_name'];}
						echo "<p>$nm</p>";
					}
										
					echo "
					<li><a href='index.php?post=$post_id'>".utf8_encode($post_title)."</a></li>"; $i++;	
					}

	}
    
        ?>
        
        
        
        
        
       


	
