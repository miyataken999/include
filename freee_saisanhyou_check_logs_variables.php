<?php
$strTableName="freee_saisanhyou_check_logs";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="freee_saisanhyou_check_logs";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("freee_saisanhyou_check_logs");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["freee_saisanhyou_check_logs"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>