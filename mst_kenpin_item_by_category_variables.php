<?php
$strTableName="mst_kenpin_item_by_category";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="mst_kenpin_item_by_category";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("mst_kenpin_item_by_category");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["mst_kenpin_item_by_category"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>