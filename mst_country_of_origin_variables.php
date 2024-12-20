<?php
$strTableName="mst_country_of_origin";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="mst_country_of_origin";

$gstrOrderBy="ORDER BY `sort`";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("mst_country_of_origin");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["mst_country_of_origin"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>