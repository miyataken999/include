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

//売却済(33)になってたら、成約人、成約日いれる
$_st = $values["status"];
if(($_st == 33) && ($nowtime != "") && ($user_id != "")){
		$values["REG_AUTHOR"] = $user_id;
		$values["DT_UP_DATE"] = $nowtime;
		// $values["label_output_flag"] = 1;

		//売り先が「市場/宝飾」だったら、ST「宝飾出品待機」
		if($values["Destination_selling"] == "市場/宝飾"){
			$values["status"] = 121;
		}elseif($values["Destination_selling"] == "市場/服飾"){
			$values["status"] = 111;
		}
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





//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
//タイトル生成
//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■

		//前半ステータス
		$zenhan = "";


			$producing_area = $values['producing_area'];
			if($producing_area != ""){
				$sql = "SELECT name FROM mst_producing_area WHERE id = {$producing_area}";
				$rs = CustomQuery($sql);
				$data = db_fetch_array($rs);
				$producing_area = $data["name"];
			}
			if($producing_area != ""){
				if($zenhan != ""){$zenhan .= "･";}
				$zenhan .= $producing_area;
			}

			$designer = $values['designer'];
			if($designer != ""){
				$sql = "SELECT name FROM mst_designer WHERE id = {$designer}";
				$rs = CustomQuery($sql);
				$data = db_fetch_array($rs);
				$designer = $data["name"];
			}
			if($designer != ""){
				if($zenhan != ""){$zenhan .= "･";}
				$zenhan .= $designer;
			}

			$line = $values['line'];
			if($line != ""){
				if($zenhan != ""){$zenhan .= "･";}
				$zenhan .= $line;
			}

			$item_name = $values['item_name'];
			if($item_name != ""){
				if($zenhan != ""){$zenhan .= "･";}
				$zenhan .= $item_name;
			}

			$Sleeve_Length = $values['Sleeve_Length'];
			if($Sleeve_Length != ""){
				if($zenhan != ""){$zenhan .= "･";}
				$zenhan .= $Sleeve_Length;
			}


			$collar_neck_line = $values['collar_neck_line'];
			if($collar_neck_line != ""){
				$sql = "SELECT name FROM mst_collar_neck_line WHERE id = {$collar_neck_line}";
				$rs = CustomQuery($sql);
				$data = db_fetch_array($rs);
				$collar_neck_line = $data["name"];
			}
			if($collar_neck_line != ""){
				if($zenhan != ""){$zenhan .= "･";}
				$zenhan .= $collar_neck_line;
			}

			$breast = $values['breast'];
			if($breast != ""){
				$sql = "SELECT name FROM mst_breast WHERE id = {$breast}";
				$rs = CustomQuery($sql);
				$data = db_fetch_array($rs);
				$breast = $data["name"];
			}
			if($breast != ""){
				if($zenhan != ""){$zenhan .= " ";}
				$zenhan .= $breast;
			}


			$motif = $values['motif'];
			if($motif != ""){
				if($zenhan != ""){$zenhan .= " ";}
				$zenhan .= $motif;
			}

			$handle = $values['handle'];
			if($handle != ""){
				if($zenhan != ""){$zenhan .= "･";}
				$zenhan .= $handle;
			}

			$silhouette = $values['silhouette'];
			if($silhouette != ""){
				$sql = "SELECT name FROM mst_silhouette WHERE id = {$silhouette}";
				$rs = CustomQuery($sql);
				$data = db_fetch_array($rs);
				$silhouette = $data["name"];
			}
			if($silhouette != ""){
				if($zenhan != ""){$zenhan .= " ";}
				$zenhan .= $silhouette;
			}

			$sleeve = $values['sleeve'];
			if($sleeve != ""){
				$sql = "SELECT name FROM mst_sleeve WHERE id = {$sleeve}";
				$rs = CustomQuery($sql);
				$data = db_fetch_array($rs);
				$sleeve = $data["name"];
			}
			if($sleeve != ""){
				if($zenhan != ""){$zenhan .= " ";}
				$zenhan .= $sleeve;
			}

			$length = $values['length'];
			if($length != ""){
				if($zenhan != ""){$zenhan .= " ";}
				$zenhan .= $length;
			}

			$number_of_stones = $values['number_of_stones'];
			if($number_of_stones != ""){
				$sql = "SELECT name FROM mst_number_of_stones WHERE id = {$number_of_stones}";
				$rs = CustomQuery($sql);
				$data = db_fetch_array($rs);
				$number_of_stones = $data["name"];
			}
			if($number_of_stones != ""){
				if($zenhan != ""){$zenhan .= " ";}
				$zenhan .= $number_of_stones;
			}

			$hahakai = $values['hahakai'];
			if($hahakai != ""){
				$sql = "SELECT name FROM mst_hahakai WHERE id = {$hahakai}";
				$rs = CustomQuery($sql);
				$data = db_fetch_array($rs);
				$hahakai = $data["name"];
			}
			if($hahakai != ""){
				if($zenhan != ""){$zenhan .= "･";}
				$zenhan .= $hahakai;
			}

			$toe = $values['toe'];
			if($toe != ""){
				$sql = "SELECT name FROM mst_toe WHERE id = {$toe}";
				$rs = CustomQuery($sql);
				$data = db_fetch_array($rs);
				$toe = $data["name"];
			}
			if($toe != ""){
				if($zenhan != ""){$zenhan .= "･";}
				$zenhan .= $toe;
			}

			$heel = $values['heel'];
			if($heel != ""){
				$sql = "SELECT name FROM mst_heel WHERE id = {$heel}";
				$rs = CustomQuery($sql);
				$data = db_fetch_array($rs);
				$heel = $data["name"];
			}
			if($heel != ""){
				if($zenhan != ""){$zenhan .= " ";}
				$zenhan .= $heel;
			}

			$shape_supplement = $values['shape_supplement'];
			if($shape_supplement != ""){
				if($zenhan != ""){$zenhan .= "･";}
				$zenhan .= $shape_supplement;
			}

			$side_gem = $values['side_gem'];
			if($side_gem != ""){
				$sql = "SELECT name FROM mst_side_gem WHERE id = {$side_gem}";
				$rs = CustomQuery($sql);
				$data = db_fetch_array($rs);
				$side_gem = $data["name"];
			}
			if($side_gem != ""){
				if($zenhan != ""){$zenhan .= "･";}
				$zenhan .= $side_gem;
			}

			$product_style = $values['product_style'];
			if($product_style != ""){
				$zenhan .= $product_style;
			}


			$yahoo_sozai = $values['yahoo_sozai'];
			if($yahoo_sozai != ""){
				if($zenhan != ""){$zenhan .= "･";}
				$zenhan .= $yahoo_sozai;
			}

			$cloth = $values['cloth'];
			if($cloth != ""){
				$sql = "SELECT name FROM mst_cloth WHERE id = {$cloth}";
				$rs = CustomQuery($sql);
				$data = db_fetch_array($rs);
				$cloth = $data["name"];
			}
			if($cloth != ""){
				if($zenhan != ""){$zenhan .= " ";}
				$zenhan .= $cloth;
			}

			$amount = $values['amount'];
			if($amount != ""){
				$zenhan .= $amount;
			}

			$effect = $values['effect'];
			if($effect != ""){
				$sql = "SELECT name FROM mst_effect WHERE id = {$effect}";
				$rs = CustomQuery($sql);
				$data = db_fetch_array($rs);
				$effect = $data["name"];
			}
			if($effect != ""){
				if($zenhan != ""){$zenhan .= "･";}
				$zenhan .= $effect;
			}

			$shape = $values['shape'];
			if($shape != ""){
				$sql = "SELECT name FROM mst_shape WHERE id = {$shape}";
				$rs = CustomQuery($sql);
				$data = db_fetch_array($rs);
				$shape = $data["name"];
			}
			if($shape != ""){
				if($zenhan != ""){$zenhan .= "･";}
				$zenhan .= $shape;
			}

			$cutting_style = $values['cutting_style'];
			if($cutting_style != ""){
				$sql = "SELECT name FROM mst_cutting_style WHERE id = {$cutting_style}";
				$rs = CustomQuery($sql);
				$data = db_fetch_array($rs);
				$cutting_style = $data["name"];
			}
			if($cutting_style != ""){
				if($zenhan != ""){$zenhan .= "･";}
				$zenhan .= $cutting_style;
			}

			$Setting = $values['Setting'];
			if($Setting != ""){
				if($zenhan != ""){$zenhan .= "･";}
				$zenhan .= $Setting;
			}

			$processing = $values['processing'];
			if($processing != ""){
				if($zenhan != ""){$zenhan .= "･";}
				$zenhan .= $processing;
			}






		$chain_type = $values['chain_type'];
		if($chain_type != ""){
			$sql = "SELECT name FROM mst_chain_type WHERE id = {$chain_type}";
			$rs = CustomQuery($sql);
			$data = db_fetch_array($rs);
			$chain_type = $data["name"];
		}
		if($chain_type != ""){
			if($zenhan != ""){$zenhan .= "･";}
			$zenhan .= $chain_type;
		}




		$gold_property = $values['gold_property'];
		if($gold_property != ""){$gold_property = "/".$gold_property;}

		$Gram = $values['Gram'];
		if($Gram != ""){$Gram = "-".$Gram."g";}

		$sub_cate = $values['sub_category_id1'];
		$moji = "";
		if($sub_cate != ""){
			//つくる！！！
			$moji = sub_cate_alpha($sub_cate);
		}

		$Parent_stone = $values['Parent_stone'];
		if($Parent_stone != ""){
			$Parent_stone = "/".$moji.$Parent_stone."ct";
		}

		$Aside_stone = $values['Aside_stone'];
		if($Aside_stone != ""){$Aside_stone = "/FD:".$Aside_stone."ct";}

		$Appraiser = $values['Appraiser'];
		if($Appraiser != ""){$Appraiser = "/".$Appraiser;}

		$Ring_size = $values['Ring_size'];
		if($Ring_size != ""){$Ring_size = "/".$Ring_size;}

		$Remarks = $values['Remarks'];
		if($Remarks != ""){$Remarks = "/".$Remarks;}

		$yahoo_kataban = $values['yahoo_kataban'];
		if($yahoo_kataban != ""){$yahoo_kataban = "/".$yahoo_kataban;}


		$mark = $zenhan . $gold_property . $Gram . $Parent_stone . $Aside_stone . $Appraiser . $Ring_size . $Remarks . $yahoo_kataban;
		//タイトル部分を書き換え
		$mark = str_replace('・','･',$mark);
		$values['title'] = $mark;


//ラスト
//楽天タイトル形成
$color_val = $values['yahoo_color'];
$kataban_val = $values['yahoo_kataban'];
if($color_val != ""){
$color_val = "/".$color_val;
}
if($kataban_val != ""){
$kataban_val = "/".$kataban_val;
}

if($values['product_num'] == 631){
  $_title = 'ノーブランド(ノンブランド) '.$values['title'].$kataban_val;
}else{
  $_title = $values['yahoo_junle']." ".$values['title'].$kataban_val;
}

if($_title != ""){
	$values['raku_title'] = $_title;
}


//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
//タイトル生成　END
//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■



include_once $_SERVER["DOCUMENT_ROOT"]."/include/page_event/satei/aacd_check.php";
include_once $_SERVER["DOCUMENT_ROOT"]."/include/page_event/satei/satei_check.php";




//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
//宅配取引更新
//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
$ecc_id = $values["ecc_id"];
if($ecc_id > 0){
	/**********************************************************
	宅配取引「到着済」か「査定中」か「成約あり」があれば、その宅配取引IDをこれに付与
	**********************************************************/
	$Eoc_takuhai_query = "SELECT * FROM Eoc_takuhai WHERE `ecc_id`={$ecc_id} AND ((`status`=4) OR (`status`=5) OR (`status`=12)) ORDER BY id DESC limit 1";
	$Eoc_takuhai_rs = CustomQuery($Eoc_takuhai_query);
	$Eoc_takuhai_data = db_fetch_array($Eoc_takuhai_rs);
	//到着済idをGET
	$Eoc_takuhai_id = $Eoc_takuhai_data["id"];

	if($Eoc_takuhai_id > 0){
		$values["Eoc_takuhai_id"] = $Eoc_takuhai_id;

		//買い備が存在すれば、成約あり、なければ査定中
		$kaibi_query = "SELECT COUNT(chigin_id) as 'kaibi_ct' FROM Eoc_chigins WHERE Eoc_takuhai_id='{$Eoc_takuhai_id}' ";
		$kaibi_rs = CustomQuery($kaibi_query);
		$kaibi_data = db_fetch_array($kaibi_rs);
		$kaibi_ct = $kaibi_data["kaibi_ct"];
		if($kaibi_ct >= 1){
			//宅配取引のステータス 「成約あり」に変更
			$Eoc_takuhai_query = "UPDATE Eoc_takuhai SET `status`=5,`updated_by`='{$user_id}' WHERE id='{$Eoc_takuhai_id}' limit 1";
			CustomQuery($Eoc_takuhai_query);
		}else{
			//宅配取引のステータス 「査定中」に変更
			$Eoc_takuhai_query = "UPDATE Eoc_takuhai SET `status`=12,`updated_by`='{$user_id}' WHERE id='{$Eoc_takuhai_id}' limit 1";
			CustomQuery($Eoc_takuhai_query);
		}
	}
}
//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
//宅配取引更新　END
//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■


?>
