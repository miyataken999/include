<?php
$strTableName="transaction_ID";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="shouhin";

$gstrOrderBy="ORDER BY `shouhin`.`product_id` DESC";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("transaction_ID");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["transaction_ID"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>