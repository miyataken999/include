<?php
// ini_set("display_errors",1);
// Description
// Occurs before record is exported
// Use this event to modify record before it is exported.
//
// Parameters
// $data       - array of values selected from the database table
// $values     - array of values to be written to the export
//               file
// $pageObject - an object of Page class representing the current page
//
include_once $_SERVER["DOCUMENT_ROOT"]."/include/classes/pdo_connect.php";
// mb_internal_encoding("Shift-JIS");
// $gold_500over = "";//金500gインゴット金性単価
// $gold_100over = "";//金100gインゴット金性単価
// $platinum_500over = "";//プラチナ500gインゴット金性単価
// $platinum_100over = "";//プラチナ100gインゴット金性単価
// $price_accept_500 = "";//引受価格(金500gインゴット)
// $price_accept_100 = "";//引受価格(金100gインゴット)
// $price_gold_accept = "";//引受価格合計(金)
// $accept_weight_gold = "";//引受集荷ファイル表示重量(金)
// $price_delivery_500 = "";//納品価格(金500gインゴット)
// $price_delivery_100 = "";//納品価格(金100gインゴット)
// $price_gold_delivery = "";//納品価格合計(金)
// $delivery_weight_gold = "";//納品集荷ファイル表示重量(金)
// $price_accept_500 = "";//引受価格(プラチナ500gインゴット)
// $price_accept_100 = "";//引受価格(プラチナ100gインゴット)
// $price_platinum_accept = "";//引受価格合計(プラチナ)
// $accept_weight_platinum = "";//引受集荷ファイル表示重量(プラチナ)
// $price_delivery_500 = "";//納品価格(プラチナ500gインゴット)
// $price_delivery_100 = "";//納品価格(プラチナ100gインゴット)
// $price_platinum_delivery = "";//納品価格合計(プラチナ)
// $delivery_weight_platinum = "";//納品集荷ファイル表示重量(プラチナ)
$alert_word=array();;

//pdo price
$pdo_connect_kinkai = new pdo_connect_kinkai;

$pdo_kinkai = $pdo_connect_kinkai->pdo();

$gd_rate_sql = "SELECT * FROM `tb_gold_rate_history` ORDER BY `date` DESC LIMIT 1";
$gd_rate_stmt=$pdo_kinkai->prepare($gd_rate_sql);
$gd_rate_stmt->execute();
$gd_rate_array = $gd_rate_stmt->fetchAll();

if($gd_rate_array[0][1]!=0){
  $gd_500over_rate = $gd_rate_array[0][1];
}else{
  $gd_500over_rate = 0.9736;
}
if($gd_rate_array[0][2]!=0){
  $gd_100over_rate = $gd_rate_array[0][2];
}else{
  $gd_100over_rate = 0.9665;
}

// $pdo_kinkai = $pdo_connect_kinkai->pdo();

$pt_rate_sql = "SELECT * FROM `tb_platinum_rate_history` ORDER BY `date` DESC LIMIT 1";
$pt_rate_stmt=$pdo_kinkai->prepare($pt_rate_sql);
$pt_rate_stmt->execute();
$pt_rate_array = $pt_rate_stmt->fetchAll();
$pt_500over_rate = $pt_rate_array[0][1];
$pt_100over_rate = $pt_rate_array[0][2];
$price_sql = "SELECT * FROM `tb_price` ORDER BY `resist_data` DESC LIMIT 1";
$price_stmt=$pdo_kinkai->prepare($price_sql);
$price_stmt->execute();
$price_array = $price_stmt->fetchAll();
$gold_price = $price_array[0][0];
$platinum_price = $price_array[0][1];

$gold_500over = floor($gold_price*$gd_500over_rate);
$gold_100over = floor($gold_price*$gd_100over_rate);
$platinum_500over = floor($platinum_price*$pt_500over_rate);
$platinum_100over = floor($platinum_price*$pt_100over_rate);

$pdo_connect_kinkai = null;
//日にち指定
$collection_date = str_replace('-','',$data["Collection_date"]);
$delivery_date = str_replace('-','',$data["Delivery_date"]);

//時間指定
if($data["Pickup_time_select"]=='午前'){
  $pickup_time_from = '0900';
  $pickup_time_to = '1200';

}elseif($data["Pickup_time_select"]=='午後'){
  $pickup_time_from = '1200';
  $pickup_time_to = '1800';
}//if end

if($data["Delivery_time_select"]=='午前'){
  $delivery_time_from = '0900';
  $delivery_time_to = '1200';

}elseif($data["Delivery_time_select"]=='午後'){
  $delivery_time_from = '1200';
  $delivery_time_to = '1800';
}//if end

