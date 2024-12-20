<?


$dt_query = "SELECT * FROM users___estimate_metal WHERE estimate_id={$estimate_id} LIMIT 1";
$dt_rs = CustomQuery($dt_query);
$dt_data = db_fetch_array($dt_rs);
foreach ($dt_data as $key => $value) {
	$$key = str_replace("'","’",$value);
	$$key = str_replace("\"","”",$value);
	$$key = str_replace("`","’",$value);
}


if($product_id > 0){

	$params["txt"] .= "更新処理<br>";

	$up_query = "";

	$up_query = "`category_id`";
	$up_query .= "='{$category}'";

	$up_query .= ",`shape_supplement`";
	$up_query .= "='{$item_name}'";

	$up_query .= ",`gold_property`";
	$up_query .= "='{$material}'";

	$up_query .= ",`Gram`";
	$up_query .= "='{$weight}'";

	$up_query .= ",`sub_category_id1`";
	$up_query .= "='{$stone}'";

	$up_query .= ",`Parent_stone`";
	$up_query .= "='{$parent_stone}'";

	$up_query .= ",`Aside_stone`";
	$up_query .= "='{$aside_stone}'";

	$up_query .= ",`Appraiser`";
	$up_query .= "='{$kantei}'";

	$up_query .= ",`description`";
	$up_query .= "='{$buy_time}'";

	$up_query .= ",`comment`";
	$up_query .= "='{$brand_name}'";

	$up_query .= ",`updated_by`";
	$up_query .= "='{$uid}'";

	$up_query .= ",`updated_at`";
	$up_query .= "=NOW()";


	include $_SERVER["DOCUMENT_ROOT"]."/include/MyPage/connection.php";
	$sql = "UPDATE shouhin SET {$up_query}WHERE product_id={$product_id} LIMIT 1";
	$params["txt"] .= "{$sql}<br>";
	$set_res = mysql_query('SET NAMES utf8');
	$up_res = mysql_query($sql);
	$params["txt"] .= "{$up_res}<br>";
	$close_flag = mysql_close($link);


	$update_query = "UPDATE users___estimate SET `status`=4,updated_by={$uid},updated_at=NOW() WHERE id={$estimate_id} LIMIT 1";
	CustomQuery($update_query);
	$params["txt"] .= "update_query {$update_query}<br>";

}else{




	$selecter = "`category_id`";
	$selecter .= ",`shape_supplement`";
	$selecter .= ",`gold_property`";
	$selecter .= ",`Gram`";
	$selecter .= ",`sub_category_id1`";
	$selecter .= ",`Parent_stone`";
	$selecter .= ",`Aside_stone`";
	$selecter .= ",`Appraiser`";
	$selecter .= ",`description`";
	$selecter .= ",`comment`";
	$selecter .= ",`satei_by`";
	$selecter .= ",`satei_hi`";
	$selecter .= ",`ecc_id`";
	$selecter .= ",`status`";

	$up_values = "'{$category}'";
	$up_values .= ",'{$item_name}'";
	$up_values .= ",'{$material}'";
	$up_values .= ",'{$weight}'";
	$up_values .= ",'{$stone}'";
	$up_values .= ",'{$parent_stone}'";
	$up_values .= ",'{$aside_stone}'";
	$up_values .= ",'{$kantei}'";
	$up_values .= ",'{$buy_time}'";
	$up_values .= ",'{$brand_name}'";
	$up_values .= ",'{$uid}'";
	$up_values .= ",NOW()";
	$up_values .= ",'{$ecc_id}'";
	$up_values .= ",'32'";

	include $_SERVER["DOCUMENT_ROOT"]."/include/MyPage/connection.php";
	$sql = "INSERT INTO shouhin({$selecter})VALUES({$up_values})";
	$params["txt"] .= "{$sql}<br>";
	$set_res = mysql_query('SET NAMES utf8');
	$ins_res = mysql_query($sql);
	$params["txt"] .= "{$ins_res}<br>";
	$mysql_insert_id = mysql_insert_id();
	$close_flag = mysql_close($link);

	$update_query = "UPDATE users___estimate SET `status`=4,product_id={$mysql_insert_id},updated_by={$uid},updated_at=NOW() WHERE id={$estimate_id} LIMIT 1";
	CustomQuery($update_query);
	$params["txt"] .= "update_query {$update_query}<br>";

}





