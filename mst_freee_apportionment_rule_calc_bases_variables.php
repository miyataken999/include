<?php
$strTableName="mst_freee_apportionment_rule_calc_bases";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="mst_freee_apportionment_rule_calc_bases";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("mst_freee_apportionment_rule_calc_bases");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["mst_freee_apportionment_rule_calc_bases"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>