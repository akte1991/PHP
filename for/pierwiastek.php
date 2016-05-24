<?php
echo pow(3, 8);
echo "<br>";

$square = 8;
$number = 3;
$sim = 1;

for ($i=0; $i < $square; $i++) { 
	echo $sim *= $number;
	echo "<br>";
}
echo "<br>";


echo sqrt(9);
echo "<br>";

$root = 2;
$number = 9;
$output = 1;
// nie działa
for ($i=0; $i < $root; $i++) { 
	$output /= $number;
}
echo $output;
echo "<br><br><br><br>";



?>