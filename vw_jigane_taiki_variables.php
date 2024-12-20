<?php
$strTableName="vw_jigane_taiki";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="vw_jigane_taiki";

$gstrOrderBy="ORDER BY `product_id` DESC";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("vw_jigane_taiki");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["vw_jigane_taiki"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>