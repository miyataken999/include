<?php
$strTableName="freee_deal_detail__memotag";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="freee_deal_detail__memotag";

$gstrOrderBy="ORDER BY `freee_deals`.`issue_date` DESC, `freee_deal_details`.`amount` DESC";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("freee_deal_detail__memotag");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["freee_deal_detail__memotag"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>