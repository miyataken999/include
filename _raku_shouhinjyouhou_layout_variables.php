<?php
$strTableName="_raku_shouhinjyouhou_layout";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="_raku_shouhinjyouhou_layout";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("_raku_shouhinjyouhou_layout");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["_raku_shouhinjyouhou_layout"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>