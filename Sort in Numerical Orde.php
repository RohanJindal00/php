<?php

$ages = array(40,20,10,30,50);
$array_length = count($ages);
echo "<br>Before Sorting"."<br><br>";
for($i=0;$i<$array_length;$i++)
{
echo $ages[$i] ."<br>";
}
sort($ages);
echo "<br><br>After Sorting"."<br><br>";
for($i=0;$i<$array_length;$i++)
{
echo $ages[$i]."<br>";
} ?>