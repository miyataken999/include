<!DOCTYPE html>
<html>
<head>
<!--NO INDEX -->
<meta name="robots" content="noindex">
<!--/NO INDEX -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>宅配データ比較画面</title>
	<link rel="stylesheet" href="/include/kagoya_check/style.css">
</head>
<body>
<?
include_once $_SERVER["DOCUMENT_ROOT"]."/include/common/header_shop5.php";
?>


<?
// ini_set("display_errors",1);

include_once $_SERVER["DOCUMENT_ROOT"]."/include/kagoya_check/function.php";
$now_time = date("Y/m/d H:i:s");

mb_internal_encoding("utf8");
include $_SERVER["DOCUMENT_ROOT"]."/include/connection_kagoya.php";


$table_name = "Eoc_guestquestion";

$kousin_id = htmlspecialchars($_GET['kousin_id']);
$hikaku_id = htmlspecialchars($_GET["hikaku_id"]);
$uid = htmlspecialchars($_GET["uid"]);

if($kousin_id == ""){
	print '対象データがありあません。操作し直してください。';
	exit();
}
if($hikaku_id == ""){
	print '対象データがありあません。操作し直してください。';
	exit();
}




$query = "SELECT * FROM {$table_name} WHERE id={$hikaku_id} LIMIT 1";
$sql = mysql_query('SET NAMES utf8');
$sql = mysql_query($query);



$inser_key = "";
$inser_val = "";

$kagoya = mysql_fetch_assoc($sql);

foreach ($kagoya as $key => $val) {
	if (strpos($val, '\'') !== false) {
		$kagoya[$key] = str_replace("'", "’", $val);
	}
}

if($kagoya["ecc_id"] > 0){
	print 'すでに反映済みです。';
	exit();
}


$insert = "INSERT INTO {$table_name}(";
$insert .= "`site-reflect` ,";
$insert .= "`timestamp` ,";
$insert .= "`service-name` ,";
$insert .= "`service-name-text` ,";
$insert .= "`service-story` ,";
$insert .= "`service-story-text` ,";
$insert .= "`service-satisfied` ,";
$insert .= "`sold-this-time` ,";
$insert .= "`cancel-reason` ,";
$insert .= "`cancel-reason-text` ,";
$insert .= "`other-reason-text` ,";
$insert .= "`how-much-cheap` ,";
$insert .= "`how-much-cheap-text` ,";
$insert .= "`dissatisfied-reason-text` ,";
$insert .= "`service-speed` ,";
$insert .= "`service-speed-text` ,";
$insert .= "`service-description` ,";
$insert .= "`service-description-text` ,";
$insert .= "`site-level` ,";
$insert .= "`site-level-text` ,";
$insert .= "`choice-reason-text` ,";
$insert .= "`search-keyword` ,";
$insert .= "`search-keyword-text` ,";
$insert .= "`search-engine` ,";
$insert .= "`search-engine-text` ,";
$insert .= "`search-medium` ,";
$insert .= "`search-medium-text` ,";
$insert .= "`freely-write-text` ,";
$insert .= "`a-word-text` ,";
$insert .= "`customer-sex` ,";
$insert .= "`customer-age` ,";
$insert .= "`customer-address` ,";
$insert .= "`mail-or-tel-text` ,";
$insert .= "`domain` ,";
$insert .= "`device` ,";
$insert .= "`voice_sub_id` ,";
$insert .= "`updated_at` ,";
$insert .= "`ecc_id` ,";
$insert .= "`comment_agree` ,";
$insert .= "`status`";

$insert .= ")VALUES(";

