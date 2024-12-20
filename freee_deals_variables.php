<?php
$strTableName="freee_deals";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="freee_deals";

$gstrOrderBy="ORDER BY `issue_date` DESC";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("freee_deals");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["freee_deals"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>