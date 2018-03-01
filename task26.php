<?php

$arr = [];
$odd = 1;

for ($i = 0 ; $i < 10; $i++){
	$arr[$i] = rand(1, 20);
}
print_r($arr);
echo "<p>парные и больше нуля</p>";
for ($i = 0 ; $i < 10; $i++){
	if($i % 2 == 0 and $arr[$i] > 0){
		echo '<br>' . $odd *= $arr[$i] ;
	}
}
echo "<p>непарные и больше нуля</p>";
for ($i = 0; $i < 10; $i++){
	if($i % 2 == 1 and $arr [$i] > 0){
		echo '<br>' . $arr[$i];
	}
}

