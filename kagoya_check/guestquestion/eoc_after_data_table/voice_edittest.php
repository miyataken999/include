<?
//ログイン認証
include_once $_SERVER["DOCUMENT_ROOT"]."/include/login/login.php";
?>
<!DOCTYPE html>
<html>
<head>
<!--NO INDEX -->
<meta name="robots" content="noindex">
<!--/NO INDEX -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>お客様の声編集画面</title>
	<link rel="stylesheet" href="/include/kagoya_check/style.css">

<style type="text/css">
	input{
		width: 400px;
		padding: 10px 15px;
	}
	textarea {
	    width: 80%;
	    height: 500px;
	    padding: 10px 15px;
	    border: 2px solid #111;
	}
	#form_back{
		background-color: #fdad6f;
		padding: 30px 0;
	}
	#main_form {
	    width: 800px;
	    margin: auto;
	    background-color: #fff;
	    padding: 0px 0px 15px;
	    border: 1px solid #111;
	    box-shadow: 2px 2px 2px #111;
	}
	.inputBox{
		width: 100%;
		text-align: center;
	}
	.input_title , .textarea_title{
	}
	.textarea_title{
		display: block;
	}
	h1{
		text-align: center;
		font-size: 30px;
		color: #fff;
		background-color: #111;
		font-weight: normal;
	}
	#subjectBox{
		width: 600px;
		height: 600px;
		margin: auto;
	}
</style>

</head>
<body>
<?
// ini_set("display_errors",1);

$table_name = "Eoc_guestquestion";
// include_once $_SERVER["DOCUMENT_ROOT"]."/include/common/header_shop5.php";
// include_once $_SERVER["DOCUMENT_ROOT"]."/include/evacommon/header.php";
include_once $_SERVER["DOCUMENT_ROOT"]."/include/kagoya_check/function.php";





include $_SERVER["DOCUMENT_ROOT"]."/include/kagoya_check/guestquestion/auth.php";



if($_GET["voice_edit_id"] != ""){
	$voice_edit_id = htmlspecialchars($_GET["voice_edit_id"]);
}


include $_SERVER["DOCUMENT_ROOT"]."/include/connection_kagoya.php";


$query = "SELECT * FROM {$table_name} WHERE id={$voice_edit_id} LIMIT 1";
$sql = mysql_query('SET NAMES utf8');
$sql = mysql_query($query);
$result = mysql_fetch_assoc($sql);
foreach ($result as $key => $value) {
	$key = str_replace("-","_",$key);
	$$key = $value;
}

$timestamp = date("Y/m/d H:i",strtotime($timestamp));

// $timestamp = $timestamp.' +0900';

include $_SERVER["DOCUMENT_ROOT"]."/include/close_connection.php";

