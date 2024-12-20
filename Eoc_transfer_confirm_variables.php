<?php
$strTableName="Eoc_transfer_confirm";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="Eoc_takuhai";

$gstrOrderBy="ORDER BY `Eoc`.`name2` ASC";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("Eoc_transfer_confirm");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["Eoc_transfer_confirm"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>