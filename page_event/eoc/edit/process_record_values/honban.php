<?
//$values['mail1'] = "aaaaaaaaaaaaaaaaaaa";

// Place event code here.
// Use "Add Action" button to add code snippets.
$values['updated_at'] = date("Y/m/d H:i:s");

if($values['registerd_id'] == "")
$values['registerd_id'] = $_SESSION["uid"];

//if($values['kaitori_staff_id'] == "")
//$values['kaitori_staff_id'] = $_SESSION["uid"];

if($values['_registerd_id'] == "")
$values['_registerd_id'] = $_SESSION["uid"];


if($values['mail_check_type'] == ""){
	$values['mail_check_type'] = 2;
}

if($values['dm_check_type'] == ""){
	$values['dm_check_type'] = 2;
}


?>
