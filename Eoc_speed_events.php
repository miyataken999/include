<?php
class eventclass_Eoc_speed  extends eventsBase
{
	function __construct()
	{
	// fill list of events
		$this->events["ProcessValuesAdd"]=true;

		$this->events["BeforeEdit"]=true;

		$this->events["ProcessValuesEdit"]=true;

		$this->events["BeforeOut"]=true;

		$this->events["AfterAdd"]=true;

		$this->events["AfterEdit"]=true;



		$this->events["BeforeMoveNextList"]=true;

		$this->events["BeforeAdd"]=true;

		$this->events["BeforeShowAdd"]=true;



//	onscreen events
		$this->events["Eoc_speed_snippet"] = true;

	}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Process record values
function ProcessValuesAdd(&$values, &$pageObject)
{

		

// Place event code here.
// Use "Add Action" button to add code snippets.




include $_SERVER["DOCUMENT_ROOT"].'/include/page_event/eoc/add/process_record_values/index.php';

;		
} // function ProcessValuesAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before record updated
function BeforeEdit(&$values, $where, &$oldvalues, &$keys, &$message, $inline, &$pageObject)
{

		

// Place event code here.
// Use "Add Action" button to add code snippets.

include $_SERVER["DOCUMENT_ROOT"].'/include/page_event/eoc/edit/before_record/index.php';

return true;
;		
} // function BeforeEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Process record values
function ProcessValuesEdit(&$values, &$pageObject)
{

		


include $_SERVER["DOCUMENT_ROOT"].'/include/page_event/eoc/edit/process_record_values/index.php';
;		
} // function ProcessValuesEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before Export Record
function BeforeOut(&$data, &$values, &$pageObject)
{

		
include $_SERVER["DOCUMENT_ROOT"]."/include/page_event/Eoc_speed/export/before_export/index.php";



// Place event code here.
// Use "Add Action" button to add code snippets.

return true;
;		
} // function BeforeOut

		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// After record added
function AfterAdd(&$values, &$keys, $inline, &$pageObject)
{

		
		/**
Pear HTTP2 request 仕様
*/
include("./classes/cls_blainmail.php");

//databaseから一覧をもってくる
//その内容でデータを

$sql = "select * from Eoc where mail_check_type = 2";
$rs = CustomQuery($sql);

/**
一括処理の場合
*/
//while($values = db_fetch_array($rs)){
	
	$c15= $values['mail1'];
if($c15 == "")
	$c15 = "info@urlounge.co.jp";
$c0 = $values['name1'];
$c1 = $values['name2'];
$c12 = $values['tel2'];
if($c12 == ""){
   $c12 = "03-5985-0388";
}
$c16 = $values['option5'];//sex
if($c16 == "" || $c16 == "不明"){
  $c16 = "男性";
}
$c19 = $values['mail_check_type'];
if($c19 == 2){
	$c19="許可";
}else{
	$c19="拒否";
}
$c9 = $values["address1"];
if($c9 == ""){
        $c9= "東京都";
}

$c23 = $values["b1"]."-".$values["b2"]."-".$values["b3"];
$c14 = $c23;
if($c14 == "--" || $c14=="-0-0" || mb_strlen($c14)<6){
 $c14 = "1999-1-1";
 $c23 = $c14;
}
$c24 = $values["ecc_id"];
$c22 = $values["kaitori_sougak"];
if($c22 == ""){
  $c22 = 0;
}
/**
debug mode 1
*/
$blm = new brainmail();
//session key set
$blm->loginSetkey();
$blm->login();
/**
@mail アドレスで検索
*/
//$conid = $blm->search($c24);
$conid = $blm->search($c15);

$data = array(
'contactID' => "$conid",
'c0' => "$c0",
'c1' => "$c1",
'c9' => "$c9",
'c12' => "$c12",
'c14' => "$c14",
'c15' => $c15,
'c16' => "$c16",
'c19' => "$c19",
'c22' => "$c22",
'c20' => 'リファウンデーション',
'c23' => "$c23",
'c24' => "$c24",
'status' => '配信中',
'error' => 0, );
//print_r($data);
if($c19 == "許可"){
	$blm->create($data);
	$blm->update($data);
}
//exit();
//一括処理の場合
//}



include $_SERVER["DOCUMENT_ROOT"]."/include/page_event/eoc/add/after_record/index.php";
// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function AfterAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// After record updated
function AfterEdit(&$values, $where, &$oldvalues, &$keys, $inline, &$pageObject)
{

				/**
Pear HTTP2 request 仕様
*/
include("./classes/cls_blainmail.php");

//databaseから一覧をもってくる
//その内容でデータを

$sql = "select * from Eoc where mail_check_type = 2";
$rs = CustomQuery($sql);

/**
一括処理の場合
*/
//while($values = db_fetch_array($rs)){
	
	$c15= $values['mail1'];
if($c15 == "")
	$c15 = "info@urlounge.co.jp";
$c0 = $values['name1'];
$c1 = $values['name2'];
$c12 = $values['tel2'];
if($c12 == ""){
   $c12 = "03-5985-0388";
}
$c16 = $values['option5'];//sex
if($c16 == "" || $c16 == "不明"){
  $c16 = "男性";
}
$c19 = $values['mail_check_type'];
if($c19 == 2){
	$c19="許可";
}else{
	$c19="拒否";
}
$c9 = $values["address1"];
if($c9 == ""){
        $c9= "東京都";
}

$c23 = $values["b1"]."-".$values["b2"]."-".$values["b3"];
$c14 = $c23;
if($c14 == "--" || $c14=="-0-0" || mb_strlen($c14)<6){
 $c14 = "1999-1-1";
 $c23 = $c14;
}
$c24 = $values["ecc_id"];
$c22 = $values["kaitori_sougak"];
if($c22 == ""){
  $c22 = 0;
}
/**
debug mode 1
*/
$blm = new brainmail();
//session key set
$blm->loginSetkey();
$blm->login();
/**
@mail アドレスで検索
*/
//$conid = $blm->search($c24);
$conid = $blm->search($c15);

$data = array(
'contactID' => "$conid",
'c0' => "$c0",
'c1' => "$c1",
'c9' => "$c9",
'c12' => "$c12",
'c14' => "$c14",
'c15' => $c15,
'c16' => "$c16",
'c19' => "$c19",
'c22' => "$c22",
'c20' => 'リファウンデーション',
'c23' => "$c23",
'c24' => "$c24",
'status' => '配信中',
'error' => 0, );
//print_r($data);
if($c19 == "許可"){
	$blm->create($data);
	$blm->update($data);
}
//exit();
//一括処理の場合
//}

// Place event code here.
// Use "Add Action" button to add code snippets.
include $_SERVER["DOCUMENT_ROOT"]."/include/page_event/eoc/edit/after_record/index.php";
;		
} // function AfterEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// List page: After record processed
function BeforeMoveNextList(&$data, &$row, &$record, &$pageObject)
{

		include $_SERVER["DOCUMENT_ROOT"].'/include/page_event/eoc/list/after_record/index.php';

// Place event code here.
// Use "Add Action" button to add code snippets.

;		
} // function BeforeMoveNextList

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
				// Before record added
function BeforeAdd(&$values, &$message, $inline, &$pageObject)
{

		

// Place event code here.
// Use "Add Action" button to add code snippets.

include $_SERVER["DOCUMENT_ROOT"].'/include/page_event/eoc/add/before_record/index.php';

return true;
;		
} // function BeforeAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before display
function BeforeShowAdd(&$xt, &$templatefile, &$pageObject)
{

		



// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function BeforeShowAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
//	onscreen events
function Eoc_speed_snippet(&$params)
{
// Put your code here.
echo "<a class='btn btn-primary' target='_blank' href='http://rifa.life/pdf/confirm.php?user_id={$_SESSION['uid']}'>お申込確認書 作成</a>";
;
}







}
?>
