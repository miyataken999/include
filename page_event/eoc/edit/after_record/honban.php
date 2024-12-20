<?
//顧客ＳＥＱ作成

// Place event code here.
// Use "Add Action" button to add code snippets.

$henkou = "";

$before = $values['purchase_type'];
$after = $oldvalues['purchase_type'];
$_ecc_id = $values['ecc_id'];

if($before != $after){
 // print "顧客IDを変更します";
 $henkou = 1;
}

//if($values['registerd_id'] == "")
/*********************************************************
更新者の登録
**********************************************************/
$values['registerd_id'] = $_SESSION["uid"];

if($henkou == 1){
// Place event code here.
// Use "Add Action" button to add code snippets.
// ini_set("display_errors",1);
/*********************************************************
@値の初期設置
**********************************************************/
$_purchase_type = $values['purchase_type'];

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

//顧客ＩＤを５ケタ０埋め
		$b = array(1=>"R",2=>"R",3=>"T",4=>"Z");
		$sql = "update Eoc set ecc_seq = '".$pt.str_pad($count, 5, "0", STR_PAD_LEFT)."' where ecc_id = ".$_ecc_id;
    $rs = CustomQuery($sql);
		//$data = db_fetch_array($rs);
}
?>
