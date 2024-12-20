<?
header("content-type:text/html; charset=utf-8;");
mb_internal_encoding("utf8");

//ログイン認証
include_once $_SERVER["DOCUMENT_ROOT"]."/include/login/login.php";
include_once $_SERVER["DOCUMENT_ROOT"]."/include/connection.php";

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>



<form action="./test.php" method="get" accept-charset="utf-8">
	<input type="text" name="category_id" value="" >
	<input type="submit" name="" value="submit">
</form>










<?

exit();



if($_GET["category_id"] == ""){
	echo "category_idを入力してください。";
	exit();
}else{
	$category_id = htmlspecialchars($_GET["category_id"]);
}

$daiquery = "SELECT category_id,category_name FROM store_categories LIMIT 1000";
// $daiquery = "SELECT category_id,category_name FROM store_categories WHERE category_id={$category_id} LIMIT 1";
$daisql = mysql_query('SET NAMES utf8');
$daisql = mysql_query($daiquery);

while ($daires = mysql_fetch_assoc($daisql)) {
	$category_id = $daires["category_id"];
	// print '大カテ	'.$category_id.'	'.$daires["category_name"]."<br>";

	$query = "SELECT id,name,size6 FROM store_sub_categories WHERE category_id={$category_id} ORDER BY id limit 1000";
	// $query = "SELECT id,name,size6 FROM store_sub_categories WHERE id=153 limit 1";


	// print $query;
	$sql = mysql_query('SET NAMES utf8');
	$sql = mysql_query($query);

	while ($res = mysql_fetch_assoc($sql)) {
		$sort = 0;
		// print '中カテ	'.$res["id"].'	';
		// print $res["name"];
		// print "<br>";
		$sub_cate = $res["id"];

		$html = $res["size6"];
		$html = mb_convert_encoding($html, 'HTML-ENTITIES', 'UTF-8');
		$dom = new DOMDocument();
		@$dom->loadHTML($html);
		$xml = simplexml_import_dom($dom);

		// var_dump($xml);
		// var_dump($xml->body->table->tbody->tr);
		foreach ($xml->body->table->tbody->tr as $tr) {
			$tdname = $tr->td[0]->span;
			$data_category_title = $tr->td[0]->span["data-category-title"];
			if(($data_category_title != "NULL") AND ($data_category_title != "")){
				$cate_ttl = $data_category_title;
				$ttl_query = "INSERT INTO mst_saisun_item(`category_id` ,`sub_category_id1` ,`sort` ,`input_type` ,`create_at` ,`data_category_title`)VALUES('{$category_id}' ,'{$sub_cate}' ,'{$sort}' ,'read_only' ,NOW() ,'{$cate_ttl}' )";
				$sort = $sort+10;
				// print $ttl_query;
				if(!mysql_query($ttl_query)){
					print "中カテid{$sub_cate} 失敗しました。<br>";
				}
			}else{
				$cate_ttl = "";
			}

			foreach($tr->td as $td){

				if($td->input["class"] == "aa"){
					$item = $td->input;
					$type = "text";
					$selectItem = "";
				}elseif($td->select["class"] == "aa"){
					$item = $td->select;
					$type = "select";
					$selectItem = "";
					foreach ($td->select->option as $option) {
						if($selectItem != ""){$selectItem .= ",";}
						$selectItem .= $option;
					}
				}elseif($td->textarea["class"] == "aa"){
					$item = $td->textarea;
					$type = "textarea";
					$selectItem = "";
				}else{
					$item = "NULL";
					$type = "NULL";
					$selectItem = "";
				}
				// var_dump($item);
				if($item != "NULL"){
					$tdname;
					$union = $item["data-union"];
					$type;
					$selectItem;
					$linebreak = $item["data-line-break"];
					$data_title = $item["data-title"];
					$up_sql = "INSERT INTO mst_saisun_item(`category_id`
						,`sub_category_id1`
						,`name`
						,`data_unit`
						,`input_type`
						,`select_list`
						,`line_break`
						,`create_at`
						,`data_title`
						,`sort`
						,`data_category_title`)VALUES('{$category_id}'
						,'{$sub_cate}'
						,'{$tdname}'
						,'{$union}'
						,'{$type}'
						,'{$selectItem}'
						,'{$linebreak}'
						,NOW()
						,'{$data_title}'
						,'{$sort}'
						,'{$cate_ttl}'
						)";
					// print $up_sql;
					if(!mysql_query($up_sql)){
						print "中カテid{$sub_cate} 失敗しました。<br>";
					}
					// print $up_sql . "<br>";
					$sort = $sort+10;
				}
			}






		}

	}
}





// $query = "SELECT id,name FROM mst_amount ORDER BY id limit 1000";
// $sql = mysql_query('SET NAMES utf8');
// $sql = mysql_query($query);

// $g_num = 2;
// $ml_num = 1;
// while ($res = mysql_fetch_assoc($sql)) {
// 	$id = $res["id"];
// 	$name = $res["name"];
// 	if(stristr($name, "ml")){
// 		$sort = $ml_num;
// 		$ml_num = $ml_num+2;
// 	}else{
// 		$sort = $g_num;
// 		$g_num = $g_num+2;
// 	}

// 	$up_query = "UPDATE mst_amount SET sort='{$sort}' WHERE id='{$id}'";
// 	// print $up_query."<br>";
// 	$up_sql = mysql_query($up_query);

// }






// if($_POST["brand"] == ""){
// 	exit();
// }else{
// 	$brand = $_POST["brand"];
// 	$brandA = explode("\n",$brand);


// 	for ($iii=0; $iii < count($brandA); $iii++) {
// 		$brand = trim($brandA[$iii]);

// 		$query = "SELECT id,name,wasabi_name FROM mst_brand WHERE wasabi_name='{$brand}' limit 1";
// 		$sql = mysql_query('SET NAMES utf8');
// 		$sql = mysql_query($query);
// 		while ($res = mysql_fetch_assoc($sql)) {
// 			$id = $res["id"];
// 			$nameArray = explode("/",$res["name"]);
// 			$name = "";
// 			for ($i=1; $i < count($nameArray); $i++) {
// 				$name .= $nameArray[$i];
// 			}
// 			print $res["wasabi_name"]."<br>";
// 			// $up_query = "UPDATE mst_brand SET wasabi_name='{$name}' WHERE id='{$id}'";
// 			// print $up_query."<br>";
// 			// $up_sql = mysql_query($up_query);

// 		}
// 	}


// }

?>



</body>
</html>
