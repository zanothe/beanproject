
function insertbean(post_id, ip, imgcgn) {


  var request = new XMLHttpRequest();

  request.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
    document.getElementById("bn"+post_id).innerHTML = this.responseText;
    }
  };
  request.open("GET", "incrbean.php?postid="+post_id+"&ip="+ip, true);
  request.send();
  
  if(imgcgn){
  
          document.getElementById("lmp"+post_id).src = "SVG/lampsmall.svg";
  }
  else {
          document.getElementById("lmp"+post_id).src = "SVG/lamponsmall.svg";
  }
}

function get_quote(el, author, key) {
  var request = new XMLHttpRequest();
  var author = strval(author);  
  var key = strval(key);
  
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
  
  request.open("GET", "../async/get_quote.php?author="+author+"&key="+key, true);
  request.send();

 }
