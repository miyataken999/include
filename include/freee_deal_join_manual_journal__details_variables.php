<?php
$strTableName="freee_deal_join_manual_journal__details";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="freee_deal_join_manual_journal__details";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("freee_deal_join_manual_journal__details");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["freee_deal_join_manual_journal__details"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>