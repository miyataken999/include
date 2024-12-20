<?php 



$ecc_id = $data["ecc_id"];
$query = "SELECT token FROM shop_front_download_tokens WHERE `ecc_id`='{$ecc_id}' ORDER BY id desc limit 1";
$rs = CustomQuery($query);
$shop_front_download_tokens = db_fetch_array($rs);

if(isset($shop_front_download_tokens['token'])){
    $value .= "<a class='btn btn-link' target='_blank' href='https://rifa.life/refasta_shop_front/histories?token={$shop_front_download_tokens['token']}'>ご利用履歴一覧</a>";
}





// $value .= "<a class='btn btn-link' target='_blank' href='https://rifa.life/evaProject/shop_front/move_db?send_id={$data['send_id']}'>EVA反映する</a>";
