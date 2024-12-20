<?php
$strTableName="Eoc_chigins_unfinished";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="Eoc_chigins_unfinished";

$gstrOrderBy="ORDER BY `id` DESC";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("Eoc_chigins_unfinished");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["Eoc_chigins_unfinished"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>