<?php
/**
 * Created by PhpStorm.
 * User: senpaikakashi
 * Date: 24.02.2018
 * Time: 16:33
 */
$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');

$en = [];
$ru = [];

foreach ($arr as $key => $value){
    array_push($en, $key);
    array_push($ru, $value);
}

echo "eng:<br/>";
print_r ($en);
echo "<br/>";
echo "ru:<br/>";
print_r ($ru);

