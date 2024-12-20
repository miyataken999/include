<?php
$strTableName="vw_yahoo_sinaban_count_upper";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="vw_yahoo_sinaban_count_upper";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("vw_yahoo_sinaban_count_upper");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["vw_yahoo_sinaban_count_upper"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>