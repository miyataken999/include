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
			if(($result["GroupID"] == '-1')){
				$ok_user = "ok";
			}elseif(($result["GroupID"] == '14')){
				$ok_user = "ok";

			//作業終わったら消すこと
			}elseif(($result["GroupID"] == '10')){
				$ok_user = "ok";
			}elseif(($result["GroupID"] == '19')){
				$ok_user = "ok";
			}elseif(($result["GroupID"] == '21')){
				//caster(Blastmail-DL+IPグループ)
				$ok_user = "ok";
			}elseif(($result["GroupID"] == '31')){
				//caster(落札額突合グループ（OS）)
				$ok_user = "ok";
			}else{
				$ok_user == "no";
			}
		}
		if($ok_user == "no"){
			print "権限がありません。";
			exit();
		}
// $group_sql = "SELECT ";
include $_SERVER["DOCUMENT_ROOT"]."/include/close_connection.php";
?>
