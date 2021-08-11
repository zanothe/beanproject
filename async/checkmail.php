<?php

include('../includes/db.php');


if(isset($$_GET['send'])) {

 require_once('../funcs/validate.php');

    $name = $_GET['name'];
    $email = $_GET['email'];
    $msg = addslashes(htmlspecialchars($_GET['msg']));
    
   /* $fail = validateName($name);
    $fail .= validateEmail($email);

    if (preg_match('[^]', $fail)==0){*/
                global $conn;
                $in = "insert into messages (name, contact, msg) values ('$name', '$email', '$msg')";
                $insert = mysqli_query($conn,$in); 
                $xml = simplexml_load_string("<main><bean>Mensagem enviada!</bean></main>");
$fl = fopen('YOU_HAVE_NEW_MSGS.txt', 'rw');var_dump($fl);
                $line = fgets($fl);
                $line ? $new = ++$line : $new = 1;
                fwrite($fl, $new);
                fclose($fl);
                echo"$xml->bean";               
                
        
/*}else{$xml = simplexml_load_string("<main><bean>Problema na validacao dos dados. Por favor, tente novamente.</bean></main>");

                echo"$xml->bean";
                }*/
} 
/*
$name = filter_input(INPUT_POST, $_POST['name']);var_dump($name);
$contact = filter_input(INPUT_POST, $_POST['email'], FILTER_VALIDATE_EMAIL);var_dump($contact);
$msg = filter_input(INPUT_POST, $_POST['msg']);var_dump($msg);*/


        
?>