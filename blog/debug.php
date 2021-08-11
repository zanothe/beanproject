<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>  <!--Modal exception-->
<script src="js/async.js" type="application/javascript" async="async"></script>
<script src="js/myfunctions.js" type="application/javascript" async="async"></script>

<script>
function get_quote(el, auth, key) {
  var request = new XMLHttpRequest();
  var autho = strval(auth);  
  var key = strval(key);
              document.getElementById('db').innerHTML = "ok";
  request.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {

                    var xml = this.responseXML;
                    var blockquote = document.createElement('blockquote');
                    var textNode_quote = document.createTextNode(xml->quote);
                    blockquote.appendChild(textNode_quote);
                    var p = document.createElement('p');
                    p.setAttribute('class', 'blockquote-reverse');                    
                    var textNode_author = document.createTextNode(xml->author);
                    p.appendChild(textNode_author);
                    el.appendChild(blockquote);
                    el.appendChild(p);
            }
  }
  
  request.open("GET", "async/get_quote.php?author="+autho+"&key="+key, true);
  request.send();

 }
 </script>
<div id="db"></div>
<style> #div:hover {cursor:pointer } </style>
<div id="div" style="padding:30px;" onclick="get_quote(this, 'Poincare', 'Quando um')">Click</div>