<?php
require_once(getabspath("classes/cipherer.php"));




$tdataEoc_inventory_weekly = array();
	$tdataEoc_inventory_weekly[".truncateText"] = true;
	$tdataEoc_inventory_weekly[".NumberOfChars"] = 80;
	$tdataEoc_inventory_weekly[".ShortName"] = "Eoc_inventory_weekly";
	$tdataEoc_inventory_weekly[".OwnerID"] = "";
	$tdataEoc_inventory_weekly[".OriginalTable"] = "Eoc_inventory_weekly";

//	field labels
$fieldLabelsEoc_inventory_weekly = array();
$fieldToolTipsEoc_inventory_weekly = array();
$pageTitlesEoc_inventory_weekly = array();
$placeHoldersEoc_inventory_weekly = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsEoc_inventory_weekly["Japanese"] = array();
	$fieldToolTipsEoc_inventory_weekly["Japanese"] = array();
	$placeHoldersEoc_inventory_weekly["Japanese"] = array();
	$pageTitlesEoc_inventory_weekly["Japanese"] = array();
	$fieldLabelsEoc_inventory_weekly["Japanese"]["date"] = "日付";
	$fieldToolTipsEoc_inventory_weekly["Japanese"]["date"] = "";
	$placeHoldersEoc_inventory_weekly["Japanese"]["date"] = "";
	$fieldLabelsEoc_inventory_weekly["Japanese"]["inventory_j_ec"] = "在庫高：宝飾・EC";
	$fieldToolTipsEoc_inventory_weekly["Japanese"]["inventory_j_ec"] = "";
	$placeHoldersEoc_inventory_weekly["Japanese"]["inventory_j_ec"] = "";
	$fieldLabelsEoc_inventory_weekly["Japanese"]["inventory_j_ichiba"] = "在庫高：宝飾・市場";
	$fieldToolTipsEoc_inventory_weekly["Japanese"]["inventory_j_ichiba"] = "";
	$placeHoldersEoc_inventory_weekly["Japanese"]["inventory_j_ichiba"] = "";
	$fieldLabelsEoc_inventory_weekly["Japanese"]["inventory_k"] = "在庫高：地金";
	$fieldToolTipsEoc_inventory_weekly["Japanese"]["inventory_k"] = "";
	$placeHoldersEoc_inventory_weekly["Japanese"]["inventory_k"] = "";
	$fieldLabelsEoc_inventory_weekly["Japanese"]["inventory_d"] = "在庫高：ダイヤ";
	$fieldToolTipsEoc_inventory_weekly["Japanese"]["inventory_d"] = "";
	$placeHoldersEoc_inventory_weekly["Japanese"]["inventory_d"] = "";
	$fieldLabelsEoc_inventory_weekly["Japanese"]["inventory_b_ec"] = "在庫高：服飾・EC";
	$fieldToolTipsEoc_inventory_weekly["Japanese"]["inventory_b_ec"] = "";
	$placeHoldersEoc_inventory_weekly["Japanese"]["inventory_b_ec"] = "";
	$fieldLabelsEoc_inventory_weekly["Japanese"]["inventory_b_ichiba"] = "在庫高：服飾・市場";
	$fieldToolTipsEoc_inventory_weekly["Japanese"]["inventory_b_ichiba"] = "";
	$placeHoldersEoc_inventory_weekly["Japanese"]["inventory_b_ichiba"] = "";
	$fieldLabelsEoc_inventory_weekly["Japanese"]["inventory_w_ec"] = "在庫高：時計・EC";
	$fieldToolTipsEoc_inventory_weekly["Japanese"]["inventory_w_ec"] = "";
	$placeHoldersEoc_inventory_weekly["Japanese"]["inventory_w_ec"] = "";
	$fieldLabelsEoc_inventory_weekly["Japanese"]["inventory_w_ichiba"] = "在庫高：時計・市場";
	$fieldToolTipsEoc_inventory_weekly["Japanese"]["inventory_w_ichiba"] = "";
	$placeHoldersEoc_inventory_weekly["Japanese"]["inventory_w_ichiba"] = "";
	$fieldLabelsEoc_inventory_weekly["Japanese"]["inventory_c"] = "在庫高：共通";
	$fieldToolTipsEoc_inventory_weekly["Japanese"]["inventory_c"] = "";
	$placeHoldersEoc_inventory_weekly["Japanese"]["inventory_c"] = "";
	$fieldLabelsEoc_inventory_weekly["Japanese"]["sales_j_ec"] = "売上高：宝飾・EC";
	$fieldToolTipsEoc_inventory_weekly["Japanese"]["sales_j_ec"] = "";
	$placeHoldersEoc_inventory_weekly["Japanese"]["sales_j_ec"] = "";
	$fieldLabelsEoc_inventory_weekly["Japanese"]["sales_j_ichiba"] = "売上高：宝飾・市場";
	$fieldToolTipsEoc_inventory_weekly["Japanese"]["sales_j_ichiba"] = "";
	$placeHoldersEoc_inventory_weekly["Japanese"]["sales_j_ichiba"] = "";
	$fieldLabelsEoc_inventory_weekly["Japanese"]["sales_k"] = "売上高：地金";
	$fieldToolTipsEoc_inventory_weekly["Japanese"]["sales_k"] = "";
	$placeHoldersEoc_inventory_weekly["Japanese"]["sales_k"] = "";
	$fieldLabelsEoc_inventory_weekly["Japanese"]["sales_d"] = "売上高：ダイヤ";
	$fieldToolTipsEoc_inventory_weekly["Japanese"]["sales_d"] = "";
	$placeHoldersEoc_inventory_weekly["Japanese"]["sales_d"] = "";
	$fieldLabelsEoc_inventory_weekly["Japanese"]["sales_b_ec"] = "売上高：服飾・EC";
	$fieldToolTipsEoc_inventory_weekly["Japanese"]["sales_b_ec"] = "";
	$placeHoldersEoc_inventory_weekly["Japanese"]["sales_b_ec"] = "";
	$fieldLabelsEoc_inventory_weekly["Japanese"]["sales_b_ichiba"] = "売上高：服飾・市場";
	$fieldToolTipsEoc_inventory_weekly["Japanese"]["sales_b_ichiba"] = "";
	$placeHoldersEoc_inventory_weekly["Japanese"]["sales_b_ichiba"] = "";
	$fieldLabelsEoc_inventory_weekly["Japanese"]["sales_w_ec"] = "売上高：時計・EC";
	$fieldToolTipsEoc_inventory_weekly["Japanese"]["sales_w_ec"] = "";
	$placeHoldersEoc_inventory_weekly["Japanese"]["sales_w_ec"] = "";
	$fieldLabelsEoc_inventory_weekly["Japanese"]["sales_w_ichiba"] = "売上高：時計・市場";
	$fieldToolTipsEoc_inventory_weekly["Japanese"]["sales_w_ichiba"] = "";
	$placeHoldersEoc_inventory_weekly["Japanese"]["sales_w_ichiba"] = "";
	$fieldLabelsEoc_inventory_weekly["Japanese"]["sales_c"] = "売上高：共通";
	$fieldToolTipsEoc_inventory_weekly["Japanese"]["sales_c"] = "";
	$placeHoldersEoc_inventory_weekly["Japanese"]["sales_c"] = "";
	$fieldLabelsEoc_inventory_weekly["Japanese"]["buy_during_period_j_ec"] = "仕入高：宝飾・EC";
	$fieldToolTipsEoc_inventory_weekly["Japanese"]["buy_during_period_j_ec"] = "";
	$placeHoldersEoc_inventory_weekly["Japanese"]["buy_during_period_j_ec"] = "";
	$fieldLabelsEoc_inventory_weekly["Japanese"]["buy_during_period_j_ichiba"] = "仕入高：宝飾・市場";
	$fieldToolTipsEoc_inventory_weekly["Japanese"]["buy_during_period_j_ichiba"] = "";
	$placeHoldersEoc_inventory_weekly["Japanese"]["buy_during_period_j_ichiba"] = "";
	$fieldLabelsEoc_inventory_weekly["Japanese"]["buy_during_period_k"] = "仕入高：地金";
	$fieldToolTipsEoc_inventory_weekly["Japanese"]["buy_during_period_k"] = "";
	$placeHoldersEoc_inventory_weekly["Japanese"]["buy_during_period_k"] = "";
	$fieldLabelsEoc_inventory_weekly["Japanese"]["buy_during_period_d"] = "仕入高：ダイヤ";
	$fieldToolTipsEoc_inventory_weekly["Japanese"]["buy_during_period_d"] = "";
	$placeHoldersEoc_inventory_weekly["Japanese"]["buy_during_period_d"] = "";
	$fieldLabelsEoc_inventory_weekly["Japanese"]["buy_during_period_b_ec"] = "仕入高：服飾・EC";
	$fieldToolTipsEoc_inventory_weekly["Japanese"]["buy_during_period_b_ec"] = "";
	$placeHoldersEoc_inventory_weekly["Japanese"]["buy_during_period_b_ec"] = "";
	$fieldLabelsEoc_inventory_weekly["Japanese"]["buy_during_period_b_ichiba"] = "仕入高：服飾・市場";
	$fieldToolTipsEoc_inventory_weekly["Japanese"]["buy_during_period_b_ichiba"] = "";
	$placeHoldersEoc_inventory_weekly["Japanese"]["buy_during_period_b_ichiba"] = "";
	$fieldLabelsEoc_inventory_weekly["Japanese"]["buy_during_period_w_ec"] = "仕入高：時計・EC";
	$fieldToolTipsEoc_inventory_weekly["Japanese"]["buy_during_period_w_ec"] = "";
	$placeHoldersEoc_inventory_weekly["Japanese"]["buy_during_period_w_ec"] = "";
	$fieldLabelsEoc_inventory_weekly["Japanese"]["buy_during_period_w_ichiba"] = "仕入高：時計・市場";
	$fieldToolTipsEoc_inventory_weekly["Japanese"]["buy_during_period_w_ichiba"] = "";
	$placeHoldersEoc_inventory_weekly["Japanese"]["buy_during_period_w_ichiba"] = "";
	$fieldLabelsEoc_inventory_weekly["Japanese"]["buy_during_period_c"] = "仕入高：共通";
	$fieldToolTipsEoc_inventory_weekly["Japanese"]["buy_during_period_c"] = "";
	$placeHoldersEoc_inventory_weekly["Japanese"]["buy_during_period_c"] = "";
	$fieldLabelsEoc_inventory_weekly["Japanese"]["created_at"] = "作成日";
	$fieldToolTipsEoc_inventory_weekly["Japanese"]["created_at"] = "";
	$placeHoldersEoc_inventory_weekly["Japanese"]["created_at"] = "";
	$fieldLabelsEoc_inventory_weekly["Japanese"]["updated_at"] = "更新日";
	$fieldToolTipsEoc_inventory_weekly["Japanese"]["updated_at"] = "";
	$placeHoldersEoc_inventory_weekly["Japanese"]["updated_at"] = "";
	if (count($fieldToolTipsEoc_inventory_weekly["Japanese"]))
		$tdataEoc_inventory_weekly[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsEoc_inventory_weekly[""] = array();
	$fieldToolTipsEoc_inventory_weekly[""] = array();
	$placeHoldersEoc_inventory_weekly[""] = array();
	$pageTitlesEoc_inventory_weekly[""] = array();
	$fieldLabelsEoc_inventory_weekly[""]["date"] = "Date";
	$fieldToolTipsEoc_inventory_weekly[""]["date"] = "";
	$placeHoldersEoc_inventory_weekly[""]["date"] = "";
	$fieldLabelsEoc_inventory_weekly[""]["inventory_j_ec"] = "Inventory J Ec";
	$fieldToolTipsEoc_inventory_weekly[""]["inventory_j_ec"] = "";
	$placeHoldersEoc_inventory_weekly[""]["inventory_j_ec"] = "";
	$fieldLabelsEoc_inventory_weekly[""]["inventory_j_ichiba"] = "Inventory J Ichiba";
	$fieldToolTipsEoc_inventory_weekly[""]["inventory_j_ichiba"] = "";
	$placeHoldersEoc_inventory_weekly[""]["inventory_j_ichiba"] = "";
	$fieldLabelsEoc_inventory_weekly[""]["inventory_k"] = "Inventory K";
	$fieldToolTipsEoc_inventory_weekly[""]["inventory_k"] = "";
	$placeHoldersEoc_inventory_weekly[""]["inventory_k"] = "";
	$fieldLabelsEoc_inventory_weekly[""]["inventory_d"] = "Inventory D";
	$fieldToolTipsEoc_inventory_weekly[""]["inventory_d"] = "";
	$placeHoldersEoc_inventory_weekly[""]["inventory_d"] = "";
	$fieldLabelsEoc_inventory_weekly[""]["inventory_b_ec"] = "Inventory B Ec";
	$fieldToolTipsEoc_inventory_weekly[""]["inventory_b_ec"] = "";
	$placeHoldersEoc_inventory_weekly[""]["inventory_b_ec"] = "";
	$fieldLabelsEoc_inventory_weekly[""]["inventory_b_ichiba"] = "Inventory B Ichiba";
	$fieldToolTipsEoc_inventory_weekly[""]["inventory_b_ichiba"] = "";
	$placeHoldersEoc_inventory_weekly[""]["inventory_b_ichiba"] = "";
	$fieldLabelsEoc_inventory_weekly[""]["inventory_w_ec"] = "Inventory W Ec";
	$fieldToolTipsEoc_inventory_weekly[""]["inventory_w_ec"] = "";
	$placeHoldersEoc_inventory_weekly[""]["inventory_w_ec"] = "";
	$fieldLabelsEoc_inventory_weekly[""]["inventory_w_ichiba"] = "Inventory W Ichiba";
	$fieldToolTipsEoc_inventory_weekly[""]["inventory_w_ichiba"] = "";
	$placeHoldersEoc_inventory_weekly[""]["inventory_w_ichiba"] = "";
	$fieldLabelsEoc_inventory_weekly[""]["inventory_c"] = "Inventory C";
	$fieldToolTipsEoc_inventory_weekly[""]["inventory_c"] = "";
	$placeHoldersEoc_inventory_weekly[""]["inventory_c"] = "";
	$fieldLabelsEoc_inventory_weekly[""]["sales_j_ec"] = "Sales J Ec";
	$fieldToolTipsEoc_inventory_weekly[""]["sales_j_ec"] = "";
	$placeHoldersEoc_inventory_weekly[""]["sales_j_ec"] = "";
	$fieldLabelsEoc_inventory_weekly[""]["sales_j_ichiba"] = "Sales J Ichiba";
	$fieldToolTipsEoc_inventory_weekly[""]["sales_j_ichiba"] = "";
	$placeHoldersEoc_inventory_weekly[""]["sales_j_ichiba"] = "";
	$fieldLabelsEoc_inventory_weekly[""]["sales_k"] = "Sales K";
	$fieldToolTipsEoc_inventory_weekly[""]["sales_k"] = "";
	$placeHoldersEoc_inventory_weekly[""]["sales_k"] = "";
	$fieldLabelsEoc_inventory_weekly[""]["sales_d"] = "Sales D";
	$fieldToolTipsEoc_inventory_weekly[""]["sales_d"] = "";
	$placeHoldersEoc_inventory_weekly[""]["sales_d"] = "";
	$fieldLabelsEoc_inventory_weekly[""]["sales_b_ec"] = "Sales B Ec";
	$fieldToolTipsEoc_inventory_weekly[""]["sales_b_ec"] = "";
	$placeHoldersEoc_inventory_weekly[""]["sales_b_ec"] = "";
	$fieldLabelsEoc_inventory_weekly[""]["sales_b_ichiba"] = "Sales B Ichiba";
	$fieldToolTipsEoc_inventory_weekly[""]["sales_b_ichiba"] = "";
	$placeHoldersEoc_inventory_weekly[""]["sales_b_ichiba"] = "";
	$fieldLabelsEoc_inventory_weekly[""]["sales_w_ec"] = "Sales W Ec";
	$fieldToolTipsEoc_inventory_weekly[""]["sales_w_ec"] = "";
	$placeHoldersEoc_inventory_weekly[""]["sales_w_ec"] = "";
	$fieldLabelsEoc_inventory_weekly[""]["sales_w_ichiba"] = "Sales W Ichiba";
	$fieldToolTipsEoc_inventory_weekly[""]["sales_w_ichiba"] = "";
	$placeHoldersEoc_inventory_weekly[""]["sales_w_ichiba"] = "";
	$fieldLabelsEoc_inventory_weekly[""]["sales_c"] = "Sales C";
	$fieldToolTipsEoc_inventory_weekly[""]["sales_c"] = "";
	$placeHoldersEoc_inventory_weekly[""]["sales_c"] = "";
	$fieldLabelsEoc_inventory_weekly[""]["buy_during_period_j_ec"] = "Buy During Period J Ec";
	$fieldToolTipsEoc_inventory_weekly[""]["buy_during_period_j_ec"] = "";
	$placeHoldersEoc_inventory_weekly[""]["buy_during_period_j_ec"] = "";
	$fieldLabelsEoc_inventory_weekly[""]["buy_during_period_j_ichiba"] = "Buy During Period J Ichiba";
	$fieldToolTipsEoc_inventory_weekly[""]["buy_during_period_j_ichiba"] = "";
	$placeHoldersEoc_inventory_weekly[""]["buy_during_period_j_ichiba"] = "";
	$fieldLabelsEoc_inventory_weekly[""]["buy_during_period_k"] = "Buy During Period K";
	$fieldToolTipsEoc_inventory_weekly[""]["buy_during_period_k"] = "";
	$placeHoldersEoc_inventory_weekly[""]["buy_during_period_k"] = "";
	$fieldLabelsEoc_inventory_weekly[""]["buy_during_period_d"] = "Buy During Period D";
	$fieldToolTipsEoc_inventory_weekly[""]["buy_during_period_d"] = "";
	$placeHoldersEoc_inventory_weekly[""]["buy_during_period_d"] = "";
	$fieldLabelsEoc_inventory_weekly[""]["buy_during_period_b_ec"] = "Buy During Period B Ec";
	$fieldToolTipsEoc_inventory_weekly[""]["buy_during_period_b_ec"] = "";
	$placeHoldersEoc_inventory_weekly[""]["buy_during_period_b_ec"] = "";
	$fieldLabelsEoc_inventory_weekly[""]["buy_during_period_b_ichiba"] = "Buy During Period B Ichiba";
	$fieldToolTipsEoc_inventory_weekly[""]["buy_during_period_b_ichiba"] = "";
	$placeHoldersEoc_inventory_weekly[""]["buy_during_period_b_ichiba"] = "";
	$fieldLabelsEoc_inventory_weekly[""]["buy_during_period_w_ec"] = "Buy During Period W Ec";
	$fieldToolTipsEoc_inventory_weekly[""]["buy_during_period_w_ec"] = "";
	$placeHoldersEoc_inventory_weekly[""]["buy_during_period_w_ec"] = "";
	$fieldLabelsEoc_inventory_weekly[""]["buy_during_period_w_ichiba"] = "Buy During Period W Ichiba";
	$fieldToolTipsEoc_inventory_weekly[""]["buy_during_period_w_ichiba"] = "";
	$placeHoldersEoc_inventory_weekly[""]["buy_during_period_w_ichiba"] = "";
	$fieldLabelsEoc_inventory_weekly[""]["buy_during_period_c"] = "Buy During Period C";
	$fieldToolTipsEoc_inventory_weekly[""]["buy_during_period_c"] = "";
	$placeHoldersEoc_inventory_weekly[""]["buy_during_period_c"] = "";
	$fieldLabelsEoc_inventory_weekly[""]["created_at"] = "Created At";
	$fieldToolTipsEoc_inventory_weekly[""]["created_at"] = "";
	$placeHoldersEoc_inventory_weekly[""]["created_at"] = "";
	$fieldLabelsEoc_inventory_weekly[""]["updated_at"] = "Updated At";
	$fieldToolTipsEoc_inventory_weekly[""]["updated_at"] = "";
	$placeHoldersEoc_inventory_weekly[""]["updated_at"] = "";
	if (count($fieldToolTipsEoc_inventory_weekly[""]))
		$tdataEoc_inventory_weekly[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsEoc_inventory_weekly["English"] = array();
	$fieldToolTipsEoc_inventory_weekly["English"] = array();
	$placeHoldersEoc_inventory_weekly["English"] = array();
	$pageTitlesEoc_inventory_weekly["English"] = array();
	$fieldLabelsEoc_inventory_weekly["English"]["date"] = "Date";
	$fieldToolTipsEoc_inventory_weekly["English"]["date"] = "";
	$placeHoldersEoc_inventory_weekly["English"]["date"] = "";
	$fieldLabelsEoc_inventory_weekly["English"]["inventory_j_ec"] = "Inventory J Ec";
	$fieldToolTipsEoc_inventory_weekly["English"]["inventory_j_ec"] = "";
	$placeHoldersEoc_inventory_weekly["English"]["inventory_j_ec"] = "";
	$fieldLabelsEoc_inventory_weekly["English"]["inventory_j_ichiba"] = "Inventory J Ichiba";
	$fieldToolTipsEoc_inventory_weekly["English"]["inventory_j_ichiba"] = "";
	$placeHoldersEoc_inventory_weekly["English"]["inventory_j_ichiba"] = "";
	$fieldLabelsEoc_inventory_weekly["English"]["inventory_k"] = "Inventory K";
	$fieldToolTipsEoc_inventory_weekly["English"]["inventory_k"] = "";
	$placeHoldersEoc_inventory_weekly["English"]["inventory_k"] = "";
	$fieldLabelsEoc_inventory_weekly["English"]["inventory_d"] = "Inventory D";
	$fieldToolTipsEoc_inventory_weekly["English"]["inventory_d"] = "";
	$placeHoldersEoc_inventory_weekly["English"]["inventory_d"] = "";
	$fieldLabelsEoc_inventory_weekly["English"]["inventory_b_ec"] = "Inventory B Ec";
	$fieldToolTipsEoc_inventory_weekly["English"]["inventory_b_ec"] = "";
	$placeHoldersEoc_inventory_weekly["English"]["inventory_b_ec"] = "";
	$fieldLabelsEoc_inventory_weekly["English"]["inventory_b_ichiba"] = "Inventory B Ichiba";
	$fieldToolTipsEoc_inventory_weekly["English"]["inventory_b_ichiba"] = "";
	$placeHoldersEoc_inventory_weekly["English"]["inventory_b_ichiba"] = "";
	$fieldLabelsEoc_inventory_weekly["English"]["inventory_w_ec"] = "Inventory W Ec";
	$fieldToolTipsEoc_inventory_weekly["English"]["inventory_w_ec"] = "";
	$placeHoldersEoc_inventory_weekly["English"]["inventory_w_ec"] = "";
	$fieldLabelsEoc_inventory_weekly["English"]["inventory_w_ichiba"] = "Inventory W Ichiba";
	$fieldToolTipsEoc_inventory_weekly["English"]["inventory_w_ichiba"] = "";
	$placeHoldersEoc_inventory_weekly["English"]["inventory_w_ichiba"] = "";
	$fieldLabelsEoc_inventory_weekly["English"]["inventory_c"] = "Inventory C";
	$fieldToolTipsEoc_inventory_weekly["English"]["inventory_c"] = "";
	$placeHoldersEoc_inventory_weekly["English"]["inventory_c"] = "";
	$fieldLabelsEoc_inventory_weekly["English"]["sales_j_ec"] = "Sales J Ec";
	$fieldToolTipsEoc_inventory_weekly["English"]["sales_j_ec"] = "";
	$placeHoldersEoc_inventory_weekly["English"]["sales_j_ec"] = "";
	$fieldLabelsEoc_inventory_weekly["English"]["sales_j_ichiba"] = "Sales J Ichiba";
	$fieldToolTipsEoc_inventory_weekly["English"]["sales_j_ichiba"] = "";
	$placeHoldersEoc_inventory_weekly["English"]["sales_j_ichiba"] = "";
	$fieldLabelsEoc_inventory_weekly["English"]["sales_k"] = "Sales K";
	$fieldToolTipsEoc_inventory_weekly["English"]["sales_k"] = "";
	$placeHoldersEoc_inventory_weekly["English"]["sales_k"] = "";
	$fieldLabelsEoc_inventory_weekly["English"]["sales_d"] = "Sales D";
	$fieldToolTipsEoc_inventory_weekly["English"]["sales_d"] = "";
	$placeHoldersEoc_inventory_weekly["English"]["sales_d"] = "";
	$fieldLabelsEoc_inventory_weekly["English"]["sales_b_ec"] = "Sales B Ec";
	$fieldToolTipsEoc_inventory_weekly["English"]["sales_b_ec"] = "";
	$placeHoldersEoc_inventory_weekly["English"]["sales_b_ec"] = "";
	$fieldLabelsEoc_inventory_weekly["English"]["sales_b_ichiba"] = "Sales B Ichiba";
	$fieldToolTipsEoc_inventory_weekly["English"]["sales_b_ichiba"] = "";
	$placeHoldersEoc_inventory_weekly["English"]["sales_b_ichiba"] = "";
	$fieldLabelsEoc_inventory_weekly["English"]["sales_w_ec"] = "Sales W Ec";
	$fieldToolTipsEoc_inventory_weekly["English"]["sales_w_ec"] = "";
	$placeHoldersEoc_inventory_weekly["English"]["sales_w_ec"] = "";
	$fieldLabelsEoc_inventory_weekly["English"]["sales_w_ichiba"] = "Sales W Ichiba";
	$fieldToolTipsEoc_inventory_weekly["English"]["sales_w_ichiba"] = "";
	$placeHoldersEoc_inventory_weekly["English"]["sales_w_ichiba"] = "";
	$fieldLabelsEoc_inventory_weekly["English"]["sales_c"] = "Sales C";
	$fieldToolTipsEoc_inventory_weekly["English"]["sales_c"] = "";
	$placeHoldersEoc_inventory_weekly["English"]["sales_c"] = "";
	$fieldLabelsEoc_inventory_weekly["English"]["buy_during_period_j_ec"] = "Buy During Period J Ec";
	$fieldToolTipsEoc_inventory_weekly["English"]["buy_during_period_j_ec"] = "";
	$placeHoldersEoc_inventory_weekly["English"]["buy_during_period_j_ec"] = "";
	$fieldLabelsEoc_inventory_weekly["English"]["buy_during_period_j_ichiba"] = "Buy During Period J Ichiba";
	$fieldToolTipsEoc_inventory_weekly["English"]["buy_during_period_j_ichiba"] = "";
	$placeHoldersEoc_inventory_weekly["English"]["buy_during_period_j_ichiba"] = "";
	$fieldLabelsEoc_inventory_weekly["English"]["buy_during_period_k"] = "Buy During Period K";
	$fieldToolTipsEoc_inventory_weekly["English"]["buy_during_period_k"] = "";
	$placeHoldersEoc_inventory_weekly["English"]["buy_during_period_k"] = "";
	$fieldLabelsEoc_inventory_weekly["English"]["buy_during_period_d"] = "Buy During Period D";
	$fieldToolTipsEoc_inventory_weekly["English"]["buy_during_period_d"] = "";
	$placeHoldersEoc_inventory_weekly["English"]["buy_during_period_d"] = "";
	$fieldLabelsEoc_inventory_weekly["English"]["buy_during_period_b_ec"] = "Buy During Period B Ec";
	$fieldToolTipsEoc_inventory_weekly["English"]["buy_during_period_b_ec"] = "";
	$placeHoldersEoc_inventory_weekly["English"]["buy_during_period_b_ec"] = "";
	$fieldLabelsEoc_inventory_weekly["English"]["buy_during_period_b_ichiba"] = "Buy During Period B Ichiba";
	$fieldToolTipsEoc_inventory_weekly["English"]["buy_during_period_b_ichiba"] = "";
	$placeHoldersEoc_inventory_weekly["English"]["buy_during_period_b_ichiba"] = "";
	$fieldLabelsEoc_inventory_weekly["English"]["buy_during_period_w_ec"] = "Buy During Period W Ec";
	$fieldToolTipsEoc_inventory_weekly["English"]["buy_during_period_w_ec"] = "";
	$placeHoldersEoc_inventory_weekly["English"]["buy_during_period_w_ec"] = "";
	$fieldLabelsEoc_inventory_weekly["English"]["buy_during_period_w_ichiba"] = "Buy During Period W Ichiba";
	$fieldToolTipsEoc_inventory_weekly["English"]["buy_during_period_w_ichiba"] = "";
	$placeHoldersEoc_inventory_weekly["English"]["buy_during_period_w_ichiba"] = "";
	$fieldLabelsEoc_inventory_weekly["English"]["buy_during_period_c"] = "Buy During Period C";
	$fieldToolTipsEoc_inventory_weekly["English"]["buy_during_period_c"] = "";
	$placeHoldersEoc_inventory_weekly["English"]["buy_during_period_c"] = "";
	$fieldLabelsEoc_inventory_weekly["English"]["created_at"] = "Created At";
	$fieldToolTipsEoc_inventory_weekly["English"]["created_at"] = "";
	$placeHoldersEoc_inventory_weekly["English"]["created_at"] = "";
	$fieldLabelsEoc_inventory_weekly["English"]["updated_at"] = "Updated At";
	$fieldToolTipsEoc_inventory_weekly["English"]["updated_at"] = "";
	$placeHoldersEoc_inventory_weekly["English"]["updated_at"] = "";
	if (count($fieldToolTipsEoc_inventory_weekly["English"]))
		$tdataEoc_inventory_weekly[".isUseToolTips"] = true;
}


	$tdataEoc_inventory_weekly[".NCSearch"] = true;



$tdataEoc_inventory_weekly[".shortTableName"] = "Eoc_inventory_weekly";
$tdataEoc_inventory_weekly[".nSecOptions"] = 0;
$tdataEoc_inventory_weekly[".recsPerRowPrint"] = 1;
$tdataEoc_inventory_weekly[".mainTableOwnerID"] = "";
$tdataEoc_inventory_weekly[".moveNext"] = 1;
$tdataEoc_inventory_weekly[".entityType"] = 0;

$tdataEoc_inventory_weekly[".strOriginalTableName"] = "Eoc_inventory_weekly";

	



$tdataEoc_inventory_weekly[".showAddInPopup"] = false;

$tdataEoc_inventory_weekly[".showEditInPopup"] = false;

$tdataEoc_inventory_weekly[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataEoc_inventory_weekly[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataEoc_inventory_weekly[".fieldsForRegister"] = array();

$tdataEoc_inventory_weekly[".listAjax"] = false;

	$tdataEoc_inventory_weekly[".audit"] = false;

	$tdataEoc_inventory_weekly[".locking"] = false;



$tdataEoc_inventory_weekly[".list"] = true;



$tdataEoc_inventory_weekly[".reorderRecordsByHeader"] = true;





$tdataEoc_inventory_weekly[".exportTo"] = true;



$tdataEoc_inventory_weekly[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataEoc_inventory_weekly[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataEoc_inventory_weekly[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataEoc_inventory_weekly[".searchSaving"] = false;
//

$tdataEoc_inventory_weekly[".showSearchPanel"] = true;
		$tdataEoc_inventory_weekly[".flexibleSearch"] = true;

$tdataEoc_inventory_weekly[".isUseAjaxSuggest"] = true;

$tdataEoc_inventory_weekly[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdataEoc_inventory_weekly[".ajaxCodeSnippetAdded"] = false;

$tdataEoc_inventory_weekly[".buttonsAdded"] = false;

$tdataEoc_inventory_weekly[".addPageEvents"] = false;

// use timepicker for search panel
$tdataEoc_inventory_weekly[".isUseTimeForSearch"] = false;





$tdataEoc_inventory_weekly[".allSearchFields"] = array();
$tdataEoc_inventory_weekly[".filterFields"] = array();
$tdataEoc_inventory_weekly[".requiredSearchFields"] = array();

$tdataEoc_inventory_weekly[".allSearchFields"][] = "date";
	$tdataEoc_inventory_weekly[".allSearchFields"][] = "inventory_j_ec";
	$tdataEoc_inventory_weekly[".allSearchFields"][] = "inventory_j_ichiba";
	$tdataEoc_inventory_weekly[".allSearchFields"][] = "inventory_k";
	$tdataEoc_inventory_weekly[".allSearchFields"][] = "inventory_d";
	$tdataEoc_inventory_weekly[".allSearchFields"][] = "inventory_b_ec";
	$tdataEoc_inventory_weekly[".allSearchFields"][] = "inventory_b_ichiba";
	$tdataEoc_inventory_weekly[".allSearchFields"][] = "inventory_w_ec";
	$tdataEoc_inventory_weekly[".allSearchFields"][] = "inventory_w_ichiba";
	$tdataEoc_inventory_weekly[".allSearchFields"][] = "inventory_c";
	$tdataEoc_inventory_weekly[".allSearchFields"][] = "sales_j_ec";
	$tdataEoc_inventory_weekly[".allSearchFields"][] = "sales_j_ichiba";
	$tdataEoc_inventory_weekly[".allSearchFields"][] = "sales_k";
	$tdataEoc_inventory_weekly[".allSearchFields"][] = "sales_d";
	$tdataEoc_inventory_weekly[".allSearchFields"][] = "sales_b_ec";
	$tdataEoc_inventory_weekly[".allSearchFields"][] = "sales_b_ichiba";
	$tdataEoc_inventory_weekly[".allSearchFields"][] = "sales_w_ec";
	$tdataEoc_inventory_weekly[".allSearchFields"][] = "sales_w_ichiba";
	$tdataEoc_inventory_weekly[".allSearchFields"][] = "sales_c";
	$tdataEoc_inventory_weekly[".allSearchFields"][] = "buy_during_period_j_ec";
	$tdataEoc_inventory_weekly[".allSearchFields"][] = "buy_during_period_j_ichiba";
	$tdataEoc_inventory_weekly[".allSearchFields"][] = "buy_during_period_k";
	$tdataEoc_inventory_weekly[".allSearchFields"][] = "buy_during_period_d";
	$tdataEoc_inventory_weekly[".allSearchFields"][] = "buy_during_period_b_ec";
	$tdataEoc_inventory_weekly[".allSearchFields"][] = "buy_during_period_b_ichiba";
	$tdataEoc_inventory_weekly[".allSearchFields"][] = "buy_during_period_w_ec";
	$tdataEoc_inventory_weekly[".allSearchFields"][] = "buy_during_period_w_ichiba";
	$tdataEoc_inventory_weekly[".allSearchFields"][] = "buy_during_period_c";
	$tdataEoc_inventory_weekly[".allSearchFields"][] = "created_at";
	$tdataEoc_inventory_weekly[".allSearchFields"][] = "updated_at";
	

$tdataEoc_inventory_weekly[".googleLikeFields"] = array();
$tdataEoc_inventory_weekly[".googleLikeFields"][] = "date";
$tdataEoc_inventory_weekly[".googleLikeFields"][] = "inventory_j_ec";
$tdataEoc_inventory_weekly[".googleLikeFields"][] = "inventory_j_ichiba";
$tdataEoc_inventory_weekly[".googleLikeFields"][] = "inventory_k";
$tdataEoc_inventory_weekly[".googleLikeFields"][] = "inventory_d";
$tdataEoc_inventory_weekly[".googleLikeFields"][] = "inventory_b_ec";
$tdataEoc_inventory_weekly[".googleLikeFields"][] = "inventory_b_ichiba";
$tdataEoc_inventory_weekly[".googleLikeFields"][] = "inventory_w_ec";
$tdataEoc_inventory_weekly[".googleLikeFields"][] = "inventory_w_ichiba";
$tdataEoc_inventory_weekly[".googleLikeFields"][] = "inventory_c";
$tdataEoc_inventory_weekly[".googleLikeFields"][] = "sales_j_ec";
$tdataEoc_inventory_weekly[".googleLikeFields"][] = "sales_j_ichiba";
$tdataEoc_inventory_weekly[".googleLikeFields"][] = "sales_k";
$tdataEoc_inventory_weekly[".googleLikeFields"][] = "sales_d";
$tdataEoc_inventory_weekly[".googleLikeFields"][] = "sales_b_ec";
$tdataEoc_inventory_weekly[".googleLikeFields"][] = "sales_b_ichiba";
$tdataEoc_inventory_weekly[".googleLikeFields"][] = "sales_w_ec";
$tdataEoc_inventory_weekly[".googleLikeFields"][] = "sales_w_ichiba";
$tdataEoc_inventory_weekly[".googleLikeFields"][] = "sales_c";
$tdataEoc_inventory_weekly[".googleLikeFields"][] = "buy_during_period_j_ec";
$tdataEoc_inventory_weekly[".googleLikeFields"][] = "buy_during_period_j_ichiba";
$tdataEoc_inventory_weekly[".googleLikeFields"][] = "buy_during_period_k";
$tdataEoc_inventory_weekly[".googleLikeFields"][] = "buy_during_period_d";
$tdataEoc_inventory_weekly[".googleLikeFields"][] = "buy_during_period_b_ec";
$tdataEoc_inventory_weekly[".googleLikeFields"][] = "buy_during_period_b_ichiba";
$tdataEoc_inventory_weekly[".googleLikeFields"][] = "buy_during_period_w_ec";
$tdataEoc_inventory_weekly[".googleLikeFields"][] = "buy_during_period_w_ichiba";
$tdataEoc_inventory_weekly[".googleLikeFields"][] = "buy_during_period_c";
$tdataEoc_inventory_weekly[".googleLikeFields"][] = "created_at";
$tdataEoc_inventory_weekly[".googleLikeFields"][] = "updated_at";


$tdataEoc_inventory_weekly[".advSearchFields"] = array();
$tdataEoc_inventory_weekly[".advSearchFields"][] = "date";
$tdataEoc_inventory_weekly[".advSearchFields"][] = "inventory_j_ec";
$tdataEoc_inventory_weekly[".advSearchFields"][] = "inventory_j_ichiba";
$tdataEoc_inventory_weekly[".advSearchFields"][] = "inventory_k";
$tdataEoc_inventory_weekly[".advSearchFields"][] = "inventory_d";
$tdataEoc_inventory_weekly[".advSearchFields"][] = "inventory_b_ec";
$tdataEoc_inventory_weekly[".advSearchFields"][] = "inventory_b_ichiba";
$tdataEoc_inventory_weekly[".advSearchFields"][] = "inventory_w_ec";
$tdataEoc_inventory_weekly[".advSearchFields"][] = "inventory_w_ichiba";
$tdataEoc_inventory_weekly[".advSearchFields"][] = "inventory_c";
$tdataEoc_inventory_weekly[".advSearchFields"][] = "sales_j_ec";
$tdataEoc_inventory_weekly[".advSearchFields"][] = "sales_j_ichiba";
$tdataEoc_inventory_weekly[".advSearchFields"][] = "sales_k";
$tdataEoc_inventory_weekly[".advSearchFields"][] = "sales_d";
$tdataEoc_inventory_weekly[".advSearchFields"][] = "sales_b_ec";
$tdataEoc_inventory_weekly[".advSearchFields"][] = "sales_b_ichiba";
$tdataEoc_inventory_weekly[".advSearchFields"][] = "sales_w_ec";
$tdataEoc_inventory_weekly[".advSearchFields"][] = "sales_w_ichiba";
$tdataEoc_inventory_weekly[".advSearchFields"][] = "sales_c";
$tdataEoc_inventory_weekly[".advSearchFields"][] = "buy_during_period_j_ec";
$tdataEoc_inventory_weekly[".advSearchFields"][] = "buy_during_period_j_ichiba";
$tdataEoc_inventory_weekly[".advSearchFields"][] = "buy_during_period_k";
$tdataEoc_inventory_weekly[".advSearchFields"][] = "buy_during_period_d";
$tdataEoc_inventory_weekly[".advSearchFields"][] = "buy_during_period_b_ec";
$tdataEoc_inventory_weekly[".advSearchFields"][] = "buy_during_period_b_ichiba";
$tdataEoc_inventory_weekly[".advSearchFields"][] = "buy_during_period_w_ec";
$tdataEoc_inventory_weekly[".advSearchFields"][] = "buy_during_period_w_ichiba";
$tdataEoc_inventory_weekly[".advSearchFields"][] = "buy_during_period_c";
$tdataEoc_inventory_weekly[".advSearchFields"][] = "created_at";
$tdataEoc_inventory_weekly[".advSearchFields"][] = "updated_at";

$tdataEoc_inventory_weekly[".tableType"] = "list";

$tdataEoc_inventory_weekly[".printerPageOrientation"] = 0;
$tdataEoc_inventory_weekly[".nPrinterPageScale"] = 100;

$tdataEoc_inventory_weekly[".nPrinterSplitRecords"] = 40;

$tdataEoc_inventory_weekly[".nPrinterPDFSplitRecords"] = 40;



$tdataEoc_inventory_weekly[".geocodingEnabled"] = false;





$tdataEoc_inventory_weekly[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataEoc_inventory_weekly[".pageSize"] = 20;

$tdataEoc_inventory_weekly[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY `date` DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataEoc_inventory_weekly[".strOrderBy"] = $tstrOrderBy;

$tdataEoc_inventory_weekly[".orderindexes"] = array();
$tdataEoc_inventory_weekly[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "`date`");

$tdataEoc_inventory_weekly[".sqlHead"] = "SELECT `date`,  `inventory_j_ec`,  `inventory_j_ichiba`,  `inventory_k`,  `inventory_d`,  `inventory_b_ec`,  `inventory_b_ichiba`,  `inventory_w_ec`,  `inventory_w_ichiba`,  `inventory_c`,  `sales_j_ec`,  `sales_j_ichiba`,  `sales_k`,  `sales_d`,  `sales_b_ec`,  `sales_b_ichiba`,  `sales_w_ec`,  `sales_w_ichiba`,  `sales_c`,  `buy_during_period_j_ec`,  `buy_during_period_j_ichiba`,  `buy_during_period_k`,  `buy_during_period_d`,  `buy_during_period_b_ec`,  `buy_during_period_b_ichiba`,  `buy_during_period_w_ec`,  `buy_during_period_w_ichiba`,  `buy_during_period_c`,  `created_at`,  `updated_at`";
$tdataEoc_inventory_weekly[".sqlFrom"] = "FROM `Eoc_inventory_weekly`";
$tdataEoc_inventory_weekly[".sqlWhereExpr"] = "";
$tdataEoc_inventory_weekly[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataEoc_inventory_weekly[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataEoc_inventory_weekly[".arrGroupsPerPage"] = $arrGPP;

$tdataEoc_inventory_weekly[".highlightSearchResults"] = true;

$tableKeysEoc_inventory_weekly = array();
$tableKeysEoc_inventory_weekly[] = "date";
$tdataEoc_inventory_weekly[".Keys"] = $tableKeysEoc_inventory_weekly;

$tdataEoc_inventory_weekly[".listFields"] = array();
$tdataEoc_inventory_weekly[".listFields"][] = "date";
$tdataEoc_inventory_weekly[".listFields"][] = "inventory_j_ec";
$tdataEoc_inventory_weekly[".listFields"][] = "inventory_j_ichiba";
$tdataEoc_inventory_weekly[".listFields"][] = "inventory_k";
$tdataEoc_inventory_weekly[".listFields"][] = "inventory_d";
$tdataEoc_inventory_weekly[".listFields"][] = "inventory_b_ec";
$tdataEoc_inventory_weekly[".listFields"][] = "inventory_b_ichiba";
$tdataEoc_inventory_weekly[".listFields"][] = "inventory_w_ec";
$tdataEoc_inventory_weekly[".listFields"][] = "inventory_w_ichiba";
$tdataEoc_inventory_weekly[".listFields"][] = "inventory_c";
$tdataEoc_inventory_weekly[".listFields"][] = "sales_j_ec";
$tdataEoc_inventory_weekly[".listFields"][] = "sales_j_ichiba";
$tdataEoc_inventory_weekly[".listFields"][] = "sales_k";
$tdataEoc_inventory_weekly[".listFields"][] = "sales_d";
$tdataEoc_inventory_weekly[".listFields"][] = "sales_b_ec";
$tdataEoc_inventory_weekly[".listFields"][] = "sales_b_ichiba";
$tdataEoc_inventory_weekly[".listFields"][] = "sales_w_ec";
$tdataEoc_inventory_weekly[".listFields"][] = "sales_w_ichiba";
$tdataEoc_inventory_weekly[".listFields"][] = "sales_c";
$tdataEoc_inventory_weekly[".listFields"][] = "buy_during_period_j_ec";
$tdataEoc_inventory_weekly[".listFields"][] = "buy_during_period_j_ichiba";
$tdataEoc_inventory_weekly[".listFields"][] = "buy_during_period_k";
$tdataEoc_inventory_weekly[".listFields"][] = "buy_during_period_d";
$tdataEoc_inventory_weekly[".listFields"][] = "buy_during_period_b_ec";
$tdataEoc_inventory_weekly[".listFields"][] = "buy_during_period_b_ichiba";
$tdataEoc_inventory_weekly[".listFields"][] = "buy_during_period_w_ec";
$tdataEoc_inventory_weekly[".listFields"][] = "buy_during_period_w_ichiba";
$tdataEoc_inventory_weekly[".listFields"][] = "buy_during_period_c";
$tdataEoc_inventory_weekly[".listFields"][] = "created_at";
$tdataEoc_inventory_weekly[".listFields"][] = "updated_at";

$tdataEoc_inventory_weekly[".hideMobileList"] = array();


$tdataEoc_inventory_weekly[".viewFields"] = array();

$tdataEoc_inventory_weekly[".addFields"] = array();

$tdataEoc_inventory_weekly[".masterListFields"] = array();
$tdataEoc_inventory_weekly[".masterListFields"][] = "date";
$tdataEoc_inventory_weekly[".masterListFields"][] = "inventory_j_ec";
$tdataEoc_inventory_weekly[".masterListFields"][] = "inventory_j_ichiba";
$tdataEoc_inventory_weekly[".masterListFields"][] = "inventory_k";
$tdataEoc_inventory_weekly[".masterListFields"][] = "inventory_d";
$tdataEoc_inventory_weekly[".masterListFields"][] = "inventory_b_ec";
$tdataEoc_inventory_weekly[".masterListFields"][] = "inventory_b_ichiba";
$tdataEoc_inventory_weekly[".masterListFields"][] = "inventory_w_ec";
$tdataEoc_inventory_weekly[".masterListFields"][] = "inventory_w_ichiba";
$tdataEoc_inventory_weekly[".masterListFields"][] = "inventory_c";
$tdataEoc_inventory_weekly[".masterListFields"][] = "sales_j_ec";
$tdataEoc_inventory_weekly[".masterListFields"][] = "sales_j_ichiba";
$tdataEoc_inventory_weekly[".masterListFields"][] = "sales_k";
$tdataEoc_inventory_weekly[".masterListFields"][] = "sales_d";
$tdataEoc_inventory_weekly[".masterListFields"][] = "sales_b_ec";
$tdataEoc_inventory_weekly[".masterListFields"][] = "sales_b_ichiba";
$tdataEoc_inventory_weekly[".masterListFields"][] = "sales_w_ec";
$tdataEoc_inventory_weekly[".masterListFields"][] = "sales_w_ichiba";
$tdataEoc_inventory_weekly[".masterListFields"][] = "sales_c";
$tdataEoc_inventory_weekly[".masterListFields"][] = "buy_during_period_j_ec";
$tdataEoc_inventory_weekly[".masterListFields"][] = "buy_during_period_j_ichiba";
$tdataEoc_inventory_weekly[".masterListFields"][] = "buy_during_period_k";
$tdataEoc_inventory_weekly[".masterListFields"][] = "buy_during_period_d";
$tdataEoc_inventory_weekly[".masterListFields"][] = "buy_during_period_b_ec";
$tdataEoc_inventory_weekly[".masterListFields"][] = "buy_during_period_b_ichiba";
$tdataEoc_inventory_weekly[".masterListFields"][] = "buy_during_period_w_ec";
$tdataEoc_inventory_weekly[".masterListFields"][] = "buy_during_period_w_ichiba";
$tdataEoc_inventory_weekly[".masterListFields"][] = "buy_during_period_c";
$tdataEoc_inventory_weekly[".masterListFields"][] = "created_at";
$tdataEoc_inventory_weekly[".masterListFields"][] = "updated_at";

$tdataEoc_inventory_weekly[".inlineAddFields"] = array();

$tdataEoc_inventory_weekly[".editFields"] = array();

$tdataEoc_inventory_weekly[".inlineEditFields"] = array();

$tdataEoc_inventory_weekly[".updateSelectedFields"] = array();


$tdataEoc_inventory_weekly[".exportFields"] = array();
$tdataEoc_inventory_weekly[".exportFields"][] = "date";
$tdataEoc_inventory_weekly[".exportFields"][] = "inventory_j_ec";
$tdataEoc_inventory_weekly[".exportFields"][] = "inventory_j_ichiba";
$tdataEoc_inventory_weekly[".exportFields"][] = "inventory_k";
$tdataEoc_inventory_weekly[".exportFields"][] = "inventory_d";
$tdataEoc_inventory_weekly[".exportFields"][] = "inventory_b_ec";
$tdataEoc_inventory_weekly[".exportFields"][] = "inventory_b_ichiba";
$tdataEoc_inventory_weekly[".exportFields"][] = "inventory_w_ec";
$tdataEoc_inventory_weekly[".exportFields"][] = "inventory_w_ichiba";
$tdataEoc_inventory_weekly[".exportFields"][] = "inventory_c";
$tdataEoc_inventory_weekly[".exportFields"][] = "sales_j_ec";
$tdataEoc_inventory_weekly[".exportFields"][] = "sales_j_ichiba";
$tdataEoc_inventory_weekly[".exportFields"][] = "sales_k";
$tdataEoc_inventory_weekly[".exportFields"][] = "sales_d";
$tdataEoc_inventory_weekly[".exportFields"][] = "sales_b_ec";
$tdataEoc_inventory_weekly[".exportFields"][] = "sales_b_ichiba";
$tdataEoc_inventory_weekly[".exportFields"][] = "sales_w_ec";
$tdataEoc_inventory_weekly[".exportFields"][] = "sales_w_ichiba";
$tdataEoc_inventory_weekly[".exportFields"][] = "sales_c";
$tdataEoc_inventory_weekly[".exportFields"][] = "buy_during_period_j_ec";
$tdataEoc_inventory_weekly[".exportFields"][] = "buy_during_period_j_ichiba";
$tdataEoc_inventory_weekly[".exportFields"][] = "buy_during_period_k";
$tdataEoc_inventory_weekly[".exportFields"][] = "buy_during_period_d";
$tdataEoc_inventory_weekly[".exportFields"][] = "buy_during_period_b_ec";
$tdataEoc_inventory_weekly[".exportFields"][] = "buy_during_period_b_ichiba";
$tdataEoc_inventory_weekly[".exportFields"][] = "buy_during_period_w_ec";
$tdataEoc_inventory_weekly[".exportFields"][] = "buy_during_period_w_ichiba";
$tdataEoc_inventory_weekly[".exportFields"][] = "buy_during_period_c";
$tdataEoc_inventory_weekly[".exportFields"][] = "created_at";
$tdataEoc_inventory_weekly[".exportFields"][] = "updated_at";

$tdataEoc_inventory_weekly[".importFields"] = array();

$tdataEoc_inventory_weekly[".printFields"] = array();

//	date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "date";
	$fdata["GoodName"] = "date";
	$fdata["ownerTable"] = "Eoc_inventory_weekly";
	$fdata["Label"] = GetFieldLabel("Eoc_inventory_weekly","date");
	$fdata["FieldType"] = 7;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`date`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
	



		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdataEoc_inventory_weekly["date"] = $fdata;
//	inventory_j_ec
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "inventory_j_ec";
	$fdata["GoodName"] = "inventory_j_ec";
	$fdata["ownerTable"] = "Eoc_inventory_weekly";
	$fdata["Label"] = GetFieldLabel("Eoc_inventory_weekly","inventory_j_ec");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "inventory_j_ec";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`inventory_j_ec`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataEoc_inventory_weekly["inventory_j_ec"] = $fdata;
//	inventory_j_ichiba
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "inventory_j_ichiba";
	$fdata["GoodName"] = "inventory_j_ichiba";
	$fdata["ownerTable"] = "Eoc_inventory_weekly";
	$fdata["Label"] = GetFieldLabel("Eoc_inventory_weekly","inventory_j_ichiba");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "inventory_j_ichiba";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`inventory_j_ichiba`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataEoc_inventory_weekly["inventory_j_ichiba"] = $fdata;
//	inventory_k
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "inventory_k";
	$fdata["GoodName"] = "inventory_k";
	$fdata["ownerTable"] = "Eoc_inventory_weekly";
	$fdata["Label"] = GetFieldLabel("Eoc_inventory_weekly","inventory_k");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "inventory_k";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`inventory_k`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataEoc_inventory_weekly["inventory_k"] = $fdata;
//	inventory_d
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "inventory_d";
	$fdata["GoodName"] = "inventory_d";
	$fdata["ownerTable"] = "Eoc_inventory_weekly";
	$fdata["Label"] = GetFieldLabel("Eoc_inventory_weekly","inventory_d");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "inventory_d";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`inventory_d`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataEoc_inventory_weekly["inventory_d"] = $fdata;
//	inventory_b_ec
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "inventory_b_ec";
	$fdata["GoodName"] = "inventory_b_ec";
	$fdata["ownerTable"] = "Eoc_inventory_weekly";
	$fdata["Label"] = GetFieldLabel("Eoc_inventory_weekly","inventory_b_ec");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "inventory_b_ec";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`inventory_b_ec`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataEoc_inventory_weekly["inventory_b_ec"] = $fdata;
//	inventory_b_ichiba
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "inventory_b_ichiba";
	$fdata["GoodName"] = "inventory_b_ichiba";
	$fdata["ownerTable"] = "Eoc_inventory_weekly";
	$fdata["Label"] = GetFieldLabel("Eoc_inventory_weekly","inventory_b_ichiba");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "inventory_b_ichiba";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`inventory_b_ichiba`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataEoc_inventory_weekly["inventory_b_ichiba"] = $fdata;
//	inventory_w_ec
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "inventory_w_ec";
	$fdata["GoodName"] = "inventory_w_ec";
	$fdata["ownerTable"] = "Eoc_inventory_weekly";
	$fdata["Label"] = GetFieldLabel("Eoc_inventory_weekly","inventory_w_ec");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "inventory_w_ec";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`inventory_w_ec`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataEoc_inventory_weekly["inventory_w_ec"] = $fdata;
//	inventory_w_ichiba
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "inventory_w_ichiba";
	$fdata["GoodName"] = "inventory_w_ichiba";
	$fdata["ownerTable"] = "Eoc_inventory_weekly";
	$fdata["Label"] = GetFieldLabel("Eoc_inventory_weekly","inventory_w_ichiba");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "inventory_w_ichiba";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`inventory_w_ichiba`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataEoc_inventory_weekly["inventory_w_ichiba"] = $fdata;
//	inventory_c
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "inventory_c";
	$fdata["GoodName"] = "inventory_c";
	$fdata["ownerTable"] = "Eoc_inventory_weekly";
	$fdata["Label"] = GetFieldLabel("Eoc_inventory_weekly","inventory_c");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "inventory_c";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`inventory_c`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataEoc_inventory_weekly["inventory_c"] = $fdata;
//	sales_j_ec
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "sales_j_ec";
	$fdata["GoodName"] = "sales_j_ec";
	$fdata["ownerTable"] = "Eoc_inventory_weekly";
	$fdata["Label"] = GetFieldLabel("Eoc_inventory_weekly","sales_j_ec");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "sales_j_ec";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`sales_j_ec`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataEoc_inventory_weekly["sales_j_ec"] = $fdata;
//	sales_j_ichiba
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "sales_j_ichiba";
	$fdata["GoodName"] = "sales_j_ichiba";
	$fdata["ownerTable"] = "Eoc_inventory_weekly";
	$fdata["Label"] = GetFieldLabel("Eoc_inventory_weekly","sales_j_ichiba");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "sales_j_ichiba";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`sales_j_ichiba`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataEoc_inventory_weekly["sales_j_ichiba"] = $fdata;
//	sales_k
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "sales_k";
	$fdata["GoodName"] = "sales_k";
	$fdata["ownerTable"] = "Eoc_inventory_weekly";
	$fdata["Label"] = GetFieldLabel("Eoc_inventory_weekly","sales_k");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "sales_k";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`sales_k`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataEoc_inventory_weekly["sales_k"] = $fdata;
//	sales_d
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "sales_d";
	$fdata["GoodName"] = "sales_d";
	$fdata["ownerTable"] = "Eoc_inventory_weekly";
	$fdata["Label"] = GetFieldLabel("Eoc_inventory_weekly","sales_d");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "sales_d";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`sales_d`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataEoc_inventory_weekly["sales_d"] = $fdata;
//	sales_b_ec
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "sales_b_ec";
	$fdata["GoodName"] = "sales_b_ec";
	$fdata["ownerTable"] = "Eoc_inventory_weekly";
	$fdata["Label"] = GetFieldLabel("Eoc_inventory_weekly","sales_b_ec");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "sales_b_ec";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`sales_b_ec`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataEoc_inventory_weekly["sales_b_ec"] = $fdata;
//	sales_b_ichiba
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "sales_b_ichiba";
	$fdata["GoodName"] = "sales_b_ichiba";
	$fdata["ownerTable"] = "Eoc_inventory_weekly";
	$fdata["Label"] = GetFieldLabel("Eoc_inventory_weekly","sales_b_ichiba");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "sales_b_ichiba";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`sales_b_ichiba`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataEoc_inventory_weekly["sales_b_ichiba"] = $fdata;
//	sales_w_ec
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "sales_w_ec";
	$fdata["GoodName"] = "sales_w_ec";
	$fdata["ownerTable"] = "Eoc_inventory_weekly";
	$fdata["Label"] = GetFieldLabel("Eoc_inventory_weekly","sales_w_ec");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "sales_w_ec";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`sales_w_ec`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataEoc_inventory_weekly["sales_w_ec"] = $fdata;
//	sales_w_ichiba
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "sales_w_ichiba";
	$fdata["GoodName"] = "sales_w_ichiba";
	$fdata["ownerTable"] = "Eoc_inventory_weekly";
	$fdata["Label"] = GetFieldLabel("Eoc_inventory_weekly","sales_w_ichiba");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "sales_w_ichiba";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`sales_w_ichiba`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataEoc_inventory_weekly["sales_w_ichiba"] = $fdata;
//	sales_c
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "sales_c";
	$fdata["GoodName"] = "sales_c";
	$fdata["ownerTable"] = "Eoc_inventory_weekly";
	$fdata["Label"] = GetFieldLabel("Eoc_inventory_weekly","sales_c");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "sales_c";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`sales_c`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataEoc_inventory_weekly["sales_c"] = $fdata;
//	buy_during_period_j_ec
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "buy_during_period_j_ec";
	$fdata["GoodName"] = "buy_during_period_j_ec";
	$fdata["ownerTable"] = "Eoc_inventory_weekly";
	$fdata["Label"] = GetFieldLabel("Eoc_inventory_weekly","buy_during_period_j_ec");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "buy_during_period_j_ec";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`buy_during_period_j_ec`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataEoc_inventory_weekly["buy_during_period_j_ec"] = $fdata;
//	buy_during_period_j_ichiba
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "buy_during_period_j_ichiba";
	$fdata["GoodName"] = "buy_during_period_j_ichiba";
	$fdata["ownerTable"] = "Eoc_inventory_weekly";
	$fdata["Label"] = GetFieldLabel("Eoc_inventory_weekly","buy_during_period_j_ichiba");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "buy_during_period_j_ichiba";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`buy_during_period_j_ichiba`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataEoc_inventory_weekly["buy_during_period_j_ichiba"] = $fdata;
//	buy_during_period_k
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "buy_during_period_k";
	$fdata["GoodName"] = "buy_during_period_k";
	$fdata["ownerTable"] = "Eoc_inventory_weekly";
	$fdata["Label"] = GetFieldLabel("Eoc_inventory_weekly","buy_during_period_k");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "buy_during_period_k";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`buy_during_period_k`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataEoc_inventory_weekly["buy_during_period_k"] = $fdata;
//	buy_during_period_d
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "buy_during_period_d";
	$fdata["GoodName"] = "buy_during_period_d";
	$fdata["ownerTable"] = "Eoc_inventory_weekly";
	$fdata["Label"] = GetFieldLabel("Eoc_inventory_weekly","buy_during_period_d");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "buy_during_period_d";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`buy_during_period_d`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataEoc_inventory_weekly["buy_during_period_d"] = $fdata;
//	buy_during_period_b_ec
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "buy_during_period_b_ec";
	$fdata["GoodName"] = "buy_during_period_b_ec";
	$fdata["ownerTable"] = "Eoc_inventory_weekly";
	$fdata["Label"] = GetFieldLabel("Eoc_inventory_weekly","buy_during_period_b_ec");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "buy_during_period_b_ec";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`buy_during_period_b_ec`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataEoc_inventory_weekly["buy_during_period_b_ec"] = $fdata;
//	buy_during_period_b_ichiba
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "buy_during_period_b_ichiba";
	$fdata["GoodName"] = "buy_during_period_b_ichiba";
	$fdata["ownerTable"] = "Eoc_inventory_weekly";
	$fdata["Label"] = GetFieldLabel("Eoc_inventory_weekly","buy_during_period_b_ichiba");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "buy_during_period_b_ichiba";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`buy_during_period_b_ichiba`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataEoc_inventory_weekly["buy_during_period_b_ichiba"] = $fdata;
//	buy_during_period_w_ec
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "buy_during_period_w_ec";
	$fdata["GoodName"] = "buy_during_period_w_ec";
	$fdata["ownerTable"] = "Eoc_inventory_weekly";
	$fdata["Label"] = GetFieldLabel("Eoc_inventory_weekly","buy_during_period_w_ec");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "buy_during_period_w_ec";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`buy_during_period_w_ec`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataEoc_inventory_weekly["buy_during_period_w_ec"] = $fdata;
//	buy_during_period_w_ichiba
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "buy_during_period_w_ichiba";
	$fdata["GoodName"] = "buy_during_period_w_ichiba";
	$fdata["ownerTable"] = "Eoc_inventory_weekly";
	$fdata["Label"] = GetFieldLabel("Eoc_inventory_weekly","buy_during_period_w_ichiba");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "buy_during_period_w_ichiba";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`buy_during_period_w_ichiba`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataEoc_inventory_weekly["buy_during_period_w_ichiba"] = $fdata;
//	buy_during_period_c
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "buy_during_period_c";
	$fdata["GoodName"] = "buy_during_period_c";
	$fdata["ownerTable"] = "Eoc_inventory_weekly";
	$fdata["Label"] = GetFieldLabel("Eoc_inventory_weekly","buy_during_period_c");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "buy_during_period_c";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`buy_during_period_c`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataEoc_inventory_weekly["buy_during_period_c"] = $fdata;
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "Eoc_inventory_weekly";
	$fdata["Label"] = GetFieldLabel("Eoc_inventory_weekly","created_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "created_at";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`created_at`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

		$edata["ShowTime"] = true;

	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdataEoc_inventory_weekly["created_at"] = $fdata;
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "Eoc_inventory_weekly";
	$fdata["Label"] = GetFieldLabel("Eoc_inventory_weekly","updated_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "updated_at";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`updated_at`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

		$edata["ShowTime"] = true;

	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdataEoc_inventory_weekly["updated_at"] = $fdata;


$tables_data["Eoc_inventory_weekly"]=&$tdataEoc_inventory_weekly;
$field_labels["Eoc_inventory_weekly"] = &$fieldLabelsEoc_inventory_weekly;
$fieldToolTips["Eoc_inventory_weekly"] = &$fieldToolTipsEoc_inventory_weekly;
$placeHolders["Eoc_inventory_weekly"] = &$placeHoldersEoc_inventory_weekly;
$page_titles["Eoc_inventory_weekly"] = &$pageTitlesEoc_inventory_weekly;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Eoc_inventory_weekly"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["Eoc_inventory_weekly"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Eoc_inventory_weekly()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`date`,  `inventory_j_ec`,  `inventory_j_ichiba`,  `inventory_k`,  `inventory_d`,  `inventory_b_ec`,  `inventory_b_ichiba`,  `inventory_w_ec`,  `inventory_w_ichiba`,  `inventory_c`,  `sales_j_ec`,  `sales_j_ichiba`,  `sales_k`,  `sales_d`,  `sales_b_ec`,  `sales_b_ichiba`,  `sales_w_ec`,  `sales_w_ichiba`,  `sales_c`,  `buy_during_period_j_ec`,  `buy_during_period_j_ichiba`,  `buy_during_period_k`,  `buy_during_period_d`,  `buy_during_period_b_ec`,  `buy_during_period_b_ichiba`,  `buy_during_period_w_ec`,  `buy_during_period_w_ichiba`,  `buy_during_period_c`,  `created_at`,  `updated_at`";
$proto0["m_strFrom"] = "FROM `Eoc_inventory_weekly`";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY `date` DESC";
$proto0["m_strTail"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto4=array();
$proto4["m_sql"] = "";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto6=array();
			$obj = new SQLField(array(
	"m_strName" => "date",
	"m_strTable" => "Eoc_inventory_weekly",
	"m_srcTableName" => "Eoc_inventory_weekly"
));

$proto6["m_sql"] = "`date`";
$proto6["m_srcTableName"] = "Eoc_inventory_weekly";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "inventory_j_ec",
	"m_strTable" => "Eoc_inventory_weekly",
	"m_srcTableName" => "Eoc_inventory_weekly"
));

$proto8["m_sql"] = "`inventory_j_ec`";
$proto8["m_srcTableName"] = "Eoc_inventory_weekly";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "inventory_j_ichiba",
	"m_strTable" => "Eoc_inventory_weekly",
	"m_srcTableName" => "Eoc_inventory_weekly"
));

$proto10["m_sql"] = "`inventory_j_ichiba`";
$proto10["m_srcTableName"] = "Eoc_inventory_weekly";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "inventory_k",
	"m_strTable" => "Eoc_inventory_weekly",
	"m_srcTableName" => "Eoc_inventory_weekly"
));

$proto12["m_sql"] = "`inventory_k`";
$proto12["m_srcTableName"] = "Eoc_inventory_weekly";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "inventory_d",
	"m_strTable" => "Eoc_inventory_weekly",
	"m_srcTableName" => "Eoc_inventory_weekly"
));

$proto14["m_sql"] = "`inventory_d`";
$proto14["m_srcTableName"] = "Eoc_inventory_weekly";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "inventory_b_ec",
	"m_strTable" => "Eoc_inventory_weekly",
	"m_srcTableName" => "Eoc_inventory_weekly"
));

$proto16["m_sql"] = "`inventory_b_ec`";
$proto16["m_srcTableName"] = "Eoc_inventory_weekly";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "inventory_b_ichiba",
	"m_strTable" => "Eoc_inventory_weekly",
	"m_srcTableName" => "Eoc_inventory_weekly"
));

$proto18["m_sql"] = "`inventory_b_ichiba`";
$proto18["m_srcTableName"] = "Eoc_inventory_weekly";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "inventory_w_ec",
	"m_strTable" => "Eoc_inventory_weekly",
	"m_srcTableName" => "Eoc_inventory_weekly"
));

