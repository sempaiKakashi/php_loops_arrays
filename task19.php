<?php
/**
 * Created by PhpStorm.
 * User: senpaikakashi
 * Date: 24.02.2018
 * Time: 19:12
 */
$arr = ['Monday' , 'Tuesday' , 'Wednesey' , 'Thursday' , 'Friday' , 'Saturday' , 'Sunday'];

$day = 'Saturday';

foreach ($arr as $value){
    if($value == $day){
        echo '<b>' . $value .'</b> ';
    }
    else{
        echo $value . ' ';
    }
}