<?php
$strTableName="market_product_performance";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="shouhin";

$gstrOrderBy="ORDER BY `shouhin`.`product_id` DESC";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("market_product_performance");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["market_product_performance"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>