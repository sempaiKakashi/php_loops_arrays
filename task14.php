<?php
/**
 * Created by PhpStorm.
 * User: senpaikakashi
 * Date: 24.02.2018
 * Time: 18:23
 */
$arr = [4, 2, 5, 19, 13, 0, 10];

foreach ($arr as $e) {
    if ($e >= 2 or $e <= 4){
        echo "Есть!";
        break;
    }
    else{
        echo "Нема!";
        break;
    }
}