//MIT License
        
//Copyright (c) 2021 Ivan Cilento aka Zanoth

//Permission is hereby granted, free of charge, to any person obtaining a copy
//of this software and associated documentation files (the "Software"), to deal
//in the Software without restriction, including without limitation the rights
//to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
//copies of the Software, and to permit persons to whom the Software is
//furnished to do so, subject to the following conditions:

//The above copyright notice and this permission notice shall be included in all
//copies or substantial portions of the Software.

//THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
//IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
//FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
//AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
//LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
//OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
//SOFTWARE.
                
                
                
                
var arr=["0","0","0"];
var k=0; var now=""; var l=0; var increase_l = true; var increase_k = true;var j=0;
function cg_cl(stpd) {
        if(stpd) {stpd.toString();}
        var main = 0; 
        console.log("in "+arr[0]+" "+arr[1]+" "+arr[2]);

        var el = document.getElementById('cg-cl');
        var svgels = document.getElementsByClassName('svg');
        var attr_string = el.getAttribute('style');
        var txt = document.getElementById('txt');
        var attr_txtstring = txt.getAttribute('style');
            
        var get_diff = Math.floor(Math.random()*3).toString();
        get_diff===now ? 
            get_diff==="0" ? 
                get_diff="1" : 
                    get_diff==="1" ?     
                        get_diff="2" : 
                            get_diff="0" :
                                get_diff=get_diff;        

        function gear() {
          function cgn() {
            if(stpd) {
                switch(stpd) {
                    case "0":
                        get_diff==="1" ? now = "2" : now = "1";
                        break;
                    case "1":
                        get_diff==="0" ? now = "2" : now = "0";
                        break;
                    case "2":
                        get_diff==="1" ? now = "0" : now = "1";
                        break;
                }
                main==0 ? l=arr[now] : l=l;               
                increase_l ? 
                    l==200 ? (increase_l=false,cgn()) : arr[now] = ++l : 
                        l==50 ? (increase_l=true,cgn()) : arr[now] = --l;                
            }
            else {
                now = Math.floor(Math.random()*3);
                main==0 ? l=arr[now] : l=l;
                increase_l ? 
                    l==200 ? (increase_l=false,cgn()) : arr[now] = ++l : 
                        l==50 ? (increase_l=true,cgn()) : arr[now] = --l;                
            }
          }
          cgn();
          
          var i = 0;
          function giv_diff() {
                main==0&&i==0 ? k = arr[get_diff] : k=k;
                increase_k ? 
                    k==200 ? (increase_k=false,giv_diff()) : arr[get_diff] = ++k : 
                        k==50 ? (increase_k=true,giv_diff()) : arr[get_diff] = --k;                
                el.setAttribute('style', attr_string+';background-color:rgb('+arr[0]+', '+arr[1]+', '+arr[2]+')');                    
                i++;
                console.log(+arr[0]+" "+arr[1]+" "+arr[2]);
                i==2 ? i=0 : setTimeout(giv_diff, 50);   
          }
          giv_diff();
          
          main++;      
          el.setAttribute('style', attr_string+';background-color:rgb('+arr[0]+', '+arr[1]+', '+arr[2]+')');             
 
          txt.setAttribute('style', attr_txtstring+';color:rgb('+Math.abs(250-arr[0])+', '+Math.abs(250-arr[1])+', '+Math.abs(250-arr[2])+')');
              svgels[0].setAttribute('stroke', 'rgb('+arr[0]+', '+arr[1]+', '+arr[2]+')');
                svgels[0].setAttribute('fill', 'rgb('+Math.abs(250-arr[0])+', '+Math.abs(250-arr[1])+', '+Math.abs(250-arr[2])+')');   
                svgels[1].setAttribute('stroke', 'rgb('+arr[0]+', '+arr[1]+', '+arr[2]+')');
                svgels[1].setAttribute('fill', 'rgb('+Math.abs(250-arr[0])+', '+Math.abs(250-arr[1])+', '+Math.abs(250-arr[2])+')');
                svgels[2].setAttribute('stroke', 'rgb('+arr[0]+', '+arr[1]+', '+arr[2]+')');
                svgels[2].setAttribute('fill', 'rgb('+Math.abs(250-arr[0])+', '+Math.abs(250-arr[1])+', '+Math.abs(250-arr[2])+')');
                svgels[3].setAttribute('stroke', 'rgb('+arr[0]+', '+arr[1]+', '+arr[2]+')');
                svgels[3].setAttribute('fill', 'rgb('+Math.abs(250-arr[0])+', '+Math.abs(250-arr[1])+', '+Math.abs(250-arr[2])+')');
                svgels[4].setAttribute('stroke', 'rgb('+arr[0]+', '+arr[1]+', '+arr[2]+')');
                svgels[4].setAttribute('fill', 'rgb('+Math.abs(250-arr[0])+', '+Math.abs(250-arr[1])+', '+Math.abs(250-arr[2])+')');
                svgels[5].setAttribute('fill', 'rgb('+arr[0]+', '+arr[1]+', '+arr[2]+')');
                svgels[5].setAttribute('stroke', 'rgb('+arr[0]+', '+arr[1]+', '+arr[2]+')');

          if(main==70) { j++;
                setTimeout(cg_cl, 100, get_diff)
          }
          else {
          if(j!=6) {
                setTimeout(gear, 100)}
          }
        }
        gear();
}


                
var str=["",""];  
var str_dif=["",""]; 
var prev=["",""];
var j=0;
var toogle = true;
function cg_cll_beta(dif, aa, bb, gt_df) {        
                
        var main = 0;
        var el = document.getElementById('cg-cl');
        var svgels = document.getElementsByClassName('svg');
        var attr_string = el.getAttribute('style');
        var txt = document.getElementById('txt');
                var attr_txtstring = txt.getAttribute('style');

        if(Boolean(dif&&aa&&bb)) {
            var df = dif; var vaa = aa; var vbb = bb; var spc;
        }
        else {
            var df = 250; var vaa = 250; var vbb = 250;
        }
                    
        var get_diff;
        var get_diff = Math.floor(Math.random()*3).toString();

        str_dif[0]=="" ? 
        (str_dif[0]=get_diff,get_diff==="0"?prev=["1", "2"]:get_diff==="1"?prev=["0", "2"]:prev=["1", "0"]) : 
        str_dif[0]==get_diff ? (get_diff==="0"?(get_diff="1",str_dif[1]=str_dif[0],str_dif[0]=get_diff,prev=["1", "2"]):get_diff==="1"?(get_diff="2",str_dif[1]=str_dif[0],str_dif[0]=get_diff,prev=["0", "2"]):(get_diff="0",str_dif[1]=str_dif[0],str_dif[0]=get_diff,prev=["1", "0"])) : 
        (str_dif[1]=str_dif[0],str_dif[0]=get_diff,get_diff==="0"?prev=["1", "2"]:get_diff==="1"?prev=["0", "2"]:prev=["1", "0"]);        
        
        function gear() {
                
                var i = 0;
                
                if(toogle) {
                        switch(get_diff) {
                            case "0" :
                                vaa--;vbb--;
                                vaa<50 ? vaa=50 : vaa>200 ? vaa=200 : vaa=vaa;
                                vbb<50 ? vbb=50 : vbb>200 ? vbb=200 : vbb=vbb;
                                arr[prev[0]] = vaa;
                                str[0] = arr[prev[0]];
                                arr[prev[1]] = vbb;
                                str[1] = arr[prev[1]];
                                break;
                            case "1" :
                                vaa--;vbb--;
                                vaa<50 ? vaa=50 : vaa>200 ? vaa=200 : vaa=vaa;
                                vbb<50 ? vbb=50 : vbb>200 ? vbb=200 : vbb=vbb;

                                arr[prev[0]] = vaa;
                                str[0] = arr[prev[0]];
                                arr[prev[1]] = vbb;
                                str[1] = arr[prev[1]];
                                break;
                            case "2" :
                                vaa--;vbb--;
                                vaa<50 ? vaa=50 : vaa>200 ? vaa=200 : vaa=vaa;
                                vbb<50 ? vbb=50 : vbb>200 ? vbb=200 : vbb=vbb;
                                
                                arr[prev[0]] = vaa;
                                str[0] = arr[prev[0]];
                                arr[prev[1]] = vbb;
                                str[1] = arr[prev[1]];
                                break;
                        }
                }
                else {                    
                        switch(get_diff) {
                            case "0" :
                                vaa++;vbb++;
                                vaa<50 ? vaa=50 : vaa>200 ? vaa=200 : vaa=vaa;
                                vbb<50 ? vbb=50 : vbb>200 ? vbb=200 : vbb=vbb;
                                arr[prev[0]] = vaa;
                                str[0] = arr[prev[0]];
                                arr[prev[1]] = vbb;
                                str[1] = arr[prev[1]];
                                break;
                            case "1" :
                                vaa++;vbb++;
                                vaa<50 ? vaa=50 : vaa>200 ? vaa=200 : vaa=vaa;
                                vbb<50 ? vbb=50 : vbb>200 ? vbb=200 : vbb=vbb;                                                    

                                arr[prev[0]] = vaa;
                                str[0] = arr[prev[0]];
                                arr[prev[1]] = vbb;
                                str[1] = arr[prev[1]];
                                break;
                            case "2" :
                                vaa++;vbb++;
                                vaa<50 ? vaa=50 : vaa>200 ? vaa=200 : vaa=vaa;
                                vbb<50 ? vbb=50 : vbb>200 ? vbb=200 : vbb=vbb;
                                                        
                                arr[prev[0]] = vaa;
                                str[0] = arr[prev[0]];
                                arr[prev[1]] = vbb;
                                str[1] = arr[prev[1]];
                                break;
                        }
                }
                //console.log('stp: '+arr[stp]);
                //console.log(arr[0]+" "+arr[1]+" "+arr[2]);
                function giv_diff() {                       
                        if(toogle) {
                           /*switch(get_diff) {
                                case "0":
                                arr[prev[0]] = vaa;
                                str[0] = arr[prev[0]];
                                arr[prev[1]] = vbb;
                                str[1] = arr[prev[1]];*/
                                gt_df ? arr[get_diff] = df : (arr[get_diff] = --df, i++, i==2?i=0:setTimeout(giv_diff, 50));                            
                        }
                        else {
                                gt_df ? arr[get_diff] = df : (arr[get_diff] = ++df, i++, i==2?i=0:setTimeout(giv_diff, 50));                                
                        }
                }                
                giv_diff();                
                
                   //DBG
        if(main==0) {console.log("\nin "+arr[0]+" "+arr[1]+" "+arr[2]);}
        
                el.setAttribute('style', attr_string+';background-color:rgb('+arr[0]+', '+arr[1]+', '+arr[2]+')');  
                txt.setAttribute('style', attr_txtstring+';color:rgb('+Math.abs(150-arr[0])+', '+Math.abs(150-arr[1])+', '+Math.abs(150-arr[2])+')');  
                    
                main++;
                if(main==100) {
                        if(toogle) {                                                 
                                toogle=false;
                               console.log("out "+arr[0]+" "+arr[1]+" "+arr[2]);
                               // console.log(j+"-> Get_diff:"+stp+"\nPrev: "+prev+"\nStr: "+str_dif);
                                j++;
                                
                                setTimeout(cg_cll, 100, arr[get_diff], str[0], str[1], get_diff);
                        }
                        else { 
                                toogle=true;
                              console.log("out "+arr[0]+" "+arr[1]+" "+arr[2]);
                              //  console.log(j+"-> Get_diff:"+stp+"\nPrev: "+prev+"\nStr: "+str_dif);
                                j++;
                                setTimeout(cg_cll, 100, arr[get_diff], str[0], str[1], get_diff);
                        }
                }
                else {if(j!=9) {
                        setTimeout(gear, 100);}
                }                      
                        
       }
       gear();
}
    
  

