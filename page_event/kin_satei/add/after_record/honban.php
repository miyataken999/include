<?

$user_id = $_SESSION['uid'];
$product_id = $values['product_id'];
$new_st = $values["status"];

if(($new_st == 32) OR ($new_st == 33) OR ($new_st == 126)){
  $sub_category_id1 = $values['sub_category_id1'];
	if($sub_category_id1 == 415){
    $label_query = "SELECT `product_id` FROM user_label_output WHERE `product_id`='{$product_id}' limit 1 ";
    $label_res = CustomQuery($label_query);
    $label_data = db_fetch_array($label_res);



    $label_output_count = 0;
    $output = 1;
    //売却済＝成約時のみ、鑑別と付属品の加算
  	if($new_st == 33){
  	  if($values["Discrimination"] != ''){
  	    $label_output_count++;
  	  }
  	  if(($values["accessories"] != '') AND ($values["accessories"] != '付無し')){
  	    $label_output_count++;
  	  }
      if($label_output_count == 0){
        $label_output_count = 1;
      }
  	}elseif($new_st == 34){
      $label_output_count = 0;
      $output = 0;
    }else{
      $label_output_count = 1;
    }



    if($label_data == NULL){
      $user_label_output_query = "INSERT INTO user_label_output (`user_id`, `product_id`, `create_at`, `type`, `number_of_sheets`, `output`)VALUES('{$user_id}', '{$product_id}', NOW(), '2', '{$label_output_count}', '{$output}')";
      CustomQuery($user_label_output_query);
    }
  }//end sub_category_id1 415
}
