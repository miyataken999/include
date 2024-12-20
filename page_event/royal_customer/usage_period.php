<?php
$array = explode("-", $value);
if(count($array) === 3){
    $value = "{$array[0]}年{$array[1]}月{$array[2]}日";
}


