<?php
$strTableName="mst_category_class";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="mst_category_class";

$gstrOrderBy="ORDER BY `sort`";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("mst_category_class");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["mst_category_class"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>