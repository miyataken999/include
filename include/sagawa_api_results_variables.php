<?php
$strTableName="sagawa_api_results";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="sagawa_api_results";

$gstrOrderBy="ORDER BY `send_at` DESC";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("sagawa_api_results");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["sagawa_api_results"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>