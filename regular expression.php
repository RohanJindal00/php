<?php
$ip = "100.200.300.400";
$regex = "/\./";
$output = preg_split ($regex, $ip);
echo "$output[0] <br>";
echo "$output[1] <br>";
echo "$output[2] <br>";
echo "$output[3] <br>";
?>
