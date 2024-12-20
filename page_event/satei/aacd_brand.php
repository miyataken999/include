<?
$aacd_sql = "SELECT yahoo_junle FROM vw_distinct_brand_from_country_of_origin";
$aacd_rs = CustomQuery($aacd_sql);
$aacd_brandArray_country = array();
while($aacd_data = db_fetch_array($aacd_rs)){
	$aacd_brandArray_country[] = $aacd_data["yahoo_junle"];
}


$aacd_sql = "SELECT yahoo_junle FROM vw_distinct_brand_from_zipper";
$aacd_rs = CustomQuery($aacd_sql);
$aacd_brandArray_zipper = array();
while($aacd_data = db_fetch_array($aacd_rs)){
	$aacd_brandArray_zipper[] = $aacd_data["yahoo_junle"];
}


$aacd_brandArray_plate = array();
$aacd_brandArray_plate[] = 402;
$aacd_brandArray_plate[] = 45;


?>
