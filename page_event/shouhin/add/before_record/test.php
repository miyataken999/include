<?php
//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
//鑑別、仕入コストのマスタ参照　
//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
$product_id = $keys["product_id"];
//仕入れ
$finish = $values["Finish"];
$finish_cost = "";//mst参照　仕上げコスト
if($finish!==""){
  $mst_Finish_query = "SELECT `cost` FROM mst_Finish WHERE `val`=\"$finish\" LIMIT 1";
  $mst_Finish_rs = CustomQuery($mst_Finish_query);
  if($mst_Finish_rs!==false){
    $mst_Finish_data = db_fetch_array($mst_Finish_rs);
    $finish_cost = $mst_Finish_data["cost"];//mst参照　仕上げコスト
  }
}//end if($finish!=="")
if($values["cost"]===""){//値が入っていないときにマスタ参照して入れる
	$values["cost"] = $finish_cost;
}
//鑑別
$discrimination_cost = "";//mst参照　鑑別コスト
$discrimination = $values["Discrimination"];
if($discrimination!==""){
  $mst_Discrimination_query = "SELECT `cost` FROM `mst_Discrimination` WHERE `val`=\"$discrimination\" LIMIT 1";
  $mst_Discrimination_rs = CustomQuery($mst_Discrimination_query);
  if($mst_Discrimination_rs!==false){
    $mst_Discrimination_data = db_fetch_array($mst_Discrimination_rs);
    $discrimination_cost = $mst_Discrimination_data["cost"];//mst参照　鑑別コスト
  }
}//end if($discrimination!=="")
if($values["identification_cost"]===""){//値が入っていないときにマスタ参照して入れる
	$values["identification_cost"] = $discrimination_cost;
}
//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
//鑑別、仕入コストのマスタ参照　　END
//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■

//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
//買取額抜き表示処理　　
//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
  $price = $values["price"];
  $seiyaku_date = $values["DT_UP_DATE"];
  if($seiyaku_date!=""){
    $mst_tax_query = "SELECT `rate` FROM `mst_tax` WHERE `start_time`<$seiyaku_date ORDER BY `id` LIMIT 1";
    $mst_tax_rs = CustomQuery($mst_tax_query);
    if($mst_tax_rs!==false){
      $mst_Discrimination_data = db_fetch_array($mst_Discrimination_rs);
      $tax_rate = $mst_Discrimination_data["rate"];
    }else{
      $tax_rate = 1.08;
    }
  }else{
    $tax_rate = 1.08;
  }
  if(($price!="")and($price!=0)){
    $price_without_tax = $price/$tax_rate;
    $price_without_tax = floor($price_without_tax);
    $message["price_without_tax"] = $price_without_tax;
  }

//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
//買取額抜き表示処理　　END
//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■






?>
