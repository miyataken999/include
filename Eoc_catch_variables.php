<?php
$strTableName="Eoc_catch";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="Eoc";

$gstrOrderBy="ORDER BY `ecc_id` DESC";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("Eoc_catch");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["Eoc_catch"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>