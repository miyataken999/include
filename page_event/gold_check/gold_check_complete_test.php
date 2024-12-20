<?php
/**
 * 
 * ユーザーid 71(nishitani)で固定した一時テストファイル
 * 
 */


echo "停止中";
exit; 






//GET gold_check_id習得
$gold_check_id = htmlspecialchars($_GET["gold_check_id"],ENT_QUOTES);
if($gold_check_id == ''){
  echo "地金チェックidがないです！確認してください！！";
  exit;
}
$date = date('Y-m-d H:i:s');
//pdo include
 include $_SERVER["DOCUMENT_ROOT"]."/include/classes/pdo_connect.php";
 //ログイン認証
//  include_once $_SERVER["DOCUMENT_ROOT"]."/include/login/login.php";
$uid = 71;
header('Content-type: text/html; charset=UTF-8');

$pdo_connect = new pdo_connect;
$pdo = $pdo_connect->pdo();
$pdo->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, true);

ini_set("display_errors",1);

$gold_check_sql = "SELECT * FROM gold_check where id=? LIMIT 1";

$gold_check_stmt = $pdo->prepare($gold_check_sql);
$gold_check_stmt->execute(array($gold_check_id));
$gold_check_items=$gold_check_stmt->fetch(PDO::FETCH_ASSOC);
if($gold_check_items == false){
  echo "この地金チェックidは存在しません！！！";
  exit;
}
$slip_type = $gold_check_items["slip_type"];
// var_dump($slip_type);

//完了変更日が入っていたら、更新日付をこの完了変更日ベースにする。なければ押した時間にする。
if(($gold_check_items["kanryou_henbi"] != "") && ($gold_check_items["kanryou_henbi"] != "0000-00-00 00:00:00")){
  // echo "地金チェックにすでに完了変更日が入っています。";
  // // header("Location:https://rifa.life/shop5/gold_check_item_list.php?masterkey1={$gold_check_id}&mastertable=gold_check");
  // exit;
  $kanryou_henbi = $gold_check_items["kanryou_henbi"];
}else{
  $kanryou_henbi = $date;
}


if(($slip_type==1)or($slip_type==2)){
  // 商品の更新
  // ステータスG NEW完了、完了変日、入金額
  // 地金チェックアイテムの総計
  $sum_gold_check_sql = "SELECT SUM(`price`) as 'sumprice' FROM gold_check_item WHERE gold_check_id = '{$gold_check_id}'";
  $sum_gold_check_pdo = new pdo_connect;
  $sum_gold_check_array = $sum_gold_check_pdo->select_one($sum_gold_check_sql);
  $sum_gold_check_price = $sum_gold_check_array["sumprice"];

  // 商品の総計
  $sum_shouhin_check_sql = "SELECT SUM(`price`) as 'sumprice' FROM shouhin WHERE gold_check_id = '{$gold_check_id}'";
  $sum_shouhin_check_pdo = new pdo_connect;
  $sum_shouhin_check_array = $sum_shouhin_check_pdo->select_one($sum_shouhin_check_sql);
  $sum_shouhin_price = $sum_shouhin_check_array["sumprice"];

  // $kaitori_update_stmt = $pdo->prepare($kaitori_update_sql);
}else{
  echo "伝票種別が入力されていません。";
  exit;
}//if end



//view参照
$view_sql = "SELECT * FROM vw_jigane_taiki where gold_check_id=?";
$view_stmt = $pdo->prepare($view_sql);
$view_stmt->execute(array($gold_check_id));




// 更新前データ

foreach($view_stmt as $item){
  // var_dump($item["product_id"]);

  // 入金額の計算
  $tax = 1.1;
  $wariai = $item["price"] / $sum_shouhin_price;
  $nyuukin_price = floor($wariai * $sum_gold_check_price / $tax);

  $sql = "UPDATE shouhin SET `nyuukin_price`='{$nyuukin_price}' WHERE product_id = ? LIMIT 1";
  // テストコメント
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array($item["product_id"]));



  $user_sql = '';
  $user_sql = "SELECT user_login FROM users WHERE user_id = $uid";
  $pdo_2 = new pdo_connect;
  $user_array = $pdo_2->select_one($user_sql);
  $user_login = $user_array["user_login"];

  //ログ出力
  $log_content = "";
  $log_content .= "---Keys\n";
  $log_content .= "product_id: ".$item["product_id"]."\n";
  $log_content .= "---Fields\n";
  $log_content .="kanryou_henbi[new]: ".$kanryou_henbi."\n";
  $log_content .="nyuukin_price[old]: ".$item["nyuukin_price"]."\n";
  $log_content .="nyuukin_price[new]: ".$nyuukin_price."\n";
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
   $log_stmt = $pdo_3->pdo()->prepare($log_sql);
   $log_stmt->execute();



}//foreach end
?>
