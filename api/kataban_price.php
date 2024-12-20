<?php
ini_set("display_errors",0);

$brand = $_POST["brand"];
$kataban = $_POST["kataban"];
$brand = $_GET["brand"];
$kataban = $_GET["kataban"];
$where_array = array();
$where_array[] = $brand;
$where_array[] = $kataban;

// var_dump($_POST);

include_once $_SERVER["DOCUMENT_ROOT"]."/include/classes/pdo_connect.php";

// ■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
// 平均・最小・最大取得
// ■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
$pdo = new pdo_connect;
$pdo = $pdo->pdo();



$query = "SELECT
N_avg_price,
N_min_price,
N_max_price,
S_avg_price,
S_min_price,
S_max_price,
A_avg_price,
A_min_price,
A_max_price,
B_avg_price,
B_min_price,
B_max_price,
C_avg_price,
C_min_price,
C_max_price,
X_avg_price,
X_min_price,
X_max_price

from kataban_price where product_num=? AND yahoo_kataban=? limit 1";
$pdo_res = $pdo->prepare($query);
$pdo_res->execute($where_array);
$return=$pdo_res->fetchAll(PDO::FETCH_ASSOC);

function num_format_and_floor($num){
	if($num != ''){
		$num = floor($num);
		$num = number_format($num);
	}else{
		$num = "-";
	}

	return $num;
}


$return[0]["N_avg_price"] = num_format_and_floor($return[0]["N_avg_price"]);
$return[0]["N_min_price"] = num_format_and_floor($return[0]["N_min_price"]);
$return[0]["N_max_price"] = num_format_and_floor($return[0]["N_max_price"]);
$return[0]["S_avg_price"] = num_format_and_floor($return[0]["S_avg_price"]);
$return[0]["S_min_price"] = num_format_and_floor($return[0]["S_min_price"]);
$return[0]["S_max_price"] = num_format_and_floor($return[0]["S_max_price"]);
$return[0]["A_avg_price"] = num_format_and_floor($return[0]["A_avg_price"]);
$return[0]["A_min_price"] = num_format_and_floor($return[0]["A_min_price"]);
$return[0]["A_max_price"] = num_format_and_floor($return[0]["A_max_price"]);
$return[0]["B_avg_price"] = num_format_and_floor($return[0]["B_avg_price"]);
$return[0]["B_min_price"] = num_format_and_floor($return[0]["B_min_price"]);
$return[0]["B_max_price"] = num_format_and_floor($return[0]["B_max_price"]);
$return[0]["C_avg_price"] = num_format_and_floor($return[0]["C_avg_price"]);
$return[0]["C_min_price"] = num_format_and_floor($return[0]["C_min_price"]);
$return[0]["C_max_price"] = num_format_and_floor($return[0]["C_max_price"]);
$return[0]["X_avg_price"] = num_format_and_floor($return[0]["X_avg_price"]);
$return[0]["X_min_price"] = num_format_and_floor($return[0]["X_min_price"]);
$return[0]["X_max_price"] = num_format_and_floor($return[0]["X_max_price"]);


// var_dump($return);
// ■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
// ブランド名変換
// ■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
$brand_pdo = new pdo_connect;
$brand_pdo = $brand_pdo->pdo();


$brand_pdo_res = $brand_pdo->prepare("SELECT `name` as 'brand_name' from mst_brand2 where id=? limit 1");
$brand_where = array();
$brand_where[] = $brand;
$brand_pdo_res->execute($brand_where);
$brand_return=$brand_pdo_res->fetchAll(PDO::FETCH_ASSOC);





// ■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
// 最低金額の最低日・コンディション取得
// ■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
// $min_pdo = new pdo_connect;
// $min_pdo = $min_pdo->pdo();

// $min_where_array = $where_array;
// $min_where_array[] = $return[0]["min_price"];

// $min_pdo_res = $min_pdo->prepare("SELECT satei_hi,yahoo_condition2 from shouhin where product_num=? AND yahoo_kataban=? AND price=? order by product_id desc limit 1");
// $min_pdo_res->execute($min_where_array);
// $min_return=$min_pdo_res->fetchAll(PDO::FETCH_ASSOC);



// // ■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
// // 最大金額の最低日・コンディション取得
// // ■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
// $max_pdo = new pdo_connect;
// $max_pdo = $max_pdo->pdo();

// $max_where_array = $where_array;
// $max_where_array[] = $return[0]["max_price"];

// $max_pdo_res = $max_pdo->prepare("SELECT satei_hi,yahoo_condition2 from shouhin where product_num=? AND yahoo_kataban=? AND price=? order by product_id desc limit 1");
// $max_pdo_res->execute($max_where_array);
// $max_return=$max_pdo_res->fetchAll(PDO::FETCH_ASSOC);














$last_return = array();
$last_return["price"] = $return;
// $last_return["min"] = $min_return;
// $last_return["max"] = $max_return;
$last_return["brand"] = $brand_return;


// print "<pre>";
// var_dump($last_return);
// print "</pre>";



// var_dump($return);
$res = json_encode($last_return);
print $res;
