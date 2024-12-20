<?php
$strTableName="mst_sales_discount";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="mst_sales_discount";

$gstrOrderBy="ORDER BY `discount_base`, `count`";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("mst_sales_discount");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["mst_sales_discount"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>