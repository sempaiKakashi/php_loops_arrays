<?php
/**
 * Created by PhpStorm.
 * User: senpaikakashi
 * Date: 24.02.2018
 * Time: 18:57
 */

$arr = ['Monday' , 'Tuesday' , 'Wednesey' , 'Thursday' , 'Friday' , 'Saturday' , 'Sunday'];



foreach ($arr as $value){
    if($value == 'Saturday'){
        echo '<b>' . $value .'</b> ';
    }
    elseif($value == 'Sunday'){
        echo '<b>'.$value.'</b> ';
    }
    else{
        echo $value . ' ';
    }
}