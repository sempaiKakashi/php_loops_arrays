<?php
/**
 * Created by PhpStorm.
 * User: senpaikakashi
 * Date: 24.02.2018
 * Time: 17:54
 */
$num = 0;
for ($n = 1000; $n > 50; $n /= 2) {
    $num++;
}
echo "Iterations - " . $num . "</br>";
echo $n;