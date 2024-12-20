
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>

<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);


require_once('config.php');


function data_escape($value){
	if($value != ""){
		$value = htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
	}
	$value = str_replace("'", "’", $value);
	return $value; 
}


$mail = new Qdmail();
// $mail -> unitedCharset('UTF-8');
$mail -> smtp(true);


// if(isset($_GET['uid'])){
// var_dump($_POST);
// exit();
// }


$ecc_id = $_POST["ecc_id"];
$tmp_id = $_POST["tmp_id"];
$Eoc_takuhai_id = $_POST["Eoc_takuhai_id"];
$is_many_satei = $_POST["is_many_satei"];
$group_id = $_POST["group_id"];

if($Eoc_takuhai_id == ""){
	$Eoc_takuhai_id = "none";
}
if (!empty($Eoc_takuhai_id)){
	$url = "https://rifa.life/evaProject/Eoc_takuhai/{$ecc_id}/{$Eoc_takuhai_id}/{$tmp_id}/noticeIdentityTask";
	
	try{
		file_get_contents($url);
	}catch(Exception $e) {
	}
}

$first_satei_meisai_flag="";
// if($ecc_id==4460){
	$first_meisai_pdo = new pdo_connect;
	$first_meisai_sql = "SELECT `first_satei_meisai_flag` FROM `mail_data_tbl_template` WHERE `id` = $tmp_id LIMIT 1";
	$first_meisai_stmt = $first_meisai_pdo->pdo()->prepare($first_meisai_sql);
	$first_meisai_stmt->execute();
	foreach($first_meisai_stmt as $first_meisai_item){
		$first_satei_meisai_flag = $first_meisai_item['first_satei_meisai_flag'];
		if($first_satei_meisai_flag==1){
			$first_satei_meisai_flag="on";
		}else{
			$first_satei_meisai_flag="";
		}
	}
	// echo $first_satei_meisai_flag;
	// exit;
// }

$from_addr = $_POST["from_addrInput"];



//各パラメータを取得する
$host_name = mail_str($from_addr,'host_name');
$port_no = mail_str($from_addr,'port_no');
$user_name = mail_str($from_addr,'user_name');
$user_passwd = mail_str($from_addr,'user_passwd');




$to = $_POST["to_addrInput"];
$cc = $_POST["cc_addrInput"];
$from = $from_addr;
$bcc = $from_addr;

$displayNameInput = $_POST["displayNameInput"];
$subject = $_POST["subject_pcInput"];


$str_headerInput = $_POST["str_headerInput"];
$str_pcInput = $_POST["str_pcInput"];
$str2_pcInput = $_POST["str2_pcInput"];
$shomeiInput = $_POST["shomeiInput"];


$body = $str_headerInput;
if($str_pcInput != ''){
	if($body != ''){
		$body .= "\n";
	}
	$body .= $str_pcInput;
}
if($str2_pcInput != ''){
	if($body != ''){
		$body .= "\n";
	}
	$body .= $str2_pcInput;
}
if($shomeiInput != ''){
	if($body != ''){
		$body .= "\n";
	}
	$body .= $shomeiInput;
}

$body = str_replace("･","・",$body);





