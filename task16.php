<?php
/**
 * Created by PhpStorm.
 * User: senpaikakashi
 * Date: 24.02.2018
 * Time: 18:37
 */
$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];

foreach ($arr as $value){
    if ($value % 3){
        echo $value . ',';
    }
    else {
        echo $value . ' ';
    }
}