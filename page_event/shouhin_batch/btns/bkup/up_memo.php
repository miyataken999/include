<?
$uid = $_SESSION["uid"];
$time = "'".date('Y-m-d H:i:s')."'";

while($data = $button->getNextSelectedRecord()){
	$up_id = $data["product_id"];
	$up_memo = $data["memo"];
	$sql = "UPDATE shouhin SET description = '{$up_memo}' ,updated_by = {$uid} , updated_at = {$time} WHERE product_id = {$up_id}";
	CustomQuery($sql);
};
?>



