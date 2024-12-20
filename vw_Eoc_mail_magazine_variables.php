<?php
$strTableName="vw_Eoc_mail_magazine";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="vw_Eoc_mail_magazine";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("vw_Eoc_mail_magazine");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["vw_Eoc_mail_magazine"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>