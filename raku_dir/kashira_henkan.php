<?
//データベース接続
mb_internal_encoding("utf8");
// ini_set( 'display_errors', 1 );
// include $_SERVER["DOCUMENT_ROOT"]."/include/connection.php";
$brajan = $_GET["brajan"];


//判定用の配列
$array_a = array('ア', 'イ', 'ウ', 'エ', 'オ');
$array_ka = array('カ', 'キ', 'ク', 'ケ', 'コ');
$array_sa = array('サ', 'シ', 'ス', 'セ', 'ソ');
$array_ta = array('タ', 'チ', 'ツ', 'テ', 'ト');
$array_na = array('ナ', 'ニ', 'ヌ', 'ネ', 'ノ');
$array_ha = array('ハ', 'ヒ', 'フ', 'ヘ', 'ホ');
$array_ma = array('マ', 'ミ', 'ム', 'メ', 'モ');
$array_ya = array('ヤ', 'ユ', 'ヨ');
$array_ra = array('ラ', 'リ', 'ル', 'レ', 'ロ');
$array_wa = array('ワ', 'ヲ', 'ン');

//全角カタカナを半角カタカナに変換
$brajan = mb_convert_kana($brajan, 'k', 'UTF-8');

//半角カタカナを全角ひらがなに変換
$brajan = mb_convert_kana($brajan, 'K', 'UTF-8');

//先頭の1文字を取得
$brajan = mb_substr($brajan, 0, 1);


//配列の中に該当する文字があるかどうかを判定
if(in_array($brajan, $array_a) == true) {
	echo 'ア行';
}elseif(in_array($brajan, $array_ka) == true) {
	echo 'カ行';
}elseif(in_array($brajan, $array_sa) == true) {
	echo 'サ行';
}elseif(in_array($brajan, $array_ta) == true) {
	echo 'タ行';
}elseif(in_array($brajan, $array_na) == true) {
	echo 'ナ行';
}elseif(in_array($brajan, $array_ha) == true) {
	echo 'ハ行';
}elseif(in_array($brajan, $array_ma) == true) {
	echo 'マ行';
}elseif(in_array($brajan, $array_ya) == true) {
	echo 'ヤ行';
}elseif(in_array($brajan, $array_ra) == true) {
	echo 'ラ行';
}elseif(in_array($brajan, $array_wa) == true) {
	echo 'ワ行';
}else{
	echo 'その他';
}

// $kashira_sql = mysql_query('SET NAMES utf8');
// $kashira_sql = mysql_query("SELECT * FROM mst_raku_teigi_1 ORDER BY dir_1_id");

?>
