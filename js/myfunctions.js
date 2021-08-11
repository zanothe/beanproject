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

function insertbean(post_id, ip, imgcgn) {


  var request = new XMLHttpRequest();

  request.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
    document.getElementById("bn"+post_id).innerHTML = this.responseText;
    }
  };
  request.open("GET", "async/incrbean.php?postid="+post_id+"&ip="+ip, true);
  request.send();
  
  if(imgcgn){
  
          document.getElementById("lmp"+post_id).src = "SVG/lampsmall.svg";
  }
  else {
          document.getElementById("lmp"+post_id).src = "SVG/lamponsmall.svg";
  }
}

function displaytxt() {
               //variables
               var linesop = 0;
               var indexofWord = 0;
               var Char = 0;
               var jj = 0;
               var ddy = 0; 
               
               //setting intro
               var txtid = "txt"+linesop;
               var txt = document.getElementById(txtid);
               var txt_y_axis = txt.y;
               txt.setAttribute('fill', 'rgb(200,200,200)');
               txt.setAttribute('x', '2');
               txt.innerHTML = "Let me introduce myself...";
               var svg = document.getElementById('svg');
               svg.setAttribute('height', '22');
               var dyy = svg.getBBox().height;

               var lin = document.getElementById('linalt');
               lin.setAttribute('x1', '0');
               lin.setAttribute('x2', '0');
               lin.setAttribute('y1', '0');
               lin.setAttribute('y2', '15');
               var flg = true;               
               var ii=0;              
               function breakline() {                      
                       ii++;
                       if(flg) {
                               lin.setAttribute('stroke-width', '0');flg = false;
                       }
                       
                       else {                               
                               lin.setAttribute('stroke-width', '5'); flg = true;
                       }
                       if(ii<3) {       
                               setTimeout(lnalt, 500); } 
                       
                       else {
                               ii=0;
                               lin.setAttribute('stroke-width', '0');
                       }
               }
               breakline();
               
               
               var arr = [7, 23, 49, 59, 67, 73];
               var rand = Math.abs(Math.floor((Math.random()*10) - 6));               
               var num = arr[rand];
               
               //arg
                
               var txtinput = "I'm a front-end developer.";
               
               var arrayofStrings = txtinput.split(" "); 
               var numofWords = arrayofStrings.length;                        
                //fxd
                var yy=15;
                
                function txtinp(txtinput0, txtinput1) {document.getElementById('dbg4').innerHTML =arrayofStrings[indexofWord];
                        txtid = "txt"+linesop;//exccuseme?
                        txt = document.getElementById(txtid);
                        var Nodes = svg.childNodes;
                        var numof = Nodes.length;var index;
                        for(var ooo=0;ooo<numof;ooo++) {
                                if(txt==Nodes[ooo]) {
                                        index = ooo;
                                }
                                else {
                                        continue;
                                }
                        }                      
                        var xx = Nodes[index].getBBox().width;//excuseme?
                    
                          //getting the length ofcurrent word
                          var temp = document.createElementNS('http://www.w3.org/2000/svg', 'text');//thumb                             
                         temp.setAttribute('xml:space', 'preserve');
                         temp.setAttribute('font-size', '15');
                         temp.setAttribute('font-family', 'sans-serif');
                         temp.setAttribute('y', '9999');
                         temp.setAttribute('x', '9999');
                         temp.setAttribute('text-anchor', 'start');
                         temp.setAttributeNS("http://www.w3.org/2000/xmlns/", "xmlns:xlink", "http://www.w3.org/1999/xlink");                             
                                
                         if(Char==0) {
                                        var txtnod = document.createTextNode(arrayofStrings[indexofWord]);
                                        temp.appendChild(txtnod);
                         }
                         else {
                                        temp.innerHTML = "";
                         }
                         svg.append(temp);
                         var currentword_len = temp.getBBox().width;
                         //ok len
                                
                        txt.setAttribute('fill', '#000');
                                               
                        if(txtinput.length!=jj-1) {
                                if(jj==0){
                                        txt.innerHTML = "";
                                };
                                jj++;
                        }
                                                                               
                        if(xx+currentword_len>=svg.width.animVal.value){                                
                                linesop++;
                                if(linesop==1){
                                        ddy=dyy*2;
                                }
                                else {
                                        ddy+=dyy;
                                }                                   
                                
                                yy+=15;
                                svg.setAttribute('height', ddy);
                                
                                txt = document.createElementNS('http://www.w3.org/2000/svg', 'text');
                                txt.setAttribute('id', 'txt'+linesop);                                
                                txt.setAttribute('xml:space', 'preserve');
                                txt.setAttribute('font-size', '15');
                                txt.setAttribute('font-family', 'sans-serif');
                                txt.setAttribute('y', yy);
                                txt.setAttribute('x', '0');
                                txt.setAttribute('text-anchor', 'start');
                                txt.setAttributeNS("http://www.w3.org/2000/xmlns/", "xmlns:xlink", "http://www.w3.org/1999/xlink");
                                
                                var txtnode = document.createTextNode(arrayofStrings[indexofWord].charAt(Char));                                       
                                svg.append(txt);        
                                                        
                                if(arrayofStrings[indexofWord].length-1!=Char){                                             
                                             var txtnode = document.createTextNode(arrayofStrings[indexofWord].charAt(Char));//whatthat
                                             txt.appendChild(txtnode);
                                             Char++;        
                                }
                                else{
                                             var txtnode = document.createTextNode(arrayofStrings[indexofWord].charAt(Char)+" ");//whatthat
                                             txt.appendChild(txtnode);
                                             Char=0;
                                             indexofWord++;
                                }
                                svg.append(txt); 
                                
                                lin.setAttribute('y1', yy-13);
                                lin.setAttribute('y2', yy+2);
                                setTimeout(txtinp, 30);

                        }
                        
                        else{                                
                                     if(arrayofStrings[indexofWord].length-1!=Char){
                                             txt.innerHTML += arrayofStrings[indexofWord].charAt(Char);
                                             Char++;        
                                     }
                                     else{
                                             txt.innerHTML += arrayofStrings[indexofWord].charAt(Char)+" ";
                                             Char=0;
                                             if(jj!=1){jj++;}
                                             indexofWord++;
                                     }                                
                                  
                                if(jj%num==0&&jj!=0&&txtinput.length!=jj-1) {
                                        lin.setAttribute('x1', xx+10);
                                        lin.setAttribute('x2', xx+10);
                                        breakline();
                                        setTimeout(txtinp, 1500);                                        
                                 }
                             
                                 else{
                                         if(txtinput.length==jj-1) {
                                                 jj=0; 
                                                 lin.setAttribute('x1', xx+10);
                                                 lin.setAttribute('x2', xx+10);
                                                 breakline();
                                                 var pp; 
                                                 var qq;
                                                 function cgncl() {
                                                        for(qq=0;qq=linesop;qq++) {
                                                                var txt1 = document.getElementById('txt'+qq);
                                                                var xxx = txt1.getBBox().width;//excuseme?
                                                                var backg = document.createElementNS('http://www.w3.org/2000/svg', 'line');//thumb
                                                                
                                                                backg.setAttribute('id', 'backg'+qq);
                                                                backg.setAttribute('stroke-width', '15');
                                                                backg.setAttribute('stroke', '#000');

                                                                var axis = txt1.y-7;
                                                                backg.setAttribute('y1', axis);
                                                                backg.setAttribute('x1', '0');
                                                                backg.setAttribute('y2', axis);
                                                                
                                                                backg.setAttribute('x2', txt1.getBBox().width);
                                                                backg.setAttributeNS("http://www.w3.org/2000/xmlns/", "xmlns:xlink", "http://www.w3.org/1999/xlink");
                                                                var Nodes = svg.childNodes;
                                                                var numof = Nodes.length;var index;
                                                                for(var ooo=0;ooo<numof;ooo++) {
                                                                        if(txt1==Nodes[ooo]) {
                                                                                index = ooo;
                                                                        }
                                                                        else {
                                                                                continue;
                                                                        }
                                                                }

                                                                svg.insertBefore(backg, Nodes[index]);
                                                                txt1.setAttribute('fill', 'white');
                                                        }
                                                      
                                                  }
                                                  function rmelm() {
                                                          if(linesop==0){
                                                                  txt.innerHTML = "";
                                                          }
                                                          else{
                                                              for(pp=0;pp=linesop;pp++) {
                                                                   document.getElementById('backg'+pp).remove();
                                                                   document.getElementById('txt'+pp).remove();
                                                              }
                                                          }
                                                  } document.getElementById('dbg2').innerHTML = Boolean(setTimeout(cgncl, 1500));
                                              setTimeout(cgncl, 1500);setTimeout(rmelm, 2200);
                                              setTimeout(displaytxt, 2200);
                                           }
                                         
                                         else {                                        
                                                 var fingers = Math.random()*100;
                                                 setTimeout(txtinp, fingers);
                                         }
                               }
                       
                             
                             }}
         setTimeout(txtinp, 1500);        
 } 
               

