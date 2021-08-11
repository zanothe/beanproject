<?php

$file = fopen("replace.txt", "w");
$var = str_replace(""", "'", $file);
fwrite($file, $var);
fclose($file);

?>