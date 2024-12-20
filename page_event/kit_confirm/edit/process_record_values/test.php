<?
//$values['mail1'] = "aaaaaaaaaaaaaaaaaaa";

// Place event code here.
// Use "Add Action" button to add code snippets.
// $values['updated_at'] = date("Y/m/d H:i:s");



// $values["arrival_date"] = date("Y-m-d");
// $values["warehouse_instruction"] = date("Y-m-d");
// time_select_hidden
$time_select_hidden = $values["time_select_hidden"];

if(strstr($time_select_hidden,'(')){
	$time_select_hidden_array = explode("(",$time_select_hidden);
	if($values["arrival_date"] == ''){
		$values["arrival_date"] = date("Y-m-d",strtotime($time_select_hidden_array[0]));
		if(strstr($time_select_hidden,')')){
			$time_select_hidden_array = explode(")",$time_select_hidden);
			$values["time_select_hidden"] = str_replace(" ","",$time_select_hidden_array[1]);
			// $values["warehouse_instruction"] = str_replace(" ","",$time_select_hidden_array[1]);
		}
	}
}

?>
