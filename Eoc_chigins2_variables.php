<?php
$strTableName="Eoc_chigins2";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="Eoc_chigins2";

$gstrOrderBy="ORDER BY `Eoc_chigins2`.`chigin_id` DESC";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("Eoc_chigins2");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["Eoc_chigins2"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>