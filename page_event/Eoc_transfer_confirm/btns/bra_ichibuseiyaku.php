<?
$uid = $_SESSION["uid"];

//フラグをリセットする
$sql = "UPDATE Eoc SET transfer_confirm = 0 WHERE transfer_confirm = 1";
CustomQuery($sql);

while($data = $button->getNextSelectedRecord()){
	$id = $data["id"];
	$ecc_id = $data["ecc_id"];
	$seiyakukin = $data["kaibi_sougaku"];

	//一時フラグをたてる
	if($ecc_id > 0){
		$sql = "UPDATE Eoc SET transfer_confirm = 1 , seiyakukin = '{$seiyakukin}'  WHERE ecc_id = {$ecc_id} limit 1";
		CustomQuery($sql);
	}

	if($id > 0){
		//ST「振込確認済」にする
		$sql = "UPDATE Eoc_takuhai SET `status`=6, seiyakukin = '{$seiyakukin}' WHERE id = {$id} limit 1";
		CustomQuery($sql);
	}

};



?>
