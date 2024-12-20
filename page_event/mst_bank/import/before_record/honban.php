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


// if($rawvalues["haisou_bangou"] != ""){
// 	$id = $rawvalues["id"];
// 	$sql = "SELECT ecc_id FROM Eoc_takuhai WHERE id = {$id}";
// 	$rs = CustomQuery($sql);
// 	$data = db_fetch_array($rs);
// 	$ecc_id = $data["ecc_id"];


// 	if($ecc_id != ""){
// 		$sql = "UPDATE Eoc SET kit_flag=0 , kit_done_flag=1 WHERE ecc_id={$ecc_id} LIMIT 1";
// 		$rs = CustomQuery($sql);

// 		// $values["haisou_bangou"] = $sql;
// 	}
// }


?>