$proto20["m_sql"] = "`inventory_w_ec`";
$proto20["m_srcTableName"] = "Eoc_inventory_weekly";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "inventory_w_ichiba",
	"m_strTable" => "Eoc_inventory_weekly",
	"m_srcTableName" => "Eoc_inventory_weekly"
));

$proto22["m_sql"] = "`inventory_w_ichiba`";
$proto22["m_srcTableName"] = "Eoc_inventory_weekly";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "inventory_c",
	"m_strTable" => "Eoc_inventory_weekly",
	"m_srcTableName" => "Eoc_inventory_weekly"
));

$proto24["m_sql"] = "`inventory_c`";
$proto24["m_srcTableName"] = "Eoc_inventory_weekly";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "sales_j_ec",
	"m_strTable" => "Eoc_inventory_weekly",
	"m_srcTableName" => "Eoc_inventory_weekly"
));

$proto26["m_sql"] = "`sales_j_ec`";
$proto26["m_srcTableName"] = "Eoc_inventory_weekly";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "sales_j_ichiba",
	"m_strTable" => "Eoc_inventory_weekly",
	"m_srcTableName" => "Eoc_inventory_weekly"
));

$proto28["m_sql"] = "`sales_j_ichiba`";
$proto28["m_srcTableName"] = "Eoc_inventory_weekly";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "sales_k",
	"m_strTable" => "Eoc_inventory_weekly",
	"m_srcTableName" => "Eoc_inventory_weekly"
));

