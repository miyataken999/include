<?php
$strTableName="freee_PLBS_by_year";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="freee_PLBS_by_year";

$gstrOrderBy="ORDER BY `fiscal_year` DESC";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("freee_PLBS_by_year");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["freee_PLBS_by_year"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>