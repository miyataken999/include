<?php
$strTableName="mst_hall_mark";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="mst_hall_mark";

$gstrOrderBy="ORDER BY id DESC";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("mst_hall_mark");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["mst_hall_mark"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>