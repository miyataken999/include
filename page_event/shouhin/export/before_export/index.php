<?php
// Description
// Occurs before record is exported
// Use this event to modify record before it is exported.
//
// Parameters
// $data       - array of values selected from the database table
// $values     - array of values to be written to the export
//               file
// $pageObject - an object of Page class representing the current page



$values['price'] = str_replace(',','',$data['price']);
$price = $values['price'];
// $seiyaku_date = $data["DT_UP_DATE"];

if($data["DT_UP_DATE"] == '' || $data["DT_UP_DATE"] == NULL || $data["DT_UP_DATE"] == '0000/00/00 00:00:00'){
  $target_date = $data["satei_hi"];
}else{
  $target_date = $data["DT_UP_DATE"];
}

if($data['price_without_tax'] != ""){
  $values['price_without_tax'] = str_replace(',','',$data['price_without_tax']);
}else{
  if($target_date!=""){
    $mst_tax_query = "SELECT `rate` FROM `mst_tax` WHERE `start_time` < '{$target_date}' ORDER BY `id` DESC LIMIT 1";
    $mst_tax_rs = CustomQuery($mst_tax_query);
    if($mst_tax_rs!==false){
      $mst_tax_data = db_fetch_array($mst_tax_rs);
      $tax_rate = $mst_tax_data["rate"];
    }else{
      $tax_rate = 1.08;
    }
  }else{
    $tax_rate = 1.08;
  }
  $price_without_tax = $price/$tax_rate;
  $price_without_tax = round($price_without_tax);
  $values['price_without_tax'] = $price_without_tax;
}

// $values['price_without_tax'] = "test";

$values['sales_price'] = str_replace(',','',$data['sales_price']);
$values['nyuukin_price'] = str_replace(',','',$data['nyuukin_price']);
$values['sagaku_price'] = str_replace(',','',$data['sagaku_price']);
$values['price_for_site'] = str_replace(',','',$data['price_for_site']);

$values['Gram'] = $values['Gram']."g";
