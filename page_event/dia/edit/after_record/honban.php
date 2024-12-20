<?php

$user_id = $_SESSION['uid'];
$product_id = $values['product_id'];
$new_st = $values["status"];

// if(($new_st == 32) OR ($new_st == 33) OR ($new_st == 126)){

  //自動ラベルのテンプレートIDの振り分け
  $current_page_pass = $_SERVER["HTTP_REFERER"];
  if(stristr($current_page_pass, "satei_of_brand1_list")){
  	$label_tmp = 2;
  }else{
  	$label_tmp = 1;
  }

  $product_id = $values['product_id'];

  $label_query = "SELECT `product_id` FROM user_label_output WHERE `product_id`='{$product_id}' limit 1 ";
  $label_res = CustomQuery($label_query);
  $label_data = db_fetch_array($label_res);

  if($label_data == NULL){
    $user_label_output_query = "INSERT INTO user_label_output (`user_id`, `product_id`, `create_at`, `type`)VALUES('{$user_id}', '{$product_id}', NOW(), '{$label_tmp}')";
    CustomQuery($user_label_output_query);
  }
// }

// if($new_st == 33){
//   $token = 'jieowbvhinfonrioe3n2rt4h89foo';
//   $set_buying_column = file_get_contents("http://rifa.life/lounge_API/evaeva/set_buying_column.php?uid={$user_id}&token={$token}&product_id={$product_id}");
//   if($set_buying_column != ''){
//     echo $set_buying_column;
//   }
// }

if($new_st == 120){
  // D完了だったら販売先バッチまわす
  file_get_contents("https://rifa.life/evaProject/api/ichiba_hanbaisaki_batch/D");
}
