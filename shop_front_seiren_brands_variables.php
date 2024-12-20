<?php
$strTableName="shop_front_seiren_brands";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="shop_front_seiren_brands";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("shop_front_seiren_brands");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["shop_front_seiren_brands"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>