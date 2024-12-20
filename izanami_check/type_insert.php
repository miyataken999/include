<?
//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
//izanami データ取得
//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
include $_SERVER["DOCUMENT_ROOT"]."/include/connection_izanami.php";


$query = "SELECT * FROM {$table_name} WHERE id={$hikaku_id}";
$sql = mysql_query('SET NAMES utf8');
$sql = mysql_query($query);
mysql_error();
$users_res = mysql_fetch_assoc($sql);
$user_name = $users_res["name"];
$user_name_kana = $users_res["name_kana"];
$user_tel = $users_res["tel"];
$user_mail = $users_res["email"];
$user_yuubinn = $users_res["zip1"];
$user_zip1 = substr($user_yuubinn,0,3);
$user_zip2 = str_replace($user_zip1,"",$user_yuubinn);

$user_add1 = $users_res["address1"];
$user_add2 = $users_res["address2"];
$user_add3 = $users_res["address3"];
$user_id_check = $users_res["identity_check"];
$user_ecc_id = $users_res["ecc_id"];

//★★★★★★★★★★★★★★★★★★名前分割★★★★★★★★★★★★★★★★★★
if(strstr($user_name,'　')){
	$user_nameArray = explode('　',$user_name);
	$user_name_1 = $user_nameArray[0];
	$user_name_2 = "";
	for ($i=1; $i < count($user_nameArray); $i++) {
		$user_name_2 .= $user_nameArray[$i];
	}
}elseif(strstr($user_name,' ')){
	$user_nameArray = explode(' ',$user_name);
	$user_name_1 = $user_nameArray[0];
	$user_name_2 = "";
	for ($i=1; $i < count($user_nameArray); $i++) {
		$user_name_2 .= $user_nameArray[$i];
	}
}else{
	$user_name_1 = $user_name;
	$user_name_2 = $user_name;
}
//★★★★★★★★★★★★★★★★★★名前分割★★★★★★★★★★★★★★★★★★

//★★★★★★★★★★★★★★★★★★フリガナ分割★★★★★★★★★★★★★★★★★★
if(strstr($user_name_kana,'　')){
	$user_name_kanaArray = explode('　',$user_name_kana);
	$user_name_kana_1 = $user_name_kanaArray[0];
	$user_name_kana_2 = "";
	for ($i=1; $i < count($user_name_kanaArray); $i++) {
		$user_name_kana_2 .= $user_name_kanaArray[$i];
	}
}elseif(strstr($user_name_kana,' ')){
	$user_name_kanaArray = explode(' ',$user_name_kana);
	$user_name_kana_1 = $user_name_kanaArray[0];
	$user_name_kana_2 = "";
	for ($i=1; $i < count($user_name_kanaArray); $i++) {
		$user_name_kana_2 .= $user_name_kanaArray[$i];
	}
}else{
	$user_name_kana_1 = $user_name_kana;
	$user_name_kana_2 = $user_name_kana;
}
//★★★★★★★★★★★★★★★★★★フリガナ分割★★★★★★★★★★★★★★★★★★

//★★★★★★★★★★★★★★★★★★電話番号★★★★★★★★★★★★★★★★★★
	$default_tel = $user_tel;
	$tel_res = "";
	$tel_save = "";
	if((preg_match("/^03/",$user_tel)) or (preg_match("/^06/",$user_tel))){
		$tel_save = 1;
		$user_tel = str_split($user_tel);
		$c_tel = count($user_tel);
		for ($i=0; $i < $c_tel; $i++) {
			$tel_res = $tel_res.$user_tel[$i];
			if(($i == 1) or ($i == 5)){
				$tel_res = $tel_res."-";
			}
		}
	}elseif((preg_match("/^070/",$user_tel)) or (preg_match("/^080/",$user_tel)) or (preg_match("/^090/",$user_tel)) or (preg_match("/^050/",$user_tel))){
		$tel_save = 2;
		$user_tel = str_split($user_tel);
		$c_tel = count($user_tel);
		for ($i=0; $i < $c_tel; $i++) {
			$tel_res = $tel_res.$user_tel[$i];
			if(($i == 2) or ($i == 6)){
				$tel_res = $tel_res."-";
			}
		}
	}
	$tel_res = str_replace("--","-",$tel_res);
//★★★★★★★★★★★★★★★★★★電話番号★★★★★★★★★★★★★★★★★★






$close_flag = mysql_close($link);
$close_flag = mysql_close($link_internet);
//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
//EVA 挿入
//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
include $_SERVER["DOCUMENT_ROOT"]."/include/connection.php";

$query = "INSERT INTO {$target_table} (";
$query .= "name1";
$query .= ",name2";
$query .= ",LAST_NAME2";
$query .= ",FIRST_NAME2";
$query .= ",LAST_NAME_KANA";
$query .= ",FIRST_NAME_KANA";
if($tel_save == 1){
	$query .= ",tel";
}else{
	$query .= ",tel2";
}
$query .= ",mail1";
$query .= ",zip1";
$query .= ",zip2";
$query .= ",address1";
$query .= ",address2";
$query .= ",address3";
$query .= ",mypage_id";
$query .= ",created_t";
$query .= ",_registerd_id";
$query .= ")";
$query .= "VALUES(";
$query .= "'{$user_name}'";
$query .= ",'{$user_name_kana}'";
$query .= ",'{$user_name_1}'";
$query .= ",'{$user_name_2}'";
$query .= ",'{$user_name_kana_1}'";
$query .= ",'{$user_name_kana_2}'";
$query .= ",'{$tel_res}'";
$query .= ",'{$user_mail}'";
$query .= ",'{$user_zip1}'";
$query .= ",'{$user_zip2}'";
$query .= ",'{$user_add1}'";
$query .= ",'{$user_add2}'";
$query .= ",'{$user_add3}'";
$query .= ",'{$hikaku_id}'";
$query .= ",NOW()";
$query .= ",'{$uid}'";
$query .= ")";


// print $query;
// exit();

$c = mysql_query('SET NAMES utf8');
$c = mysql_query($query);

if(!$c){
	mysql_error();
	exit();
}else{
	$kousin_id = mysql_insert_id();
}


$close_flag = mysql_close($link);
$close_flag = mysql_close($link_internet);
//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
//izanami 更新
//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
include $_SERVER["DOCUMENT_ROOT"]."/include/connection_izanami.php";



$query = "UPDATE {$table_name} SET ecc_id={$kousin_id} WHERE id={$hikaku_id} LIMIT 1";
// print $query;
// exit();
$c = mysql_query($query);
if(!$c){
	mysql_error();
	exit();
}else{
	header("location: https://rifa.life/MyPage/users_list.php");
	exit();
}


$close_flag = mysql_close($link);
$close_flag = mysql_close($link_internet);
