<?php
$strTableName="gold_check_item";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="gold_check_item";

$gstrOrderBy="ORDER BY `gold_check_item`.`id`";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("gold_check_item");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["gold_check_item"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>