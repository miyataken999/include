<?php

if($value == "00"){
    $value = "時間帯指定なし<br>(" . $value . ")";
} elseif ($value == "09") {
    $value = "9:00～12:00<br>(" . $value . ")";
} elseif ($value == "12") {
    $value = "12:00～15:00<br>(" . $value . ")";
} elseif ($value == "15") {
    $value = "15:00～18:00<br>(" . $value . ")";
} elseif ($value == "18") {
    $value = "18:00～21:00<br>(" . $value . ")";
} else {
    $value = "[指定外]<br>" . $value;
}

