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

if($voice_sub_id != ""){
	//update
	$query = "UPDATE voice_sub_testtest SET subject='{$subject}',zip_name='{$zip_name}' WHERE id={$voice_sub_id}";
	$sql = mysql_query('SET NAMES utf8');
	$sql = mysql_query($query);
	if($sql === FALSE){
		print "登録に失敗しました。";
		mysql_error();
		exit();
	}else{
		include $_SERVER["DOCUMENT_ROOT"]."/include/close_connection.php";
		include $_SERVER["DOCUMENT_ROOT"]."/include/connection_kagoya.php";

		//update
		$query = "UPDATE voice_sub_testtest SET subject='{$subject}',zip_name='{$zip_name}' WHERE id={$voice_sub_id}";
		$sql = mysql_query('SET NAMES utf8');
		$sql = mysql_query($query);
		if($sql === FALSE){
			print "登録に失敗しました。";
			mysql_error();
			exit();
		}else{
			include $_SERVER["DOCUMENT_ROOT"]."/include/close_connection.php";
			header("location: /include/kagoya_check/guestquestion/list.php");
		}
	}
}else{
	//insert

	$query = "INSERT INTO voice_sub_testtest(`voice_id`,`preview_dia`,`preview_kin`,`preview_brand`,`subject`,`date`,`zip_name`) VALUES('{$voice_id}','1','1','1','{$subject}','{$date}','{$zip_name}') ";
	$sql = mysql_query('SET NAMES utf8');
	$sql = mysql_query($query);
	$last_id = mysql_insert_id();


	include $_SERVER["DOCUMENT_ROOT"]."/include/close_connection.php";




	if($sql === FALSE){
		print "登録に失敗しました。1";
		mysql_error();
		exit();
	}else{

		include $_SERVER["DOCUMENT_ROOT"]."/include/connection_kagoya.php";
		print $last_id."<br>";

		$query = "UPDATE Eoc_guestquestion SET voice_sub_id={$last_id} WHERE id={$guestquestion_id}";
		print $query;
		$sql = mysql_query('SET NAMES utf8');
		$sql = mysql_query($query);
		if(!$sql){
			print "<br>登録に失敗しました。2";
			mysql_error();
			exit();
		}else{
			$query = "INSERT INTO voice_sub_testtest(`voice_id`,`preview_dia`,`preview_kin`,`preview_brand`,`subject`,`date`,`zip_name`) VALUES('{$voice_id}','1','1','1','{$subject}','{$date}','{$zip_name}') ";
			$sql = mysql_query('SET NAMES utf8');
			$sql = mysql_query($query);
			if(!$sql){
				print "登録に失敗しました。3";
				mysql_error();
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