if($user_name == 'rifa@urlounge.co.jp'){
// ini_set("display_errors",1);

	// Phpmailerの読み込み
	include_once $_SERVER["DOCUMENT_ROOT"]."/include/lib/function.php";

	$from_address = $from_addr;

	if($displayNameInput != ''){
		$from_name = $displayNameInput;
	}else{
		$from_name = mail_str($from_addr,'mail_name');
	}

	// $from_name = mb_convert_encoding($from_name, "UTF-8", "JIS");

	if((!isset($toname))or($toname == "")){
		$toname = "";
	}

	$to_address = $to;
	$to_name = $toname;


	$reply_address = $from_address;
	$reply_name = '';
	// $reply_name = mb_convert_encoding($reply_name, "UTF-8", "JIS");

	$subject = $subject;
    $altbody = $body;
    $body = str_replace("\n","<br>",$body);


    $con = '';
    $debug = 0;

	$bcc_address = $from_addr;

	$cc_address = $cc;

	// Phpmailerを使ってメールを送信する関数の呼び出し
	try {
		$ret = org_send_mail($from_address, $from_name, $to_address, $to_name, $reply_address, $reply_name, $subject, $body, $altbody, $debug, $con, $bcc_address, $cc_address, $ecc_id);
	} catch (Exception $e) {
		echo "<div style='background: #f00; padding: 5px;'><font color=\"#fff\">送信失敗!!!!!!!！</font></div>";
		exit();
	}


}else{

	$param = array(
		'host'=>$host_name,//メールサーバー
		'port'=>$port_no , //これはSMTPAuthの例。認証が必要ないなら　25　でＯＫ。
		'from'=>$from_addr,//　Return-path: になります。
		'protocol'=>'SMTP_AUTH',// 認証が必要ないなら、'SMTP'
		'user'=>$user_name, //SMTPサーバーのユーザーID
		'pass' =>$user_passwd, //SMTPサーバーの認証パスワード
	);

	// var_dump($param);
	// exit();

	try {
		$mail->smtpServer($param);
	} catch (Exception $e) {
		echo $e->getMessage();
		echo "カゴヤのメールサーバーが見つかりませんでした！";
		exit();
	}



	$toname = '';
	if($to != ''){
		$mail->to($to,$toname);
	}
	if($cc != ''){
		$mail->cc($cc,$toname);
	}
	$mail->bcc($bcc);
	$mail->subject($subject);
	$mail->text($body);


	if($displayNameInput != ''){
		$mail->from($from,$displayNameInput);
	}else{
		$mail->from($from,mail_str($from_addr,'mail_name'));
	}


	$ret = $mail->send();


	// var_dump($ret);


	if(!$ret){
		echo "メールが送信できませんでした！";
		//メール送信
		$mail_body = "顧客SEQ：{$ecc_id}\n";
		$sendPostData = array(
			"subject" => "メールが送信できませんでした！",
			"text" => $mail_body,
		);
		$sendPostData = http_build_query($sendPostData, "", "&");
		$sendPostDataOptions = array('http' => array('method'=> 'POST','header'=> 'Content-Type: application/x-www-form-urlencoded','content' => $sendPostData));
		$sendPostContext = stream_context_create($sendPostDataOptions);
		try{
			file_get_contents('https://rifa.life/evaProject/api/notification/mail', false, $sendPostContext);
		}catch(Exception $e){}

		exit();

	}

}// end if rifa以外



$mail_pdo = new pdo_connect;
$mail_sql = "INSERT INTO mailsystem_send_schedule(";

$mail_sql .= "`tpl`";
$mail_sql .= ",`ecc_id`";
if($first_satei_meisai_flag=="on"){
	$mail_sql .= ",`Eoc_takuhai_id`";
}
$mail_sql .= ",`from_addr`";
$mail_sql .= ",`to_addr`";
$mail_sql .= ",`subject_pc`";
$mail_sql .= ",`str_header`";
$mail_sql .= ",`str_pc`";
$mail_sql .= ",`str2_pc`";
$mail_sql .= ",`str3_pc`";
$mail_sql .= ",`send_date`";
$mail_sql .= ",`regist_date`";
$mail_sql .= ",`send_flag`";
$mail_sql .= ",`send_kind`";
$mail_sql .= ",`sateinin`";
$mail_sql .= ",`money`";
$mail_sql .= ",`regist_customer`";

