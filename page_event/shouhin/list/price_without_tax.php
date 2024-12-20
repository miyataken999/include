<?php
// $value - a value to be displayed on the page.
// Example:
// $value = strtoupper($value);
//
// $data - array with all field values.
// Example:
// $value = $data["FirstName"].$data["LastName"];
// where FirstName and LastName are actual field names.

//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
//買取額抜き表示処理　　
//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
  // $value = "test";

  $price = $data["price"];

  if($data["DT_UP_DATE"] == '' || $data["DT_UP_DATE"] == NULL || $data["DT_UP_DATE"] == '0000/00/00 00:00:00'){
    $target_date = $data["satei_hi"];
  }else{
    $target_date = $data["DT_UP_DATE"];
  }
  


  $tax_rate = 1.08;
  if($target_date!=""){
    $mst_tax_query = "SELECT `rate` FROM `mst_tax` WHERE `start_time` < '{$target_date}' ORDER BY `id` DESC LIMIT 1";
    $mst_tax_rs = CustomQuery($mst_tax_query);
    if($mst_tax_rs!=false){
      $mst_tax_data = db_fetch_array($mst_tax_rs);
      if(($mst_tax_data["rate"]!=0)or($mst_tax_data["rate"]!="")){
        $tax_rate = $mst_tax_data["rate"];
      }
    }
  }
  $price_without_tax = $price/$tax_rate;
  $price_without_tax = round($price_without_tax);
  // $value = "<p style='text-align:right;'>".$price_without_tax."</p>";
  $value = $price_without_tax;
  
  // $value = number_format($price_without_tax);

//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
//買取額抜き表示処理　　END
//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
