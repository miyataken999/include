<?php
$strTableName="store_products_batch_shinaban";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="store_products_batch";

$gstrOrderBy="ORDER BY store_products_batch.id DESC";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("store_products_batch_shinaban");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["store_products_batch_shinaban"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>