$mail_sql .= ")VALUES(";
$mail_sql .= "'{$tmp_id}'";
$mail_sql .= ",'{$ecc_id}'";
if($first_satei_meisai_flag=="on"){
	$mail_sql .= ",'{$Eoc_takuhai_id}'";
}
$mail_sql .= ",'{$from_addr}'";
$mail_sql .= ",'{$to}'";
$mail_sql .= ",'{$subject}'";
$mail_sql .= ",'".data_escape($str_headerInput)."'";
$mail_sql .= ",'".data_escape($str_pcInput)."'";
$mail_sql .= ",'".data_escape($str2_pcInput)."'";
$mail_sql .= ",'".data_escape($shomeiInput)."'";
$mail_sql .= ",'".date("Y-m-d")."'";
$mail_sql .= ",'".date("Y-m-d H:i:s")."'";
$mail_sql .= ",1";
$mail_sql .= ",'送信'";
$mail_sql .= ",''";
$mail_sql .= ",0";
$mail_sql .= ",''";
$mail_sql .= ")";

try {
	$mail_pdo->plural($mail_sql);
} catch (Exception $e) {
	echo "メール送信はできましたがデータベースへ保存ができませんでした！";
	$word = "[info][title]メール送信はできましたがデータベースへ保存ができませんでした！[/title]";
	$word .= "顧客SEQ：{$ecc_id}\n";
	$word .= "[/info]";

	//メール送信
	$subject = 'メール送信はできましたがデータベースへ保存ができませんでした！';
	$mail_body = $word;
	$sendPostData = array("subject" => $subject, "text" => $mail_body);
	$sendPostDataOptions = array('http' => array('method'=> 'POST','header'=> 'Content-Type: application/x-www-form-urlencoded','content' => http_build_query($sendPostData, "", "&")));
	try{ file_get_contents('https://rifa.life/evaProject/api/notification/mail', false, stream_context_create($sendPostDataOptions)); }catch(\Exception $e){}

	exit();

}

// 振込メールの送信時のみ、ステータスを変更する
if(isset($_POST['flag_name'])){
	if($_POST['flag_name'] == 'transfer_confirm'){
			$furikomi_pdo = new pdo_connect;
			$furikomi_sql = "UPDATE Eoc_takuhai SET `status`=7 WHERE ecc_id={$ecc_id} AND `status`=6 limit 1";
			//宅配取引「成約あり」⇒「振込メール送信済」7にする
			$furikomi_pdo->plural($furikomi_sql);
	}
}


if(isset($_POST["sateimeisai"])){
	$sateimeisai = str_replace("<br>","\n",$_POST["sateimeisai"]);
	$sateimeisai = str_replace("'","’",$sateimeisai);

	$tl_pdo = new pdo_connect;
	$tl_sql = "INSERT INTO Eoc_timeline(";
	$tl_sql .= "`ecc_id`";
	$tl_sql .= ",`category`";
	$tl_sql .= ",`title`";
	$tl_sql .= ",`detail`";
	$tl_sql .= ",`create_by`";
	$tl_sql .= ",`create_at`";
	$tl_sql .= ")VALUES(";
	$tl_sql .= "'{$ecc_id}'";
	$tl_sql .= ",'3'";
	$tl_sql .= ",'{$subject}'";
	$tl_sql .= ",'{$sateimeisai}'";
	$tl_sql .= ",'{$uid}'";
	$tl_sql .= ",'".date("Y-m-d H:i:s")."'";
	$tl_sql .= ") ";



	try {
		$tl_pdo->plural($tl_sql);
	} catch (Exception $e) {
		echo "メール送信、データベース保存できましたがタイムライン追加ができませんでした！";
		$word = "[info][title]メール送信、データベース保存できましたがタイムライン追加ができませんでした！[/title]";
		$word .= "顧客SEQ：{$ecc_id}\n";
		$word .= "[/info]";

		//メール送信
		$subject = 'メール送信、データベース保存できましたがタイムライン追加ができませんでした！';
		$mail_body = $word;
		$sendPostData = array("subject" => $subject, "text" => $mail_body);
		$sendPostDataOptions = array('http' => array('method'=> 'POST','header'=> 'Content-Type: application/x-www-form-urlencoded','content' => http_build_query($sendPostData, "", "&")));
		try{ file_get_contents('https://rifa.life/evaProject/api/notification/mail', false, stream_context_create($sendPostDataOptions)); }catch(\Exception $e){}

		exit();

	}

}// end sateimeisai

	/**
	 * 20220912 mypage処理は不要なのでいったんストップ
	 */
	//mypagedataの更新処理
	//宅配取引データ、宅配イベントデータ、商品データ同期処理
	// $mypage_update_prohibited = '';
	// $base_uri = "https://rifa.life";
	// $endpoint = "/evaProject/api/mypage/func/transfer_data/sync_data_for_takuhai";
	// // POSTデータ
	// $data = array(
	//     "Eoc_takuhai_id" => $Eoc_takuhai_id,
	//     "mypage_update_prohibited" => null,
	// );
	// // $data = http_build_query($data, "", "&");
	// $data = json_encode($data);
	// // header
	// $header = array(
	//     "Content-Type: application/json",
	//     // 'User-Agent: Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1)',
	//     "Content-Length: " . strlen($data),
	// );
	// $context = array(
	//     "http" => array(
	//         "method"  => "POST",
	//         "header"  => implode("\r\n",$header),
	//         "content" => $data,
	//     )
	// );

	// file_get_contents($base_uri.$endpoint, false, stream_context_create($context));





