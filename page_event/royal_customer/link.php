<?php




$html = file_get_contents($_SERVER["DOCUMENT_ROOT"] . "/include/page_event/royal_customer/link_script.php", true);

$html = str_replace('{$value}', $value, $html);
$html = str_replace('{$ecc_id}', $data["ecc_id"], $html);

$chart_id = date("His") . rand(0, 100000000000000000);
$html = str_replace("{{ chart_id }}", $chart_id, $html);
$html = str_replace("@rate_selling_count_EC", $data["rate_selling_count_EC"] * 100, $html);
$html = str_replace("@rate_selling_count_ichiba", $data["rate_selling_count_ichiba"] * 100, $html);

$chart_id_syubetsu = date("His") . rand(0, 100000000000000000);
$html = str_replace("{{ chart_id_syubetsu }}", $chart_id_syubetsu, $html);
$html = str_replace("@rate_type_count_K", $data["rate_type_count_K"] * 100, $html);
$html = str_replace("@rate_type_count_D", $data["rate_type_count_D"] * 100, $html);
$html = str_replace("@rate_type_count_J", $data["rate_type_count_J"] * 100, $html);
$html = str_replace("@rate_type_count_W", $data["rate_type_count_W"] * 100, $html);
$html = str_replace("@rate_type_count_B", $data["rate_type_count_B"] * 100, $html);
$html = str_replace("@rate_type_count_H", $data["rate_type_count_H"] * 100, $html);
$html = str_replace("@rate_type_count_other", $data["rate_type_count_other"] * 100, $html);




$value = $html;
