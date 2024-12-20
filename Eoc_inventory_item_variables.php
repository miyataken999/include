<?php
$strTableName="Eoc_inventory_item";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="Eoc_inventory_item";

$gstrOrderBy="ORDER BY `Eoc_inventory`.`date` DESC, `Eoc_inventory_item`.`product_id` DESC";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("Eoc_inventory_item");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["Eoc_inventory_item"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>