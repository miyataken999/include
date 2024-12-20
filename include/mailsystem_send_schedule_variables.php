<?php
$strTableName="mailsystem_send_schedule";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="mailsystem_send_schedule";

$gstrOrderBy="ORDER BY `regist_date` DESC";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("mailsystem_send_schedule");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["mailsystem_send_schedule"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>