


 <style>

 table input {display:block; }
 
  <style>

 table input {display:block; }
 body {font-family:"Lato", Sans-Serif;font-size:16px;color:#333333;background-color:#ECF0F1;} 
a {color:#C0C0C0; transition:color 2s;} a:hover{color:#454545;}
small {font-size:60%;}

.n-pdd {padding:0px;}
.pdd {padding:15px;}
.ctn-fld {width:100%; background-color:#ECF0F1;}
.ctn {margin:auto; width:768px}
.hd {position:relative;border:0; border-radius: 5px; height:100px; width: 100%;}
.txt-hd {position:absolute; bottom:0; right:0; color:#999999; transition:color 1s;} .txt-hd:hover {color:#454545;}
.nvb {border:0; border-radius: 5px;background-color:#999999;width: 100%; }
.nvb button {display:inline-block; border:0;background-color:#454545; transition: background-color 0.5s;}
.nvb button:hover {background-color:white;}
.sbc {padding:10px;}
.sbc > div {display:inline-block;padding-right:px;}
.sbc button {display:inline-block;font-size:12px; 
height:20px; width:100px; border:0; border-radius:10px;background-color:silver;color:dark;transition:background-color 0.5s;}
.sbc button:hover {background-color:white;}
.cl-mn {grid-area:mn;width: 568px;}
.cl-sd {grid-area:sd;width: 150px;margin-right:0px;padding-top:15px;}
.cl-lft {grid-area:mn;width:50%;position:absolute;margin-left:0px;} .cl-rgt {grid-area:sd; width:auto;}
.gd-ctn {display:grid;grid: 'mn sd';}
.pnl {padding:10px; background-color:#ECF0F1; border-radius:5px;} 
.pnl input [type="text"] {padding:5px;border:1; border-radius:5px;}
.pnl-bd {padding:15px;} .pnl-bd ul {margin-left:3px;} .pnl-bd .p-sml {font-size:10px;}
 
.btn-dnt {height:40px; width:100%; border: 1px solid #454545; background-color:#ccc; border-radius: 20px; color:#454545;
transition:border 1s, background-color 1s, color 1s;}
.btn-dnt:hover {border:#ccc;background-color:#454545; color:#ccc;}
.ftr {width:100%; background-color:#454545; color:white;}
.ftr .ftr-cl-rgt {position:absolute;right:0;}
.flx-ctn {display:flex;width:100%;height:100%}

@media (max-width: 767px) { 

.ctn {width:100%;} .cl-ms {width:100%;} .cl-sd {width:100%;} .gd-ctn {display:block;}
.nvb button {display:block; width:100%;border:0;background-color:#454545; transition: background-color 0.5s;}
span {display:block;} .ftr-cl-rgt {text-align:center;}
}
 </style>

 <link href="../css/bootstrap.css" rel="stylesheet">
 
 <div class="flx-ctn">
 <div class="container" style="width:380px;align-self:center;align-item:center;text-align:center">
  <div class="ctn-fld" style="padding:15px;border:0;border-radius: 10px 10px 0px 0px;">
         <p align="center"><h3>Solicitação de acesso</h3><br><h4>Preencha os campos abaixo.</h4></p></div>
         <div class="pnl-bd">
         <table style="align:center">
        
        <form method="post">
          <label for="name" id="label-name">Nome</label><br>
          <input type="text" id="name" name="name"><br>
          <label for="email" id="label-email">E-mail</label><br>
          <input type="text" id="email" name="email"><br>
          <label for="company" id="label-company">Empresa</label><br>
          <input type="text" id="company" name="company"><br>
          <label for="cpfcnpj" id="label-cpfcnpj">CPF ou CNPJ</label><br>
          <input type="text" id="cpfcnpj" name="cpfcnpj"><br>
          <div class="pdd" style="padding-bottom:0px;">
          <input type="submit" class="btn-lg" name="req" value="Enviar"></div>
        </form>
        </table></div>
         <div class="ftr" style="border:0;border-radius: 0px 0px 10px 10px;color:white;">
                <p align="center" style="padding-top:15px;padding-bottom:15px;font-size:8px;">Powered by <img src="znt/img/znt1.png" style="filter:invert(1);" width="10%" heigth="10%"></p>
        </div></div>

</div>

       

<?php include('../includes/db.php') ?>
<?php 
if(isset($_POST['req'])) {

 require_once('../funcs/validate.php');

    $name = $_POST['name'];
    $company = $_POST['company'];
    $email = $_POST['email'];
    $cpf_cnpj = $_POST['cpfcnpj'];

    $fail = validateName($name);
    $fail .= validateEmail($email);
    $fail .= validateCpfCnpj($cpf_cnpj, $company);

    if (preg_match('[^]', $fail)==0){
                global $conn;
                $get = "select * from admins";
                $qry = mysqli_query($conn, $get);
                $nrows = mysqli_num_rows($qry);
                $usrname = "guest".strval($nrows+1);
                $cpfcnpj1 = intval($cpfcnpj);
                $pass = substr(str_shuffle('0123456789ABCDEFGHIJKLMNOPQpifuwnbopifpeoygcmvbnlsRSTUVWXYZ'),1,6);
                $insert = "insert into `admins` (`user_name`, `user_pass`, `name`, `company`, `email`, `cpfcnpj`) values ('$usrname', '$pass', '$name', '$company', '$email', '$cpfcnpj1')";
                $result = mysqli_query($conn, $insert);
                if($result)
                echo"<script>window.open('reqsuccess.php?user=$name&pass=$pass', '_self')</script>"; }
    else {    
                echo"<script>window.open('req.php?invalid=$fail', '_self')</script>;";
        }
}
?>


<?php
if(isset($_GET['invalid'])) {

        $frags = explode('*', $_GET['invalid']);
        $count = count($frags);

        for($x=0; $x < $count-1; $x++) {
          
          if(preg_match('[-okcp8RY5Mc58]', $frags[$x])!=0) {
            $part = explode('-okcp8RY5Mc58', $frags[$x]);
            $input = $part[0];
            $input_id = $part[1];
            echo "<script>
                    document.getElementById('$input_id').setAttribute('value', '$input');
                  </script>";
          }
          else {
            $part = explode('^', $frags[$x]);
            $id = $part[0];
            $msg_rtn = $part[1];
            $cpfcnpj_field = false;
            if(preg_match('[companycpfcnpj]', $id)>0) {
              $frag = explode('cpfcnpj', $id);
              $id = $frag[0];
              $cpfcnpj_field = $frag[1];
            }

            echo 
              "<script>
              var input = document.getElementById('$id');
              input.setAttribute('style', 'border-color: red;');

              if($id==pass) {
                document.getElementById('passmatch').setAttribute('style', 'border-color: c8390a;');
              }

              var label = document.getElementById('label-$id');
              label.innerHTML = '$msg_rtn.';
              </script>";

              if($cpfcnpj_field==true) { echo"<script>
                  document.getElementById('cpfcnpj').setAttribute('value', '$cpfcnpj_field');
                </script>"; }

         }
        }
         
}
?>