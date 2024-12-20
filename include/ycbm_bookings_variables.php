<?php
$strTableName="ycbm_bookings";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="ycbm_bookings";

$gstrOrderBy="ORDER BY `createdAt` DESC";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("ycbm_bookings");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["ycbm_bookings"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>