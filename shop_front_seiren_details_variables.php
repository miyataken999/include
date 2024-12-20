<?php
$strTableName="shop_front_seiren_details";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="shop_front_seiren_details";

$gstrOrderBy="ORDER BY `shop_front_seiren_id` DESC";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("shop_front_seiren_details");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["shop_front_seiren_details"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>