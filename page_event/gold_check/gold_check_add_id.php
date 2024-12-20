<?php
ini_set("display_errors",1);
//GET gold_check_id習得
$gold_check_id = htmlspecialchars($_GET["gold_check_id"],ENT_QUOTES);
$word = '';

$room = '169443336';
//cw get_included_files
  // $gold_check_id = '';
if($gold_check_id == ''){
  // if(1==1){
  echo "地金チェックidがないです！確認してください！！";
  $word = "地金チェックidがないです！確認してください！！\n";
  //メール送信
  $subject = $word;
  $mail_body = $word;
  $sendPostData = array("subject" => $subject, "text" => $mail_body);
  $sendPostDataOptions = array('http' => array('method'=> 'POST','header'=> 'Content-Type: application/x-www-form-urlencoded','content' => http_build_query($sendPostData, "", "&")));
  try{ file_get_contents('https://rifa.life/evaProject/api/notification/mail', false, stream_context_create($sendPostDataOptions)); }catch(\Exception $e){}

  exit;
}
  $date = date('Y-m-d H:i:s');
//pdo include
 include $_SERVER["DOCUMENT_ROOT"]."/include/classes/pdo_connect.php";

$token = "tamiya";

var_dump($_GET);
// var_dump($token);

if($_GET["token"] != $token){
  //ログイン認証
  include_once $_SERVER["DOCUMENT_ROOT"]."/include/login/login.php";
}else{
  $uid = '';
  echo "token ok";
}



header('Content-type: text/html; charset=UTF-8');

$pdo_connect = new pdo_connect;
$pdo = $pdo_connect->pdo();
$pdo->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, true);


$gold_check_sql = "SELECT * FROM gold_check where id=? LIMIT 1";

$gold_check_stmt = $pdo->prepare($gold_check_sql);
$gold_check_stmt->execute(array($gold_check_id));
$gold_check_items=$gold_check_stmt->fetch(PDO::FETCH_ASSOC);
if($gold_check_items == false){//falseじゃなくてnull??
  echo "この地金チェックidは存在しません！！！";
  $word = "この地金チェックidは存在しません！！！\n";
  //メール送信
  $subject = $word;
  $mail_body = $word;
  $sendPostData = array("subject" => $subject, "text" => $mail_body);
  $sendPostDataOptions = array('http' => array('method'=> 'POST','header'=> 'Content-Type: application/x-www-form-urlencoded','content' => http_build_query($sendPostData, "", "&")));
  try{ file_get_contents('https://rifa.life/evaProject/api/notification/mail', false, stream_context_create($sendPostDataOptions)); }catch(\Exception $e){}
  exit;
}else{
}
$slip_type = $gold_check_items["slip_type"];
// var_dump($slip_type);
if($slip_type==1){
  $sql = "UPDATE shouhin SET `gold_check_id`= '{$gold_check_id}',`updated_at` = '{$date}',`updated_by` = '{$uid}', `addtime_gold_check_id` = '{$data}' WHERE product_id = ? AND (gold_check_id is NULL OR gold_check_id = '') LIMIT 1";

}elseif($slip_type==2){
  $sql = "UPDATE shouhin SET `status` = 148, `gold_check_id`= '{$gold_check_id}',`updated_at` = '{$date}',`updated_by` = '{$uid}', `addtime_gold_check_id` = '{$data}' WHERE product_id = ? AND (gold_check_id is NULL OR gold_check_id = '') LIMIT 1";

}else{
  echo "伝票種別が入力されていません。";
  $word = "伝票種別が入力されていません。\n";
  //メール送信
  $subject = $word;
  $mail_body = $word;
  $sendPostData = array("subject" => $subject, "text" => $mail_body);
  $sendPostDataOptions = array('http' => array('method'=> 'POST','header'=> 'Content-Type: application/x-www-form-urlencoded','content' => http_build_query($sendPostData, "", "&")));
  try{ file_get_contents('https://rifa.life/evaProject/api/notification/mail', false, stream_context_create($sendPostDataOptions)); }catch(\Exception $e){}
  exit;
}//if end




