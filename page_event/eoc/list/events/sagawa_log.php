<?php
if ($data["mail1"] != '') {
    $where_mail = $data["mail1"];
} elseif ($data["mail2"] != '') {
    $where_mail = $data["mail2"];
}

if($where_mail == 'rifa@urlounge.co.jp') {
    $where_mail = 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa';
}

$sql = "SELECT *
FROM sagawa_api_results
WHERE iraiMailAddress='{$where_mail}'
ORDER BY sagawa_api_result_id desc limit 3";

$rs = CustomQuery($sql);



$html .= '<table class="sagawa_event_table table table-bordered table-striped bs-flexgrid rnr-b-grid rnr-gridtable timeline-table" cellpadding="0">';
$html .= '<tr class=" bs-gridrow">';
$html .= '<th class=" rnr-gridfieldlabel" colspan="6">佐川集荷APIログ</th>';
$html .= '</tr>';
while ($sagawa_api_data = db_fetch_array($rs)) {

    $html .= '<tr class=" bs-gridrow">';
    $html .= '<th class=" rnr-gridfieldlabel">送信日</th>';


    $html .= '<td class=" bs-gridcell">';
    if ($sagawa_api_data["send_at"] != '') {
        $send_at = date("ymd/Hi", strtotime($sagawa_api_data["send_at"]));
        $html .= $send_at;
    }
    $html .= '</td>';

    $html .= '<th class=" bs-gridcell">';
    $html .= '集荷依頼日';
    $html .= '</th>';


    $time_code = $sagawa_api_data["shukaIraiShiteiTimeCode"];
    if($time_code === '00'){
        $sitei_text = "時間帯指定なし";
    } elseif ($time_code === '09') {
        $sitei_text = "9:00～12:00";
    } elseif ($time_code === '12') {
        $sitei_text = "12:00～15:00";
    } elseif ($time_code === '15') {
        $sitei_text = "15:00～18:00";
    } elseif ($time_code === '18') {
        $sitei_text = "18:00～21:00";
    }else{
        $sitei_text = "";
    }
    $html .= '<td class=" bs-gridcell subject_cell">';
    $html .= date("Y/m/d", strtotime($sagawa_api_data["shukaIraiShiteiDate"])) . "<br>" . $sitei_text;
    $html .= '</td>';


    $html .= '<th class=" rnr-gridfieldlabel">結果</th>';


    if ($sagawa_api_data["resultCode"] == 'S0-0001') {
        $html .= '<td class=" bs-gridcell sagawa_success">';
        $html .= "成功<a href='https://rifa.life/shop5/sagawa_api_results_list.php?q=(iraiMailAddress~contains~" . $where_mail . ")'>結果ページ</a>";
        $html .= '</td>';
    }else{
        $html .= '<td class=" bs-gridcell sagawa_error">';
        $html .= "失敗<a href='https://rifa.life/shop5/sagawa_api_results_list.php?q=(iraiMailAddress~contains~" . $where_mail . ")'>結果ページ</a>";
        $html .= '</td>';
    }


    $html .= '</tr>';








    $htmldata = 'on';
}
$html .= '</table>';
