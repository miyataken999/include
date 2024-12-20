<?php
$strTableName="Eoc_takuhai_speed";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="Eoc_takuhai";

$gstrOrderBy="ORDER BY `id` DESC";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("Eoc_takuhai_speed");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["Eoc_takuhai_speed"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>