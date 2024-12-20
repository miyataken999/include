<?
$nowtime = date("Y-m-d H:i:s");
$user_id = $_SESSION['uid'];
$brand_id = $values["product_num"];

//必要項目が入ってる場合のみ実行
if(($nowtime != "") && ($user_id != "")){


	/**********************************************************
	査定人、更新者
	**********************************************************/
	if($_SESSION['uid'] != ""){
		$values["updated_by"] = $_SESSION['uid'];
		$values["satei_by"] = $_SESSION['uid'];
	}

	/**********************************************************
	査定日、更新日
	**********************************************************/
	if($nowtime != ""){
		$values["updated_at"] = $nowtime;
		$values["satei_hi"] = $nowtime;
	}



	/**********************************************************
	ブランドジャンル日本語名項目へ保存
	**********************************************************/
	if($brand_id != ""){
		$sql = "SELECT name FROM mst_brand WHERE id = {$brand_id}";
		$rs = CustomQuery($sql);
		$data = db_fetch_array($rs);
		$brand_name = $data["name"];

		$values["yahoo_junle"] = $brand_name;
	}

}//end if

//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
//鑑別、仕入コストのマスタ参照　
//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
$product_id = $keys["product_id"];
//仕入れ
$finish = $values["Finish"];
$finish_cost = "";//mst参照　仕上げコスト
if($finish!==""){
  $mst_Finish_query = "SELECT `cost` FROM mst_Finish WHERE `val`=\"$finish\" LIMIT 1";
  $mst_Finish_rs = CustomQuery($mst_Finish_query);
  if($mst_Finish_rs!==false){
    $mst_Finish_data = db_fetch_array($mst_Finish_rs);
    $finish_cost = $mst_Finish_data["cost"];//mst参照　仕上げコスト
  }
}//end if($finish!=="")
if($values["cost"]===""){//値が入っていないときにマスタ参照して入れる
	$values["cost"] = $finish_cost;
}
//鑑別
$discrimination_cost = "";//mst参照　鑑別コスト
$discrimination = $values["Discrimination"];
if($discrimination!==""){
  $mst_Discrimination_query = "SELECT `cost` FROM `mst_Discrimination` WHERE `val`=\"$discrimination\" LIMIT 1";
  $mst_Discrimination_rs = CustomQuery($mst_Discrimination_query);
  if($mst_Discrimination_rs!==false){
    $mst_Discrimination_data = db_fetch_array($mst_Discrimination_rs);
    $discrimination_cost = $mst_Discrimination_data["cost"];//mst参照　鑑別コスト
  }
}//end if($discrimination!=="")
if($values["identification_cost"]===""){//値が入っていないときにマスタ参照して入れる
	$values["identification_cost"] = $discrimination_cost;
}
//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
//鑑別、仕入コストのマスタ参照　　END
//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■

?>
