<?php
$strTableName="freee_apportionment_rules";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="freee_apportionment_rules";

$gstrOrderBy="ORDER BY `freee_apportionment_rules`.`sort`";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("freee_apportionment_rules");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["freee_apportionment_rules"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>