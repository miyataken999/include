<?
// Place event code here.
// Use "Add Action" button to add code snippets.

//try{
/********************************************************************
商品にレコードを追加
*********************************************************************/
CustomQuery("insert into shouhin (ecc_id,category_id,sub_category_id1,yahoo_sex,product_num,yahoo_junle) VALUES (1,17,415,3,631,'ノーブランド(ノンブランド)')");

/********************************************************************
作成した商品レコードの　product_id を取得
*********************************************************************/
$sql = "select product_id from shouhin order by product_id DESC limit 1";
$rs = CustomQuery($sql);
$data = db_fetch_array($rs);
/*******************************************************************
ここで顧客IDを０に初期化
********************************************************************/
$sql = "update shouhin set ecc_id = 0 where product_id =".$data["product_id"];
$rs = CustomQuery($sql);

$pid = $data["product_id"];


/*******************************************************************
顧客IDを取得
********************************************************************/
$rs = CustomQuery("SELECT * FROM seq where product_id =
(select product_id from shouhin order by product_id DESC limit 1)");
//$rs = CustomQuery($sql);
$data = db_fetch_array($rs);

if($data["initial_name"] == ""){
	$ini = "X";
}else{
	$ini= $data["initial_name"];
}

$yahoo_seq=$data["sub_cate"].$ini.
$data["c"].
$data["d"].
$data["sex_ini"];

$sql = "select * from PMT_EV001 order by APP_UID desc limit 1";
$rs = CustomQuery($sql);
$data2 = db_fetch_array($rs);

/***********************************************************************
商品に品番を設定
************************************************************************/
$sql = "update shouhin set yahoo_sinaban = '{$yahoo_seq}' where product_id =".$data["product_id"];
error_log($sql,1,"miyataken999@gmail.com");
$rs = CustomQuery($sql);


/***********************************************************************
品番を自分自身に登録　
D在のマネージメントNO　＝ yahoo_seq

DA_MANAGEMENTNO = yahoo_seq
************************************************************************/

$sql = "update PMT_EV001 set DA_SEQ = '".$pid."',DA_MANAGEMENTNO = '".$yahoo_seq."' where APP_UID = ".$data2["APP_UID"];
$rs = CustomQuery($sql);

$sql = "UPDATE shouhin AS a,
 PMT_EV001 AS b
SET ";
if($data["status"] != "" ){
 // $sql = $sql . "a.`status` = (select id_store_prod from _DIA_DA_STATUS where name = b.DA_STATUS limit 1),";
 $sql = $sql . "a.`status` = b.`status`,";

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
 a.DT_UP_DATE = b.DA_REGISTRATIONDATE,
 a.updated_by = b.DA_UPDATEDBY,
 a.updated_at = b.DA_UPDATEDDATE,";
if($data["DA_COMPLETECHANGEDATE"] != "" ){
 $sql = $sql . "a.kanryou_henbi = b.DA_COMPLETECHANGEDATE,";
}
 $sql = $sql . "a.satei_hi = b.DA_REGISTRATIONDATE
WHERE
	a.yahoo_sinaban = '{$yahoo_seq}' and  b.DA_MANAGEMENTNO = '{$yahoo_seq}'";

 error_log($sql,1,"miyataken999@gmail.com");
 error_log($sql,1,"nishitani@urlounge.co.jp");
//exit();

$rs = CustomQuery($sql);

//}catch(Exception $e){
//error_log(print_r($e,true), 1, 'miytaken999@gmail.com');/
//
//}
// Place event code here.
// Use "Add Action" button to add code snippets.

// Place event code here.
// Use "Add Action" button to add code snippets.
?>
