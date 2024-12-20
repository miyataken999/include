<?php
$ecc_id = $value;

$html = "";
$html .= "<div class='btns_col'>";

$html .= "<form action='/include/timeline/insert.php' method='post' accept-charset='utf-8'>";
	$html .= "<input type='hidden' name='ecc_id' value='{$ecc_id}'>";
	$html .= "<input type='hidden' name='linechat_flg' value=0>";


	// $html .= "<div class=''>▼カテゴリー▼</div>";
	$html .= "<select name='category' class='custom-select'>";
	$cate_sql = "SELECT * from mst_Eoc_timeline_category order by sort";
	$cate_rs = CustomQuery($cate_sql);

	while($cate_data = db_fetch_array($cate_rs)){
		$html .= "<option value='{$cate_data['id']}'>{$cate_data['name']}</option>";
	}
	$html .= "</select>";

	$html .= "<textarea name='text'></textarea>";
	// $html .= "<div class='custom-control custom-radio'><label class='custom-control-label'><input name='category' type='radio' class='custom-control-input' value='1'>電話</label></div>";
	// $html .= "<div class='custom-control custom-radio'><label class='custom-control-label'><input name='category' type='radio' class='custom-control-input' value='2'>ライン</label></div>";
	// $html .= "<div class='custom-control custom-radio'><label class='custom-control-label'><input name='category' type='radio' class='custom-control-input' value='3'>メール</label></div>";

	$html .= "<input type='submit' name='' class='btn btn-outline-primary' value='送信'>";
$html .= "</form>";



// $html .= "<a class='btn btn-outline-primary' href='/include/timeline/insert.php?ecc_id={$ecc_id}&category=1'>電話</a>";
// $html .= "<a class='btn btn-outline-primary' href='/include/timeline/insert.php?ecc_id={$ecc_id}&category=2'>ライン</a>";
// $html .= "<a class='btn btn-outline-primary' href='/include/timeline/insert.php?ecc_id={$ecc_id}&category=3'>メール</a>";
$html .= "<div class = 'line_chat_form'>LINEチャットURL入力フォーム</div>";
$html .= "<form action='/include/timeline/insert_linechat.php' method='post' accept-charset='utf-8'>";
	$html .= "<input type='hidden' name='ecc_id' value='{$ecc_id}'>";
	$html .= "<input type='hidden' name='linechat_flg' value=1>";
	$html .= "<textarea name='line_chat_url' style='min-height: 75px;'></textarea>";
	$html .= "<input type='submit' name='' class='btn btn-outline-primary' value='送信'>";
$html .= "</form>";
$html .= "</div>";


$value = $html;