$insert .= "'{$kagoya['site-reflect']}' ,";
$insert .= "'{$kagoya['timestamp']}' ,";
$insert .= "'{$kagoya['service-name']}' ,";
$insert .= "'{$kagoya['service-name-text']}' ,";
$insert .= "'{$kagoya['service-story']}' ,";
$insert .= "'{$kagoya['service-story-text']}' ,";
$insert .= "'{$kagoya['service-satisfied']}' ,";
$insert .= "'{$kagoya['sold-this-time']}' ,";
$insert .= "'{$kagoya['cancel-reason']}' ,";
$insert .= "'{$kagoya['cancel-reason-text']}' ,";
$insert .= "'{$kagoya['other-reason-text']}' ,";
$insert .= "'{$kagoya['how-much-cheap']}' ,";
$insert .= "'{$kagoya['how-much-cheap-text']}' ,";
$insert .= "'{$kagoya['dissatisfied-reason-text']}' ,";
$insert .= "'{$kagoya['service-speed']}' ,";
$insert .= "'{$kagoya['service-speed-text']}' ,";
$insert .= "'{$kagoya['service-description']}' ,";
$insert .= "'{$kagoya['service-description-text']}' ,";
$insert .= "'{$kagoya['site-level']}' ,";
$insert .= "'{$kagoya['site-level-text']}' ,";
$insert .= "'{$kagoya['choice-reason-text']}' ,";
$insert .= "'{$kagoya['search-keyword']}' ,";
$insert .= "'{$kagoya['search-keyword-text']}' ,";
$insert .= "'{$kagoya['search-engine']}' ,";
$insert .= "'{$kagoya['search-engine-text']}' ,";
$insert .= "'{$kagoya['search-medium']}' ,";
$insert .= "'{$kagoya['search-medium-text']}' ,";
$insert .= "'{$kagoya['freely-write-text']}' ,";
$insert .= "'{$kagoya['a-word-text']}' ,";
$insert .= "'{$kagoya['customer-sex']}' ,";
$insert .= "'{$kagoya['customer-age']}' ,";
$insert .= "'{$kagoya['customer-address']}' ,";
$insert .= "'{$kagoya['mail-or-tel-text']}' ,";
$insert .= "'{$kagoya['domain']}' ,";
$insert .= "'{$kagoya['device']}' ,";
$insert .= "'{$kagoya['voice_sub_id']}' ,";
$insert .= "'{$kagoya['updated_at']}' ,";
$insert .= "'{$kousin_id}' ,";
$insert .= "'{$kagoya['comment_agree']}' ,";
$insert .= "'未使用'";
$insert .= ")";


include $_SERVER["DOCUMENT_ROOT"]."/include/close_connection.php";
include $_SERVER["DOCUMENT_ROOT"]."/include/connection.php";

$insertsql = mysql_query('SET NAMES utf8');
$insertsql = mysql_query($insert);
print $insert;
$last_id = mysql_insert_id();

include $_SERVER["DOCUMENT_ROOT"]."/include/close_connection.php";
include $_SERVER["DOCUMENT_ROOT"]."/include/connection_kagoya.php";

$up_query = "UPDATE {$table_name} SET eva_id='{$last_id}',ecc_id='{$kousin_id}' WHERE id={$hikaku_id}";
$up_sql = mysql_query('SET NAMES utf8');
$up_sql = mysql_query($up_query);




include $_SERVER["DOCUMENT_ROOT"]."/include/close_connection.php";


