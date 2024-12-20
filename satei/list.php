間違えた！アパオクのとき使う！
<?php
//★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★
//
//★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★





exit();






//★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★
//
//★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★





















ini_set( 'display_errors', 1 );
//★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★
//urloungeデータベース接続
//★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★
//MySQL サーバー
$servername = "urlounge.co.jp";
//MySQL ユーザー
$username = "testssh";
//MySQL パスワード
$password = "testssh";
//MySQL  DB名
$dbname = "internet";


$link = mysql_connect($servername, $username, $password);
if (!$link) {
die('接続失敗です。'.mysql_error());
}else{
	// print('接続に成功しました。<br>');
}

$db_selected = mysql_select_db($dbname, $link);
if (!$db_selected){
die('データベース選択失敗です。'.mysql_error());
}else{
	// print('データベースを選択しました。<br>');
}


// mysql_set_charset('utf8');




	//★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★
	//まずは精査項目を取得
	$koumoku = "yahoo_junle";
	$koumoku .= ",title";
	$koumoku .= ",yahoo_color";
	$koumoku .= ",yahoo_kataban";
	$koumoku .= ",serial_number";
	$koumoku .= ",price";
	$koumoku .= ",comment";
	$koumoku .= ",ecc_id";
	$koumoku .= ",product_id";
	//★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★
$test_sql = "";




//urloungeから取得、配列格納
$get_query = "SELECT {$koumoku} FROM `shouhin` WHERE `status`=32 LIMIT 10";
$get_sql = mysql_query('SET NAMES utf8');
$get_sql = mysql_query($get_query);




//urloungeデータベース切断
$close_flag = mysql_close($link);



//★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★
//メール初期設定
mb_language('uni');
mb_internal_encoding("UTF-8");
$nishitani = "nishitani@urlounge.co.jp";
$sousinmoto = $nishitani;
$table_name = "satei";
//★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★

//★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★
//kagoyaデータベース接続
//★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★
//MySQL サーバー
$kagoya_servername = "157.7.137.204";
//MySQL ユーザー
$kagoya_username = "urloungecojp";
//MySQL パスワード
$kagoya_password = "1qaz2wsx3edc@@@";
//MySQL  DB名
$kagoya_dbname = "internet";


$kagoya_link = mysql_connect($kagoya_servername, $kagoya_username, $kagoya_password);
if (!$kagoya_link) {
	$text_table = "データベース接続失敗";
	$subject = "MySQL途中経過:{$table_name}";
	$header_text_info="From: ".$sousinmoto."\nContent-Type: text/plain;charset=ISO-2022-JP\nX-Mailer: PHP/".phpversion();
	mb_send_mail($nishitani,$subject,$text_table,$header_text_info);
	die('接続失敗です。'.mysql_error());
}else{
	// print('接続に成功しました。<br>');
}

$kagoya_db_selected = mysql_select_db($kagoya_dbname, $kagoya_link);
if (!$kagoya_db_selected){
	$text_table = "データベース選択失敗";
	$subject = "MySQL途中経過:{$table_name}";
	$header_text_info="From: ".$sousinmoto."\nContent-Type: text/plain;charset=ISO-2022-JP\nX-Mailer: PHP/".phpversion();
	mb_send_mail($nishitani,$subject,$text_table,$header_text_info);
	die('データベース選択失敗です。'.mysql_error());
}else{
	// print('データベースを選択しました。<br>');
}

// mysql_set_charset('utf8');


//kagoyaのkagoya_resultをいったん消す
$truncate_query = "TRUNCATE TABLE `satei`";
// print $truncate_query;
$truncate_sql = mysql_query('SET NAMES utf8');
$truncate_sql = mysql_query($truncate_query);

$rep_koumoku = str_replace("`","",$koumoku);
$val_koumoku = explode(",",$rep_koumoku);
$text_table = "";
//kagoyaのkagoya_resultにinsert
while ($get_res = mysql_fetch_assoc($get_sql)) {
	$into_result = "";
	for ($kouoku_i=0; $kouoku_i < count($val_koumoku); $kouoku_i++) {
		$res_koumoku = $val_koumoku[$kouoku_i];
		$a_res = $get_res[$res_koumoku];
		if($kouoku_i != 0){
			$into_result .= ",";
		}
		$a_res = str_replace("'","’",$a_res);
		$a_res = str_replace("\\"," ",$a_res);
		$into_result .= "'{$a_res}'";
	}
	$ins_query = "INSERT INTO satei({$koumoku}) VALUES ({$into_result}) ";
	// print $ins_query."<br><br>";
	$ins_sql = mysql_query('SET NAMES utf8');
	$ins_sql = mysql_query($ins_query);

	if(mysql_error($kagoya_link)){
		echo mysql_errno($kagoya_link) . ": " . mysql_error($kagoya_link) . "<br>";
		print $ins_query."<br><br>";
		$text_table .= $ins_query."\n\n";
	}
}


if($text_table != ""){
	$subject = "MySQLエラー:{$table_name}";
	$header_text_info="From: ".$sousinmoto."\nContent-Type: text/plain;charset=ISO-2022-JP\nX-Mailer: PHP/".phpversion();
	mb_send_mail($nishitani,$subject,$text_table,$header_text_info);
}else{
	$text_table = "成功しました。";
	$subject = "MySQL成功:{$table_name}";
	$header_text_info="From: ".$sousinmoto."\nContent-Type: text/plain;charset=ISO-2022-JP\nX-Mailer: PHP/".phpversion();
	mb_send_mail($nishitani,$subject,$text_table,$header_text_info);
}




//kagoyaデータベース切断
$close_flag = mysql_close($kagoya_link);


?>
