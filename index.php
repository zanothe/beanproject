<!-- Portifolium by Ivan Cilento aka Zanoth 2021 
Bootstrap: Slideshow e background; no blog, com Modal.
JQuery: No blog, Fadeout method ao fim do carregmento da pag.
-->




<html>

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="author" content="Ivan Cilento">

 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>  <!--Modal exception-->
<script src="js/myfunctions.js" type="application/javascript" async="async"></script>

<style>
body {font-family:"Lato", Sans-Serif;font-size:26px;color:#cccccc;} 
a {color:#cccccc; transition:color 2s;} a:hover{color:#454545;}
small {font-size:60%;}

.n-pdd {padding:0px;}
.pdd {padding:15px;}
.ctn-fld {width:100%;position:relative;}
.ctn {position:relative;margin:auto; width:768px; padding:15px}
.hd {position:relative;border:0; border-radius: 5px; height:200px; width: 100%;}
.txt-hd {position:absolute; bottom:0; right:0; color:#999999; transition:color 1s;} .txt-hd:hover {color:#454545;}
.nvb {border:0;width: 100%; }
.nvb ul li {cursor:pointer;color:#cccccc;display:inline-block; border:0; transition: color 1s;color:#C0C0C0; transition:color 2s;}
.nvb ul li:hover {cursor:pointer;color:#454545;}
.sbc {padding:10px;}
.sbc > div {display:inline-block;padding-right:px;}
.sbc button {display:inline-block;font-size:12px; 
height:20px; width:100px; border:0; border-radius:10px;background-color:silver;color:dark;transition:background-color 0.5s;}
.sbc button:hover {background-color:white;}

.gd-ctn {display:grid;grid: 'mn sd';grid-gap:15px;}
.cl-mn {grid-area:mn;width: 568px;}
.cl-sd {grid-area:sd;width:100%;padding-top:15px;}

.pnl {padding:10px; background-color:#ECF0F1; border-radius:5px;} 
.pnl input [type="text"] {padding:5px;border:1; border-radius:5px;}

.pnl-bd {padding:15px;} .pnl-bd ul {margin-left:3px;} .pnl-bd .p-sml {font-size:10px;}

.pnl-cmt {padding-top:15px;border:1px solid Azure;box-shadow:-1px 1px 3px #888888; ;border-radius:5px;background-color:AliceBlue;}

.frm-ctrl input[type=text] {
 width: 100%;
  padding: 12px 12px;

  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
  background-color: #f8f8f8;
  resize: none; }
.frm-ctrl textarea {
 width: 100%;
  height: 150px;
  padding: 12px 12px;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
  background-color: #f8f8f8;
  resize: none; }
.frm-ctrl input[type=submit] {
 width: 100%;
  padding: 10px;
transition: background-color 1s, color 1s;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
  background-color: #cccccc;
  resize: none; }
  .frm-ctrl input[type=submit]:hover {
color:dark;
  background-color: white;
  resize: none; }
.btn-dnt {height:40px; width:100%; border: 1px solid #454545; background-color:#ccc; border-radius: 20px; color:#454545;
transition:border 1s, background-color 1s, color 1s;}
.btn-dnt:hover {border:#ccc;background-color:#454545; color:#ccc;}
.ftr {width:100%; background-color:#454545; color:white;}
.ftr .ftr-cl-rgt {position:absolute;right:0;}
.flx-ctn {display:flex;width:100%;height:100%}
#loader {bottom:0;right:0;left:0;top:0;display:flex;position:fixed;z-index:9999;
height: 100%;width:100%;background-color:#ffffff;}
#loader #loaderinner {    
  align-self:center;align-item:center;text-align:center}

.ctn img {margin-left:auto;margin-right:auto}
.inf {transition: filter 1s; filter:grayscale(100%);position:relative; height:100px; width:100%;}
.inf img:hover {filter:grayscale(0%);}

@media (max-width: 767px) { 
.ctn {width:100%;} .cl-ms {width:100%;} .cl-sd {width:100%;} .gd-ctn {display:block;}
.nvb button {display:block; width:100%;border:0;background-color:#454545; transition: background-color 0.5s;}
span {display:block;} .ftr-cl-rgt {text-align:center;}
}


/*.opc {filter:opacity(0)}
/*Bootstrap*/
.carousel-control.left {
  background-image: -webkit-linear-gradient(left, rgba(0, 0, 0, .5) 0%, rgba(0, 0, 0, .0001) 100%);
  background-image:      -o-linear-gradient(left, rgba(0, 0, 0, .5) 0%, rgba(0, 0, 0, .0001) 100%);
  background-image: -webkit-gradient(linear, left top, right top, from(rgba(0, 0, 0, .5)), to(rgba(0, 0, 0, .0001)));
  background-image:         linear-gradient(to right, rgba(0, 0, 0, .5) 0%, rgba(0, 0, 0, .0001) 100%);
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#80000000', endColorstr='#00000000', GradientType=1);
  background-repeat: repeat-x;
}
.carousel-control.right {
  right: 0;
  left: auto;
  background-image: -webkit-linear-gradient(left, rgba(0, 0, 0, .0001) 0%, rgba(0, 0, 0, .5) 100%);
  background-image:      -o-linear-gradient(left, rgba(0, 0, 0, .0001) 0%, rgba(0, 0, 0, .5) 100%);
  background-image: -webkit-gradient(linear, left top, right top, from(rgba(0, 0, 0, .0001)), to(rgba(0, 0, 0, .5)));
  background-image:         linear-gradient(to right, rgba(0, 0, 0, .0001) 0%, rgba(0, 0, 0, .5) 100%);
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#00000000', endColorstr='#80000000', GradientType=1);
  background-repeat: repeat-x;
}

</style>
<script> 
function rot(element) { 
        var stl = element.getAttribute('style');
        var i =  0; 
        function gear() {
        i++;
                element.setAttribute('style', stl+';transform:rotate('+i*0.05+'deg);filter:hue-rotate('+i*0.05+'deg)');                
                setTimeout(gear, 1);
        }
        gear();
}

function set_pos_abs_center(element) {              
        var img_wd = parseInt(element.width); 
        var stl = element.getAttribute('style');
        var rsn = img_wd/screen.width;
        var pos = 50-((100*rsn)/2);       
        element.setAttribute('style', stl+';left:'+pos+'%');       
}    
    
var toogle=true;
function show_pnl(btn, clss) {
        var el = document.getElementsByClassName(clss);
        toogle==true ?             
                        (toogle=false,
                        el[0].className = "shw",
                        btn.setAttribute('onclick', "clk(this, 'shw')")) :                                        
                                        (toogle=true,
                                        el[0].className = "hid",
                                        btn.setAttribute('onclick', "clk(this, 'hid')"));                                                              
}


function change(el) {
        el.className == "active" ?        
        el.setAttribute('class', '') : el.setAttribute('class', 'active');
                                                                    
}
</script>


 <title>Zanoth</title>
</head>

<body>

<div id="body-bg" style="position:fixed;z-index:-1;width:100%;height:100%">
<div class="right carousel-control" style="height:100%:width:50%"></div>
<div class="left carousel-control" style="height:100%:width:50%"></div></div>


 
<!--DBG >
<div style="padding:50px;color:#000000">
<div style="padding:50px;color:#000000" id="db1"></div><div style="padding:50px;color:#000000" id="db2"></div>
<div style="padding:50px;color:#000000" id="db3"></div>
</div-->

<style> 
 .hid {display:none}
 .shw {position:fixed;width:100%;height:100%;display:block}
 </style>

<div class="ctn-fld"><div style="margin:auto;padding-top:30px;width:100%">
<img style="position:absolute;z-index:-1" src="img/ffh.png" width="100px" height="auto" 
onload="set_pos_abs_center(this);rot(this);">

</div>

<div style="margin:auto;padding-top:30px;text-align:center;">
<img style="display:block;margin-left:auto;margin-right:auto" id="znt" width="300px" height="auto" src="dir/znt/img/znt1.png">
<p class="text-muted" style="letter-spacing:4px;font-size:20px;">design &amp development</p></div></div>

<div class="ctn">   
<nav>

<div class="nvb">
<ul style="list-style-type: none;width:80%">
<li><a href="blog">Blog</a></li>
<li style="position:absolute;right:0"><a href="#contact">Contato</a></li>
</ul>
</div>
 </nav>
 </div> 

<div style="padding-top:30px">
<div class="ctn-fld" style="background-color:#ffffff">
<div id="myCarousel" class="collapse in carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>
<div class="ctn">
  <!-- Wrapper for slides -->
  <div class="carousel-inner">     
    <div class="item">
      <img style="margin-left:auto;margin-right:auto" width="auto" height="200px" src="img/Method Draw Image (5).png" alt="Boot by Zanoth">
    </div>

    <div class="item">
      <img style="margin-left:auto;margin-right:auto" width="auto" height="200px" src="img/Method Draw Image (4).png" alt="Videotape by Zanoth">
    </div>
    <div class="item">
      <img style="margin-left:auto;margin-right:auto" width="auto" height="200px" src="img/Method Draw Image (6).png" alt="Cap by Zanoth">
    </div>

    <div class="item active">
      <img style="margin-left:auto;margin-right:auto" width="auto" height="200px" src="img/Method Draw Image (3).png" alt="Bic by Zanoth">
    </div></div>
  </div>

  <!-- Left and right controls -->
  <a class="opc left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="opc right carousel-control" href="#myCarousel" data-slide="next">
    <span style="filter:opacity(1)" class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div></div>
</div>

<style>
.pnl-bn {
  display: block;  padding:30px;
  position: relative;
}.pnl-bn p {
  display: block; 
  position: relative;
}

.pnl-bn::before{
content:"";
         
         right: 0;
  left: auto;
  background-image: -webkit-linear-gradient(left, transparent 0%, rgba(255, 255, 255, 1) 100%);
  background-image:      -o-linear-gradient(left, transparent 0%, (255, 255, 255, 1) 100%);
  background-image: -webkit-gradient(linear, left top, right top, from(transparent), to(rgba((255, 255, 255, 1)));
  background-image:         linear-gradient(to right, transparent 0%, rgba(255, 255, 255, 1) 100%);
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#00000000', endColorstr='#80000000', GradientType=1);
  background-repeat: repeat-x;
 }
 
 .pnl-bn::after{        
 
 background-size: cover;
      position: absolute;
      top: 0px; left:0px;    background-image:url('img/beanproject1.2.png');
      
      opacity: 0.75;  
}</style>

<div id="abt">  
     <div class="ctn">                              
         <div style="padding-left:30px;padding-right:30px;">
                <h1>About</h1>  
             <div class="panel" style="font-size:18px;">
                  <img src="" style="float:left">
                  <p>Auto-didata, estudante e entusiasta das ciencias e das artes, desenvolvedor Back/Front End, 
                     designer grafico.</p>
                  <ul>             
                     <li>+ 3 years Back/Front End experience: WebAPIs, REST, Layout, Data structure, Database managment.</li>
                     <li>Proficience in native JavaScript &amp PHP</li>
                     <li>Angular &amp React overviews</li>
                     <li>Linux shell</li>
                     <li>Vetorizacao grafica</li><li>Edicao grafica</li>
                     <li>Criacao</li>
                 </ul>
                 
                 <!--svg width="17" height="24">
                 <rect width="15" height="22" x="2" y="2" fill="#ffffff" stroke-width="2" stroke="#bbbbbb"/>
                 <rect width="15" height="22" x="0" y="0" fill="#ffffff" stroke-width="2" stroke="#bbbbbb"/>
                 <rect width="7" height="7" x="7.5" y="0" fill="transparent" stroke-width="1" stroke="#bbbbbb"/>
                 <line stroke-width="1" stroke="#bbbbbb" x1="7" y1="0" y2="7" x2="15"/>
                 </svg-->
                 
                 
                 <h3>Entre em contato:</h3>              
			<div id="contact" class="form">			    
			        <form action="" id="form-contact" method="post">
                                <div class="form-group">
					<input class="form-control" type="text" name="name" placeholder="Your Name..." value="" />
                                </div>
                                   <div class="form-group">
                                        <input class="form-control" type="text"  name="email" placeholder="Contact..." value="" />
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control" name="msg" placeholder="Message..."></textarea>
                                    </div>
					<button class="btn btn-default" type="submit">Enviar</button>

				</form>
			  </div>     

    </div>
         </div>
 
<?php 

	$servername ="fdb23.awardspace.net";
	$username="3153135_fldb";
	$password="3153135_fldbfl";
	$dbname="3153135_fldb";

	$conn = mysqli_connect("$servername", "$username", "$password", "$dbname");

	if(!$conn){
		die("Connection failed: ").mysqli_connect_error();
	} 
        
if(isset($_POST['name'])) {

 require_once('funcs/validate.php');           

    $name = addslashes(htmlspecialchars($_POST['name']));
    $email = addslashes(htmlspecialchars($_POST['email']));
    $msg = addslashes(htmlspecialchars($_POST['msg']));

    
                global $conn;
                $in = "insert into messages (name, contact, msg) values ('$name', '$email', '$msg')";
                $insert = mysqli_query($conn,$in); 

                file_exists('YOU_HAVE_NEW_MSGS.txt') ? $fl = fopen('YOU_HAVE_NEW_MSGS.txt', 'rw') : $fl = fopen('YOU_HAVE_NEW_MSGS.txt', 'xrw');

                $line = fgets($fl);
                $line ? $new = ++$line : $new = 1;
                fwrite($fl, $new);
                fclose($fl);
                             
                if($insert) {
                        echo"<script>
                        var spn = document.createElement('div');                       
                        spn.setAttribute('style', 'position:relative;width:100%;filter:opacity(0)');
                         var spn1 = document.createElement('div');
                          spn1.setAttribute('style', 'border:1px;padding:15px;border-radius:5px;font-size:18px;color:#eeeeee;background-color:#333333;position:absolute;right:10px;top:10px');      
                        var textNod = document.createTextNode('Mensagem enviada!');
                        spn1.appendChild(textNod);                         
                        spn.appendChild(spn1);
                                
                function explines() {                                         var incopc=0;
                document.getElementById('body-bg').appendChild(spn);
                                function cgnopc_inv() {

                                         
                                                 spn.setAttribute('style', 'position:relative;width:100%;filter:opacity('+0.1*incopc+')');
                                                 if(incopc!=0){
                                                         setTimeout(cgnopc_inv, 100);incopc--;
                                                 }                                             
                                                         
                                                 
                                 }
                                
                                         function cgnopc(){
                                                 spn.setAttribute('style', 'position:relative;width:100%;filter:opacity('+0.1*incopc+')');
                                                 if(incopc!=10){
                                                         setTimeout(cgnopc, 100);incopc++;
                                                 }
                                                 else {
                                                         setTimeout(cgnopc_inv, 2000); }
                                                         
                                                 
                                          }
                                          cgnopc();                                         
                                          
                                                  
                                }                             
                        
               explines();


                        </script>";
                }
        }              
              
//its an abs
?>

                 
             
         
         <div class="pnl-bn">
             <div class="panel-info">
               <h1>What's Bean?</h1>
                 <p style="font-size:18px">
                  Bean nasce com o intuito de oferecer um espaço interativo e educativo, com conteúdos exclusivos relacionados a ciência e às artes em geral. Uma fonte de alimentação saudável para quem aprecia o bom gosto.</p>
             </div>
         </div>     
      </div>
 
 

</div>
 
 <style> .footer span {padding-left:10px;} </style>      <!--excuse me?????-->
 <div class="ctn" style="height:70px;position:relative">
 <!--p style="position:absolute;right:0px;top:0"> More out </p-->
         <div style="position:absolute;right:0;bottom:0;align-text:right;">

<span>
      <a href="cv.html" style="cursor:pointer">       <svg style="cursor:pointer;position:relative;bottom:-4px;" width="30" height="36">
            <rect width="26" height="32" x="4"  y="4" stroke-width="1" stroke="#000000" fill="#ffffff"/>
 <rect width="16" height="10" x="2"  y="2" stroke-width="0" stroke="null" fill="#ffffff"/>
        <line x1="14" y1="0" x2="27" y2="14" stroke-width="1" stroke="#444444"/>
          
                 <rect width="13" height="33" x="0"  y="0" stroke-width="2" stroke="#666666" fill="#ffffff"/>
                 
             <rect width="13" height="19" x="14" y="14" stroke-width="2" stroke="#666666" fill="#ffffff"/>

                        <rect width="25" height="18" x="2"  y="15" stroke-width="0" stroke="null" fill="#ffffff"/>
                        </svg></a></span>
                  <span><a style="cursor:pointer" href="http://github.com/zanothe"><img style="cursor:pointer;position:relative;bottom:7px" width="35px" height="auto" 
                  src="https://image.flaticon.com/icons/png/512/25/25231.png"></a></span>

            
            <span><a style="cursor:pointer;" href="http://twitter.com/Zanoth4"><img style="cursor:pointer;filter:grayscale(50%)" width="35px" height="auto" 
src="https://logodownload.org/wp-content/uploads/2014/09/twitter-logo-4.png"></a></span>
<span><a style="cursor:pointer" href="https://www.sololearn.com/users/profile/12621380"><img style="cursor:pointer;position:relative;bottom:7px;filter:grayscale(100%)" width="35px" height="auto" 
src="https://cdn.worldvectorlogo.com/logos/sololearn-2.svg"></a></span>
                                </div>
                                </div>
 
 

 
 </body> </html>
 
 
        
