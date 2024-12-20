<?php
$strTableName="vw_freee_deals_data";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="vw_freee_deals_data";

$gstrOrderBy="ORDER BY `issue_date` DESC";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("vw_freee_deals_data");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["vw_freee_deals_data"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>