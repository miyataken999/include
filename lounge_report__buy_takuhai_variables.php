<?php
$strTableName="lounge_report__buy_takuhai";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="lounge_report__buy_takuhai";

$gstrOrderBy="ORDER BY `date` DESC";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("lounge_report__buy_takuhai");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["lounge_report__buy_takuhai"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>