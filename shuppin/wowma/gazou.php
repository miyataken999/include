<?
ini_set("display_errors",1);
// // phpinfo();
// // $seqs = trim($_POST["seq"]);
// $seqs = $_POST["seq"];
// print "seqs  ".$seqs;
// include_once '/var/www/html/include/idiorm_paris/app/shouhin.php';
// // $seqs = trim($_POST["seq"]);
// $seqs = $_POST["seq"];
// print "seqs  ".$seqs;
?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>wowma画像確認画面</title>
</head>
<body>
<?
if($_POST["seq"] == ''){
	print 'seqを入力してください';
	exit();
}

include_once '/var/www/html/include/connection.php';

$seqs = trim($_POST["seq"]);
$seqs = explode("\n",$seqs);
$seq_list = '';
for ($i=0; $i < count($seqs); $i++) {
	if($seqs[$i] > 1){
		if($seq_list != ''){
			$seq_list .= ' OR ';
		}
		$seq_list .= '`a`.product_id='.$seqs[$i];
	}
}



$query = "SELECT `a`.product_id, `b`.raku_image_name, `a`.yahoo_sinaban FROM shouhin as `a` JOIN box as `b` ON `a`.box_id=`b`.box_id WHERE {$seq_list} ";
// print $query;
$sql = mysql_query('SET NAMES utf8');
$sql = mysql_query($query);

?>
<table>
<?
while ($res = mysql_fetch_assoc($sql)) {
?>
<tr>
	<td><?=$res["product_id"]?></td>
<?
	for ($i=1; $i < 11; $i++) {
		$url = 'https://ic4-a.wowma.net/mis/gr/115/image.wowma.jp/44047702/';
		$url .= $res["raku_image_name"];
		$url .= "/";
		$url .= strtoupper($res["yahoo_sinaban"]);
		$url .= "_{$i}.jpg";
?>
	<td><img src="<?=$url?>" style='width: 30px;'></td>
<?
	}// end for
?>
</tr>
<?
}// end foreach












?>
</table>
</body>
</html>