$proto30["m_sql"] = "`sales_k`";
$proto30["m_srcTableName"] = "Eoc_inventory_weekly";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "sales_d",
	"m_strTable" => "Eoc_inventory_weekly",
	"m_srcTableName" => "Eoc_inventory_weekly"
));

$proto32["m_sql"] = "`sales_d`";
$proto32["m_srcTableName"] = "Eoc_inventory_weekly";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "sales_b_ec",
	"m_strTable" => "Eoc_inventory_weekly",
	"m_srcTableName" => "Eoc_inventory_weekly"
));

$proto34["m_sql"] = "`sales_b_ec`";
$proto34["m_srcTableName"] = "Eoc_inventory_weekly";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "sales_b_ichiba",
	"m_strTable" => "Eoc_inventory_weekly",
	"m_srcTableName" => "Eoc_inventory_weekly"
));

$proto36["m_sql"] = "`sales_b_ichiba`";
$proto36["m_srcTableName"] = "Eoc_inventory_weekly";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "sales_w_ec",
	"m_strTable" => "Eoc_inventory_weekly",
	"m_srcTableName" => "Eoc_inventory_weekly"
));

$proto38["m_sql"] = "`sales_w_ec`";
$proto38["m_srcTableName"] = "Eoc_inventory_weekly";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "sales_w_ichiba",
	"m_strTable" => "Eoc_inventory_weekly",
	"m_srcTableName" => "Eoc_inventory_weekly"
));

