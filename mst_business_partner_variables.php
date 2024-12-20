<?php
$strTableName="mst_business_partner";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="mst_business_partner";

$gstrOrderBy="ORDER BY `sort`, `id`";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("mst_business_partner");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["mst_business_partner"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>