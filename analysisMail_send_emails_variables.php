<?php
$strTableName="analysisMail_send_emails";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="analysisMail_send_emails";

$gstrOrderBy="ORDER BY `send_mail_id` DESC";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("analysisMail_send_emails");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["analysisMail_send_emails"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>