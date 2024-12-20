<?php
$strTableName="kit_confirm";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="Eoc_takuhai";

$gstrOrderBy="ORDER BY `Eoc_takuhai`.`id` DESC";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("kit_confirm");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["kit_confirm"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>