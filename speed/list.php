<?
// ini_set('display_errors', 1);
header("Content-Type:text/html; charset=UTF-8");
?>
<!DOCTYPE html>
<html>
<head>
<!--NO INDEX -->
<meta name="robots" content="noindex">
<!--/NO INDEX -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>スピード集荷申込一覧</title>
	<!-- <link rel="stylesheet" href="/include/kagoya_check/style.css"> -->
	<link rel="stylesheet" href="/include/speed/style.css">
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
// include $_SERVER["DOCUMENT_ROOT"]."/include/connection_kagoya.php";
$_POST["list"] = "一覧";

require_once $_SERVER["DOCUMENT_ROOT"].'/include/hi_shuka/signature.php';
include $_SERVER["DOCUMENT_ROOT"]."/include/connection.php";


//APIキーの設定
//※※ここだけ変更する
$appKey = "720e111bdda9bac";
$secretKey = "d7fe9ffd1c6b6338ba9aa8900315613641145e0d51cd396";

$Signature = new Signature();
$SignatureString = "";

$Id = "";
$Name = "";
$KanaName = "";
$ZipCode = "";
$Prefectures = "";
$Address1 = "";
$Address2 = "";
$Tel = "";
$Mail = "";
$TransPoter = "";
$RequestDate = "";
$RequestTime = "";
$BuggNum = "";
$Payment = "";
$BuggName = "";
$ItemCode = "";
$Memo = "";
$RequestNo = "";

$apiUrl = "";
$param = "";
$Response = "";

$timestamp = date(DATE_ISO8601, time());
//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■//
// 一覧ここから
//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■//
	if (array_key_exists("list", $_POST)){
		//エンドポイント
		$apiUrl = "https://hi-shuka.jp/api/1/orders";

		// 検索条件
		$param = "?";
		$param .= "start-date=2018-11-01";
		$param .= "&end-date=2018-12-31";
		$param .= "&type=";
		$param .= "&transporter=sagawa";
		$param .= "&page=1";
		$param .= "&per=10";

		$apiUrl = $apiUrl . $param;
		$SignatureString = $Signature->CreateSignature($apiUrl. "&GET", "", $secretKey);

		$options = array(
				"http" => array(
						"method"  => "GET",
						'header'  => "Content-Type: application/json; charset=utf8\r\n".
						"X-FCSH-Application-Key: ".$appKey."\r\n".
						"X-FCSH-Timestamp: ".$timestamp."\r\n" .
						"X-FCSH-Signature: ".$SignatureString."\r\n"
				)
		);

		$context = stream_context_create($options);
		$Response = file_get_contents($apiUrl, false, $context);
	}//end if
//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■//
// 一覧ここまで
//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■//
?>

<?
$obj = json_decode($Response,true);

// var_dump($obj);
?>

<h1>▼スピード集荷申込一覧(ハイシューカ！)</h1>

<table id="main_table">
	<tr>
		<!-- <th>id</th> -->
		<th>集荷申込番号</th>
		<th>処理</th>
		<th>申込日</th>
		<th>氏名</th>
		<th>フリガナ</th>
		<th>郵便番号</th>
		<th>都道府県</th>
		<th>市区町村</th>
		<th>以下住所</th>
		<th>電話番号</th>
		<th>メールアドレス</th>
		<th>集荷希望日</th>
		<th>集荷希望時間帯</th>
		<th>集荷予定個数</th>
		<th>伝票タイプ</th>
		<th>備考</th>
	</tr>


<?
//該当データ全体
foreach ((array)$obj as $list_data) {
?>
	<?
	//注文単位
	foreach ($list_data['orders'] as $order_data) {
		// $id = $order_data['id'];
		$requestno = $order_data['requestno'];
		$ordered_at = $order_data['ordered-at'];
		$user_name = $order_data['requester']['username'];
		$furikana = $order_data['requester']['furikana'];
		$zipcode = $order_data['requester']['zipcode'];
		$prefectures = $order_data['requester']['prefectures'];
		$address1 = $order_data['requester']['address1'];
		$address2 = $order_data['requester']['address2'];
		$tel = $order_data['requester']['tel'];
		$email = $order_data['requester']['email'];
		$collectdate = $order_data['pickup']['collectdate'];

		$collecttime = $order_data['pickup']['collecttime'];
		$collecttime = str_replace(':','～',$collecttime);
		if($collecttime == '09～12'){
			$collecttime = '午前中';
		}else{
			$collecttime = $collecttime.'時';
		}

		$packnum = $order_data['pickup']['packnum'].'個';

		$voucherflg = $order_data['pickup']['voucherflg'];
		if($voucherflg == '2'){
			$voucherflg = '着払い';
		}else{
			$voucherflg = '元払い';
		}

		$note = $order_data['pickup']['note'];

		$query = "SELECT * FROM Eoc_takuhai WHERE speed_num = {$requestno} LIMIT 1";
		$sql = mysql_query('SET NAMES utf8');
		$sql = mysql_query($query);
		$result = mysql_fetch_assoc($sql);
		$status = $result['shuka_status'];

		if($status == "集荷依頼停止中"){
			$row_color = "#ccc";
		}else{
			$row_color = "#fff";
		}
	?>
	<tr style="background-color: <?=$row_color?>;">
	<!-- <td><?=$id?></td> -->
	<td><?=$requestno?></td>
	<td>
		<?if($status == "集荷依頼停止中"){?>
			<a href="/include/speed/shuka.php?type=restart&no=<?=$requestno?>" class="restart">再開</a>
		<?}else{?>
			<a href="/include/speed/shuka.php?type=update&no=<?=$requestno?>">変更</a>
			<a href="/include/speed/shuka.php?type=stop&no=<?=$requestno?>" class="stop">停止</a>
		<?}?>
	</td>
	<td><?=$ordered_at?></td>
	<td><?=$user_name?></td>
	<td><?=$furikana?></td>
	<td><?=$zipcode?></td>
	<td><?=$prefectures?></td>
	<td><?=$address1?></td>
	<td><?=$address2?></td>
	<td><?=$tel?></td>
	<td><?=$email?></td>
	<td><?=$collectdate?></td>
	<td><?=$collecttime?></td>
	<td><?=$packnum?></td>
	<td><?=$voucherflg?></td>
	<td><?=$note?></td>

	</tr>
	<?
	}//end foreach 注文単位
}//end foreach 該当データ全体
?>

</table>


</body>
</html>
