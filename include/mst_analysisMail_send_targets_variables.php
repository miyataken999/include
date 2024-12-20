<?php
$strTableName="mst_analysisMail_send_targets";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="mst_analysisMail_send_targets";

$gstrOrderBy="ORDER BY `mst_analysisMail_send_targets`.`id` DESC";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("mst_analysisMail_send_targets");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["mst_analysisMail_send_targets"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>