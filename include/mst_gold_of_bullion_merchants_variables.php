<?php
$strTableName="mst_gold_of_bullion_merchants";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="mst_gold_of_bullion_merchants";

$gstrOrderBy="ORDER BY `sort`";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("mst_gold_of_bullion_merchants");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["mst_gold_of_bullion_merchants"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>