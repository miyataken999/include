<?



// Place event code here.
// Use "Add Action" button to add code snippets.



// Place event code here.
// Use "Add Action" button to add code snippets.

$values['DA_UPDATEDDATE'] = date("Y/m/d H:i:s");
$yahoo_seq = $values['DA_MANAGEMENTNO'];
if($yahoo_seq == ''){
	$seq_rs = CustomQuery("SELECT DA_MANAGEMENTNO FROM PMT_EV001 where APP_UID = {$values['APP_UID']} LIMIT 1");
	$seq_data = db_fetch_array($seq_rs);
	$yahoo_seq = $seq_data['DA_MANAGEMENTNO'];
}



if($values['DA_COMPLETECHANGEDATE'] != ""){

$sql = "UPDATE shouhin AS a,
 PMT_EV001 AS b
SET ";
if($values['status'] == '120'){
 $sql = $sql . "a.`status` = '120',";
}else{
 $sql = $sql . "a.`status` = '122',";
}
 $sql = $sql . "a.ecc_id = (select ecc_id from Eoc where ecc_seq = b.DA_BUYER limit 1),
 a.yahoo_sinaban = b.DA_MANAGEMENTNO,
 a.title = concat(b.DA_WEIGHT,' ',b.DA_COLOR,' ',b.DA_CLARITY,' ',b.DA_CUT,' ',b.DA_FLUO,' ',b.DA_UPDATEDDATE),
 a.price = b.DA_THESPECIFICATIONSLOSSES,
 a.nyuukin_price = b.DA_PAYOUTOTHER,
 a.description = b.DA_MEMO,
 a.satei_by = b.DA_RESPONSIBLE,
 a.updated_by = b.DA_UPDATEDBY,
 a.updated_at = b.DA_UPDATEDDATE,
 a.satei_hi = b.DA_REGISTRATIONDATE,
 a.kanryou_henbi = b.DA_COMPLETECHANGEDATE
WHERE
	a.yahoo_sinaban = '{$yahoo_seq}' and  b.DA_MANAGEMENTNO = '{$yahoo_seq}'";
}else{

$sql = "UPDATE shouhin AS a,
 PMT_EV001 AS b
SET ";
if($values['status'] == '120'){
 $sql = $sql . "a.`status` = '120',";
}else{
 $sql = $sql . "a.`status` = '122',";
}
 $sql = $sql . "a.ecc_id = (select ecc_id from Eoc where ecc_seq = b.DA_BUYER limit 1),
 a.yahoo_sinaban = b.DA_MANAGEMENTNO,
 a.title = concat(b.DA_WEIGHT,' ',b.DA_COLOR,' ',b.DA_CLARITY,' ',b.DA_CUT,' ',b.DA_FLUO,' ',b.DA_UPDATEDDATE),
 a.price = b.DA_THESPECIFICATIONSLOSSES,
 a.nyuukin_price = b.DA_PAYOUTOTHER,
 a.description = b.DA_MEMO,
 a.satei_by = b.DA_RESPONSIBLE,
 a.updated_by = b.DA_UPDATEDBY,
 a.updated_at = b.DA_UPDATEDDATE,
 a.satei_hi = b.DA_REGISTRATIONDATE
WHERE
	a.yahoo_sinaban = '{$yahoo_seq}' and  b.DA_MANAGEMENTNO = '{$yahoo_seq}'";
}

//echo $sql;
//exit();


$rs = CustomQuery($sql);
 // error_log($sql,1,"miyataken999@gmail.com");
 error_log($sql,1,"nishitani@urlounge.co.jp");
//exit();
/*******************************************************
@@function
@params $value[D在のステータス】が　Ｄ完了だったら[E
********************************************************/

if($values["status"] == 120){
	if($values["DA_COMPLETECHANGEDATE"] == ""){
		$sql = "update PMT_EV001 set DA_COMPLETECHANGEDATE = cast( now() as datetime )  where DA_MANAGEMENTNO = '{$yahoo_seq}'";
		$rs = CustomQuery($sql);
		$sql = "update shouhin set kanryou_henbi = cast( now() as datetime ) where yahoo_sinaban = '{$yahoo_seq}'";
		$rs = CustomQuery($sql);
		$sql = "update shouhin set updated_at = cast( now() as datetime ) where yahoo_sinaban = '{$yahoo_seq}'";
		$rs = CustomQuery($sql);
	}
	$sql = "update shouhin set `status` = 120 where yahoo_sinaban = '{$yahoo_seq}'";
	$rs = CustomQuery($sql);


}
	//$sql = "update shouhin set updated_at = cast( now() as datetime )  where yahoo_sinaban = '{$yahoo_seq}'";
	//$rs = CustomQuery($sql);
	$sql = "update shouhin set updated_by = ".$_SESSION["uid"]."  where yahoo_sinaban = '{$yahoo_seq}'";
	$rs = CustomQuery($sql);



//価格更新判定処理
include_once $_SERVER["DOCUMENT_ROOT"]."/include/page_event/function/kakaku_Dzai.php";


if($values["status"] == 120){
	// D完了だったら販売先バッチまわす
  file_get_contents("https://rifa.life/evaProject/api/ichiba_hanbaisaki_batch/D");
}
