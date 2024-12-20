<?php
$strTableName="analysisMail_send_logs_bcc";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="analysisMail_send_logs_bcc";

$gstrOrderBy="ORDER BY `id` DESC";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("analysisMail_send_logs_bcc");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["analysisMail_send_logs_bcc"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>