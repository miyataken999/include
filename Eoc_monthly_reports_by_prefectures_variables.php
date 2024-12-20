<?php
$strTableName="Eoc_monthly_reports_by_prefectures";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="Eoc_monthly_reports_by_prefectures";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("Eoc_monthly_reports_by_prefectures");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["Eoc_monthly_reports_by_prefectures"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>