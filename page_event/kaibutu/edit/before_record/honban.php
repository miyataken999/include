<?
//タイトル生成用function
include_once $_SERVER["DOCUMENT_ROOT"].'/include/page_event/satei/function.php';

$nowtime = date("Y-m-d H:i:s");
$user_id = $_SESSION['uid'];
if($values['product_num'] == ""){
  $values['product_num'] = 631;
}
$brand_id = $values["product_num"];

//必要項目が入ってる場合のみ実行
if(($nowtime != "") && ($user_id != "")){


	/**********************************************************
	更新者
	**********************************************************/
	if($_SESSION['uid'] != ""){
		$values["updated_by"] = $_SESSION['uid'];
	}

	/**********************************************************
	更新日
	**********************************************************/
	if($nowtime != ""){
		$values["updated_at"] = $nowtime;
	}

}//end if



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




//売却済(33)になってたら、成約人、成約日いれる
$_st = $values["status"];
if(($_st == 33) && ($nowtime != "") && ($user_id != "")){
		$values["REG_AUTHOR"] = $user_id;
		$values["DT_UP_DATE"] = $nowtime;
		// $values["label_output_flag"] = 1;
}

//合わず(34)になってたら、空だったら、入れる。
if(($_st == 34) && ($nowtime != "") && ($user_id != "")){
		$values["AWAZU_NIN"] = $user_id;
		$values["AWAZU_DATE"] = $nowtime;
}




//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
//ライン、アイテム名からの　型番、オフィシャルURL、参考上代の反映処理
//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
$line = $values['line'];
$item_name = $values['item_name'];


//定義
$kataban_flag = "";
$url_flag = "";
$joudai_flag = "";
$line_use_flag = "";
$item_name_use_flag = "";
$mst_use_flag = "";

//ライン、アイテム名どちらを基準にするかの判断
if($values['yahoo_kataban'] == ""){
	if($line != ""){
		$kataban_flag = "line";
		$line_use_flag = "on";
		$mst_use_flag = "on";
	}elseif($item_name != ""){
		$kataban_flag = "item_name";
		$item_name_use_flag = "on";
		$mst_use_flag = "on";
	}
}

//official_urlは、手動は採寸になってからのみだから判断なし。
// $product_id = $oldvalues['product_id'];
// $sql = "SELECT official_url FROM shouhin WHERE product_id={$product_id} LIMIT 1";
// $rs = CustomQuery($sql);
// $data = db_fetch_array($rs);
// $official_url = $data["official_url"];
// if($official_url == ""){
	if($line != ""){
		$url_flag = "line";
		$line_use_flag = "on";
		$mst_use_flag = "on";
	}elseif($item_name != ""){
		$url_flag = "item_name";
		$item_name_use_flag = "on";
		$mst_use_flag = "on";
	}
// }

if($values['yahoo_sankou_uwadai'] == ""){
	if($line != ""){
		$joudai_flag = "line";
		$line_use_flag = "on";
		$mst_use_flag = "on";
	}elseif($item_name != ""){
		$joudai_flag = "item_name";
		$item_name_use_flag = "on";
		$mst_use_flag = "on";
	}
}


//マスタ利用の場合のクエリ実行
if($mst_use_flag == "on"){
	if($line_use_flag == "on"){
		$sql = "SELECT `yahoo_kataban`,`url`,`yahoo_sankou_uwadai` FROM mst_item WHERE name = '{$line}' LIMIT 1";
		$rs = CustomQuery($sql);
		$line_data = db_fetch_array($rs);

		//各フラグが立っていたら（値が空欄だったら）マスタの値を代入
		if($kataban_flag == "line"){
			if($line_data["yahoo_kataban"] == ""){
				$item_name_use_flag = "on";
				$kataban_flag = "item_name";
			}else{
				$values["yahoo_kataban"] = $line_data["yahoo_kataban"];
			}
		}
		if($url_flag == "line"){
			if($line_data["url"] == ""){
				$item_name_use_flag = "on";
				$url_flag = "item_name";
			}else{
				$values["official_url"] = $line_data["url"];
			}
		}
		if($joudai_flag == "line"){
			if($line_data["yahoo_sankou_uwadai"] == ""){
				$item_name_use_flag = "on";
				$joudai_flag = "item_name";
			}else{
				$values["yahoo_sankou_uwadai"] = $line_data["yahoo_sankou_uwadai"];
			}

		}
	}
	if($item_name_use_flag == "on"){
		$sql = "SELECT `yahoo_kataban`,`url`,`yahoo_sankou_uwadai` FROM mst_item_name WHERE name = '{$item_name}' LIMIT 1";
		$rs = CustomQuery($sql);
		$item_name_data = db_fetch_array($rs);

		//各フラグが立っていたら（値が空欄だったら）マスタの値を代入
		if($kataban_flag == "item_name"){
			$values["yahoo_kataban"] = $item_name_data["yahoo_kataban"];
		}
		if($url_flag == "item_name"){
			$values["official_url"] = $item_name_data["url"];
		}
		if($joudai_flag == "item_name"){
			$values["yahoo_sankou_uwadai"] = $item_name_data["yahoo_sankou_uwadai"];
		}
	}
}
//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
//ライン、アイテム名からの　型番、オフィシャルURL、参考上代の反映処理   END
//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■




include_once $_SERVER["DOCUMENT_ROOT"]."/include/page_event/satei/aacd_check.php";
include_once $_SERVER["DOCUMENT_ROOT"]."/include/page_event/satei/satei_check.php";



?>
