<?php
$strTableName="shouhin_batch";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="shouhin_batch";

$gstrOrderBy="ORDER BY `shouhin_batch`.`id`";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("shouhin_batch");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["shouhin_batch"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>