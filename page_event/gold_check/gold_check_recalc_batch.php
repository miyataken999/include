<?php
echo "バッチ停止中";
exit;


// //GET gold_check_id習得
// //pdo include
// include $_SERVER["DOCUMENT_ROOT"]."/include/classes/pdo_connect.php";
//  //ログイン認証
// include_once $_SERVER["DOCUMENT_ROOT"]."/include/login/login.php";
// header('Content-type: text/html; charset=UTF-8');

// $pdo_connect = new pdo_connect;
// $pdo = $pdo_connect->pdo();
// $pdo->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, true);

// ini_set("display_errors",1);




// $gold_check_id = "1593";

// $sql = "SELECT * FROM gold_check where kanryou_henbi is not null and kanryou_henbi > '2021-06-01' order by id asc ";
// $stmt = $pdo->prepare($sql);
// // $stmt->execute(array($gold_check_id));
// $stmt->execute();




// echo count($stmt) . "件<br>";
// foreach($stmt as $item){
//     var_dump($item["id"]);
//     var_dump($item["kanryou_henbi"]);
//     echo "<br>";
//     $url = "https://rifa.life/include/page_event/gold_check/gold_check_complete_test.php?gold_check_id=" . $item["id"];
//     file_get_contents($url);
// }