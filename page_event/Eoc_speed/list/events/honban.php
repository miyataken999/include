<?php
//スピード希望集荷日時の取得
$ecc_id = $data["ecc_id"];
$speed_takuhai_sql = "SELECT DISTINCT date_and_time_hidden FROM Eoc_takuhai WHERE ecc_id='{$ecc_id}' AND `status`=1 AND type_selection LIKE '%スピード%' ORDER BY id desc";
$speed_takuhai_rs = CustomQuery($speed_takuhai_sql);
$speed_date_and_time = '';
while($speed_takuhai_data = db_fetch_array($speed_takuhai_rs)){
  if($speed_takuhai_data["date_and_time_hidden"] != ''){
    $kiboutime = $speed_takuhai_data["date_and_time_hidden"];
  }else{
    $kiboutime = '希望なし(フォーム修正前の申込)';
  }
  $speed_date_and_time .= $kiboutime.'<br>';
}
$value = $speed_date_and_time;
