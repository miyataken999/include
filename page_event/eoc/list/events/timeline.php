<?php

$sql = "SELECT Eoc_timeline.* ,  mst_Eoc_timeline_category.name as 'category_name'
FROM Eoc_timeline LEFT OUTER JOIN mst_Eoc_timeline_category ON Eoc_timeline.category = mst_Eoc_timeline_category.id
WHERE ecc_id='{$ecc_id}'
ORDER BY id desc ";
$rs = CustomQuery($sql);


$html .= '<table class="event_table table table-bordered table-striped bs-flexgrid rnr-b-grid rnr-gridtable timeline-table" cellpadding="0">';
$html .= '<tr class=" bs-gridrow">';
$html .= '<th class=" rnr-gridfieldlabel" colspan="4">タイムライン</th>';
$html .= '</tr>';


$html .= '<tr>';

$data_html='';
$dataon='';
while($timeline_data = db_fetch_array($rs)){
	$dataon = 'on';

	// $data_html .= '<tr class=" bs-gridrow">';
	// 	$data_html .= '<th class=" rnr-gridfieldlabel">カテゴリー</th>';
	// 	$data_html .= '<th class=" rnr-gridfieldlabel">登録者</th>';
	// 	$data_html .= '<th class=" rnr-gridfieldlabel">登録日</th>';
	// $data_html .= '</tr>';


	$data_html .= '<tr class=" bs-gridrow">';
		$data_html .= '<td class=" bs-gridcell timeline_ttl"><span>';
		$data_html .= $timeline_data["category_name"];
		$data_html .= '</span></td>';

		$data_html .= '<td class=" bs-gridcell timeline_ttl"><span>';
		$data_html .= "タイムラインID [" . $timeline_data["id"] . "]";
		$data_html .= '</span></td>';

		
		$data_html .= '<td class=" bs-gridcell timeline_ttl"><span>';
		if($timeline_data["create_by"] != ''){
			$in_sql = "SELECT `first_name` FROM users WHERE user_id='".$timeline_data["create_by"]."' limit 1";
			$in_rs = CustomQuery($in_sql);
			$in_data = db_fetch_array($in_rs);
			$first_name_array = explode("　",$in_data["first_name"]);
			$data_html .= $first_name_array[0];
		}
		$data_html .= '</span></td>';

		$data_html .= '<td class=" bs-gridcell timeline_ttl"><span>';
		if($timeline_data["create_at"] != ''){
			$create_at = date("Y",strtotime($timeline_data["create_at"])) - 2000 . date("md/Hi",strtotime($timeline_data["create_at"]));
			// $create_at = mb_convert_kana($create_at,'A',$encoding);
			// $create_at = str_replace("／","/",$create_at);
			$data_html .= $create_at;


		}
		$data_html .= '</span></td>';
	$data_html .= '</tr>';



	if($timeline_data["title"] != ""){
		$data_html .= '<tr class=" bs-gridrow">';
			$data_html .= '<td class=" bs-gridcell"><span>タイトル</span></td>';
			$data_html .= '<td class=" bs-gridcell" colspan="3"><span>';
			$data_html .= $timeline_data["title"];
			$data_html .= '</span></td>';
		$data_html .= '</tr>';
	}


	if($timeline_data["detail"] != ""){
		$data_html .= '<tr class=" bs-gridrow">';
			$data_html .= '<td class=" bs-gridcell"><span>詳細</span></td>';
			$data_html .= '<td class=" bs-gridcell detail_col" colspan="3"><span>';
			$data_html .= str_replace("\n","<br>",$timeline_data["detail"]);
			$data_html .= '</span></td>';
		$data_html .= '</tr>';
	}


	$htmldata='on';
}


$html .= '<td id="timeline_data_block" class="'.$dataon.'"">';

$html .= '<table>';

$html .= $data_html;
$html .= '</table>';

$html .= '</td>';
$html .= '</tr>';

$html .= '</table>';
