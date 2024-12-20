<?php
$strTableName="freee_apportionment_rule_detail";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="freee_apportionment_rule_detail";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("freee_apportionment_rule_detail");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["freee_apportionment_rule_detail"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>