var toogle = true;var n = 0;
function dropup() {
                function transition() {   
                        //var gb_btn = document.getElementById('gb-btn');
                        if(!toogle) {
                                var dv = document.createElement('div');
                                dv.setAttribute('id', 'dv');
                                dv.setAttribute('style', 'position:fixed;bottom:100px;right:15px;color:white;background-color:#666666');
                                var dv2 = document.createElement('div');
                                dv2.setAttribute('id', 'dv2');
                                dv2.setAttribute('class', 'pnl-bd');
                                dv2.setAttribute('style', 'padding:10px;align-self:center;align-item:center;text-align:center');
                                dv2.innerHTML = "blblblbllba";
                                var form = document.createElement('form');document.getElementById('dbg').innerHTML = form;
                                form.setAttribute('method', 'post');
                                var inpname = document.createElement('input');document.getElementById('dbg1').innerHTML = inpname;
                                inpname.setAttribute('type', 'text');
                                inpname.setAttribute('name', 'name');
                                var inpemail = document.createElement('input');document.getElementById('dbg2').innerHTML = inpemail;;
                                inpemail.setAttribute('type', 'text');//i disagre
                                inpemail.setAttribute('name', 'email');
                                form.appendChild(inpname);document.getElementById('dbg3').innerHTML = form.childNodes;
                                form.appendChild(inpemail);
                                dv2.appendChild(form);
                                dv.appendChild(dv2);document.getElementById('dbg1').innerHTML = dv.childNodes[0]
                                document.getElementById('gb-btn').appendChild(dv);
                                //gb_btn.removeAttribute('onclick');
                                
                                 function incr() {  
                                        var rst = n*0.1;
                                        if(n<10) {
                                                n++;
                                                dv.setAttribute('style', 'position:fixed;bottom:100px;right:15px;color:white;background-color:#666666;filter:opacity('+rst+')');
                                                dv2.setAttribute('style', 'padding:10px;align-self:center;align-item:center;text-align:center;filter:opacity('+rst+')');document.getElementById('dbg').innerHTML = dv.style;
                                                setTimeout(incr, 5^n);
                                        } 
                                        else {
                                                dv.setAttribute('style', 'position:fixed;bottom:100px;right:15px;color:white;background-color:#666666;filter:opacity('+rst+')');
                                                dv2.setAttribute('style', 'padding:10px;align-self:center;align-item:center;text-align:center;filter:opacity('+rst+')');
                                                //gb_btn.setAttribute('onclick', 'dropup()');
                                        }
                                }incr();
                                }
                        else {
                                function decr() {
                                        //gb_btn.removeAttribute('onclick');
                                        if(n>0) {
                                                n--;
                                                dv.setAttribute('style', 'position:fixed;bottom:100px;right:15px;color:white;background-color:#666666;filter:opacity('+rst+')');
                                                dv2.setAttribute('style', 'padding:10px;align-self:center;align-item:center;text-align:center;filter:opacity('+rst+')');
                                                setTimeout(decr, 5^n);
                                        }
                                        else {
                                                dv.setAttribute('style', 'position:fixed;bottom:100px;right:15px;color:white;background-color:#666666;filter:opacity('+rst+')');
                                                dv2.setAttribute('style', 'padding:10px;align-self:center;align-item:center;text-align:center;filter:opacity('+rst+')');
                                                t//gb_btn.setAttribute('onclick', 'dropup()');
                                        }
                        }decr();
                     }
                     }

        if(toogle){                
                toogle = false; 
                transition();        
           }
           
        else {
                document.getElementById('dv').remove(); 
                //document.getElementById('dv2').remove();
                toogle = true;
                transition();
        }
        
       
 }


