<?php
$strTableName="freee_expense_categories";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="freee_expense_categories";

$gstrOrderBy="ORDER BY `sort` DESC";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("freee_expense_categories");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["freee_expense_categories"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>