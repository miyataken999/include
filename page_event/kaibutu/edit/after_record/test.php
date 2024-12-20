<?
$new_st = $values["status"];
$nowtime_no = date("Y/m/d H:i:s");
$nowtime = "'".$nowtime_no."'";

if($new_st == 33){

  $product_id = $values['product_id'];//$data["product_id"];

/******************************************************************
シーケンスの取得
*******************************************************************/


  $sql = "SELECT * FROM seq where product_id=".$product_id;
	$rs = CustomQuery($sql);
	$data = db_fetch_array($rs);

  if($data["initial_name"] == ""){
		$ini = "X";
	}else{
		$ini= $data["initial_name"];
	}


$yahoo_seq =
	$data["sub_cate"].
	$ini.
	$data["c"].
	$data["d"].
	$data["sex_ini"];

	$sql = "UPDATE shouhin SET yahoo_sinaban = '".$yahoo_seq."' where product_id = ".$product_id;
  //exit();
  $rs = CustomQuery($sql);


	/**********************************************************
	ログ
	**********************************************************/
	$log_ip = $_SERVER["REMOTE_ADDR"];
	$log_table = "saisun";
	$log_action = "edit";//ここでは固定
	//user_login取得
	$user_login_query = " SELECT user_login FROM users WHERE user_id={$_SESSION['uid']} LIMIT 1";
	$rs = CustomQuery($user_login_query);
	while ($data = db_fetch_array($rs))
	{
		$log_user = $data["user_login"];
	}
	$log_descri = "---Keys\n";
	$log_descri = $log_descri."product_id : {$product_id}\n";
	$log_descri = $log_descri."---Fields\n";
	$log_descri = $log_descri."yahoo_sinaban[new]:{$yahoo_seq}\n";
	$insert_sql = "INSERT INTO evav62122_audit (datetime,ip,`user`,`table`,action,description) VALUES ({$nowtime},'{$log_ip}','{$log_user}','{$log_table}','{$log_action}','{$log_descri}')";
	CustomQuery($insert_sql);

}



//価格更新判定処理
include_once $_SERVER["DOCUMENT_ROOT"]."/include/page_event/function/kakaku.php";





?>


