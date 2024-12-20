<?php
$strTableName="_DIA_DA_SUGARCANE";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="_DIA_DA_SUGARCANE";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("_DIA_DA_SUGARCANE");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["_DIA_DA_SUGARCANE"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>