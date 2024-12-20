<?php
$dalTableshop_reservations = array();
$dalTableshop_reservations["id"] = array("type"=>20,"varname"=>"id");
$dalTableshop_reservations["customer_id"] = array("type"=>20,"varname"=>"customer_id");
$dalTableshop_reservations["ecc_id"] = array("type"=>20,"varname"=>"ecc_id");
$dalTableshop_reservations["start_at"] = array("type"=>135,"varname"=>"start_at");
$dalTableshop_reservations["end_at"] = array("type"=>135,"varname"=>"end_at");
$dalTableshop_reservations["google_calendar_id"] = array("type"=>200,"varname"=>"google_calendar_id");
$dalTableshop_reservations["event_id"] = array("type"=>200,"varname"=>"event_id");
$dalTableshop_reservations["message"] = array("type"=>200,"varname"=>"message");
$dalTableshop_reservations["created_at"] = array("type"=>135,"varname"=>"created_at");
$dalTableshop_reservations["updated_at"] = array("type"=>135,"varname"=>"updated_at");
$dalTableshop_reservations["deleted_at"] = array("type"=>135,"varname"=>"deleted_at");
$dalTableshop_reservations["name"] = array("type"=>200,"varname"=>"name");
$dalTableshop_reservations["email"] = array("type"=>200,"varname"=>"email");
$dalTableshop_reservations["number_of_booth"] = array("type"=>16,"varname"=>"number_of_booth");
$dalTableshop_reservations["number_of_times"] = array("type"=>200,"varname"=>"number_of_times");
$dalTableshop_reservations["line_satei"] = array("type"=>200,"varname"=>"line_satei");
$dalTableshop_reservations["visit_type"] = array("type"=>200,"varname"=>"visit_type");
$dalTableshop_reservations["appoint_satei_by"] = array("type"=>3,"varname"=>"appoint_satei_by");
$dalTableshop_reservations["bikou"] = array("type"=>201,"varname"=>"bikou");
$dalTableshop_reservations["is_guest"] = array("type"=>16,"varname"=>"is_guest");
$dalTableshop_reservations["agent_user_id"] = array("type"=>3,"varname"=>"agent_user_id");
$dalTableshop_reservations["send_at"] = array("type"=>135,"varname"=>"send_at");
	$dalTableshop_reservations["id"]["key"]=true;

$dal_info["internet_at_urlounge_co_jp__shop_reservations"] = &$dalTableshop_reservations;
?>