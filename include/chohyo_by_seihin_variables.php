<?php
$strTableName="chohyo_by_seihin";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="shouhin";

$gstrOrderBy="ORDER BY `product_id` DESC";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("chohyo_by_seihin");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["chohyo_by_seihin"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>