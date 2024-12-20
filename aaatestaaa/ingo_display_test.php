<?php
ini_set("display_errors",1);
// echo 11111111111;
// $ingo_array = array();
$product_id = 210583;
$url="http://rifa.life/lounge_API/evaeva/create_ingo.php?product_id={$product_id}";
// echo $url;
$ingo = file_get_contents($url);
echo $ingo;
$ingo_array = explode(',',$ingo);
// var_dump($ingo_array);
$hanbai_ingo = $ingo_array[0];
$kaitori_ingo = $ingo_array[1];
// echo $hanbai_ingo;
// echo $kaitori_ingo;

?>
