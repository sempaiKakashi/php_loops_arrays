<?php

$arr = [];

for ($i = 0; $i < 10; $i++){
    $arr[$i] = rand(0, 50);


}
print_r ($arr);

$index_max = array_search(max($arr), $arr);
$index_min = array_search(min($arr), $arr);

//меняем местами максимальное и минимальное значение;
list($arr[$index_max], $arr[$index_min]) = [$arr[$index_min], $arr[$index_max]];

echo '<br>' . $index_min;
echo '<br>' . $index_max;

//меняем