// if(($tmp_id == 136) && ($ecc_id == 4460)){

// 2019/09/16 ST不変ラベル大量発生のため、停止
// if($tmp_id == 136){
// 	header("location: /include/mail/tentou_label/after_mail.php?ecc_id={$ecc_id}&label_flag=1");
// 	exit();
// }else{

// if($ecc_id == 4460){
	// $Eoc_takuhai_id = 10168;
// }
$referer = $_SERVER['HTTP_REFERER'];
if($is_many_satei == "on"){
		// 	$url = "/evaProject/many_satei/{$Eoc_takuhai_id}?next_seal_output";
		// $url = "/evaProject/many_satei/{$Eoc_takuhai_id}";

		if((isset($_POST["return_to"])) && ($_POST["return_to"] == "furikomi")){
			// 成約待ち一覧からきたときは振り込み確認画面へ。
			// $url = "https://rifa.life/shop5/Eoc_transfer_confirm_list.php?q=(ecc_id~contains~{$ecc_id})";
			$url = "https://rifa.life/shop5/Eoc_transfer_confirm_list.php";
		}else{
			if($tmp_id == 158){
				// 成約処理のあと＝通常成約確認メールの時は、大量査定風袋一覧ページへ遷移 20210428
				$url = "/evaProject/many_satei/{$Eoc_takuhai_id}";
			}else{
				// 次の大量査定顧客SEQ選択画面へ移動 20210425
				$url = "https://rifa.life/evaProject/many_satei/index/satei_step/next_step/{$Eoc_takuhai_id}";
			}
		}

}else{
	// $url = "/evaProject/many_satei/{$Eoc_takuhai_id}";
	$url = "/shop5/Eoc_list.php?q=(ecc_id~equals~{$ecc_id})";
}
// }else{

