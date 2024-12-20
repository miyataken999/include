<?php
$strTableName="mst_price_zone";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="mst_price_zone";

$gstrOrderBy="ORDER BY `minimum_price` DESC";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("mst_price_zone");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["mst_price_zone"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>