//申告金額
$pdo_connect = new pdo_connect;
$pdo = $pdo_connect->pdo();
$declared_value_sql = "SELECT * FROM `Eoc_refining_item` WHERE `Eoc_refining_id` = ? ";
$where_val = array($data["refining_id"]);
$stmt=$pdo->prepare($declared_value_sql);
$stmt->execute($where_val);
$array = $stmt->fetchAll();
foreach($array as $item){
  if($item["mst__bullion_type_id"]==1){
    if(($item["500gbar_num_accept"]!='')or($item["100gbar_num_accept"]!='')or($item["500gbar_num_delivery"]!='')or($item["100gbar_num_delivery"]!='')){
        $price_accept_500 = $item["500gbar_num_accept"] * 500 * $gold_500over;
        $price_accept_100 = $item["100gbar_num_accept"] * 100 * $gold_100over;
        $price_gold_accept = $price_accept_500 + $price_accept_100;
        $accept_weight_gold = ($item["weight_accept"]/100);
        $update_accept_gold_sql = "UPDATE Eoc_refining_item SET `price_accept` = {$price_gold_accept} WHERE `id` = $item[id] LIMIT 1";
        CustomQuery($update_accept_gold_sql);
        $price_delivery_500 = $item["500gbar_num_delivery"] * 500 * $gold_500over;
        $price_delivery_100 = $item["100gbar_num_delivery"] * 100 * $gold_100over;
        $price_gold_delivery = $price_delivery_500 + $price_delivery_100;
        $delivery_weight_gold = ($item["weight_delivery"]/100);
        $update_delivery_gold_sql = "UPDATE Eoc_refining_item SET `price_delivery` = {$price_gold_delivery} WHERE `id` = $item[id] LIMIT 1";
        CustomQuery($update_delivery_gold_sql);
    }else{
      $alert_word[] = '本数を入力してください！！！';
    }// end if
  }elseif($item["mst__bullion_type_id"]==2){
    if(($item["500gbar_num_accept"]!='')or($item["100gbar_num_accept"]!='')or($item["500gbar_num_delivery"]!='')or($item["100gbar_num_delivery"]!='')){
        $price_accept_500 = $item["500gbar_num_accept"]* 500 * $platinum_500over;
        $price_accept_100 = $item["100gbar_num_accept"] * 100 * $platinum_100over;
        $price_platinum_accept = $price_accept_500 + $price_accept_100;
        $accept_weight_platinum = ($item["weight_accept"]/100);
        $update_accept_platinum_sql = "UPDATE Eoc_refining_item SET `price_accept` = {$price_platinum_accept} WHERE `id` = $item[id] LIMIT 1";
        CustomQuery($update_accept_platinum_sql);
        $price_delivery_500 = $item["500gbar_num_delivery"] * 500 * $platinum_500over;
        $price_delivery_100 = $item["100gbar_num_delivery"] * 100 * $platinum_100over;
        $price_platinum_delivery = $price_delivery_500 + $price_delivery_100;
        $delivery_weight_platinum = ($item["weight_delivery"]/100);
        $update_delivery_platinum_sql = "UPDATE Eoc_refining_item SET `price_delivery` = {$price_platinum_delivery} WHERE `id` = $item[id] LIMIT 1";
        CustomQuery($update_delivery_platinum_sql);
    }else{
        $alert_word[] = '本数を入力してください！！！';
    }
  }else{
    $alert_word[] = '地金の選択がされていません(´；ω；`)';
  }//end if
}// end foreach
     // return false;
    //  必須項目
    // ・荷送人住所１
    // ・荷送人住所2
    // ・荷送人住所3
    // ・荷送人住所予備
    // ・荷送人名１
    // ・荷送人名2
    // ・荷送人名予備
    // ・荷送人現住所電話番号
    // ・集荷指定年月日
    // ・荷受人住所１
    // ・荷受人住所2
    // ・荷受人住所3
    // ・荷受人住所予備
    // ・荷受人名１
    // ・荷受人名2
    // ・荷受人名予備
    // ・荷受人現住所電話番号
    // ・配達指定年月日

