<?php
$strTableName="mst_journalizing";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="mst_journalizing";

$gstrOrderBy="ORDER BY `group`, sort";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("mst_journalizing");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["mst_journalizing"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>