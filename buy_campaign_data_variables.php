<?php
$strTableName="buy_campaign_data";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="buy_campaign_data";

$gstrOrderBy="ORDER BY `id` DESC";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("buy_campaign_data");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["buy_campaign_data"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>