if($voice_sub_id == ""){
	$h1 = "voice編集";
	include $_SERVER["DOCUMENT_ROOT"]."/include/connection.php";
	$query = "SELECT * FROM voice_sub WHERE id={$voice_sub_id} LIMIT 1";
	$sql = mysql_query('SET NAMES utf8');
	$sql = mysql_query($query);
	$urres = mysql_fetch_assoc($sql);


	$h1 = "voice編集";
	$name = $urres["zip_name"];
	$voice_sub_id = $urres["id"];
	$date = $urres["timestamp"];
	$subject = $urres["subject"];
}else{
	$h1 = "voice新規追加";


	$name = "";
	if($customer_address != ""){
		if($name != ""){ $name .= " "; }
		$name .= $customer_address.'在住';
	}
	if($customer_sex != ""){
		if($name != ""){ $name .= " "; }
		$name .= $customer_sex;
	}
	if($customer_age != ""){
		if($name != ""){ $name .= " "; }
		$name .= $customer_age;
	}





	$subject = "<table>";

	$subject .= "<tr>";
	$subject .= "<th>満足度</th>";
	$subject .= "<th>送信日時</th>";
	$subject .= "</tr>";
	$subject .= "<tr>";
	$subject .= "<td>{$service_satisfied}</td>";
	$subject .= "<td>{$timestamp}</td>";
	$subject .= "</tr>";


	if(($name != "") OR ($service_name != "")){
		$subject .= "<tr>";
		$subject .= "<th>都道府県/性別/年代</th>";
		$subject .= "<th>買取種類</th>";
		$subject .= "</tr>";
		$subject .= "<tr>";
		$subject .= "<td>{$name}</td>";
		$subject .= "<td>{$service_name}</td>";
		$subject .= "</tr>";
	}

	if(($freely_write_text != "") OR ($a_word_text != "")){
		$subject .= "<tr>";
		$subject .= "<th>ご要望・ご指摘</th>";
		$subject .= "<th>担当者に一言</th>";
		$subject .= "</tr>";
		$subject .= "<tr>";
		$subject .= "<td>{$freely_write_text}</td>";
		$subject .= "<td>{$a_word_text}</td>";
		$subject .= "</tr>";
	}

	if(($service_story != "") OR ($sold_this_time != "")){
		$subject .= "<tr>";
		$subject .= "<th>売却経緯</th>";
		$subject .= "<th>売却結果</th>";
		$subject .= "</tr>";
		$subject .= "<tr>";
		$subject .= "<td>{$service_story}";
		if($service_story_text != ""){
			$subject .= "<br>{$service_story_text}";
		}
		$subject .= "</td>";
		$subject .= "<td>{$sold_this_time}</td>";
		$subject .= "</tr>";
	}

	if(($cancel_reason != "") OR ($service_speed != "")){
		$subject .= "<tr>";
		$subject .= "<th>キャンセル理由</th>";
		$subject .= "<th>スピード</th>";
		$subject .= "</tr>";
		$subject .= "<tr>";
		$subject .= "<td>{$cancel_reason}";
		if($cancel_reason_text != ""){
			$subject .= "<br>{$cancel_reason_text}";
		}
		$subject .= "</td>";
		$subject .= "<td>{$service_speed}";
		if($service_speed_text != ""){
			$subject .= "<br>{$service_speed_text}";
		}
		$subject .= "</td>";
		$subject .= "</tr>";
	}

	if(($site_level != "") OR ($choice_reason_text != "")){
		$subject .= "<tr>";
		$subject .= "<th>サイトの質</th>";
		$subject .= "<th>選んだ理由</th>";
		$subject .= "</tr>";
		$subject .= "<tr>";
		$subject .= "<td>{$site_level}";
		if($site_level_text != ""){
			$subject .= "<br>{$site_level_text}";
		}
		$subject .= "</td>";
		$subject .= "<td>{$choice_reason_text}</td>";
		$subject .= "</tr>";
	}
	$subject .= "</table>";



	// if($service_name != ""){
	// 	$subject .= "【ご利用いただいた買取サービスの種類をお教えください。】\n";
	// 	$subject .= "⇒{$service_name}\n";
	// 	if($service_name_text != ""){
	// 		$subject .= "⇒{$service_name_text}\n";
	// 	}
	// }

	// if($service_story != ""){
	// 	$subject .= "【今回のお品物を売却頂いた経緯をお聞かせください。】\n";
	// 	$subject .= "⇒{$service_story}\n";
	// 	if($service_story_text != ""){
	// 		$subject .= "⇒{$service_story_text}\n";
	// 	}
	// }

	// if($service_story != ""){
	// 	$subject .= "【今回のお品物を売却頂いた経緯をお聞かせください。】\n";
	// 	$subject .= "⇒{$service_story}\n";
	// 	if($service_story_text != ""){
	// 		$subject .= "⇒{$service_story_text}\n";
	// 	}
	// }

	// if($sold_this_time != ""){
	// 	$subject .= "【今回、ご売却いただけましたか?】\n";
	// 	$subject .= "⇒{$sold_this_time}\n";
	// }

	// if($cancel_reason != ""){
	// 	$subject .= "【今回のキャンセル理由をお教えください。】\n";
	// 	$subject .= "⇒{$cancel_reason}\n";
	// 	if($cancel_reason_text != ""){
	// 		$subject .= "⇒{$cancel_reason_text}\n";
	// 	}
	// }

	// if($other_reason_text != ""){
 //        $subject .= "【『なんとなく』『金額以外の理由』をお答えした方にお尋ねします。\n具体的にお聞きすることは可能であればご協力お願いします。】\n";
	// 	$subject .= "⇒{$other_reason_text}\n";
	// }

	// if($how_much_cheap != ""){
 //        $subject .= "【他店より安かったと選択された方に質問いたします。\n具体的にいくら位安かったのでしょうか?】\n";
	// 	$subject .= "⇒{$how_much_cheap}\n";
	// 	if($how_much_cheap_text != ""){
	// 		$subject .= "⇒{$how_much_cheap_text}\n";
	// 	}
	// }

	// if($dissatisfied_reason_text != ""){
 //        $subject .= "【『不満』とお答え頂いた方にお尋ねします。\n具体的にお聞きすることは可能であればご協力お願いします。】\n";
	// 	$subject .= "⇒{$dissatisfied_reason_text}\n";
	// }

	// if($service_speed != ""){
 //        $subject .= "【サービススピードは如何ですか？】\n";
	// 	$subject .= "⇒{$service_speed}\n";
	// 	if($service_speed_text != ""){
	// 		$subject .= "⇒{$service_speed_text}\n";
	// 	}
	// }

	// if($service_description != ""){
 //        $subject .= "【サービスの説明は如何ですか？】\n";
	// 	$subject .= "⇒{$service_description}\n";
	// 	if($service_description_text != ""){
	// 		$subject .= "⇒{$service_description_text}\n";
	// 	}
	// }

	// if($site_level != ""){
 //        $subject .= "【ホームページの質についてお伺いします。】\n";
	// 	$subject .= "⇒{$site_level}\n";
	// 	if($site_level_text != ""){
	// 		$subject .= "⇒{$site_level_text}\n";
	// 	}
	// }

	// if($choice_reason_text != ""){
 //        $subject .= "【他店との比較の上にお選びいただいたのは何故でしょうか?\n※比較されていない方は、お選び頂いた理由等で結構です。】\n";
	// 	$subject .= "⇒{$choice_reason_text}\n";
	// }

	// if($search_keyword != ""){
 //        $subject .= "【その際にどのようなキーワードでネット検索されましたでしょうか?】\n";
	// 	$subject .= "⇒{$search_keyword}\n";
	// 	if($search_keyword_text != ""){
	// 		$subject .= "⇒{$search_keyword_text}\n";
	// 	}
	// }

	// if($search_engine != ""){
 //        $subject .= "【検索エンジンは次のうちどれでしょうか?】\n";
	// 	$subject .= "⇒{$search_engine}\n";
	// 	if($search_engine_text != ""){
	// 		$subject .= "⇒{$search_engine_text}\n";
	// 	}
	// }

	// if($search_medium != ""){
 //        $subject .= "【検索媒体は次のうちどちらでしょうか。】\n";
	// 	$subject .= "⇒{$search_medium}\n";
	// 	if($search_medium_text != ""){
	// 		$subject .= "⇒{$search_medium_text}\n";
	// 	}
	// }

	// if($freely_write_text != ""){
 //        $subject .= "【その他ご要望・厳しいご指摘等を自由にお書きください。】\n";
	// 	$subject .= "⇒{$freely_write_text}\n";
	// }

	// if($a_word_text != ""){
 //        $subject .= "【査定担当者に一言あれば、遠慮なくお書きください。】\n";
	// 	$subject .= "⇒{$a_word_text}\n";
	// }

	// $subject = str_replace("\n","<br>",$subject);

}//end 追加処理

