<?php


function MstSel($title,$fielddata,$fieldName,$mst_name,$mst_key,$mst_sel_name,$kugiri){
	if($fielddata != ""){
		$query = "SELECT {$mst_sel_name} FROM {$mst_name} WHERE {$mst_key} = {$fielddata} LIMIT 1";
		$sql = mysql_query($query);
		$res = mysql_fetch_assoc($sql);
		$fielddata = $res[$mst_sel_name];
		if($title != ""){$title .= $kugiri;}
		if($mst_name == "mst_brand"){
			$fielddata_strstr = strstr($fielddata,'/',true);
			if(isset($_GET["tamiya_test"])){
				var_dump($fielddata_strstr);
			}
			$title .= $fielddata_strstr;
		}else{
			$title .= $fielddata;
		}

	}
	return $title;
}
