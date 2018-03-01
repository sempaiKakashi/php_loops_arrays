<?php
/**
 * Created by PhpStorm.
 * User: senpaikakashi
 * Date: 24.02.2018
 * Time: 18:46
 */

$arr = ['January','February','March','April','May','June',
    'July','August','September','October','November','December'];

$month = 'February';

foreach ($arr as $value){
    if ($value == $month){
        echo "<b>$value</b>" . ' ';
    }
    else{
        echo $value . ' ';
    }
}