$proto40["m_sql"] = "`sales_w_ichiba`";
$proto40["m_srcTableName"] = "Eoc_inventory_weekly";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "sales_c",
	"m_strTable" => "Eoc_inventory_weekly",
	"m_srcTableName" => "Eoc_inventory_weekly"
));

$proto42["m_sql"] = "`sales_c`";
$proto42["m_srcTableName"] = "Eoc_inventory_weekly";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "buy_during_period_j_ec",
	"m_strTable" => "Eoc_inventory_weekly",
	"m_srcTableName" => "Eoc_inventory_weekly"
));

$proto44["m_sql"] = "`buy_during_period_j_ec`";
$proto44["m_srcTableName"] = "Eoc_inventory_weekly";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "buy_during_period_j_ichiba",
	"m_strTable" => "Eoc_inventory_weekly",
	"m_srcTableName" => "Eoc_inventory_weekly"
));

$proto46["m_sql"] = "`buy_during_period_j_ichiba`";
$proto46["m_srcTableName"] = "Eoc_inventory_weekly";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "buy_during_period_k",
	"m_strTable" => "Eoc_inventory_weekly",
	"m_srcTableName" => "Eoc_inventory_weekly"
));

$proto48["m_sql"] = "`buy_during_period_k`";
$proto48["m_srcTableName"] = "Eoc_inventory_weekly";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "buy_during_period_d",
	"m_strTable" => "Eoc_inventory_weekly",
	"m_srcTableName" => "Eoc_inventory_weekly"
));

