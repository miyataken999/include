<?php
$strTableName="market_product_performance_original";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="market_product_performance_original";

$gstrOrderBy="ORDER BY `market_product_performance_original`.`id` DESC, `market_product_performance_original`.`color_quality` DESC, `market_product_performance_original`.`defect_quality` DESC";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("market_product_performance_original");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["market_product_performance_original"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>