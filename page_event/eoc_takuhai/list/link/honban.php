<?php
$Eoc_takuhai_id = $data["id"];

$url = "https://rifa.life/evaProject/many_satei/{$Eoc_takuhai_id}";

$takuhai_return_url = "https://rifa.life/evaProject/Eoc_takuhai_return/make/return_data/{$Eoc_takuhai_id}";

$value = "<a href = '".$url."'>大量査定</a>";
$value .= "<br>";
$value .= "<a class='btn btn-success' href = '".$takuhai_return_url."'>宅配返却商品管理</a>";
