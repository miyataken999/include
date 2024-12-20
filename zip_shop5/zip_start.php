<?
mb_internal_encoding("utf8");
include $_SERVER["DOCUMENT_ROOT"]."/include/connection.php";

// ini_set( 'display_errors', 1 );

$query = " SELECT box_id FROM box WHERE zip_flag=1 ORDER BY box_id";
$sql = mysql_query('SET NAMES utf8');
$sql = mysql_query($query);

$res_box_id = "";
	while ($result = mysql_fetch_assoc($sql)) {
		if($res_box_id == ""){
			$res_box_id = $result["box_id"];
		}else{
			$res_box_id .= "_".$result["box_id"];
		}
	}
print $res_box_id;

header("Location: /include/raku_cabinet/cabinet_sansyou_multiple.php?box_id={$res_box_id}");
exit();
