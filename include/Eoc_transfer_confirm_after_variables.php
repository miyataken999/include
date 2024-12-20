<?php
$strTableName="Eoc_transfer_confirm_after";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="Eoc_takuhai";

$gstrOrderBy="ORDER BY `Eoc_takuhai`.`id` DESC";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("Eoc_transfer_confirm_after");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["Eoc_transfer_confirm_after"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>