$proto50["m_sql"] = "`buy_during_period_d`";
$proto50["m_srcTableName"] = "Eoc_inventory_weekly";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "buy_during_period_b_ec",
	"m_strTable" => "Eoc_inventory_weekly",
	"m_srcTableName" => "Eoc_inventory_weekly"
));

$proto52["m_sql"] = "`buy_during_period_b_ec`";
$proto52["m_srcTableName"] = "Eoc_inventory_weekly";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "buy_during_period_b_ichiba",
	"m_strTable" => "Eoc_inventory_weekly",
	"m_srcTableName" => "Eoc_inventory_weekly"
));

$proto54["m_sql"] = "`buy_during_period_b_ichiba`";
$proto54["m_srcTableName"] = "Eoc_inventory_weekly";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "buy_during_period_w_ec",
	"m_strTable" => "Eoc_inventory_weekly",
	"m_srcTableName" => "Eoc_inventory_weekly"
));

$proto56["m_sql"] = "`buy_during_period_w_ec`";
$proto56["m_srcTableName"] = "Eoc_inventory_weekly";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "buy_during_period_w_ichiba",
	"m_strTable" => "Eoc_inventory_weekly",
	"m_srcTableName" => "Eoc_inventory_weekly"
));

$proto58["m_sql"] = "`buy_during_period_w_ichiba`";
$proto58["m_srcTableName"] = "Eoc_inventory_weekly";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "buy_during_period_c",
	"m_strTable" => "Eoc_inventory_weekly",
	"m_srcTableName" => "Eoc_inventory_weekly"
));

