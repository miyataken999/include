<?php
$strTableName="fukushoku_satei";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="shouhin";

$gstrOrderBy="ORDER BY `shouhin`.`product_id` DESC";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("fukushoku_satei");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["fukushoku_satei"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>