if($up_sql){


		switch ($kagoya['domain']) {
			case 'kinkaimasu.jp':
				$resdomain = "kinkai/";
				break;
			case 'brandkaimasu.com':
				$resdomain = "brakai/";
				break;
			case 'diakaimasu.jp':
				$resdomain = "diakai/";
				break;
			default:
				$resdomain = "kinkai/";
				break;
		}
		$resdomain .= "{$kagoya['device']}";


		if ($kagoya['service-satisfied'] == "とても満足") {
			$stamp = '(h)';
		} else {
			$stamp = '';
		}

		$chat_text_body = "[info][title]{$stamp}アンケート反映終了 受信日時： {$kagoya['timestamp']}/{$resdomain}[/title]";

		$chat_txt = "";
		$chat_txt .= "https://rifa.life/shop5/Eoc_list.php?q=(ecc_id~equals~" . $kousin_id . ")[hr]";
		$chat_txt .= "満足度：{$kagoya['service-satisfied']}[hr]";
		if ($kagoya['freely-write-text'] != "") {
			$chat_txt .= "[info][title]要望・指摘[/title]{$kagoya['freely-write-text']}[/info]";
		}
		if ($kagoya['a-word-text'] != "") {
			$chat_txt .= "[info][title]担当者に一言[/title]{$kagoya['a-word-text']}[/info]";
		}
		if ($kagoya['customer-address'] != "") {
			$chat_txt .= "[hr]【都道府県】{$kagoya['customer-address']}";
		}
		if ($kagoya['customer-sex'] != "") {
			$chat_txt .= "[hr]【性別】{$kagoya['customer-sex']}";
		}
		if ($kagoya['customer-age'] != "") {
			$chat_txt .= "【年代】{$kagoya['customer-age']}";
		}
		if ($kagoya['service-name'] != "") {
			$chat_txt .= "【買取種別】{$kagoya['service-name']}";
			$chat_txt .= "{$kagoya['service-name-text']}";
		}
		if ($kagoya['service-story'] != "") {
			$chat_txt .= "【売却経緯】{$kagoya['service-story']}";
			$chat_txt .= "{$kagoya['service-story-text']}";
		}
		if ($kagoya['sold-this-time'] != "") {
			$chat_txt .= "[hr]【売却結果】{$kagoya['sold-this-time']}";
		}
		if ($kagoya['cancel-reason'] != "") {
			$chat_txt .= "[hr]【キャンセル理由】{$kagoya['cancel-reason']}";
			$chat_txt .= "{$kagoya['cancel-reason-text']}";
		}
		if ($kagoya['other-reason-text'] != "") {
			$chat_txt .= "[hr]【『なんとなく』『金額以外の理由』】{$kagoya['other-reason-text']}";
		}
		if ($kagoya['how-much-cheap'] != "") {
			$chat_txt .= "[hr]【『他店より安かった』】{$kagoya['how-much-cheap']}";
			$chat_txt .= "{$kagoya['how-much-cheap-text']}";
		}
		if ($kagoya['dissatisfied-reason-text'] != "") {
			$chat_txt .= "[hr]【『不満』理由】{$kagoya['dissatisfied-reason-text']}";
		}
		if ($kagoya['service-speed'] != "") {
			$chat_txt .= "[hr]【サービススピード】{$kagoya['service-speed']}";
			$chat_txt .= "{$kagoya['service-speed-text']}";
		}
		if ($kagoya['service-description'] != "") {
			$chat_txt .= "[hr]【サービス説明】{$kagoya['service-description']}";
			$chat_txt .= "{$kagoya['service-description-text']}";
		}
		if ($kagoya['site-level'] != "") {
			$chat_txt .= "[hr]【サイトの質】{$kagoya['site-level']}";
			$chat_txt .= "{$kagoya['site-level-text']}";
		}
		if ($kagoya['choice-reason-text'] != "") {
			$chat_txt .= "[hr]【リファを選んだ理由】{$kagoya['choice-reason-text']}";
		}
		if ($kagoya['search-keyword'] != "") {
			$chat_txt .= "[hr]【検索ワード】{$kagoya['search-keyword']}";
			$chat_txt .= "{$kagoya['search-keyword-text']}";
		}
		if ($kagoya['search-engine'] != "") {
			$chat_txt .= "[hr]【検索エンジン】{$kagoya['search-engine']}";
			$chat_txt .= "{$kagoya['search-engine-text']}";
		}
		if ($kagoya['search-medium'] != "") {
			$chat_txt .= "[hr]【検索媒体】{$kagoya['search-medium']}";
			$chat_txt .= "{$kagoya['search-medium-text']}";
		}

		$chat_text_body .= $chat_txt;
		$chat_text_body .= "[/info]";


		$chat_text_body = str_replace("&", "＆", $chat_text_body);
		$chat_text_body = str_replace('`', "", $chat_text_body);
		$chat_text_body = mb_convert_encoding($chat_text_body, "UTF-8", "auto");
		//本番ルーム
		$room = "87538581";
		//テスト用個人ルーム
		// $room = "68102709";
		$sugisan = "4207431dc4eb42bb1e13befa2f6657fe";
		$bot = "ed472827b8dda0ba81ba586c8b0e4bd9";
		$nishitani = "c1d97cfaf7e544675fad7be63c49a0d5";
		//誰から発行するか
		$token = $bot;

		$token = 'bot';
		if($kousin_id != "20332"){

			//メール送信
			function make_mail_body($kagoya, $kousin_id){
				$mail_body = "";
				$mail_body .= "https://rifa.life/shop5/Eoc_list.php?q=(ecc_id~equals~" . $kousin_id . ")";
				$mail_body .= "満足度：{$kagoya['service-satisfied']}";
				if ($kagoya['freely-write-text'] != "") {
					$mail_body .= "要望・指摘{$kagoya['freely-write-text']}";
					$mail_body .= "\n";
				}
				if ($kagoya['a-word-text'] != "") {
					$mail_body .= "担当者に一言{$kagoya['a-word-text']}";
					$mail_body .= "\n";
				}
				if ($kagoya['customer-address'] != "") {
					$mail_body .= "【都道府県】{$kagoya['customer-address']}";
					$mail_body .= "\n";
				}
				if ($kagoya['customer-sex'] != "") {
					$mail_body .= "【性別】{$kagoya['customer-sex']}";
					$mail_body .= "\n";
				}
				if ($kagoya['customer-age'] != "") {
					$mail_body .= "【年代】{$kagoya['customer-age']}";
					$mail_body .= "\n";
				}
				if ($kagoya['service-name'] != "") {
					$mail_body .= "【買取種別】{$kagoya['service-name']}";
					$mail_body .= "\n";
					$mail_body .= "{$kagoya['service-name-text']}";
					$mail_body .= "\n";
				}
				if ($kagoya['service-story'] != "") {
					$mail_body .= "【売却経緯】{$kagoya['service-story']}";
					$mail_body .= "\n";
					$mail_body .= "{$kagoya['service-story-text']}";
					$mail_body .= "\n";
				}
				if ($kagoya['sold-this-time'] != "") {
					$mail_body .= "【売却結果】{$kagoya['sold-this-time']}";
					$mail_body .= "\n";
				}
				if ($kagoya['cancel-reason'] != "") {
					$mail_body .= "【キャンセル理由】{$kagoya['cancel-reason']}";
					$mail_body .= "\n";
					$mail_body .= "{$kagoya['cancel-reason-text']}";
					$mail_body .= "\n";
				}
				if ($kagoya['other-reason-text'] != "") {
					$mail_body .= "【『なんとなく』『金額以外の理由』】{$kagoya['other-reason-text']}";
					$mail_body .= "\n";
				}
				if ($kagoya['how-much-cheap'] != "") {
					$mail_body .= "【『他店より安かった』】{$kagoya['how-much-cheap']}";
					$mail_body .= "\n";
					$mail_body .= "{$kagoya['how-much-cheap-text']}";
					$mail_body .= "\n";
				}
				if ($kagoya['dissatisfied-reason-text'] != "") {
					$mail_body .= "【『不満』理由】{$kagoya['dissatisfied-reason-text']}";
					$mail_body .= "\n";
				}
				if ($kagoya['service-speed'] != "") {
					$mail_body .= "【サービススピード】{$kagoya['service-speed']}";
					$mail_body .= "\n";
					$mail_body .= "{$kagoya['service-speed-text']}";
					$mail_body .= "\n";
				}
				if ($kagoya['service-description'] != "") {
					$mail_body .= "【サービス説明】{$kagoya['service-description']}";
					$mail_body .= "\n";
					$mail_body .= "{$kagoya['service-description-text']}";
					$mail_body .= "\n";
				}
				if ($kagoya['site-level'] != "") {
					$mail_body .= "【サイトの質】{$kagoya['site-level']}";
					$mail_body .= "\n";
					$mail_body .= "{$kagoya['site-level-text']}";
					$mail_body .= "\n";
				}
				if ($kagoya['choice-reason-text'] != "") {
					$mail_body .= "\n";
					$mail_body .= "【リファを選んだ理由】{$kagoya['choice-reason-text']}";
					$mail_body .= "\n";
				}
				if ($kagoya['search-keyword'] != "") {
					$mail_body .= "【検索ワード】{$kagoya['search-keyword']}";
					$mail_body .= "\n";
					$mail_body .= "{$kagoya['search-keyword-text']}";
					$mail_body .= "\n";
				}
				if ($kagoya['search-engine'] != "") {
					$mail_body .= "【検索エンジン】{$kagoya['search-engine']}";
					$mail_body .= "\n";
					$mail_body .= "{$kagoya['search-engine-text']}";
					$mail_body .= "\n";
				}
				if ($kagoya['search-medium'] != "") {
					$mail_body .= "【検索媒体】{$kagoya['search-medium']}";
					$mail_body .= "\n";
					$mail_body .= "{$kagoya['search-medium-text']}";
					$mail_body .= "\n";
				}
				$mail_body = str_replace("&", "＆", $mail_body);
				$mail_body = str_replace('`', "", $mail_body);
				$mail_body = mb_convert_encoding($mail_body, "UTF-8", "auto");
				return $mail_body;
			}
			$mail_body = make_mail_body($kagoya, $kousin_id);
			$sendPostData = array(
				"subject" => "アンケート反映終了 受信日時： {$kagoya['timestamp']}/{$resdomain}",
				"text" => $mail_body,
			);
			$sendPostData = http_build_query($sendPostData, "", "&");
			$sendPostDataOptions = array('http' => array('method'=> 'POST','header'=> 'Content-Type: application/x-www-form-urlencoded','content' => $sendPostData));
			$sendPostContext = stream_context_create($sendPostDataOptions);

			// file_get_contents('https://rifa.life/evaProject/api/notification/mail', false, $sendPostContext);

			// google chat
			$options = array(
				// HTTPコンテキストオプションをセット
				'http' => array(
						'method'=> 'POST',
						'header'=> 'Content-Type: application/x-www-form-urlencoded',
						'content' => http_build_query(array(
										"text" => "{$stamp}アンケート反映タスク\n{$mail_body}",
									), "", "&")
				)
			);
			$context = stream_context_create($options);
			$send_space = 'AAAAPM4--yA';
			try{
				file_get_contents('https://rifa.life/refastaProject/pushGoogleChatSpace/' . $send_space , false, $context);
			}catch(\Exception $e){
			// echo $e->getMessage();
			}
		}
		

	header("location: /include/kagoya_check/guestquestion/list.php");
	exit();
}




?>




</body>
</html>



