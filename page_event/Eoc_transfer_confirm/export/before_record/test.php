<?
// Description
// Occurs before record is exported
// Use this event to modify record before it is exported.

// Parameters
// $data       - array of values selected from the database table
// $values     - array of values to be written to the export
//               file
// $pageObject - an object of Page class representing the current page



$Eoc_takuhai_id = $data["id"];

if($Eoc_takuhai_id > 0){
	$query = "UPDATE Eoc_takuhai SET `status`=16 WHERE id={$Eoc_takuhai_id} limit 1";
	try {
		CustomQuery($query);
	} catch (Exception $e) {
		$values["kinyuukikan"] = $e->getMessage();
	}
}


