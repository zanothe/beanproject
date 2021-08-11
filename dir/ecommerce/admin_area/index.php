 <?php include('../includes/db.php') ?>

 <style>

 table input {display:block; }
 </style>
 <link href="../css/bootstrap.css" rel="stylesheet">
 
 <div class="container" style="text-align:center">
  <div class="jumbotron">
         <p align="center"><h2>Admin Area</h2></p></div>
         <div class="panel-body">
         <table style="align:center">
        
        <form class="aa-login-form" action="start.php" method="post">
          <label for="">username</label>
          <input type="text" name="username" placeholder="Username" required><br>
          <label for="">password</label>
          <input type="password" name="pass" placeholder="Password" required><br>
          <button name="login" type="submit">Login</button>
        </form>
        </table>
        </div>
</div>
        <br>
        <p align="center" style="font-size:8px;">Powered by <img src="../../znt/img/znt1.png" width="5%" heigth="5%"></p>

       