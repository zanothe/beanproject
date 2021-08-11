
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



 
