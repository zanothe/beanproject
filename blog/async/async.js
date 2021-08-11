
function insertbean(post_id, ip, imgcgn) {

console.log(imgcgn);
   console.log(document.getElementById("lmp"+post_id).src);
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
          document.getElementById("lmp"+post_id).onclick = "insertbean("+post_id+", "+ip+", false)";
        
         // console.log(document.getElementById("lmp"+post_id).src);
  }
  else {
          document.getElementById("lmp"+post_id).src = "SVG/lamponsmall.svg";
          document.getElementById("lmp"+post_id).onclick = "insertbean("+post_id+", "+ip+", true)";
       //   console.log(document.getElementById("lmp"+post_id).src);

  }
}



 
