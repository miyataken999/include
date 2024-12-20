<?php
$strTableName="vw_freee_work_record_summaries_by_nendo";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="vw_freee_work_record_summaries_by_nendo";

$gstrOrderBy="ORDER BY `vw_freee_work_record_summaries_by_nendo`.`nendo` DESC, `vw_freee_work_record_summaries_by_nendo`.`employee_id`";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("vw_freee_work_record_summaries_by_nendo");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["vw_freee_work_record_summaries_by_nendo"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>