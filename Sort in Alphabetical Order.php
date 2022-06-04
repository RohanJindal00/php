<?php
$people= array('Rohan Jindal', 'Abhishek', 'Ansh', 'Aman', 'Orav');
$array_length = count($people);
echo "Before Sorting"."<br><br>";
for($i=0;$i<$array_length;$i++)
{
echo $people[$i] ."<br>";
}
sort($people);
echo "<br><br>After Sorting"."<br><br>";
for($i=0;$i<$array_length;$i++)
{
echo $people[$i]."<br>";
}
?>