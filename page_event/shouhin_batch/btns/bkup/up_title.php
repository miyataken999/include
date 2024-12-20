<?
$uid = $_SESSION["uid"];
$time = "'".date('Y-m-d H:i:s')."'";

while($data = $button->getNextSelectedRecord()){
	$up_id = $data["product_id"];
	$up_title = $data["title"];
	$sql = "UPDATE shouhin SET title = '{$up_title}' ,updated_by = {$uid} , updated_at = {$time} WHERE product_id = {$up_id}";
	CustomQuery($sql);
};


?>


