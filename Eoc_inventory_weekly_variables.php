<?php
$strTableName="Eoc_inventory_weekly";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="Eoc_inventory_weekly";

$gstrOrderBy="ORDER BY `date` DESC";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("Eoc_inventory_weekly");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["Eoc_inventory_weekly"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>