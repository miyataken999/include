<?
//データベース接続
mb_internal_encoding("utf8");
// ini_set( 'display_errors', 1 );
include $_SERVER["DOCUMENT_ROOT"]."/include/connection.php";

$return_data = "";

$dir_id = $_POST["dir_id_res_num"];
$brand = $_POST["brand"];
$color = $_POST["color"];
$this_seq = $_POST["this_seq"];

//SEQからstore_products情報GET
// $this_seq_sql = mysql_query('SET NAMES utf8');
// $this_seq_sql_txt = "( SELECT price FROM store_products WHERE product_id=".$this_seq." LIMIT 1)";
// $this_seq_sql = mysql_query($this_seq_sql_txt);
// $this_seq_res = mysql_fetch_assoc($this_seq_sql);

// $return_data .= $this_seq_res["price"];




$brand = explode("/",$brand);
$brand_kana = $brand[0];

$return_data .= $brand_kana;
$return_data .= $color;

$tag_id_sql = mysql_query('SET NAMES utf8');
$sql = "( SELECT DISTINCT tag_class FROM raku_tag_fashiongoods WHERE dir_id=".$dir_id." ORDER BY tag_class )";
$sql .= " UNION ";
$sql .= "( SELECT DISTINCT tag_class FROM raku_tag_ladiesfashion WHERE dir_id=".$dir_id." ORDER BY tag_class )";
$tag_id_sql = mysql_query($sql);
$tag_num = 0;
while ($tag_id_res = mysql_fetch_assoc($tag_id_sql)) {
	$tag_class = $tag_id_res["tag_class"];

$return_data .= '<div class="tag_title">'.$tag_class.'</div>';
$return_data .= '<select multiple id="'.$tag_num.'" class="tag_select_box">';


$tag_id_child_sql = mysql_query('SET NAMES utf8');
$child_sql = "( SELECT tag_id , tag_name FROM raku_tag_fashiongoods WHERE tag_class=\"".$tag_class."\" AND dir_id=".$dir_id." ORDER BY tag_id )";
$child_sql .= " UNION ";
$child_sql .= "( SELECT tag_id , tag_name FROM raku_tag_ladiesfashion WHERE tag_class=\"".$tag_class."\" AND dir_id=".$dir_id." ORDER BY tag_id )";
$return_data .=  $child_sql;
$tag_id_child_sql = mysql_query($child_sql);
while ($tag_id_child_res = mysql_fetch_assoc($tag_id_child_sql)) {
	$selected = "";
	//★★★★★★★★★★★分類と値が合っていたら自動選択★★★★★★★★★★★
	if($tag_class == "ブランド"){
		if($brand_kana == $tag_id_child_res["tag_name"]){
			$selected = "selected";
		}
	}
	if($tag_class == "カラー"){
		if($color == $tag_id_child_res["tag_name"]){
			$selected = "selected";
		}
	}
	//★★★★★★★★★★★分類と値が合っていたら自動選択 ここまで★★★★★★★★★★★
$return_data .= '<option value="'.$tag_id_child_res["tag_id"].'" '.$selected.' >'.$tag_id_child_res["tag_name"].'</option>';

}

$return_data .= '</select>';

$tag_num++;
}


header('Content-Type: application/json; charset=utf-8');
echo json_encode($return_data);
