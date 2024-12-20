<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>査定明細</title>
	<link rel="stylesheet" href="">
</head>
<body>

<?
// header("content-type:text/csv; charset=utf-8;");
// header("content-type:text/html; charset=utf-8;");
mb_internal_encoding("utf-8");
// ini_set("display_errors",1);

//ログイン認証
include_once $_SERVER["DOCUMENT_ROOT"]."/include/login/login.php";




include $_SERVER["DOCUMENT_ROOT"]."/include/connection.php";

$kokyaku = htmlspecialchars($_GET["koSEQ"]);

$query = "SELECT yahoo_junle,title,yahoo_color,yahoo_kataban,serial_number,price,comment FROM shouhin WHERE `status`=32 AND ecc_id={$kokyaku} ";
$sql = mysql_query('SET NAMES utf8');
$sql = mysql_query($query);
$count = 0;
$total_price = 0;

$satei_text = "";

while ($res = mysql_fetch_assoc($sql)) {
	$count++;
	$yahoo_junle = $res["yahoo_junle"];
	$title = $res["title"];
	if($title != ""){
		$title = " / ".$title;
	}
	$yahoo_color = $res["yahoo_color"];
	if($yahoo_color != ""){
		$yahoo_color = " / ".$yahoo_color;
	}
	// $yahoo_kataban = $res["yahoo_kataban"];
	// if($yahoo_kataban != ""){
	// 	$yahoo_kataban = " / ".$yahoo_kataban;
	// }
		$serial_number = $res["serial_number"];
	if($serial_number != ""){
		$serial_number = " / ".$serial_number;
	}
	$price = $res["price"];
	$total_price = $total_price+$price;
	$price = number_format($price);
	$comment = $res["comment"];
	// print $count." ".$yahoo_junle.$title.$yahoo_color.$yahoo_kataban.$serial_number." = ".$price."円 ".$comment."<br>";
	$satei_text .= $count." ".$yahoo_junle.$title.$yahoo_color.$serial_number." = ".$price."円 ".$comment."\n";
}
// $satei_text .= "合計金額：".number_format($total_price)."円";



$query = "SELECT first_name FROM users WHERE user_id={$uid} LIMIT 1";
$sql = mysql_query($query);
$res = mysql_fetch_assoc($sql);
$first_name = $res["first_name"];
$first_nameArray = explode("　",$first_name);
$front_name = $first_nameArray[0];




$eoc_query = "SELECT name1,mail1,mail2,mypage_id FROM Eoc WHERE ecc_id={$kokyaku} LIMIT 1";
// print $eoc_query;
$eoc_sql = mysql_query('SET NAMES utf8');
$eoc_sql = mysql_query($eoc_query);
$eoc_res = mysql_fetch_assoc($eoc_sql);
// var_dump($eoc_res);
$name = $eoc_res["name1"];
$mypage_id = $eoc_res["mypage_id"];
$mail1 = $eoc_res["mail1"];
$mail2 = $eoc_res["mail2"];
// print $mypage_id;


include $_SERVER["DOCUMENT_ROOT"]."/include/close_connection.php";











include $_SERVER["DOCUMENT_ROOT"]."/include/connection_izanami.php";



$mailTmp = htmlspecialchars($_GET["satei_details"]);

$query = "SELECT name,subject,main,signature FROM mst_mail_template WHERE id={$mailTmp} LIMIT 1";
$sql = mysql_query('SET NAMES utf8');
$sql = mysql_query($query);
$mailres = mysql_fetch_assoc($sql);


$mailres["main"] = str_replace('{{■■■ 査定明細 ■■■}}',$satei_text,$mailres["main"]);
$mailres["main"] = str_replace('{{■■■ 担当者 ■■■}}',$front_name,$mailres["main"]);
$mailres["main"] = str_replace('{{■■■ 氏名 ■■■}}',$name,$mailres["main"]);

$mailres["main"] = str_replace('{{■■■ 小計 ■■■}}',number_format($total_price),$mailres["main"]);
$shokeihi = 0;
$mailres["main"] = str_replace('{{■■■ 諸経費 ■■■}}',number_format($shokeihi),$mailres["main"]);
$goukei = $total_price+$shokeihi;
$mailres["main"] = str_replace('{{■■■ 合計 ■■■}}',number_format($goukei),$mailres["main"]);
$risaikuru = 0;
$mailres["main"] = str_replace('{{■■■ リサイクル承諾計 ■■■}}',number_format($risaikuru),$mailres["main"]);


$mailres["signature"] = str_replace('{{■■■ 担当者フルネーム ■■■}}',$first_name,$mailres["signature"]);





?>
<div id="formbox">
	<form action="satei_send.php" method="post" id="form" >
		<div class="inputtitle">
			お客様氏名
		</div>
		<div class="inputbox">
			<?=$name?>  顧客SEQ<input type="text" name="ecc_id" id="ecc_id" value="<?=$kokyaku?>" readonly>
		</div>
		<div class="inputtitle">
			送信先
		</div>
		<div class="inputbox">
			<select name="mailadress" >
				<option value="<?=$mail1?>">メアド１　<?=$mail1?></option>
				<option value="<?=$mail2?>">メアド２　<?=$mail2?></option>
			</select>
		</div>

		<div class="inputtitle">
			件名
		</div>
		<div class="inputbox">
			<input type="text" name="subject" value="<?=$mailres["subject"]?>">
		</div>
		<div class="inputtitle">
			本文
		</div>
		<div class="inputbox">
			<textarea name="maintext" id="maintext"><?=$mailres["main"]?></textarea>
		</div>
		<div class="inputbtn">
			<input type="button" id="satei_send" value="送信する">
		</div>
		<div class="inputtitle">
			署名
		</div>
		<div class="inputbox">
			<textarea name="signature" id="signature"><?=$mailres["signature"]?></textarea>
		</div>

	</form>
</div>


<style type="text/css" media="screen">
body{
	background-color: #ccc;
}
#formbox{
	width: 1500px;
	margin: auto;
}
#form {
    display: block;
    width: 1000px;
    margin: auto;
    background: #fff;
    padding: 20px 40px;
}
#form .inputbox{
    width: 90%;
    margin: auto;
}
#form input{
    display: block;
    width: 100%;
    padding: 5px 15px;
}
#form select{
    width: auto;
    padding: 5px 15px;
    display: block;
}
#maintext{
	height: 1300px;
}
#signature{
	height: 800px;
}
#form textarea {
    display: block;
    width: 100%;
    padding: 5px 15px;
}
#form #satei_send{
	width: 300px;
	margin: 30px auto 20px;
	font-size: 22px;
}
#form #ecc_id{
	display: inline;
	border: none;
	width: auto;
}

</style>

</body>
</html>
