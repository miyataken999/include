<?php

$sql = "SELECT *
FROM mailsystem_send_schedule
WHERE ecc_id='{$ecc_id}'
ORDER BY id desc limit 3";
$rs = CustomQuery($sql);


$html .= '<table class="mail_event_table table table-bordered table-striped bs-flexgrid rnr-b-grid rnr-gridtable timeline-table" cellpadding="0">';
$html .= '<tr class=" bs-gridrow">';
$html .= '<th class=" rnr-gridfieldlabel" colspan="4">メールログ</th>';
$html .= '</tr>';
while($mail_log_data = db_fetch_array($rs)){

	// $html .= '<tr class=" bs-gridrow">';
	// 	$html .= '<th class=" rnr-gridfieldlabel">カテゴリー</th>';
	// 	$html .= '<th class=" rnr-gridfieldlabel">登録者</th>';
	// 	$html .= '<th class=" rnr-gridfieldlabel">登録日</th>';
	// $html .= '</tr>';

	$html .= '<tr class=" bs-gridrow">';
		$html .= '<th class=" rnr-gridfieldlabel">登録日</th>';

		$html .= '</td>';

		$html .= '<td class=" bs-gridcell">';
		if($mail_log_data["regist_date"] != ''){
			$regist_date = date("Y",strtotime($mail_log_data["regist_date"])) - 2000 . date("md/Hi",strtotime($mail_log_data["regist_date"]));
			$html .= $regist_date;
		}
		$html .= '</td>';
	$html .= '</tr>';

	$html .= '<tr class=" bs-gridrow">';
		$html .= '<td class=" bs-gridcell">';
		$html .= '件名';
		$html .= '</td>';

		$html .= '<td class=" bs-gridcell subject_cell">';
		$html .= str_replace("リファスタです","",$mail_log_data["subject_pc"]);
		$html .= '</td>';
	$html .= '</tr>';








	$htmldata='on';
}
$html .= '</table>';
