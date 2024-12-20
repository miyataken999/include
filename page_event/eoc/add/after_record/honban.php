



<?
//顧客ＳＥＱ作成

// ini_set("display_errors",1);
/*********************************************************
@値の初期設置
**********************************************************/
$_purchase_type = $values['purchase_type'];

//error_log($_purchase_type, 1, 'miyataken999@gmail.com');

//買い取りタイプの取得（ＩＤからの取得）
$sql = "select * from _purchase_type where purchase_id = ".$_purchase_type;
$rs = CustomQuery($sql);
$data = db_fetch_array($rs);
// echo "Number of customers: " . $data["purchaze_type"];
$pt = $data["purchaze_type"];
  	$where = " where ecc_seq like '%".$pt."%'";
//問題　ＴとＴＫなどあると、ＬＩＫＥだと０００１になり下がる
		$sql = "select max(ecc_seq) as mecc_seq,max(ecc_id) as max from Eoc ".$where;
		// print $sql;
		//exit();
//顧客ＩＤの取得
		$rs = CustomQuery($sql);
		$data = db_fetch_array($rs);
    //$count = $db->f("max");
		// print $data["mecc_seq"];

    // print "line24";
//現在の顧客ＩＤのカウントに１を足す
		$count =  intval(substr($data["mecc_seq"],1,5));
    		$count = $count + 1;
	// print "line 30";
		$sql = "select max(ecc_id) as max2 from Eoc";
		$rs = CustomQuery($sql);
		$data = db_fetch_array($rs);
		$max2 = $data["max2"];

		// print $data["max2"];


$ecc_id = $values["ecc_id"];
		//顧客ＩＤを５ケタ０埋め
		// 20220210 maxではうまく取得できない場合もあり得るので、valuesのecc_idから取得するように変更
		// $sql = "update Eoc set ecc_seq = '".$pt.str_pad($count, 5, "0", STR_PAD_LEFT)."' where ecc_id = ".$max2;
		$sql = "update Eoc set ecc_seq = '".$pt.str_pad($count, 5, "0", STR_PAD_LEFT)."' where ecc_id = ".$ecc_id;
	    $rs = CustomQuery($sql);
		//$data = db_fetch_array($rs);


//苗字、名前の分割
$name1 = $values["name1"];
$name2 = $values["name2"];

if(preg_match("/　　/",$name1)){
	$name1_array = explode("　　", $name1);
	$name1_sei = $name1_array[0];
	$name1_mei = $name1_array[1];
}elseif(preg_match("/　/",$name1)){
	$name1_array = explode("　", $name1);
	$name1_sei = $name1_array[0];
	$name1_mei = $name1_array[1];
}elseif(preg_match("/   /",$name1)){
	$name1_array = explode("   ", $name1);
	$name1_sei = $name1_array[0];
	$name1_mei = $name1_array[1];
}elseif(preg_match("/  /",$name1)){
	$name1_array = explode("  ", $name1);
	$name1_sei = $name1_array[0];
	$name1_mei = $name1_array[1];
}elseif(preg_match("/ /",$name1)){
	$name1_array = explode(" ", $name1);
	$name1_sei = $name1_array[0];
	$name1_mei = $name1_array[1];
}else{
	$name1_sei = "";
	$name1_mei = "";
}

if(preg_match("/　/",$name2)){
	$name2_array = explode("　", $name2);
	$name2_sei = $name2_array[0];
	$name2_mei = $name2_array[1];
}elseif(preg_match("/ /",$name2)){
	$name2_array = explode(" ", $name2);
	$name2_sei = $name2_array[0];
	$name2_mei = $name2_array[1];
}else{
	$name2_sei = "";
	$name2_mei = "";
}

if($ecc_id != ""){
	$query = "UPDATE internet.Eoc SET LAST_NAME2='{$name1_sei}' , FIRST_NAME2='{$name1_mei}' , LAST_NAME_KANA='{$name2_sei}' , FIRST_NAME_KANA='{$name2_mei}' WHERE ecc_id={$ecc_id} LIMIT 1";
}
// print $query."<br>";
$rs = CustomQuery($query);

?>
