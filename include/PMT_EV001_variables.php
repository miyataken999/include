<?php
$strTableName="PMT_EV001";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="PMT_EV001";

$gstrOrderBy="ORDER BY `APP_UID` DESC";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("PMT_EV001");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["PMT_EV001"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>