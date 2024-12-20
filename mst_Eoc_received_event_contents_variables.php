<?php
$strTableName="mst_Eoc_received_event_contents";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="mst_Eoc_received_event_contents";

$gstrOrderBy="ORDER BY `sort`";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("mst_Eoc_received_event_contents");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["mst_Eoc_received_event_contents"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>