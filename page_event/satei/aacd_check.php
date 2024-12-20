<?
$current_page_pass = $_SERVER["REQUEST_URI"];


include_once $_SERVER["DOCUMENT_ROOT"]."/include/page_event/satei/aacd_brand.php";
$product_num = $values['product_num'];


$error_text = "";
if($values['country_of_origin'] == ""){
	$values['country_of_origin'] = "-";
	if(in_array($product_num,$aacd_brandArray_country)){
		$error_text = "原産国を選択してください。";
	}else{
	}
}else{
}

if($values['zipper'] == ""){
	$values['zipper'] = "-";
	if((stristr($current_page_pass, "satei_of_jewelry")) && (($product_num == 526) OR ($product_num == 318))){
		//宝査で、シャネルかエルメスの場合は何もしない。
	}else{
		if(in_array($product_num,$aacd_brandArray_zipper)){
			$error_text .= "\n金具（ファスナー）を選択してください。";
		}
	}//end if
}//end if



if($values['plate'] == ""){
	if(in_array($product_num,$aacd_brandArray_plate)){
		$error_text .= "\nプレートを選択してください。";
	}else{
	}
}else{
}




//URLによるファイル振り分け
if(stristr($current_page_pass, "/shop5/")){
}else{


	if($values['serial_number'] == ""){
		$values['serial_number'] = "-";
		if(in_array($product_num,$aacd_brandArray_zipper)){
			$error_text .= "\n機番を選択してください。";
		}else{
		}
	}else{
	}






}




$values['errors'] = $error_text;

?>
