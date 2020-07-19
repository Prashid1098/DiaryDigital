<?php
$file=fopen("abc.txt","w");
$txt="Prashid Pal\n";
fwrite($file,$txt);
fclose($file);
?>