function gear() {
        var i = 0;
        var j = 0;var k=0;var l=0;var atmcnt=0;var m=0;var n=6;var flgn = true;
        function rotatebig() {
        var atm = document.getElementById('atom');
        var elem = document.getElementById('gear1');
        var elem2 = document.getElementById('gear2');
        var elem3 = document.getElementById('small');
        //var img = document.getElementById('znt');
        
                      function rotatm() {
                             atm.setAttribute('transform', 'rotate('+m+' 275,275)');                             
                             atmcnt++;m++;
                             if(atmcnt==5){                  
                             atmcnt=0;}
                             else {setTimeout(rotatm, 1); }
                      }
                      
                      rotatm();
                             
                      var rstn = n*0.1;
                
                        if(flgn) {
                                if(n<10) {n++;} 
                                else {
                                n--; flgn=false;}
                        }
                        else {
                                if(n>5) {n--;}
                                else {n++; flgn=true;}
                           }
                               
                              
                                            
                       elem.setAttribute('transform', 'rotate('+j+' 366.8005981445312,244.01850891113284)  matrix(0.6868583746979462,0.396557867527008,-0.396557867527008,0.6868583746979462,130.6643985820248,-102.689628618341)');
                       elem2.setAttribute('transform', 'rotate('+i+' 167.72853088378923,240.8459320068359) matrix(0.7660909717249123,0.2052734572024643,-0.2052734572024643,0.7660909717249123,44.35913553144913,-1.9079058858106208)');
                      function rotsml() {
                             elem3.setAttribute('transform', 'rotate('+l+' 245.38374328613276,378.5364685058594) matrix(0.6868583746979462,0.396557867527008,-0.396557867527008,0.6868583746979462,181.65663736449739,-23.959205299512206)');
                             
                             k++;l++;
                             if(k==2){                  
                             k=0;}
                             else {setTimeout(rotsml, 1); }
                             }
                             
                             rotsml();
                             
               j++;i--;
               
               setTimeout(rotatebig, 50);
        }
        rotatebig();
}

