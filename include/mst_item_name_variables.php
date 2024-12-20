<?php
$strTableName="mst_item_name";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="mst_item_name";

$gstrOrderBy="ORDER BY `mst_item_name`.`id` DESC";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("mst_item_name");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["mst_item_name"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>