<?php
$strTableName="mst_journal_supplementary_subject";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="mst_journal_supplementary_subject";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("mst_journal_supplementary_subject");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["mst_journal_supplementary_subject"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>