<?php


$brand_id= $data["id"];
$url = "https://rifa.life/shop5/shouhin_list.php?q=(product_num~equals~{$brand_id})(kanryou_henbi~notempty~~date11)(nyuukin_price~morethan~0)";

if($value > 0){
  $value = number_format($value) . "<br>";
  $html = "{$value}<a href='{$url}'>商品一覧</a>";
  $value = $html;
}
