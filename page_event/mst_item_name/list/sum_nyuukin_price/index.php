<?php


$item_name= $data["name"];
$url = "https://rifa.life/shop5/shouhin_list.php?q=(item_name~equals~{$item_name})(kanryou_henbi~notempty~~date11)";
if($value > 0){
  $value = number_format($value) . "<br>";
  $html = "{$value}<a href='{$url}'>商品一覧</a>";
  $value = $html;
}
