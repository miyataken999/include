<?
//ログイン認証
include_once $_SERVER["DOCUMENT_ROOT"]."/include/login/login.php";
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

<?

include $_SERVER["DOCUMENT_ROOT"]."/include/connection.php";

mb_internal_encoding("utf-8");

foreach ($_POST as $key => $value) {
	$key = str_replace("-","_",$key);
	$$key = $value;
}

$subject = str_replace("'","’",$subject);
$zip_name = str_replace("'","’",$zip_name);


$token = 'nishitani';
$room = '68289449';

if($voice_sub_id != ""){
	//update
	$query = "UPDATE voice_sub SET subject='{$subject}',zip_name='{$zip_name}' WHERE id={$voice_sub_id}";
	$sql = mysql_query('SET NAMES utf8');
	$sql = mysql_query($query);
	if($sql === FALSE){
		$word = "EVA voice_sub　データ更新に失敗しました。";
		print $word;
		$word .= $query;
		mysql_error();
		$word = str_replace("&","＆",$word);
		$word = str_replace("'","’",$word);
		$word = str_replace("\"","”",$word);
		exit();
	}else{
		include $_SERVER["DOCUMENT_ROOT"]."/include/close_connection.php";
		include $_SERVER["DOCUMENT_ROOT"]."/include/connection_kagoya.php";

		//update
		$query = "UPDATE voice_sub SET subject='{$subject}',zip_name='{$zip_name}' WHERE id={$voice_sub_id}";
		$sql = mysql_query('SET NAMES utf8');
		$sql = mysql_query($query);
		if($sql === FALSE){
			$word = "カゴヤ voice_sub　データ更新に失敗しました。";
			print $word;
			$word .= $query;
			mysql_error();
			$word = str_replace("&","＆",$word);
			$word = str_replace("'","’",$word);
			$word = str_replace("\"","”",$word);
			exit();
		}else{
			include $_SERVER["DOCUMENT_ROOT"]."/include/close_connection.php";
			header("location: /include/kagoya_check/guestquestion/list.php");
		}
	}
}else{
	//insert

	$query = "INSERT INTO voice_sub(`voice_id`,`preview_dia`,`preview_kin`,`preview_brand`,`subject`,`date`,`zip_name`) VALUES('{$voice_id}','1','1','1','{$subject}','{$date}','{$zip_name}') ";
	$sql = mysql_query('SET NAMES utf8');
	$sql = mysql_query($query);
	$last_id = mysql_insert_id();


	include $_SERVER["DOCUMENT_ROOT"]."/include/close_connection.php";




	if($sql === FALSE){
		$word = "EVA voice_sub　新規データ追加に失敗しました。";
		print $word;
		$word .= $query;
		mysql_error();
		$word = str_replace("&","＆",$word);
		$word = str_replace("'","’",$word);
		$word = str_replace("\"","”",$word);
		exit();
	}else{

		include $_SERVER["DOCUMENT_ROOT"]."/include/connection_kagoya.php";
		print $last_id;

		$query = "UPDATE Eoc_guestquestion SET voice_sub_id={$last_id} WHERE id={$guestquestion_id}";
		$sql = mysql_query('SET NAMES utf8');
		$sql = mysql_query($query);
		if(!$sql){
			$word = "カゴヤ Eoc_guestquestion　データ更新に失敗しました。";
			print $word;
			$word .= $query;
			mysql_error();
			$word = str_replace("&","＆",$word);
			$word = str_replace("'","’",$word);
			$word = str_replace("\"","”",$word);
			exit();
		}else{
			$query = "INSERT INTO voice_sub(`voice_id`,`preview_dia`,`preview_kin`,`preview_brand`,`subject`,`date`,`zip_name`) VALUES('{$voice_id}','1','1','1','{$subject}','{$date}','{$zip_name}') ";
			$sql = mysql_query('SET NAMES utf8');
			$sql = mysql_query($query);
			if(!$sql){
				$word = "カゴヤ voice_sub　新規データ追加に失敗しました。";
				print $word;
				$word .= $query;
				mysql_error();
				$word = str_replace("&","＆",$word);
				$word = str_replace("'","’",$word);
				$word = str_replace("\"","”",$word);
				exit();
			}else{
				header("location: /include/kagoya_check/guestquestion/list.php");
			}
		}


	}

}


?>
</body>
</html>
