<?php
$strTableName="buy_campaign_data_detail";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="buy_campaign_data_detail";

$gstrOrderBy="ORDER BY `id` DESC";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("buy_campaign_data_detail");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["buy_campaign_data_detail"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>