<?php
$strTableName="Eoc_chigins";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="Eoc_chigins";

$gstrOrderBy="ORDER BY `Eoc_chigins`.`chigin_id` DESC";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("Eoc_chigins");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["Eoc_chigins"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>