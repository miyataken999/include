<?php
$dalTablesales_report = array();
$dalTablesales_report["id"] = array("type"=>20,"varname"=>"id");
$dalTablesales_report["product_id"] = array("type"=>3,"varname"=>"product_id");
$dalTablesales_report["sales_date"] = array("type"=>135,"varname"=>"sales_date");
$dalTablesales_report["contract_date"] = array("type"=>135,"varname"=>"contract_date");
$dalTablesales_report["exhibition_date"] = array("type"=>135,"varname"=>"exhibition_date");
$dalTablesales_report["created_at"] = array("type"=>135,"varname"=>"created_at");
$dalTablesales_report["updated_at"] = array("type"=>135,"varname"=>"updated_at");
$dalTablesales_report["memo"] = array("type"=>201,"varname"=>"memo");
$dalTablesales_report["repo_type"] = array("type"=>200,"varname"=>"repo_type");
$dalTablesales_report["mst_business_partner_id"] = array("type"=>3,"varname"=>"mst_business_partner_id");
	$dalTablesales_report["id"]["key"]=true;

$dal_info["internet_at_urlounge_co_jp__sales_report"] = &$dalTablesales_report;
?>