?>


<div id="form_back">
	<form id="main_form" action="voice_edit_submit.php" method="POST">
		<h1><?=$h1?></h1>
		<input type="hidden" name="guestquestion_id" value="<?=$id?>">
		<input type="hidden" name="voice_sub_id" value="<?=$voice_sub_id?>">
		<div class="inputBox">
			<span class="input_title">voice_id</span>
			<input type="text" name="voice_id" value="2" readonly>
		</div>
		<div class="inputBox">
			<span class="input_title">入力日時</span>
			<input type="text" name="date" value="<?=$timestamp?>" readonly>
		</div>
		<div class="inputBox">
			<span class="input_title">入力者情報</span>
			<input type="text" name="zip_name" value="<?=$name?>">
		</div>

		<div class="inputBox">
			<span class="textarea_title">表示内容</span>
			<div id="subjectBox">
				<textarea id="subject" name="subject" value="<?=$subject?>"><?=$subject?></textarea>
			</div>
		</div>

		<div class="inputBox">
			<input type="submit" name="" value="送信する！">
		</div>


	</form>
</div>







  <script src="https://cdn.ckeditor.com/4.5.6/standard/ckeditor.js"></script>
  <script>
    // エディタへの設定を適用する
    CKEDITOR.replace('subject', {
      uiColor: '#EEEEEE',
      height: 500,
      // エディタ内に適用するCSS
      // contentsCss: "https://urlounge.co.jp/include/kagoya_check/guestquestion/eoc_after_data_table/voice_edit.css",
      // スペルチェック機能OFF
      scayt_autoStartup: false,
      // Enterを押した際に改行タグを挿入
      enterMode: CKEDITOR.ENTER_BR,
      // Shift+Enterを押した際に段落タグを挿入
      shiftEnterMode: CKEDITOR.ENTER_P,
      // idやclassを指定可能にする
      allowedContent: true,
      // ツールバーを下にする
      toolbarLocation: 'bottom',
      // preコード挿入時
      format_pre: { element: 'pre', attributes: { 'class': 'code' } },
      // タグのパンくずリストを削除
      removePlugins: 'elementspath',
      // webからコピペした際でもプレーンテキストを貼り付けるようにする
      forcePasteAsPlainText: true,
      // 自動で空白を挿入しないようにする
      fillEmptyBlocks: false,
      // タブの入力を無効にする
      tabSpaces: 0,
    });
  </script>
</body>
</html>
