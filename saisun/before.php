<?

// Place event code here.
// Use "Add Action" button to add code snippets

//$sql = "select condition_name from _condition_type where category_id = %s";
//$category_id = $values['category_id'];
//$txt = sprintf("select condition_name from _condition_type where category_id = %s",$category_id);
//$sql = "select condition_name from _condition_type where category_id = ".$category_id;

//$rs = CustomQuery($sql);
//$data = db_fetch_array($rs);
//echo $data["condition_name"];
//$values['yahoo_condition1'] = $data["condition_name"];

//error_log(__FILE__.__DIR__.$sql."データ設定 に失敗しました!", 1,"miyataken999@gmail.com");


if($values['updated_at'] == "")
$values['updated_at'] = date("Y/m/d");
if($values['create_at'] == "")
$values['create_at'] = date("Y/m/d");

$values['label_output_single'] = $values['product_id'].$values['title'];

//型番・シリアルナンバー結合
$values['yahoo_kataban'] = $values['yahoo_kataban']."/".$values['serial_number'];

//アイテム名は、査物のアイテム名をそのまま出す
$values['goods_title'] = $values['item_name'];

$values['saisun_start'] = date("Y/m/d H:i:s");

 $junle_jn = explode("/",$values['yahoo_junle']);
 $values['yahoo_title'] = $junle_jn[0]."/".$junle_jn[1].$values['title'];
 $values['raku_title'] = $junle_jn[0]."/".$junle_jn[1].$values['title'];

//$values['goods_title'] = $values['title']."■".$values['product_id'];


//newshop3のテスト用コード
$current_page_pass = $_SERVER["REQUEST_URI"];
if(stristr($current_page_pass, "/newshop3/")){
	echo "current_page_pass".$current_page_pass;
}


//楽ジャン
include $_SERVER[DOCUMENT_ROOT]."/include/rakujan/rakujan.php";
