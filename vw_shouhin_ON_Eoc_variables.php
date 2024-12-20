<?php
$strTableName="vw_shouhin_ON_Eoc";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="vw_shouhin_ON_Eoc";

$gstrOrderBy="ORDER BY product_id DESC";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("vw_shouhin_ON_Eoc");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["vw_shouhin_ON_Eoc"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>