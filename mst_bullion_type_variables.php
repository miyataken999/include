<?php
$strTableName="mst_bullion_type";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="mst_bullion_type";

$gstrOrderBy="ORDER BY sort";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("mst_bullion_type");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["mst_bullion_type"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>