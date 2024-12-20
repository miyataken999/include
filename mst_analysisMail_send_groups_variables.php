<?php
$strTableName="mst_analysisMail_send_groups";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="mst_analysisMail_send_groups";

$gstrOrderBy="ORDER BY `send_group_id` DESC";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("mst_analysisMail_send_groups");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["mst_analysisMail_send_groups"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>