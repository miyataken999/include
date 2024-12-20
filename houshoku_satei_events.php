<?php
class eventclass_houshoku_satei  extends eventsBase
{
	function __construct()
	{
	// fill list of events
		$this->events["AfterEdit"]=true;

		$this->events["BeforeEdit"]=true;

		$this->events["ProcessValuesEdit"]=true;

		$this->events["AfterAdd"]=true;

		$this->events["BeforeAdd"]=true;

		$this->events["ProcessValuesAdd"]=true;



		$this->events["BeforeOut"]=true;

		$this->events["BeforeShowList"]=true;


		$this->events["BeforeMoveNextList"]=true;



//	onscreen events

	}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// After record updated
function AfterEdit(&$values, $where, &$oldvalues, &$keys, $inline, &$pageObject)
{

		

// Place event code here.
// Use "Add Action" button to add code snippets.

include $_SERVER["DOCUMENT_ROOT"]."/include/page_event/satei/edit/after_record/index.php";
//include $_SERVER["DOCUMENT_ROOT"]."/include/page_event/saisun/edit/before_record/index.php";
//include $_SERVER["DOCUMENT_ROOT"]."/include/page_event/saisun/edit/process_record_values/index.php";
;		
} // function AfterEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before record updated
function BeforeEdit(&$values, $where, &$oldvalues, &$keys, &$message, $inline, &$pageObject)
{

		

// Place event code here.
// Use "Add Action" button to add code snippets.

//include $_SERVER["DOCUMENT_ROOT"]."/include/page_event/saisun/edit/after_record/index.php";
include $_SERVER["DOCUMENT_ROOT"]."/include/page_event/satei/edit/before_record/index.php";
//include $_SERVER["DOCUMENT_ROOT"]."/include/page_event/saisun/edit/process_record_values/index.php";

return true;
;		
} // function BeforeEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Process record values
function ProcessValuesEdit(&$values, &$pageObject)
{

		

// Place event code here.
// Use "Add Action" button to add code snippets.

//include $_SERVER["DOCUMENT_ROOT"]."/include/page_event/saisun/edit/after_record/index.php";
//include $_SERVER["DOCUMENT_ROOT"]."/include/page_event/saisun/edit/before_record/index.php";
include $_SERVER["DOCUMENT_ROOT"]."/include/page_event/satei/edit/process_record_values/index.php";
;		
} // function ProcessValuesEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// After record added
function AfterAdd(&$values, &$keys, $inline, &$pageObject)
{

		
// Place event code here.
// Use "Add Action" button to add code snippets.
include $_SERVER["DOCUMENT_ROOT"]."/include/page_event/satei/add/after_record/index.php";


;		
} // function AfterAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
				// Before record added
function BeforeAdd(&$values, &$message, $inline, &$pageObject)
{

		

// Place event code here.
// Use "Add Action" button to add code snippets.
include $_SERVER["DOCUMENT_ROOT"]."/include/page_event/satei/add/before_record/index.php";

return true;
;		
} // function BeforeAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Process record values
function ProcessValuesAdd(&$values, &$pageObject)
{

		

// Place event code here.
// Use "Add Action" button to add code snippets.

include $_SERVER["DOCUMENT_ROOT"]."/include/page_event/satei/add/process_record_values/index.php";
;		
} // function ProcessValuesAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before Export Record
function BeforeOut(&$data, &$values, &$pageObject)
{

		

// Place event code here.
// Use "Add Action" button to add code snippets.


//数字項目、あればフォーマット変更
if($values["Gram"] != ""){
	$values["Gram"] = number_format($values["Gram"],5);
	$values["Gram"] = preg_replace("/\.?0+$/","",$values["Gram"]);
}
if($values["price_per_gram"] != ""){
	$values["price_per_gram"] = number_format($values["price_per_gram"],5);
	$values["price_per_gram"] = preg_replace("/\.?0+$/","",$values["price_per_gram"]);
}
if($values["Parent_stone"] != ""){
	$values["Parent_stone"] = number_format($values["Parent_stone"],5);
	$values["Parent_stone"] = preg_replace("/\.?0+$/","",$values["Parent_stone"]);
}
if($values["price_per_parent_stone"] != ""){
	$values["price_per_parent_stone"] = number_format($values["price_per_parent_stone"],5);
	$values["price_per_parent_stone"] = preg_replace("/\.?0+$/","",$values["price_per_parent_stone"]);
}
if($values["Aside_stone"] != ""){
	$values["Aside_stone"] = number_format($values["Aside_stone"],5);
	$values["Aside_stone"] = preg_replace("/\.?0+$/","",$values["Aside_stone"]);
}
if($values["price_per_aside_stone"] != ""){
	$values["price_per_aside_stone"] = number_format($values["price_per_aside_stone"],5);
	$values["price_per_aside_stone"] = preg_replace("/\.?0+$/","",$values["price_per_aside_stone"]);
}
if($values["price"] != ""){
	$values["price"] = number_format($values["price"],5);
	$values["price"] = preg_replace("/\.?0+$/","",$values["price"]);
}
if($values["sales_price"] != ""){
	$values["sales_price"] = number_format($values["sales_price"],5);
	$values["sales_price"] = preg_replace("/\.?0+$/","",$values["sales_price"]);
}
if($values["yahoo_sankou_uwadai"] != ""){
	$values["yahoo_sankou_uwadai"] = number_format($values["yahoo_sankou_uwadai"],5);
	$values["yahoo_sankou_uwadai"] = preg_replace("/\.?0+$/","",$values["yahoo_sankou_uwadai"]);
}


$values['Gram'] = $values['Gram'] . "g";
$values['Parent_stone'] = $values['Parent_stone'] . "";
$values['Aside_stone'] = $values['Aside_stone'] . ""; 
$values['en'] = "円";
$values['eq'] = "＝";
//$values['title'] .= $values['price_secret'];
//$values['title'] .= $values['sales_price_secret'];




return true;
;		
} // function BeforeOut

		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before display
function BeforeShowList(&$xt, &$templatefile, &$pageObject)
{

		

include $_SERVER["DOCUMENT_ROOT"].'/include/page_event/satei/list/before_display/index.php';

// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function BeforeShowList

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// List page: After record processed
function BeforeMoveNextList(&$data, &$row, &$record, &$pageObject)
{

		
include $_SERVER["DOCUMENT_ROOT"].'/include/page_event/satei/list/after_record/index.php';

// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function BeforeMoveNextList

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
//	onscreen events







}
?>
