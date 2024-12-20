<?php
$strTableName="mst_wasabi_apparel_size";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="mst_wasabi_apparel_size";

$gstrOrderBy="ORDER BY id";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("mst_wasabi_apparel_size");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["mst_wasabi_apparel_size"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>