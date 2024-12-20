<?php
	function createSelectHtml($array, $itemName, $key, $val, $displayNameKey, $option_data_key=''){
		$html = "<select name='{$itemName}Input' class='form-control' id='{$itemName}Input'>";
		foreach ($array as $item) {
			$html .= "<option value='{$item[$key]}' ";
			if($val==$item[$key]){
				$html .= "selected";
			}

			if($option_data_key != ''){
				$html .= " data='{$item[$option_data_key]}' ";
			}

			$html .= " >{$item[$displayNameKey]}</option>";

		}
		$html .= "</select>";

		return $html;
	}



	function MstSel($title,$fielddata,$fieldName,$mst_name,$mst_key,$mst_sel_name,$kugiri){
		if($fielddata != ""){
			$query = "SELECT {$mst_sel_name} FROM {$mst_name} WHERE {$mst_key} = {$fielddata} LIMIT 1";
			$sql = mysql_query($query);
			$res = mysql_fetch_assoc($sql);
			$fielddata = $res[$mst_sel_name];
			if($title != ""){$title .= $kugiri;}
			$title .= $fielddata;
		}
		return $title;
	}
