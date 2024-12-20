<?php
$strTableName="nyuko";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="shouhin";

$gstrOrderBy="ORDER BY `shouhin`.`box_id` DESC, `shouhin`.`box_sort`";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("nyuko");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["nyuko"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>