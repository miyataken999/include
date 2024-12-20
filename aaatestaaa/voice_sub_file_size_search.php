<?php
ini_set("display_errors",1);
echo 1111111;
include_once $_SERVER["DOCUMENT_ROOT"]."/include/classes/pdo_connect.php";

$pdo_connect = new pdo_connect;
$pdo = $pdo_connect->pdo();
$sql = "SELECT `id`,`link` FROM `voice_sub`";
echo $sql;
$stmt = $pdo->prepare($sql);
$stml->execute();
var_dump($stml);
foreach($stml as $item){
  var_dump($item);
}
