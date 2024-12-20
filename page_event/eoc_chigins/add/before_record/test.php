<?
// Parameters
// $values     - array of values to be written to the database.
//               To access specific field value use $values["FieldName"]
//               "dict" is an alternate name for this parameter.
// $message    - place the message to be displayed into this variable.
// $inline     - equals to true when the Inline Add in process, false otherwise
// $pageObject - an object of Page class representing the current page


$nowtime = date("Y-m-d H:i:s");
$user_id = $_SESSION['uid'];

if($user_id != ""){

	/**********************************************************
	登録者
	**********************************************************/
	if($_SESSION['uid'] != ""){
		$values["create_by"] = $_SESSION['uid'];
	}


}


//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
//宅配取引更新
//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
$chigin_ecc_id = $values["chigin_ecc_id"];
if($chigin_ecc_id > 0){
	/**********************************************************
	宅配取引「到着済」か「査定中」か「成約あり」があれば、その宅配取引IDをこれに付与
	**********************************************************/
	$Eoc_takuhai_query = "SELECT * FROM Eoc_takuhai WHERE `ecc_id`={$chigin_ecc_id} AND ((`status`=4) OR (`status`=5) OR (`status`=12)) ORDER BY id DESC limit 1";
	$Eoc_takuhai_rs = CustomQuery($Eoc_takuhai_query);
	$Eoc_takuhai_data = db_fetch_array($Eoc_takuhai_rs);
	//到着済idをGET
	$Eoc_takuhai_id = $Eoc_takuhai_data["id"];

	if($Eoc_takuhai_id > 0){
		$values["Eoc_takuhai_id"] = $Eoc_takuhai_id;

		//宅配取引のステータス 「成約あり」に変更
		$Eoc_takuhai_query = "UPDATE Eoc_takuhai SET `status`=5,`updated_by`='{$user_id}' WHERE id='{$Eoc_takuhai_id}' limit 1";
		CustomQuery($Eoc_takuhai_query);
	}
}
//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
//宅配取引更新　END
//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■




