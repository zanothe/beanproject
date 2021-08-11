<?php include('includes/db.php');include('myfuncs.php'); ?>
<!-- Copyright (c) 2021 Bean Project - Ivan Cilento aka Zanoth  -->
<!-- Native JS, PHP, AJAX, HTML, CSS -->
<!-- Bootstrap: Modal -->
<!-- JQuery: Fadeout at the end of the page's load -->

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="author" content="Ivan Cilento">

 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>  <!--Modal exception-->
<script src="js/async.js" type="application/javascript" async="async"></script>
<script src="js/myfunctions.js" type="application/javascript" async="async"></script>

<style>
body {font-family:"Lato", Sans-Serif;font-size:16px;color:#333333;} 
a {color:#C0C0C0; transition:color 2s;} a:hover{color:#454545;}
small {font-size:60%;}

.n-pdd {padding:0px;}
.pdd {padding:15px;}
.ctn-fld {width:100%; background-color:#ECF0F1;}
.ctn {position:relative;margin:auto; width:768px}
.hd {position:relative;border:0; border-radius: 5px; height:200px; width: 100%;}
.txt-hd {position:absolute; bottom:15; right:0; color:#999999; transition:color 1s;} .txt-hd:hover {color:#454545;}
.nvb {border:0; border-radius: 5px;background-color:#999999;width: 100%; }
.nvb button {display:inline-block; border:0;background-color:#454545; transition: background-color 0.5s;}
.nvb button:hover {background-color:white;}
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




@media (max-width: 767px) { 
.ctn {width:100%;} .cl-ms {width:100%;} .cl-sd {width:100%;} .gd-ctn {display:block;}
.nvb button {display:block; width:100%;border:0;background-color:#454545; transition: background-color 0.5s;}
span {display:block;} .ftr-cl-rgt {text-align:center;}
}


</style>


 <title>Bean Project</title>
</head>

<body>

<div id="loader"><div id="loaderinner">
<svg id="gear" onload="gear();" style="align-self:center;align-item:center;align-text:center" width="550" height="550" xmlns="http://www.w3.org/2000/svg">
 <g>
  <title>Gear</title>
  <ellipse ry="250" rx="250" id="grad" cy="274.99999" cx="275.00001" stroke-width="0" stroke="#000" fill="url(#grad)"/>
  <g stroke="null" id="small" transform="rotate(60 245.38374328613276,378.5364685058594) matrix(0.6868583746979462,0.396557867527008,-0.396557867527008,0.6868583746979462,181.65663736449739,-23.959205299512206) ">
   <g stroke="null" id="svg_55">
    <path stroke="#000000" fill="none" stroke-width="1.5" stroke-opacity="null" fill-opacity="null" opacity="0.5" d="m384.44461,364.01819" id="svg_29"/>
    <path stroke="#000000" fill="none" stroke-width="1.5" d="m357.78704,378.83973c8.95321,17.86119 23.87017,-0.80456 32.12466,2.15638c3.87584,1.2417 4.34799,6.87504 3.81514,18.90986c0.05528,0 0.29185,12.71162 -2.76461,17.58285c-4.01161,6.20844 -24.08126,-17.01686 -32.73284,1.99051" id="svg_28"/>
    <path stroke="#000000" fill="none" stroke-width="1.5" d="m332.00845,424.32542c8.95321,17.86119 23.87017,-0.80456 32.12466,2.15638c3.87584,1.2417 4.34799,6.87504 3.81514,18.90986c0.05528,0 0.29185,12.71162 -2.76461,17.58285c-4.01161,6.20844 -24.08126,-17.01686 -32.73284,1.99051" id="svg_50" transform="rotate(60 350.06863403320307,444.64523315429693) "/>
    <path stroke="#000000" fill="none" stroke-width="1.5" d="m279.31173,424.75534c8.95321,17.86119 23.87017,-0.80456 32.12466,2.15638c3.87584,1.2417 4.34799,6.87504 3.81514,18.90986c0.05528,0 0.29185,12.71162 -2.76461,17.58285c-4.01161,6.20844 -24.08126,-17.01686 -32.73284,1.99051" id="svg_51" transform="rotate(120 297.3719177246094,445.0751342773438) "/>
    <path stroke="#000000" fill="none" stroke-width="1.5" d="m252.75015,379.41296c8.95321,17.86119 23.87017,-0.80456 32.12466,2.15638c3.87584,1.2417 4.34799,6.87504 3.81514,18.90986c0.05528,0 0.29185,12.71162 -2.76461,17.58285c-4.01161,6.20844 -24.08126,-17.01686 -32.73284,1.99051" id="svg_52" transform="rotate(180 270.8103332519531,399.7327880859375) "/>
    <path stroke="#000000" fill="none" stroke-width="1.5" d="m331.11884,333.24743c8.95321,17.86119 23.87017,-0.80456 32.12466,2.15638c3.87584,1.2417 4.34799,6.87504 3.81514,18.90986c0.05528,0 0.29185,12.71162 -2.76461,17.58285c-4.01161,6.20844 -24.08126,-17.01686 -32.73284,1.99051" id="svg_53" transform="rotate(-60 349.1790466308593,353.56726074218756) "/>
    <path stroke="#000000" fill="none" stroke-width="1.5" d="m278.77519,333.64066c8.95321,17.86119 23.87017,-0.80456 32.12466,2.15638c3.87584,1.2417 4.34799,6.87504 3.81514,18.90986c0.05528,0 0.29185,12.71162 -2.76461,17.58285c-4.01161,6.20844 -24.08126,-17.01686 -32.73284,1.99051" id="svg_54" transform="rotate(-120 296.8353576660156,353.96051025390625) "/>
   </g>
   <ellipse stroke="#000000" fill="none" stroke-width="1.5" fill-opacity="null" cx="323.32875" cy="399.32125" id="svg_56" rx="20" ry="20"/>
  </g>
  <g stroke="null" id="gear1" transform="rotate(30 366.8005981445312,244.01850891113284) matrix(0.6868583746979462,0.396557867527008,-0.396557867527008,0.6868583746979462,130.6643985820248,-102.689628618341) ">
   <g stroke="null" id="svg_49">
    <g stroke="null" id="svg_36">
     <path stroke="#000" id="svg_33" d="m339.68293,264.6085c-3.78094,-18.27217 8.88308,-20.98488 11.42712,-21.0411c2.54404,-0.05622 17.28829,12.94513 14.54746,-3.03599l0.253,-26.56492c1.72884,-13.36681 -12.56562,-2.48784 -14.84261,-2.61434c-2.27699,-0.1265 -14.67396,-1.771 -10.45732,-20.1556" fill-opacity="null" stroke-opacity="null" stroke-width="1.5" fill="none"/>
     <path stroke="#000" transform="rotate(30 369.9688720703126,166.3056488037109) " id="svg_34" d="m357.1324,203.01162c-3.78094,-18.27217 8.88308,-20.98488 11.42712,-21.0411c2.54404,-0.05622 17.28829,12.94513 14.54746,-3.03599l0.253,-26.56492c1.72884,-13.36681 -12.56562,-2.48784 -14.84261,-2.61434c-2.27699,-0.1265 -14.67396,-1.771 -10.45732,-20.1556" fill-opacity="null" stroke-opacity="null" stroke-width="1.5" fill="none"/>
     <path stroke="#000" transform="rotate(60 415.7753601074219,121.65672302246097) " id="svg_35" d="m402.93888,158.3627c-3.78094,-18.27217 8.88308,-20.98488 11.42712,-21.0411c2.54404,-0.05622 17.28829,12.94513 14.54746,-3.03599l0.253,-26.56492c1.72884,-13.36681 -12.56562,-2.48784 -14.84261,-2.61434c-2.27699,-0.1265 -14.67396,-1.771 -10.45732,-20.1556" fill-opacity="null" stroke-opacity="null" stroke-width="1.5" fill="none"/>
    </g>
    <g stroke="null" transform="rotate(90 528.1269531250001,150.01518249511724) " id="svg_40">
     <path stroke="#000" id="svg_37" d="m471.15228,236.52868c-3.78094,-18.27217 8.88308,-20.98488 11.42712,-21.0411c2.54404,-0.05622 17.28829,12.94513 14.54746,-3.03599l0.253,-26.56492c1.72884,-13.36681 -12.56562,-2.48784 -14.84261,-2.61434c-2.27699,-0.1265 -14.67396,-1.771 -10.45732,-20.1556" fill-opacity="null" stroke-opacity="null" stroke-width="1.5" fill="none"/>
     <path stroke="#000" transform="rotate(30 501.438201904297,138.22584533691406) " id="svg_38" d="m488.60176,174.9318c-3.78094,-18.27217 8.88308,-20.98488 11.42712,-21.0411c2.54404,-0.05622 17.28829,12.94513 14.54746,-3.03599l0.253,-26.56492c1.72884,-13.36681 -12.56562,-2.48784 -14.84261,-2.61434c-2.27699,-0.1265 -14.67396,-1.771 -10.45732,-20.1556" fill-opacity="null" stroke-opacity="null" stroke-width="1.5" fill="none"/>
     <path stroke="#000" transform="rotate(60 547.2447509765625,93.57689666748048) " id="svg_39" d="m534.40824,130.28289c-3.78094,-18.27217 8.88308,-20.98488 11.42712,-21.0411c2.54404,-0.05622 17.28829,12.94513 14.54746,-3.03599l0.253,-26.56492c1.72884,-13.36681 -12.56562,-2.48784 -14.84261,-2.61434c-2.27699,-0.1265 -14.67396,-1.771 -10.45732,-20.1556" fill-opacity="null" stroke-opacity="null" stroke-width="1.5" fill="none"/>
    </g>
    <g stroke="null" transform="rotate(180 556.2130126953125,281.33337402343756) " id="svg_44">
     <path stroke="#000" id="svg_41" d="m499.2383,367.84686c-3.78094,-18.27217 8.88308,-20.98488 11.42712,-21.0411c2.54404,-0.05622 17.28829,12.94513 14.54746,-3.03599l0.253,-26.56492c1.72884,-13.36681 -12.56562,-2.48784 -14.84261,-2.61434c-2.27699,-0.1265 -14.67396,-1.771 -10.45732,-20.1556" fill-opacity="null" stroke-opacity="null" stroke-width="1.5" fill="none"/>
     <path stroke="#000" transform="rotate(30 529.5242919921876,269.54406738281256) " id="svg_42" d="m516.68778,306.24998c-3.78094,-18.27217 8.88308,-20.98488 11.42712,-21.0411c2.54404,-0.05622 17.28829,12.94513 14.54746,-3.03599l0.253,-26.56492c1.72884,-13.36681 -12.56562,-2.48784 -14.84261,-2.61434c-2.27699,-0.1265 -14.67396,-1.771 -10.45732,-20.1556" fill-opacity="null" stroke-opacity="null" stroke-width="1.5" fill="none"/>
     <path stroke="#000" transform="rotate(60 575.3308105468749,224.89511108398443) " id="svg_43" d="m562.49426,261.60107c-3.78094,-18.27217 8.88308,-20.98488 11.42712,-21.0411c2.54404,-0.05622 17.28829,12.94513 14.54746,-3.03599l0.253,-26.56492c1.72884,-13.36681 -12.56562,-2.48784 -14.84261,-2.61434c-2.27699,-0.1265 -14.67396,-1.771 -10.45732,-20.1556" fill-opacity="null" stroke-opacity="null" stroke-width="1.5" fill="none"/>
    </g>
    <g stroke="null" transform="rotate(-90 424.70751953125006,309.38092041015625) " id="svg_48">
     <path stroke="#000" id="svg_45" d="m367.73278,395.89443c-3.78094,-18.27217 8.88308,-20.98488 11.42712,-21.0411c2.54404,-0.05622 17.28829,12.94513 14.54746,-3.03599l0.253,-26.56492c1.72884,-13.36681 -12.56562,-2.48784 -14.84261,-2.61434c-2.27699,-0.1265 -14.67396,-1.771 -10.45732,-20.1556" fill-opacity="null" stroke-opacity="null" stroke-width="1.5" fill="none"/>
     <path stroke="#000" transform="rotate(30 398.0187683105471,297.5916137695312) " id="svg_46" d="m385.18226,334.29755c-3.78094,-18.27217 8.88308,-20.98488 11.42712,-21.0411c2.54404,-0.05622 17.28829,12.94513 14.54746,-3.03599l0.253,-26.56492c1.72884,-13.36681 -12.56562,-2.48784 -14.84261,-2.61434c-2.27699,-0.1265 -14.67396,-1.771 -10.45732,-20.1556" fill-opacity="null" stroke-opacity="null" stroke-width="1.5" fill="none"/>
     <path stroke="#000" transform="rotate(60 443.8252563476562,252.94268798828128) " id="svg_47" d="m430.98874,289.64864c-3.78094,-18.27217 8.88308,-20.98488 11.42712,-21.0411c2.54404,-0.05622 17.28829,12.94513 14.54746,-3.03599l0.253,-26.56492c1.72884,-13.36681 -12.56562,-2.48784 -14.84261,-2.61434c-2.27699,-0.1265 -14.67396,-1.771 -10.45732,-20.1556" fill-opacity="null" stroke-opacity="null" stroke-width="1.5" fill="none"/>
    </g>
   </g>
   <ellipse stroke="#000000" ry="100" rx="100" id="svg_59" cy="229.71414" cx="476.41717" fill-opacity="null" stroke-width="1.5" fill="none"/>
   <ellipse stroke="#000000" ry="50" rx="50" id="svg_60" cy="229.71414" cx="476.41717" fill-opacity="null" stroke-width="1.5" fill="none"/>
  </g>
  <g stroke="null" id="gear2" transform="rotate(30 167.72853088378923,240.8459320068359) matrix(0.7660909717249123,0.2052734572024643,-0.2052734572024643,0.7660909717249123,44.35913553144913,-1.9079058858106208) ">
   <g stroke="null" id="svg_79">
    <g stroke="null" id="svg_66">
     <path stroke="#000" id="svg_63" d="m92.73415,290.28193c-3.78094,-18.27217 8.88308,-20.98488 11.42712,-21.0411c2.54404,-0.05622 17.28829,12.94513 14.54746,-3.03599l0.253,-26.56492c1.72884,-13.36681 -12.56562,-2.48784 -14.84261,-2.61434c-2.27699,-0.1265 -14.67396,-1.771 -10.45732,-20.1556" fill-opacity="null" stroke-opacity="null" stroke-width="1.5" fill="none"/>
     <path stroke="#000" transform="rotate(30 123.02005767822277,191.97909545898435) " id="svg_64" d="m110.18362,228.68505c-3.78094,-18.27217 8.88308,-20.98488 11.42712,-21.0411c2.54404,-0.05622 17.28829,12.94513 14.54746,-3.03599l0.253,-26.56492c1.72884,-13.36681 -12.56562,-2.48784 -14.84261,-2.61434c-2.27699,-0.1265 -14.67396,-1.771 -10.45732,-20.1556" fill-opacity="null" stroke-opacity="null" stroke-width="1.5" fill="none"/>
     <path stroke="#000" transform="rotate(60 168.82662963867188,147.33013916015625) " id="svg_65" d="m155.9901,184.03613c-3.78094,-18.27217 8.88308,-20.98488 11.42712,-21.0411c2.54404,-0.05622 17.28829,12.94513 14.54746,-3.03599l0.253,-26.56492c1.72884,-13.36681 -12.56562,-2.48784 -14.84261,-2.61434c-2.27699,-0.1265 -14.67396,-1.771 -10.45732,-20.1556" fill-opacity="null" stroke-opacity="null" stroke-width="1.5" fill="none"/>
    </g>
    <g stroke="null" transform="rotate(90 281.17810058593756,175.68859863281253) " id="svg_70">
     <path stroke="#000" id="svg_67" d="m224.2035,262.20211c-3.78094,-18.27217 8.88308,-20.98488 11.42712,-21.0411c2.54404,-0.05622 17.28829,12.94513 14.54746,-3.03599l0.253,-26.56492c1.72884,-13.36681 -12.56562,-2.48784 -14.84261,-2.61434c-2.27699,-0.1265 -14.67396,-1.771 -10.45732,-20.1556" fill-opacity="null" stroke-opacity="null" stroke-width="1.5" fill="none"/>
     <path stroke="#000" transform="rotate(30 254.4894409179688,163.8992767333984) " id="svg_68" d="m241.65298,200.60523c-3.78094,-18.27217 8.88308,-20.98488 11.42712,-21.0411c2.54404,-0.05622 17.28829,12.94513 14.54746,-3.03599l0.253,-26.56492c1.72884,-13.36681 -12.56562,-2.48784 -14.84261,-2.61434c-2.27699,-0.1265 -14.67396,-1.771 -10.45732,-20.1556" fill-opacity="null" stroke-opacity="null" stroke-width="1.5" fill="none"/>
     <path stroke="#000" transform="rotate(60 300.29592895507807,119.2503356933594) " id="svg_69" d="m287.45946,155.95632c-3.78094,-18.27217 8.88308,-20.98488 11.42712,-21.0411c2.54404,-0.05622 17.28829,12.94513 14.54746,-3.03599l0.253,-26.56492c1.72884,-13.36681 -12.56562,-2.48784 -14.84261,-2.61434c-2.27699,-0.1265 -14.67396,-1.771 -10.45732,-20.1556" fill-opacity="null" stroke-opacity="null" stroke-width="1.5" fill="none"/>
    </g>
    <g stroke="null" transform="rotate(180 309.2642517089844,307.0067138671875) " id="svg_74">
     <path stroke="#000" id="svg_71" d="m252.28952,393.52029c-3.78094,-18.27217 8.88308,-20.98488 11.42712,-21.0411c2.54404,-0.05622 17.28829,12.94513 14.54746,-3.03599l0.253,-26.56492c1.72884,-13.36681 -12.56562,-2.48784 -14.84261,-2.61434c-2.27699,-0.1265 -14.67396,-1.771 -10.45732,-20.1556" fill-opacity="null" stroke-opacity="null" stroke-width="1.5" fill="none"/>
     <path stroke="#000" transform="rotate(30 282.575439453125,295.2174072265625) " id="svg_72" d="m269.739,331.92341c-3.78094,-18.27217 8.88308,-20.98488 11.42712,-21.0411c2.54404,-0.05622 17.28829,12.94513 14.54746,-3.03599l0.253,-26.56492c1.72884,-13.36681 -12.56562,-2.48784 -14.84261,-2.61434c-2.27699,-0.1265 -14.67396,-1.771 -10.45732,-20.1556" fill-opacity="null" stroke-opacity="null" stroke-width="1.5" fill="none"/>
     <path stroke="#000" transform="rotate(60 328.3819580078125,250.5685272216797) " id="svg_73" d="m315.54548,287.2745c-3.78094,-18.27217 8.88308,-20.98488 11.42712,-21.0411c2.54404,-0.05622 17.28829,12.94513 14.54746,-3.03599l0.253,-26.56492c1.72884,-13.36681 -12.56562,-2.48784 -14.84261,-2.61434c-2.27699,-0.1265 -14.67396,-1.771 -10.45732,-20.1556" fill-opacity="null" stroke-opacity="null" stroke-width="1.5" fill="none"/>
    </g>
    <g stroke="null" transform="rotate(-90 177.75872802734378,335.0543212890625) " id="svg_78">
     <path stroke="#000" id="svg_75" d="m120.784,421.56786c-3.78094,-18.27217 8.88308,-20.98488 11.42712,-21.0411c2.54404,-0.05622 17.28829,12.94513 14.54746,-3.03599l0.253,-26.56492c1.72884,-13.36681 -12.56562,-2.48784 -14.84261,-2.61434c-2.27699,-0.1265 -14.67396,-1.771 -10.45732,-20.1556" fill-opacity="null" stroke-opacity="null" stroke-width="1.5" fill="none"/>
     <path stroke="#000" transform="rotate(30 151.07000732421884,323.2650146484375) " id="svg_76" d="m138.23348,359.97098c-3.78094,-18.27217 8.88308,-20.98488 11.42712,-21.0411c2.54404,-0.05622 17.28829,12.94513 14.54746,-3.03599l0.253,-26.56492c1.72884,-13.36681 -12.56562,-2.48784 -14.84261,-2.61434c-2.27699,-0.1265 -14.67396,-1.771 -10.45732,-20.1556" fill-opacity="null" stroke-opacity="null" stroke-width="1.5" fill="none"/>
     <path stroke="#000" transform="rotate(60 196.87649536132818,278.6161193847656) " id="svg_77" d="m184.03996,315.32207c-3.78094,-18.27217 8.88308,-20.98488 11.42712,-21.0411c2.54404,-0.05622 17.28829,12.94513 14.54746,-3.03599l0.253,-26.56492c1.72884,-13.36681 -12.56562,-2.48784 -14.84261,-2.61434c-2.27699,-0.1265 -14.67396,-1.771 -10.45732,-20.1556" fill-opacity="null" stroke-opacity="null" stroke-width="1.5" fill="none"/>
    </g>
   </g>
   <ellipse stroke="#000000" ry="100" rx="100" id="svg_80" cy="255.38757" cx="229.46839" fill-opacity="null" stroke-width="1.5" fill="none"/>
   <ellipse stroke="#000000" ry="50" rx="50" id="svg_81" cy="255.38757" cx="229.46839" fill-opacity="null" stroke-width="1.5" fill="none"/>
  </g>
<ellipse id='atom' y="8" rx="8" cy="489.10417" cx="401.83499" 
  stroke-opacity="null" stroke-width="1.5" fill="#666666"/>
 </g>
</svg></div>
</div>


<div class="n-pdd ctn-fld">
<div class="ctn">
<div class="hd">

<!--Dir ico-->
<a href="dir">
<span style="position:absolute;bottom:15px;">
<img src="SVG/dirico.svg" id="dir" onmouseover="invtransition('dir')" onclick="invtransition('dir')">
</span>
</a>

<div style="position:absolute;right:0px;top:15px;"><small>from Scratch</small></div>
<div class="txt-hd">
<svg width="100" height="90" xmlns="http://www.w3.org/2000/svg">
 <!-- Created with Method Draw - http://github.com/duopixel/Method-Draw/ -->
 <g>
  <title>BeanProject</title>
  <rect fill="none" id="canvas_background" height="602" width="802" y="-1" x="-1"/>
 </g>
 <g>
  <title>Layer 1</title>
  <ellipse fill="#ffffff" stroke="#666666" stroke-width="1.5" cx="50" cy="38.72091" id="svg_3" rx="37.9709" ry="37.9709"/>
  <ellipse fill="#ffffff" stroke="#666666" stroke-width="1.5" cx="50" cy="27.88663" id="svg_4" rx="19.72998" ry="19.72998"/>
  <ellipse fill="#ffffff" stroke-width="1.5" cx="26.79365" cy="24.62369" id="svg_6" rx="16.25552" ry="17.4964" stroke="#666666"/>
  <path fill="#ffffff" stroke-width="1.5" d="m10.54362,12.31019c8.73249,4.75056 13.24596,9.99748 19.00032,21.94514l-7.44527,11.91245" id="svg_8" stroke="#666666"/>
  <path stroke="#666666" fill="#ffffff" stroke-width="1.5" d="m11.28541,12.33349c-4.72638,13.82889 -18.38432,37.23741 1.98541,44.67165c20.36973,7.43424 33.00741,-37.72276 32.51104,-36.97821c-0.49636,0.74454 -20.5986,-0.9927 -27.16041,13.01081" id="svg_10"/>
  <text fill="#999999" stroke-width="0" x="-106.87782" y="111.44181" id="svg_11" font-size="22" font-family="Helvetica, Arial, sans-serif" text-anchor="start" xml:space="preserve" transform="matrix(0.5986670054462422,0,0,0.3795274794101715,80.91390801753053,47.34337671652925) " stroke="#845335">Grana vitae</text>
 </g>
</svg>
</div>
</div></div></div>

<div class="n-pdd ctn-fld">
<div class="nvb">
<div class="ctn">

<?php display_nav(); ?>


</div></div></div>

<div class="ctn">
<div class="gd-ctn">
<div class="cl-mn">


<?php display_body(); ?> </div>
<div class="cl-sd">
<!--gb-btn--
<div id="gb-btn" onclick="dropup()" style="height:70px;width:70px;position:fixed;bottom:15px;right:20%;">
<svg width="70" height="70" xmlns="http://www.w3.org/2000/svg">
 <g>
  <title>Layer 1</title>
    <ellipse ry="35" rx="35" id="svg_12" cy="35" cx="35" fill-opacity="null" stroke-opacity="null" stroke-width="0.5" stroke="#000" fill="#444444"/>
  <g stroke="null" id="svg_11">
   <path stroke="#000" id="svg_16" d="m5.20323,48.29285c-1.79946,0.26088 14.26346,-20.41903 15.36987,-21.61283l29.29846,-0.44029c1.60552,1.90779 16.10317,21.65504 15.08426,21.94458c-1.01891,0.28954 -57.95312,-0.15235 -59.75258,0.10853z" stroke-opacity="null" stroke-width="0.5" fill="#444444"/>
   <rect stroke="#000" rx="8" id="svg_1" height="1.4507" width="59.9144" y="47.27489" x="4.99296" stroke-width="0.5" fill="#666666"/>
   <path stroke="#000" id="svg_20" d="m34.74556,42.86529" opacity="0.5" fill-opacity="null" stroke-opacity="null" stroke-width="1.5" fill="none"/>
   <path stroke="#000" id="svg_3" d="m8.92614,42.7946l51.20142,-0.65728l-12.5608,-18.76077c-4.24943,-0.46949 -11.88325,-3.41788 -12.74828,-1.40846c-0.34421,-1.89674 -7.81347,1.05165 -11.7202,1.57748l-14.17214,19.24904l0,0l0,0z" stroke-opacity="null" stroke-width="0.5" fill="#DDDDDD"/>
   <path stroke="#000" fill="#999999" stroke-width="0.5" stroke-opacity="null" d="m5.92128,47.34431l4.04343,-6.00549c8.32291,-0.165 22.21139,-6.46329 24.96873,-0.49501l0.01896,5.953l-29.03113,0.5475l0,0z" id="svg_7"/>
   <line stroke="#000" fill="none" stroke-width="1.5" stroke-opacity="null" fill-opacity="null" x1="34.95016" y1="21.96269" x2="34.95016" y2="45.33184" id="svg_8" stroke-linejoin="null" stroke-linecap="null"/>
   <path stroke="#000" fill="#999999" stroke-width="0.5" stroke-opacity="null" d="m63.68497,47.28367l-3.9982,-6.08339c-8.2298,-0.16714 -21.9629,-6.54713 -24.68939,-0.50143l-0.01875,6.03022l28.70635,0.55461z" id="svg_9"/>
   <path stroke="#000" fill="none" stroke-width="0.3" stroke-opacity="null" fill-opacity="null" d="m23.50219,24.19005c3.84414,0 9.99274,-3.02348 10.79932,-0.531" id="svg_2"/>
   <path stroke="#000" fill="none" stroke-width="0.2" stroke-opacity="null" fill-opacity="null" d="m22.8977,25.58039c3.99476,0 10.38428,-3.02348 11.22246,-0.531" id="svg_4"/>
   <path stroke="#000" fill="none" stroke-width="0.3" stroke-opacity="null" fill-opacity="null" d="m21.81123,27.21252c4.29601,0 11.16736,-3.02348 12.06875,-0.531" id="svg_6"/>
  </g>
 </g>
</svg>
</div>
<!--end gb-btn-->

<!-- Bag Icon -->
<!--div style="padding-bottom:10px;width:100%;">
       <div style="align-self:center;align-item:center;text-align:center">
<a href="">
<svg id="bagicon" onmouseover="invtransition('bagicon')" data-toggle="modal" data-target="#myModal-Bag" width="70" height="70" 
xmlns="http://www.w3.org/2000/svg">
 <g>
  <title>Bag Icon</title>
  <g id="svg_11">
   <ellipse fill="#666666" stroke="#000000" cx="35" cy="35" id="svg_35" rx="34" ry="34"/>
   <ellipse ry="16.79439" rx="11.6233" id="svg_20" cy="30.41392" cx="48.04336" fill="#000000" stroke="#000"/>
   <ellipse ry="16.79439" rx="11.6233" id="svg_21" cy="31.91742" cx="46.5237" stroke-width="1.5" fill="#666666" stroke="#000"/>
   <g id="svg_19" stroke="null">
    <ellipse ry="16.98416" rx="11.8078" id="svg_17" cy="30.23782" cx="21.80781" fill="#000000" stroke="#000"/>
    <ellipse ry="16.98416" rx="11.8078" id="svg_18" cy="31.92686" cx="23.69021" fill="#666666" stroke="#000"/>
   </g>
   <rect fill="#444444" x="22.08467" y="18.49934" width="26.0956" height="16.13545" id="svg_1" rx="2" stroke="#000"/>
   <rect fill="#DDDDDD" x="49.7739" y="43.39973" width="8.36653" height="11.15537" id="svg_6" rx="2" stroke="#000"/>
   <rect fill="#BBBBBB" x="12.12452" y="43.99734" width="8.36653" height="10.35856" id="svg_7" rx="2" stroke="#000"/>
   <rect fill="#999999" x="14.31575" y="41.4077" width="11.55378" height="13.34661" id="svg_4" rx="2" stroke="#000"/>
   <rect fill="#999999" x="44.39542" y="41.6069" width="11.55378" height="13.34661" id="svg_5" rx="2" stroke="#000"/>
   <rect fill="#444444" x="16.60659" y="29.45551" width="37.05177" height="27.29082" id="svg_2" rx="2" stroke="#000"/>
   <rect fill="#666666" x="27.56276" y="43.99734" width="15.13943" height="9.76095" id="svg_8" rx="1" stroke="#000"/>
   <rect stroke="#000" fill="#444444" stroke-width="0" stroke-opacity="null" x="22.57881" y="28.88416" width="25.08661" height="11.86534" id="svg_9"/>
   <rect fill="#999999" x="25.07272" y="16.10891" width="20.11951" height="22.11154" id="svg_3" rx="2" stroke="#000"/>
   <rect fill="#BBBBBB" x="30.4512" y="33.37318" width="9.36255" height="8.16733" id="svg_10" rx="1" stroke="#000"/>
   <g id="svg_32" stroke="null">
    <line stroke-linecap="null" stroke-linejoin="null" id="svg_23" y2="38.8372" x2="38.51952" y1="38.8372" x1="31.74543" fill-opacity="null" stroke-opacity="null" fill="none" stroke="#000"/>
    <line stroke-linecap="null" stroke-linejoin="null" id="svg_24" y2="38.03082" x2="38.13625" y1="38.03082" x1="32.1287" fill-opacity="null" stroke-opacity="null" fill="none" stroke="#000"/>
    <line stroke-linecap="null" stroke-linejoin="null" id="svg_28" y2="37.22443" x2="37.32987" y1="37.22443" x1="32.93509" fill-opacity="null" stroke-opacity="null" fill="none" stroke="#000"/>
    <line stroke-linecap="null" stroke-linejoin="null" id="svg_29" y2="36.41805" x2="36.52349" y1="36.41805" x1="33.74147" fill-opacity="null" stroke-opacity="null" fill="none" stroke="#000"/>
    <line stroke-linecap="null" stroke-linejoin="null" id="svg_30" y2="35.61167" x2="35.7171" y1="35.61167" x1="34.54785" fill-opacity="null" stroke-opacity="null" fill="none" stroke="#000"/>
   </g>
  </g>
 </g>
</svg>
</a></div>
</div>
<!-- Bag Icon End --->

<button class="btn-dnt" data-toggle="modal" data-target="#myModal">Donate</button>
<?php display_idx(); ?> </div>
</div>
</div>




<div class="ctn-fld"><div class="ftr">
<div class="ctn" style="padding-top:15px;padding-bottom:15px;position:relative">
Copyright (c) 2020-2021 - Bean Project<span class="ftr-cl-rgt"><small>Developed by </small>
<img id="imgftr" onmouseover="trnsition('imgftr')" style="filter:invert(1)" src="dir/znt/img/znt1.png" width="auto" height="12px"></span></div>
</div></div>

 
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <style src="css/bootstrap.css"></style><style>
  .msg {width: 150px;}
  .callout{background-color: white;}
</style>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h1><p align="center"><img height="30%" width="50%" src="img/beanproject1.2.png" alt="Bean Logo"></p></h1>
        </div>
        <div class="modal-body">
    
      <div class="grid-x grid-padding-x">
        <div class="large-12 cell">
          <div class="callout">
            <h1 align="center">Help us to still alive!</h1>
            <p><h3>Bean nasce com o intuito de oferecer um espaço interativo e educativo, com conteúdo exclusivo
            relacionado a ciência e às artes em geral. Uma fonte de alimentação saudável para quem aprecia o bom gosto.</p>
            <hr /><p>Para isso contamos com a sua colaboração, pois alguns investimentos iniciais são necessários.</p></h3>
            <div class="grid-x grid-padding-x">
            </div>
            </div>
          </div>
        </div>
   <div class="pnl pdd" style="text-align:center;border:1;border-radius:5px;border-color:#454545;">
           <p>Favorecido: Ivan Cilento</p>
             <p>Banco Itaú</p>
             <p>Agência: 3240</p>
             <p>C/P: 07665-7/500</p> </div>
     
          <div class="grid-x grid-padding-x" align="center">
            <div class="large-12 cell">
              <div class="primary callout">
<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick" />
<input type="hidden" name="hosted_button_id" value="BZRKPAXYUX658" />
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" title="PayPal - The safer, easier way to pay online!" alt="Donate with PayPal button" />
<img alt="" border="0" src="https://www.paypal.com/en_BR/i/scr/pixel.gif" width="1" height="1" />
</form>
					<div class="msg">
		         <p style="font-size: 12px;">Parte da quantia poderá ser destinada ao auxilio de uma pessoa com necessidades especiais.</p>
                <p><img src="http://geocities.ws/beanproject/img/pn.png">     </p>
              </div>
            </div>
          </div>
  
        </div>

        </div>
        <div class="modal-footer">
        <p align="center" style="font-size: 10px;">Designed by <img width="10%" height="auto" src="dir/znt/img/znt1.png"></p>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
     </div></div>
<!--Modal-->
 <style>
                        .panel-bag span {padding:5px;align-item:center}
                        ,panel-bag span a {transition: color 1.5s}
                        .panel-bag span a:hover {color:azure}
                        </style>

  <!-- ModalBag -->
  <div class="modal fade" id="myModal-Bag" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">          
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h1>Zanoth's Bag</h1>           
        </div>
        <div class="modal-body">                              
                        <!--panel-->
                       
                        <div class="panel-bag"  style="display:flex;width:100%;padding:20px;border:2px,rgb(150,150,150),solid;border-radius:5px;">
                                <div style="align-item:center">
                                        <span><img width="20px" height="auto" src="https://image.flaticon.com/icons/png/512/25/25231.png"></span>
                                        <span></span>
                                        <span><a href="http://github.com/zanothe">@zanothe</a></span>
                                </div>
                                <div style="align-item:center">
                                        <span>   </span>
                                        <span><img style="filter:grayscale(100%)" width="20px" height="auto" src="https://cdn.worldvectorlogo.com/logos/sololearn-2.svg"></span>
                                        <span><a href="http://facebook.com/zanothe">Ivan Zanoth</a></span>
                                </div>
                                <div style="align-item:center">
                                        <span><img style="filter:grayscale(100%)" width="20px" height="auto" src="https://logodownload.org/wp-content/uploads/2014/09/facebook-logo-5-768x768.png">
                                     </span><span></span><span><a href="https://www.sololearn.com/users/profile/12621380">Ivan Zanoth</a></span>
                                </div>
                        </div>
                        <!--panel ok-->

        </div>
        <div class="modal-footer">
               <p align="center" style="font-size: 10px;">Regards, <br><img style="align:center" width="10%" height="auto" src="dir/znt/img/znt1.png"></p>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
     </div></div>
<!--ModalBag-->

                    
   <script>
   /* ----------------------------------------------------------- */
  /*  11. PRELOADER
  /* ----------------------------------------------------------- */

    jQuery(window).load(function() { // makes sure the whole site is loaded      
      jQuery('#loader').delay(2000).fadeOut('slow'); // will fade out      
    })
    </script>
   
   