// }

	$open_url = "";

	if($tmp_id == 158){
		$pdo_connect = new pdo_connect;
		$sql = "SELECT `product_id` FROM `shouhin` WHERE `Eoc_takuhai_id`=$Eoc_takuhai_id AND `status`=34 LIMIT 1";
	  $rs = $pdo_connect->select_one($sql);
		if($rs != false){
			$open_url = "https://rifa.life/lounge_API/wkhtml/henkyakumeisai/?user_id={$uid}&ecc_id={$ecc_id}&Eoc_takuhai_id={$Eoc_takuhai_id}&no_auth=on";
		}
	}elseif($tmp_id == 162){
		$open_url = "https://rifa.life/lounge_API/wkhtml/henkyakumeisai/?user_id={$uid}&ecc_id={$ecc_id}&Eoc_takuhai_id={$Eoc_takuhai_id}&no_auth=on";
	}else{

	}
	?>
	<script type="text/javascript">
	<?php
	if($is_many_satei == "on"){
		if($open_url != ""){
	?>
			window.open('<?=$open_url?>');
	<?php
		}
		if(($tmp_id != 158)and($_POST["auto_mail_send"] != "on")){
	?>
			window.opener.location.href = '<?=$url?>';
	<?php
		}
	?>
		// var line_url = '<?=$_POST['line_url']?>'
		// if(line_url == ""){
			window.close();
		// }
	<?php
	}else{
		if($open_url != ""){
	?>
			window.open('<?=$open_url?>');
	<?php
		}
	?>
		location.href='<?=$url?>';
	<?php
	}
	?>
	</script>


	<table>
		<tr>
			<th>ラインURL</th>
		<?php
		if($_POST['line_url'] == ""){
		?>
			<td colspan="3">なし</td>
		</tr>
		<?php
		}else{
		?>
			<td colspan="3"><a href="<?=$_POST['line_url']?>" target = '_blank'><?=$_POST['line_url']?></a></td>
		</tr>
		<tr>
			<th>ヘッダー</th>
			<th>本文１</th>
			<th>本文２</th>
			<th>署名</th>
		</tr>
		<tr>
			<td>
				<button class="get_mail_data btn" input_type = "header">コピー</button>
				<textarea class="d-none" input_type = "header"><?=$str_headerInput?></textarea>
			</td>
			<td>
				<button class="get_mail_data btn" input_type = "str_pc">コピー</button>
				<textarea class="d-none" input_type = "str_pc"><?=$str_pcInput?></textarea>
			</td>
			<td>
				<button class="get_mail_data btn" input_type = "str2_pc">コピー</button>
				<textarea class="d-none" input_type = "str2_pc"><?=$str2_pcInput?></textarea>
			</td>
			<td>
				<button class="get_mail_data btn" input_type = "shomei">コピー</button>
				<textarea class="d-none" input_type = "shomei"><?=$shomeiInput?></textarea>
			</td>
		</tr>
	<?php
	}
 ?>
 </table>
 <button class="list_page_btn" type="button" name="close">閉じる</button>
 <button class="list_page_btn" type="button" name="seiyaku_list">成約待ち一覧</button>
 <button class="list_page_btn" type="button" name="furikomikakunin">振込確認画面</button>
	<style media="screen">
	.get_mail_data.btn {
		border: 1px solid #111;
		border-radius: 3px;
		background: #ff0;
	}
	.d-none{
		display: none;
	}
	</style>
	<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
	<script type="text/javascript">
		$(document).on("click", '.get_mail_data' ,function(){
			console.log($(this));
			var input_type = $(this).attr("input_type");
			target_cls = "textarea[input_type='" + input_type + "']"
			target_text = $(target_cls).text();
			console.log(target_text)
			let textarea = $('<textarea></textarea>');
			// テキストエリアに文章を挿入
			textarea.text(target_text);
			//　テキストエリアを挿入
			$(this).append(textarea);
			//　テキストエリアを選択
			textarea.select();
			// コピー
			document.execCommand('copy');
			// テキストエリアの削除
			textarea.remove();

			window.alert("コピーできました！");
		})


		$(document).on('click', '.list_page_btn' ,function(){
			var url_type = $(this).attr('name');
			if(url_type == 'seiyaku_list'){
				location.href = 'https://rifa.life/evaProject/seiyakumachi'
			}else if(url_type == 'furikomikakunin'){
				location.href = 'https://rifa.life/shop5/Eoc_transfer_confirm_list.php'
			}else if(url_type == 'close'){
				window.close();
			}
		})
	</script>
</body>
</html>
