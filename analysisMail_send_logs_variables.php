<?php
$strTableName="analysisMail_send_logs";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="analysisMail_send_logs";

$gstrOrderBy="ORDER BY `analysisMail_send_logs`.`send_log_id` DESC";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("analysisMail_send_logs");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["analysisMail_send_logs"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>