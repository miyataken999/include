<?php
$strTableName="mst_reebonz_required";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="mst_reebonz_required";

$gstrOrderBy="ORDER BY sort";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("mst_reebonz_required");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["mst_reebonz_required"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>