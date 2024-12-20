<?
// Description
// Occurs before record is inserted
// Return true if you want to proceed with adding the record, return false otherwise.

// Parameters
// $rawvalues  - raw field values from the imported file
// $values     - field values to be inserted into the database
// $pageObject - an object of Page class representing the current page
// $message    - put a message into this variable. It will be added to the Import log in
//               case


	// $values["haisou_bangou"] = $oldvalues["ecc_id"];


if($rawvalues["category"] == 1){
	if($rawvalues["name"] != "")
	if(preg_match("/信金\z/",$rawvalues["name"])){
		$values["name"] = str_replace("信金","信用金庫",$rawvalues["name"]);
	}elseif(preg_match("/信組\z/",$rawvalues["name"])){
		$values["name"] = str_replace("信組","信用組合",$rawvalues["name"]);
	}elseif(preg_match("/労金\z/",$rawvalues["name"])){
		$values["name"] = str_replace("労金","労働金庫",$rawvalues["name"]);
	}elseif(preg_match("/農協\z/",$rawvalues["name"])){
		$values["name"] = str_replace("農協","農業協同組合",$rawvalues["name"]);
	}elseif(preg_match("/大阪府信連\z/",$rawvalues["name"])){
		$values["name"] = str_replace("大阪府信連","大阪府信用農業協同組合連合会",$rawvalues["name"]);
	}elseif(preg_match("/商工中金\z/",$rawvalues["name"])){
		$values["name"] = str_replace("商工中金","商工組合中央金庫",$rawvalues["name"]);
	}elseif(preg_match("/商中\z/",$rawvalues["name"])){
		$values["name"] = str_replace("商中","商工組合中央金庫",$rawvalues["name"]);
	}elseif(preg_match("/しんきん中金\z/",$rawvalues["name"])){
		$values["name"] = str_replace("しんきん中金","信金中央金庫",$rawvalues["name"]);
	}elseif(preg_match("/全信組連\z/",$rawvalues["name"])){
		$values["name"] = str_replace("全信組連","全国信用協同組合連合会",$rawvalues["name"]);
	}elseif(preg_match("/労金連\z/",$rawvalues["name"])){
		$values["name"] = str_replace("労金連","労働金庫連合会",$rawvalues["name"]);
	}elseif(preg_match("/農林中金\z/",$rawvalues["name"])){
		$values["name"] = str_replace("農林中金","農林中央金庫",$rawvalues["name"]);
	}elseif(preg_match("/農中\z/",$rawvalues["name"])){
		$values["name"] = str_replace("農中","農林中央金庫",$rawvalues["name"]);
	}elseif(preg_match("/信漁連\z/",$rawvalues["name"])){
		$values["name"] = str_replace("信漁連","信用漁業協同組合連合会",$rawvalues["name"]);
	}elseif(preg_match("/漁協\z/",$rawvalues["name"])){
		$values["name"] = str_replace("漁協","漁業協同組合",$rawvalues["name"]);
	}elseif(preg_match("/信連\z/",$rawvalues["name"])){
		$values["name"] = str_replace("信連","信用農業協同組合連合会",$rawvalues["name"]);
	}elseif(preg_match("/新銀行東京\z/",$rawvalues["name"])){
	}else{
		$values["name"] = $rawvalues["name"]."銀行";
	}
}



/**********************************************************
更新者
**********************************************************/
if($_SESSION['uid'] != ""){
	$values["create_by"] = $_SESSION['uid'];
	$nowtime = "'".date("Y-m-d H:i:s")."'";
	$values["create_at"] = $nowtime;

}



?>
