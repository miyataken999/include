<?php
$strTableName="vw_Eoc_chigins_summaray";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="vw_Eoc_chigins_summaray";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("vw_Eoc_chigins_summaray");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["vw_Eoc_chigins_summaray"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>