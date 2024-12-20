<?
$uid = $_SESSION["uid"];
$time = "'".date('Y-m-d H:i:s')."'";

while($data = $button->getNextSelectedRecord()){
	$up_id = $data["product_id"];
	$up_nyuukin_price = $data["nyuukin_price"];
	$sql = "UPDATE shouhin SET nyuukin_price = '{$up_nyuukin_price}' ,updated_by = {$uid} , updated_at = {$time} WHERE product_id = {$up_id}";
	CustomQuery($sql);
};
?>
