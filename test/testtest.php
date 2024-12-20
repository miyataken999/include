<?php


//宅配取引データ、宅配イベントデータ、商品データ同期処理
var_dump($ecc_id);
var_dump($Eoc_takuhai_id);
var_dump($_SERVER["REMOTE_ADDR"]);
$mypage_update_prohibited = "";
$base_uri = "https://rifa.life";
$endpoint = "/evaProject/api/mypage/func/transfer_data/sync_data_for_takuhai";
// POSTデータ
$data = array(
    "Eoc_takuhai_id" => $Eoc_takuhai_id,
    "mypage_update_prohibited" => $mypage_update_prohibited,
);
// $data = http_build_query($data, "", "&");
$data = json_encode($data);
// header
$header = array(
    "Content-Type: application/json",
    "Content-Length: ".strlen($data)
);
$context = array(
    "http" => array(
        "method"  => "POST",
        "header"  => implode("\r\n", $header),
        "content" => $data
    )
);
  file_get_contents($base_uri.$endpoint, false, stream_context_create($context));