<!DOCTYPE html>
<html>
    <head>
        <title>Page Title</title>
    </head>
    <body>
    
        <div id="cg-cl" style="display:flex;margin:auto;width:100%;height:200px;align-text:center;"><div id="txt" style="font-size:32px;font-family:sans-serif;align-self:center;align-item:center;align-text:center">FreeStyle Corp.<br><small>Ivan Zanoth</small>
         </div>   
        <svg style="filter:invert(1);align-self:center;align-item:center;" width="100" height="110" xmlns="http://www.w3.org/2000/svg">
  <g>
  <title>Bean Project</title>
  <ellipse class="svg" fill="#000" stroke="#666666" stroke-width="1.5" cx="50" cy="38.72091" id="svg_3" rx="37.9709" ry="37.9709"/>
  <ellipse class="svg" fill="#000" stroke="#666666" stroke-width="1.5" cx="50" cy="27.88663" id="svg_4" rx="19.72998" ry="19.72998"/>
  <ellipse class="svg" fill="#000" stroke-width="1.5" cx="26.79365" cy="24.62369" id="svg_6" rx="16.25552" ry="17.4964" stroke="#666666"/>
  <path class="svg" fill="#000" stroke-width="1.5" d="m10.54362,12.31019c8.73249,4.75056 13.24596,9.99748 19.00032,21.94514l-7.44527,11.91245" id="svg_8" stroke="#666666"/>
  <path class="svg" stroke="#666666" fill="#000" stroke-width="1.5" d="m11.28541,12.33349c-4.72638,13.82889 -18.38432,37.23741 1.98541,44.67165c20.36973,7.43424 33.00741,-37.72276 32.51104,-36.97821c-0.49636,0.74454 -20.5986,-0.9927 -27.16041,13.01081" id="svg_10"/>
  <text class="svg" style="cursor: move;" fill="#999999" stroke-width="0" x="-115.87782" y="111.44181" id="svg_11" font-size="22" font-family="Helvetica, Arial, sans-serif" text-anchor="start" xml:space="preserve" transform="matrix(0.5986670054462422,0,0,0.3795274794101715,80.91390801753053,45.34337671652925) " stroke="#845335">FreeStyle Corp.</text>
 </g>
</svg> 
        
            
        </div>
        
  
    </body>
</html>
<script>cg_cl();</script>