<?php
$strTableName="freee_manual_journals";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="freee_manual_journals";

$gstrOrderBy="ORDER BY `issue_date` DESC";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("freee_manual_journals");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["freee_manual_journals"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>