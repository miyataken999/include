<?php
$strTableName="freee_work_records_by_term";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="freee_work_records_by_term";

$gstrOrderBy="ORDER BY `freee_work_records_by_term`.`start_date` DESC";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("freee_work_records_by_term");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["freee_work_records_by_term"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>