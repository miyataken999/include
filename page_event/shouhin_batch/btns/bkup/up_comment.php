<?
$uid = $_SESSION["uid"];
$time = "'".date('Y-m-d H:i:s')."'";

while($data = $button->getNextSelectedRecord()){
	$up_id = $data["product_id"];
	$up_comment = $data["comment"];
	$sql = "UPDATE shouhin SET comment = '{$up_comment}' ,updated_by = {$uid} , updated_at = {$time} WHERE product_id = {$up_id}";
	CustomQuery($sql);
};
?>


