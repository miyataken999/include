<?php
$strTableName="mst_analysisMail_send_categories";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="mst_analysisMail_send_categories";

$gstrOrderBy="ORDER BY `send_category_id` DESC";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("mst_analysisMail_send_categories");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["mst_analysisMail_send_categories"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>