//view参照
$view_sql = "SELECT * FROM `vw_jigane_taiki` where `slip_type`=? AND ((`status`='119') OR ((`status`='148') AND ((`gold_check_id`='')OR(`gold_check_id` IS NULL))))";
$view_stmt = $pdo->prepare($view_sql);
$view_stmt->execute(array($slip_type));

// 更新前データ
foreach($view_stmt as $item){
  $direct_completion = "";
  // var_dump($item["product_id"]);

  $product_id = $item["product_id"];
  $target_sql = "SELECT `gold_property`, `gold_check_id` FROM `shouhin` WHERE `product_id` = $product_id";
  $pdo_target = new pdo_connect;
  $target_stmt = $pdo_target->select_one($target_sql);
  $gold_property = $target_stmt['gold_property'];
  $old_gold_check_id = $target_stmt['gold_check_id'];

  $gold_property_sql = "SELECT `direct_completion` FROM `mst_gold_property` WHERE `val` = '$gold_property'";

  $pdo_gold_property = new pdo_connect;
  $gold_property_stmt = $pdo_gold_property->select_one($gold_property_sql);
  if($gold_property_stmt!=false){
    $direct_completion = $gold_property_stmt["direct_completion"];
  }else{
    $direct_completion = "";
  }
  if($direct_completion == 1){
    $direct_completion_sql = "UPDATE shouhin SET `status`= 142,`updated_at` = '{$date}',`updated_by` = '{$uid}' WHERE product_id = ? LIMIT 1";
    $pdo_direct_completion = new pdo_connect;
    $direct_completion_stmt = $pdo_direct_completion->select_one($direct_completion_sql);
    try{
      $direct_completion_stmt = $pdo->prepare($direct_completion_sql);
      $direct_completion_stmt->execute(array($item["product_id"]));
    }catch(Exception $e){

    }
  }else{
    try{
      $stmt = $pdo->prepare($sql);
      $stmt->execute(array($item["product_id"]));
    }catch(Exception $e){
    }
  }

  $user_sql = '';
  if($uid != ''){
    $user_sql = "SELECT user_login FROM users WHERE user_id = $uid";
    $pdo_2 = new pdo_connect;
    $user_array = $pdo_2->select_one($user_sql);
    $user_login = $user_array["user_login"];
  }else{
    $user_login = 'cron';
  }

  //ログ出力
  $log_content = "";
  $log_content .= "---Keys\n";
  $log_content .= "product_id: ".$item["product_id"]."\n";
  $log_content .= "---Fields\n";
if($direct_completion == 1){
  $log_content .= "status[old]: 119\n";
  $log_content .= "status[new]: 142\n";
}else{
  if($item["slip_type"]==2){
    $log_content .= "status[old]: 119\n";
    $log_content .= "status[new]: 148\n";
  }
}

  $log_content .= "gold_check_id[old]: ".$old_gold_check_id."\n";
  $log_content .= "gold_check_id[new]: ".$gold_check_id."\n";
  $log_content .= "name: ".$user_login."\n";
  // echo $log_content;


  $col = "`description`,`datetime`,`ip`,`user`,`table`,`action`";
  // echo $col;


  $ip = $_SERVER['REMOTE_ADDR'];
  $val = "'$log_content','$date','$ip','$user_login','gold_check','edit'";
  // echo $val;


   $log_sql="INSERT INTO evav62122_audit($col) VALUES($val)";
   // echo $log_sql;
   $pdo_3 = new pdo_connect;
   try{
     $log_stmt = $pdo_3->pdo()->prepare($log_sql);
     $log_stmt->execute();
   }catch(Exception $e){
   }


}//foreach end



$url = "https://rifa.life/shop5/gold_check_item_list.php?masterkey1=$gold_check_id&mastertable=gold_check";
header("location:$url");

?>
