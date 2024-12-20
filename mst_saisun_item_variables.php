<?php
$strTableName="mst_saisun_item";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="mst_saisun_item";

$gstrOrderBy="ORDER BY id DESC";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("mst_saisun_item");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["mst_saisun_item"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>