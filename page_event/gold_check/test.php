<?php
echo 11111;
echo "<br>";
echo "<br>";
echo "<br>";


$create_at = '2019-10-22 14:21:21';
$create_at =strtotime($create_at);// 123456484638768
$create_at = date("Y-m-d 00:00:00", $create_at);// 2019-10-01 00:00:00
$create_at = strtotime($create_at);// 1245254152340000

$nowdate = date("Y-m-d 00:00:00");// 2019-10-21 14:46:53
$nowdate = strtotime($nowdate);// 1354385458463415248

echo $create_at;
echo "<br>";
echo "<br>";
echo $nowdate;
echo "<br>";
echo "<br>";



if($create_at == $nowdate){
  echo 1;
}else{
  echo 2;
}