if($data["mst_refining_status_id"] == 1){
  //荷受人情報
  $values["Consignee_Address_1"] = "東京都";
  $values["Consignee_Address_2"] = "豊島区東池袋1-25-14";
  $values["Consignee_Address_3"] = "アルファビルディング4F";
  $values["Consignee_Address_reserve"] = "";
  $values["Consignee_zip_code"] = "170-0013";
  $values["Consignee_name_1"] = "ラウンジデザイナーズ株式会社";
  $values["Consignee_name_2"] = "リファスタ精錬分割加工事業部";
  $values["Consignee_name_reserve"] = "";
  $values["Consignee_phone_number"] = "03-5985-0388";
  //配送情報

  $values["Collection_display_date"] = $collection_date;
  $values["Pickup_time_FROM"] = $pickup_time_from;
  $values["Pickup_time_TO"] = $pickup_time_to;
  $values["Delivery_date"] = "";
  $values["Delivery_time_FROM"] = "";
  $values["Delivery_time_TO"] = "";

  if(($price_gold_accept == 0)and($price_platinum_accept == 0)){
    $alert_word[] = '申告価格が0円です。(本数入力しているかの確認をお願いします。)';
  }else{
    $values["Declared_value"] = $price_gold_accept + $price_platinum_accept;
  }
  if(($accept_weight_gold != 0)or($accept_weight_platinum != 0)){
    $values["refining_weight"] = $accept_weight_gold+$accept_weight_platinum;
  }else{
    $alert_word[] = '重量入力がされていません';
  }
  // return false;
  $update_sql = "UPDATE Eoc_refining SET `mst_refining_status_id` = 2 WHERE `id` = $data[refining_id] LIMIT 1";
  CustomQuery($update_sql);
}elseif(($data["mst_refining_status_id"] == 5)){
  //荷送人情報
  $values["address1"] = "東京都";
  $values["address2"] = "豊島区東池袋1-25-14";
  $values["address3"] = "アルファビルディング4F";
  $values["zip1"] = "170-0013";
  $values["name1"] = "ラウンジデザイナーズ株式会社";
  $values["name2"] = "（リファスタ精錬分割加工事業部）";
  $values["tel2"] = "03-5985-0388";
  //荷受人情報
  $values["Consignee_Address_1"] = $data["address1"];
  $values["Consignee_Address_2"] = $data["address2"];
  $values["Consignee_Address_3"] = $data["address3"];
  $values["Consignee_Address_reserve"] = "";
  $values["Consignee_zip_code"] = $data["zip1"];
  $values["Consignee_name_1"] = $data["name1"];
  $values["Consignee_name_2"] = $data["name2"];
  $values["Consignee_name_reserve"] = "";
  $values["Consignee_phone_number"] = $data["tel2"];

  //配送情報
  $values["Collection_date"] = "";
  $values["Pickup_time_FROM"] = "";
  $values["Pickup_time_TO"] = "";
  $values["Delivery_display_date"] = $delivery_date;
  $values["Delivery_time_FROM"] = $delivery_time_from;
  $values["Delivery_time_TO"] = $delivery_time_to;

  if(($price_gold_delivery == 0)and($price_platinum_delivery == 0)){
      $alert_word[] = '申告価格が0円です。(本数入力しているかの確認をお願いします。)';
  }else{
      $values["Declared_value"] = $price_gold_delivery + $price_platinum_delivery;
      // return false;
  }
  if(($delivery_weight_gold != 0)or($delivery_weight_platinum != 0)){
      $values["refining_weight"] = $delivery_weight_gold+$delivery_weight_platinum;
  }else{
      $alert_word[] = '重量入力がされていません';
  }
  $update_sql = "UPDATE Eoc_refining SET `mst_refining_status_id` = 6 WHERE `id` = $data[refining_id] LIMIT 1";
  CustomQuery($update_sql);
}else{
  $values["address1"] = "該当のステータスではありません";
  $values["address2"] = " ";
  $values["address3"] = " ";
  $values["name1"] = " ";
  $values["name2"] = " ";
  $values["zip1"] = " ";
  $values["tel2"] = " ";

  //荷受人情報
  $values["Consignee_Address_1"] = " ";
  $values["Consignee_Address_2"] = " ";
  $values["Consignee_name_1"] = " ";
  $values["Consignee_name_2"] = " ";
  $values["Consignee_zip_code"] = " ";
  $values["Consignee_phone_number"] = " ";
  $values["Collection_time"] = " ";
  $values["Pickup_time_FROM"] = " ";
  $values["Pickup_time_TO"] = " ";
  $values["Delivery_time"] = " ";
  $values["Delivery_time_FROM"] = " ";
  $values["Delivery_time_TO"] = " ";
  $values["Declared_value"] = " ";
  $values["Delivery_display_date"] = " ";
  $values["Collection_display_date"] = " ";

}//if end

if(!empty($alert_word)){
  $values["address1"] = " ";
  $values["address2"] = " ";
  $values["address3"] = " ";
  $values["name1"] = " ";
  $values["name2"] = " ";
  $values["zip1"] = " ";
  $values["tel2"] = " ";
  //荷受人情報
  $values["Consignee_Address_1"] = " ";
  $values["Consignee_Address_2"] = " ";
  $values["Consignee_name_1"] = " ";
  $values["Consignee_name_2"] = " ";
  $values["Consignee_zip_code"] = " ";
  $values["Consignee_phone_number"] = " ";
  $values["Collection_time"] = " ";
  $values["Pickup_time_FROM"] = " ";
  $values["Pickup_time_TO"] = " ";
  $values["Delivery_time"] = " ";
  $values["Delivery_time_FROM"] = " ";
  $values["Delivery_time_TO"] = " ";
  $values["Declared_value"] = " ";
  $itemcount=0;
  foreach($alert_word as $alert_item){
    if($itemcount==0){
      $values["address1"] = $alert_item;
    }elseif($itemcount==1){
      $values["address2"] = $alert_item;
    }elseif($itemcount==2){
      $values["address3"] = $alert_item;
    }elseif($itemcount==3){
      $values["name1"] = $alert_item;
    }elseif($itemcount==4){
      $values["name2"] = $alert_item;
    }elseif($itemcount==5){
      $values["zip1"] = $alert_item;
    }
    $itemcount++;
  }
}
