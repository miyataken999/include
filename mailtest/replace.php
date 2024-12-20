<?php

// $str_pc = str_replace("<name>",$eoc_res["name1"],$str_pc);
if($replace_data["Eoc"]["mail1"] != ''){
	$to_addr = $replace_data["Eoc"]["mail1"];
}else{
	$to_addr = $replace_data["Eoc"]["mail2"];
}

/*
テンプレート
リストの取得
*/
$replace_pdo = new pdo_connect;
$replace_result = $replace_pdo->select_many("SELECT * from mst_mail_replace");

// var_dump($replace_data["Eoc_takuhai"]);

foreach ($replace_result as $item) {
	$before_txt = $item["before_txt"];
	$replace_data_table = $item["replace_data_table"];

	$replace_data_name = $item["replace_data"];
	$after_val = $replace_data[$replace_data_table][$replace_data_name];


	//集荷予定日
	if(($replace_data_table=='Eoc') AND ($replace_data_name=='EOC__DATE_AND_TIME_2')){
		$after_val = date("Y-n-j",strtotime($after_val));
		if($after_val == '1970-1-1'){
			$after_val = '';
		}
	}

	//集荷予定日
	if(($replace_data_table=='Eoc') AND ($replace_data_name=='EOC__DELIVERY_DATES')){
		if($after_val == "01"){
			$after_val = "午前中";
		}elseif($after_val == "11"){
			$after_val = "11～13時前後";
		}elseif($after_val == "13"){
			$after_val = "13～15時前後";
		}elseif($after_val == "15"){
			$after_val = "15～17時前後";
		}elseif($after_val == "17"){
			$after_val = "17～19時前後";
		}elseif($after_val == "19"){
			$after_val = "19～21時前後";
		}

	}



	//担当者 スペース区切りの一個目苗字
	if(($replace_data_table=='users') AND ($replace_data_name=='first_name')){
		$after_val_array = explode("　",$after_val);
		$after_val = $after_val_array[0];
	}


	if($item["id"] == 8){
		include "sateimeisai.php";
	}else{
		$str_header = preg_replace('/'.$before_txt.'/i',$after_val,$str_header);
		$str_pc = preg_replace('/'.$before_txt.'/i',$after_val,$str_pc);
		$str2_pc = preg_replace('/'.$before_txt.'/i',$after_val,$str2_pc);
		$str3_pc = preg_replace('/'.$before_txt.'/i',$after_val,$str3_pc);
	}













}




// EOC__BOX_NUMBER







// //----------------<name>の処理
// 	$str_header = preg_replace('/<name>/i',$name,$str_header);
// 	$str_pc = preg_replace('/<name>/i',$name,$str_pc);
// 	$str2_pc = preg_replace('/<name>/i',$name,$str2_pc);
// 	$str3_pc = preg_replace('/<name>/i',$name,$str3_pc);

// //----------------<tantousha>の処理
// 	$str_header = preg_replace('/<tantousha>/i',$staff_name,$str_header);
// 	$str_pc = preg_replace('/<tantousha>/i',$staff_name,$str_pc);
// 	$str2_pc = preg_replace('/<tantousha>/i',$staff_name,$str2_pc);
// 	$str3_pc = preg_replace('/<tantousha>/i',$staff_name,$str3_pc);


// //----------------<delivery_date>の処理
// 	$str_header = preg_replace('/<delivery_date>/i',$delivery_date,$str_header);
// 	$str_pc = preg_replace('/<delivery_date>/i',$delivery_date,$str_pc);
// 	$str2_pc = preg_replace('/<delivery_date>/i',$delivery_date,$str2_pc);
// 	$str3_pc = preg_replace('/<delivery_date>/i',$delivery_date,$str3_pc);


// //----------------<box_number>の処理
// 	$str_header = preg_replace('/<box_number>/i',$box_number,$str_header);
// 	$str_pc = preg_replace('/<box_number>/i',$box_number,$str_pc);
// 	$str2_pc = preg_replace('/<box_number>/i',$box_number,$str2_pc);
// 	$str3_pc = preg_replace('/<box_number>/i',$box_number,$str3_pc);


// //----------------<date_and_time>の処理
// 	$str_header = preg_replace('/<date_and_time>/i',$date_and_time,$str_header);
// 	$str_pc = preg_replace('/<date_and_time>/i',$date_and_time,$str_pc);
// 	$str2_pc = preg_replace('/<date_and_time>/i',$date_and_time,$str2_pc);
// 	$str3_pc = preg_replace('/<date_and_time>/i',$date_and_time,$str3_pc);

// //----------------<seiyakukin>の処理
// 	$str_header = preg_replace('/<seiyakukin>/i',$seiyakukin,$str_header);
// 	$str_pc = preg_replace('/<seiyakukin>/i',$seiyakukin,$str_pc);
// 	$str2_pc = preg_replace('/<seiyakukin>/i',$seiyakukin,$str2_pc);
// 	$str3_pc = preg_replace('/<seiyakukin>/i',$seiyakukin,$str3_pc);

// //----------------<kaitorihuka>の処理
// 	$str_header = preg_replace('/<kaitorihuka>/i',$kaitorihuka,$str_header);
// 	$str_pc = preg_replace('/<kaitorihuka>/i',$kaitorihuka,$str_pc);
// 	$str2_pc = preg_replace('/<kaitorihuka>/i',$kaitorihuka,$str2_pc);
// 	$str3_pc = preg_replace('/<kaitorihuka>/i',$kaitorihuka,$str3_pc);

// //----------------<haisou_bangou>の処理
// 	$str_header = preg_replace('/<haisou_bangou>/i',$haisou_bangou,$str_header);
// 	$str_pc = preg_replace('/<haisou_bangou>/i',$haisou_bangou,$str_pc);
// 	$str2_pc = preg_replace('/<haisou_bangou>/i',$haisou_bangou,$str2_pc);
// 	$str3_pc = preg_replace('/<haisou_bangou>/i',$haisou_bangou,$str3_pc);
