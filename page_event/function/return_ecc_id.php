<?
$ecc_id = "";
while($data = $button->getNextSelectedRecord()){
	if($ecc_id == ""){
		$ecc_id = $data["ecc_id"];
	}else{
		$ecc_id .= $ecc_id.",".$data["ecc_id"];
	}
};

$result["txt"] = $ecc_id;

// $result["txt"] = 4460;

?>
