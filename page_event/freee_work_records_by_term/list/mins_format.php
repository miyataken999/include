<?php

$min = $value;
$hour = floor($min / 60);
$hour = sprintf("%02d", $hour);
$min = (int)$min % 60;
$min = sprintf("%02d", $min);
$value = "{$hour}:$min";
