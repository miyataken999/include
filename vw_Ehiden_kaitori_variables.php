<?php
$strTableName="vw_Ehiden_kaitori";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="vw_Ehiden_kaitori";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("vw_Ehiden_kaitori");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["vw_Ehiden_kaitori"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>