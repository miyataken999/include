<?php
$array = explode("-", $value);
if (count($array) === 3) {
    $f_year = sprintf("%d", $array[0]);
    $f_month = sprintf("%d", $array[1]);
    $f_day = sprintf("%d", $array[2]);
    $value = "{$f_year}年{$f_month}ヶ月{$f_day}日";
}
