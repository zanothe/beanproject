<?php if(!isset($_GET['user'])&&!isset($_GET['pass'])) { echo "<script>window.open('index.php', '_self')</script>"; }
        else { $user = $_GET['user']; $pass = $_GET['pass']; }
        ?>
        
        
        <link href="../css/bootstrap.css" rel="stylesheet">
        <style> div {margin:auto; text-align:center;} 
        
        
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

<div class="flx-ctn">
        <div class="jumbotron" style="border:0;border-radius:10px 10px 0px 0px;"><h3>Obrigado. Utilize os dados de acesso em consultas posteriores.</h3></div>
        <div class="container" style="width: 200px;">
        <div class="panel" style="border-color:#cfcfcf">
        <div class="panel-body">
        <ul class="list-group" style="padding:10px;"><li>username: <br><?php echo"$user"; ?></li><li>password: <br><?php echo"<b>$pass</b>"; ?></li></ul>
        </div>

        <div class="panel-body" style="border-color:dark">
                <form action="main.php" method="post">
                <input type="submit" name="guest" class="btn-lg btn-default" value="Acessar">
                <?php echo"<input type='hidden' value='$user'  name='username'>";?>
                <?php echo"<input type='hidden' value='$pass' name='pass'>";?>
                </form>
        </div></div>
        
        </div>       <div class="ftr" style="border:0;border-radius: 0px 0px 10px 10px;color:white;">
                <p align="center" style="padding-top:15px;padding-bottom:15px;font-size:8px;">Powered by <img src="znt/img/znt1.png" style="filter:invert(1);" width="10%" heigth="10%"></p>
        </div> </div>
  