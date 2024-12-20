<?
//ログイン認証
include_once $_SERVER["DOCUMENT_ROOT"]."/include/login/login.php";

include $_SERVER["DOCUMENT_ROOT"]."/include/connection.php";

		$query = "SELECT user_login FROM users WHERE user_id={$uid}";
		$sql = mysql_query('SET NAMES utf8');
		$sql = mysql_query($query);
		$result = mysql_fetch_assoc($sql);

		$kengen_user_name = $result["user_login"];
		// print "kengen_user_name   ".$kengen_user_name;

		$query = "SELECT GroupID FROM evashop5ugmembers WHERE UserName='{$kengen_user_name}'";
		$sql = mysql_query('SET NAMES utf8');
		$sql = mysql_query($query);

		$ok_user = "no";
		while ($result = mysql_fetch_assoc($sql)) {
			if(
				($result["GroupID"] == '-1')
				OR ($result["GroupID"] == '12')
				OR ($result["GroupID"] == '37')
			){
				$ok_user = "ok";
			}
		}
		if($ok_user == "no"){
			print "権限がありません。";
			exit();
		}
// $group_sql = "SELECT ";
include $_SERVER["DOCUMENT_ROOT"]."/include/close_connection.php";
?>
