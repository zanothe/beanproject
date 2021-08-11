<?php 
include('../includes/db.php');
global $conn;
$author = $_GET['author'];
$key = $_GET['key'];
$query = "select * from Quotes";
$run = mysqli_query($conn, $query);

while($rows = mysqli_fetch_array($run)) {
    $fetched_quote = $row['quote'];
    $fetched_author = $row['quote'];
    if(preg_match("/$key/", $fetched_quote)==true && preg_match("/$author/", $fetched_author)==true) {
        $xml = "<main>
        <author>$fetched_author</author>
        <quote>$fetched_quote</quote>
        </main>";
        echo $xml;
        break;
    }
    else {
        continue;
    }

}

if(!$xml) { echo "error" ; }

?>