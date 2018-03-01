<?php
/**
 * Created by PhpStorm.
 * User: senpaikakashi
 * Date: 24.02.2018
 * Time: 19:44
 */
$number=423;
$sum=0;
for ($i=0;$i<strlen((string)$number);$i++)
{
    $numberStr = (string)$number;
    $digit=$numberStr[$i];
    $sum+=(int)$digit;
}
echo "Сума цифр числа $number - $sum";