function invtransition(id, imgcgn) {
        
        var i=1;
        var flg=true;
        
        function go() {
                var result = 0.1*i;
                var elem = document.getElementById(id); 
                var j = 2*i*10;
                
                if(imgcgn) {
                          document.getElementById(id).removeAttribute('onmouseover');
                          flg=false;
                }
                
        
                if(flg==true){
                        if(i<10){                 
                          document.getElementById(id).setAttribute('style', 'filter:invert('+result.toString()+');');
                          document.getElementById(id).setAttribute('onmouseout', 'invtransition('+id+', true)');
                          i++;
                          setTimeout(invtransition, j, id);
                        }
                        else {
        
                          flg=false;
                          document.getElementById(id).setAttribute('style', 'filter:invert('+result.toString()+');');
                          document.getElementById(id).removeAttribute('onmouseover');
                          document.getElementById(id).setAttribute = ('onmouseout', 'invtransition('+id+')');      
                        }
                }
                else{
                        if(i>0) {
                          document.getElementById(id).setAttribute('style', 'filter:invert('+result+');');
                          i--;
                          setTimeout(invtransition, j, id);
                        }
                        else {
                          flg=true;
                          document.getElementById(id).removeAttribute('onmouseout');
                          document.getElementById(id).setAttribute('onmouseover', 'invtransition('+id+')');
                        }
                }
         }go();
}




//check it later
function trnsition(id) {

  if(i==0 || i==140){
    i++;
    setInterval(trnsition(id), 70);
  }

else if(flg==true){
if(i<61){
  var smt = j+i;
  var result = 0.01*smt;
  document.getElementById(id).setAttribute('style', 'opacity:'+result.toString()+';');
  i++;
}
else {
  i=140;
  clearInterval(setInterval(trnsition(id), 70));
  flg=false;
  document.getElementById(id).removeAttribute('onmouseover');
  document.getElementById(id).setAttribute('onmouseout', 'trnsition('+id+')');
}
}
else{
if(i<201) {
  var smt = j-i;
  var result = 0.01*smt;
  document.getElementById(id).setAttribute('style', 'opacity:'+Math.abs(result).toString()+';');
  i++;
}
else {
  i=0;
  clearInterval(setInterval(trnsition(id), 70));
  flg=true;
  document.getElementById(id).removeAttribute('onmouseout');
  document.getElementById(id).setAttribute('onmouseover', 'trnsition('+id+')');
}
}
}


