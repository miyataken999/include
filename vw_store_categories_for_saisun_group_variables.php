<?php
$strTableName="vw_store_categories_for_saisun_group";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="vw_store_categories_for_saisun_group";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("vw_store_categories_for_saisun_group");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["vw_store_categories_for_saisun_group"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>