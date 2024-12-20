<?php
$strTableName="mail_data_tbl_template";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="mail_data_tbl_template";

$gstrOrderBy="ORDER BY `junban`";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("mail_data_tbl_template");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["mail_data_tbl_template"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>