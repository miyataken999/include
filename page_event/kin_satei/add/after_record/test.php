<?

$user_id = $_SESSION['uid'];
$product_id = $values['product_id'];
$new_st = $values["status"];

if($new_st == 32){
  $user_label_output_query = "INSERT INTO user_label_output (`user_id`, `product_id`, `create_at`)VALUES('{$user_id}', '{$product_id}', NOW())";
  CustomQuery($user_label_output_query);
}
