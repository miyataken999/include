<?php
$strTableName="_DIA_DA_APPRAISER";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="_DIA_DA_APPRAISER";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("_DIA_DA_APPRAISER");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["_DIA_DA_APPRAISER"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>