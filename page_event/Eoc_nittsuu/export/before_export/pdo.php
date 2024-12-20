<?php
ini_set("display_errors",1);
include_once $_SERVER["DOCUMENT_ROOT"]."/include/classes/pdo_connect.php";

$pdo_connect = new pdo_connect_kinkai;
$pdo = $pdo_connect->pdo();
// $pdo2 = clone $pdo;
// $pdo2 = $pdo;
//
// $pdo->text = 3;
// $pdo2->text = 3000;

// echo $pdo->text;
// echo "<br>";
// echo "<br>";
// echo $pdo2->text;
// echo "<br>";0
// echo "<br>";

$sql = "SELECT gold from tb_price where resist_data=? limit 1";
$where_val = array(date("Y/m/d"));

$stmt=$pdo->prepare($sql);
$stmt->execute($where_val);

foreach($stmt as $item){
  echo $item["gold"];
}
