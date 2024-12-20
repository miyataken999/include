<?php
$strTableName="freee_PLBS_by_day";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="freee_PLBS_by_day";

$gstrOrderBy="ORDER BY `date` DESC";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("freee_PLBS_by_day");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["freee_PLBS_by_day"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>