$proto60["m_sql"] = "`buy_during_period_c`";
$proto60["m_srcTableName"] = "Eoc_inventory_weekly";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "Eoc_inventory_weekly",
	"m_srcTableName" => "Eoc_inventory_weekly"
));

$proto62["m_sql"] = "`created_at`";
$proto62["m_srcTableName"] = "Eoc_inventory_weekly";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "Eoc_inventory_weekly",
	"m_srcTableName" => "Eoc_inventory_weekly"
));

$proto64["m_sql"] = "`updated_at`";
$proto64["m_srcTableName"] = "Eoc_inventory_weekly";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto66=array();
$proto66["m_link"] = "SQLL_MAIN";
			$proto67=array();
$proto67["m_strName"] = "Eoc_inventory_weekly";
$proto67["m_srcTableName"] = "Eoc_inventory_weekly";
$proto67["m_columns"] = array();
$proto67["m_columns"][] = "date";
$proto67["m_columns"][] = "inventory_j_ec";
$proto67["m_columns"][] = "inventory_j_ichiba";
$proto67["m_columns"][] = "inventory_k";
$proto67["m_columns"][] = "inventory_d";
$proto67["m_columns"][] = "inventory_b_ec";
$proto67["m_columns"][] = "inventory_b_ichiba";
$proto67["m_columns"][] = "inventory_w_ec";
$proto67["m_columns"][] = "inventory_w_ichiba";
$proto67["m_columns"][] = "inventory_c";
$proto67["m_columns"][] = "sales_j_ec";
$proto67["m_columns"][] = "sales_j_ichiba";
$proto67["m_columns"][] = "sales_k";
$proto67["m_columns"][] = "sales_d";
$proto67["m_columns"][] = "sales_b_ec";
$proto67["m_columns"][] = "sales_b_ichiba";
$proto67["m_columns"][] = "sales_w_ec";
$proto67["m_columns"][] = "sales_w_ichiba";
$proto67["m_columns"][] = "sales_c";
$proto67["m_columns"][] = "buy_during_period_j_ec";
$proto67["m_columns"][] = "buy_during_period_j_ichiba";
$proto67["m_columns"][] = "buy_during_period_k";
$proto67["m_columns"][] = "buy_during_period_d";
$proto67["m_columns"][] = "buy_during_period_b_ec";
$proto67["m_columns"][] = "buy_during_period_b_ichiba";
$proto67["m_columns"][] = "buy_during_period_w_ec";
$proto67["m_columns"][] = "buy_during_period_w_ichiba";
$proto67["m_columns"][] = "buy_during_period_c";
$proto67["m_columns"][] = "created_at";
$proto67["m_columns"][] = "updated_at";
$obj = new SQLTable($proto67);

$proto66["m_table"] = $obj;
$proto66["m_sql"] = "`Eoc_inventory_weekly`";
$proto66["m_alias"] = "";
$proto66["m_srcTableName"] = "Eoc_inventory_weekly";
$proto68=array();
$proto68["m_sql"] = "";
$proto68["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto68["m_column"]=$obj;
$proto68["m_contained"] = array();
$proto68["m_strCase"] = "";
$proto68["m_havingmode"] = false;
$proto68["m_inBrackets"] = false;
$proto68["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto68);

$proto66["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto66);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto70=array();
						$obj = new SQLField(array(
	"m_strName" => "date",
	"m_strTable" => "Eoc_inventory_weekly",
	"m_srcTableName" => "Eoc_inventory_weekly"
));

$proto70["m_column"]=$obj;
$proto70["m_bAsc"] = 0;
$proto70["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto70);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="Eoc_inventory_weekly";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Eoc_inventory_weekly = createSqlQuery_Eoc_inventory_weekly();


	
		;

																														

$tdataEoc_inventory_weekly[".sqlquery"] = $queryData_Eoc_inventory_weekly;

$tableEvents["Eoc_inventory_weekly"] = new eventsBase;
$tdataEoc_inventory_weekly[".hasEvents"] = false;

?>