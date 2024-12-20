<?
//データベース接続
mb_internal_encoding("utf8");
ini_set( 'display_errors', 1 );
include $_SERVER["DOCUMENT_ROOT"]."/include/connection.php";

$sql = mysql_query('SET NAMES utf8');
$sql = mysql_query(" SELECT id , origin_dir , dir_1 , dir_2 , dir_3 , dir_4 , dir_5 FROM raku_all_dir ORDER BY id desc ");

?>


<?
$upq = "";
while ($result = mysql_fetch_assoc($sql)) {
	// sleep(1);

	$sprit_dir = explode(" >> ",$result["origin_dir"]);
	$count = count($sprit_dir);
	// echo "count".$count;
	for ($i=0; $i < $count; $i++) {
		// echo $sprit_dir[$i]."<br>";

		if($i != 0){
			$upq .= ",";
		}
		$upq .= ' dir_'.($i + 1).' = "'.$sprit_dir["$i"].'" ';

	}
	$up_query = 'UPDATE raku_all_dir SET '.$upq.' WHERE id = '.$result["id"];
	// echo $up_query;
	$update_result = mysql_query($up_query);
	if (!$update_result) {die('クエリーが失敗しました。'.mysql_error());}
	// echo "<br><br><br>";

	$upq = "";
	$up_query = "";
	$sprit_dir = "";
	$count = "";
?>

<?
}//end while
?>
