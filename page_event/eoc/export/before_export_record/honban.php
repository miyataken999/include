<?
// BeforeOut($data, $values, $pageObject)

$values["Ehide_shuka_kosuu"] = rep_zenkaku($values["Ehide_shuka_kosuu"]);
// $values["Ehide_shuka_kosuu"] = "aaa";
function rep_zenkaku($moji){
	$moji = str_replace("S","Ｓ",$moji);
	$moji = str_replace("M","Ｍ",$moji);
	$moji = str_replace("L","Ｌ",$moji);
	return $moji;
}
?>
