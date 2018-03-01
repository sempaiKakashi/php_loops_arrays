<?php

$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');

foreach ($arr as $key => $value) {
	echo '<h3>' . $key .'</h3>' .'<br/>';
}

foreach ($arr as $key => $value) {
	echo '<h4>' . $value .'</h4>' .'<br/>';
}
?>