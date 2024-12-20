<?php
$strTableName="mst_shouhin_column_name";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="mst_shouhin_column_name";

$gstrOrderBy="ORDER BY sort";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("mst_shouhin_column_name");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["mst_shouhin_column_name"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>