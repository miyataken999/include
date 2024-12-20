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

		//売り先が「市場/宝飾」だったら、ST「宝飾出品待機」
		if($values["Destination_selling"] == "市場/宝飾"){
			$values["status"] = 121;
		}elseif($values["Destination_selling"] == "市場/服飾"){
			$values["status"] = 111;
		}
    $date = date('Y/m/d H:i:s');
    $product_id = $keys["product_id"];
    $market_query = "SELECT `product_id` FROM `market_product_performance_original` WHERE `product_id` ='{$product_id}' LIMIT 1";
    $market_rs = CustomQuery($market_query);
    $market_data = db_fetch_array($market_rs);
    $ct = count($market_data);
    if(($market_data == FALSE)or($ct == 0)){
      $market_insert_sql = "INSERT INTO `market_product_performance_original` (`product_id`,`front_hidden_flg`,`created_at`) VALUES ('$product_id','True','$date')";
      $market_insert = CustomQuery($market_insert_sql);
    }
}
//合わず(34)になってたら、空だったら、入れる。
if(($_st == 34) && ($nowtime != "") && ($user_id != "")){
		$values["AWAZU_NIN"] = $user_id;
		$values["AWAZU_DATE"] = $nowtime;
}

/*++++++++++++++++++++++++++++++

地金スクラップ(119)になってたら、完了変更日が空欄だったら、入金額、完了変更日入れる。

++++++++++++++++++++++++++++++*/
if(($_st == 119) && ($nowtime != "") && ($user_id != "") && ($oldvalues["kanryou_henbi"] == "")){
		$values["nyuukin_price"] = $values["price"];
		$values["kanryou_henbi"] = $nowtime;
		$values["REG_AUTHOR"] = $user_id;
		$values["DT_UP_DATE"] = $nowtime;
}
// if($values["status"] === 119){
//   $gold_property = $values['gold_property'];
//   $mst_gold_property_sql = "SELECT * FROM `mst_gold_property` WHERE `val` = '$gold_property'";
//   $mst_gold_property_rs = CustomQuery($mst_gold_property_sql);
//   if($mst_gold_property_rs !== false){
//     $mst_gold_property_data = db_fetch_array($mst_gold_property_rs);
//     $direct_completion = $mst_gold_property_data["direct_completion"];
//     if($direct_completion===1){
//       $values["status"] = 142;
//     }
//   }
// }

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
	  $_title = 'ノーブランド(ノンブランド) '.$values['title'];
	}else{
	  $_title = $values['yahoo_junle']." ".$values['title'];
	}

	if($_title != ""){
		$values['raku_title'] = $_title;
	}
//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
//タイトル生成　END
//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■


/*++++++++++++++++++++++++++++++

地金スクラップ(119)になってたら、金性マスタの直接完了が１ならG完了にステータス変更

++++++++++++++++++++++++++++++*/

$product_id = $keys["product_id"];
$gold_property = '';
if($values["status"] == 119){
  if(!isset($values['gold_property'])){
    $shouhin_sql = "SELECT `gold_property` FROM `shouhin` WHERE `product_id` = '$product_id' LIMIT 1";
    $shouhin_rs = CustomQuery($shouhin_sql);
    if($shouhin_rs != false){
      $shouhin_data = db_fetch_array($shouhin_rs);
      $gold_property = $shouhin_data["gold_property"];
    }
  }else{
    $gold_property = $values['gold_property'];
  }

  $mst_gold_property_sql = "SELECT * FROM `mst_gold_property` WHERE `val`='$gold_property'";
  $mst_gold_property_rs = CustomQuery($mst_gold_property_sql);
  if($mst_gold_property_rs != false){
    $mst_gold_property_data = db_fetch_array($mst_gold_property_rs);
    $direct_completion = $mst_gold_property_data["direct_completion"];
    if($direct_completion==1){
      $values["status"] = 142;
    }
  }
}
if(($values["status"] == 119)or($values["status"] == 33)){
  if(
    ($values["category_id"] == 12)
    and (
      ($values["sub_category_id1"] == 840)
      or ($values["sub_category_id1"] == 838)
      or ($values["sub_category_id1"] == 839)
      or ($values["sub_category_id1"] == 847)
    )
  ){
    $values["status"]=142;
  }
}

include_once $_SERVER["DOCUMENT_ROOT"]."/include/page_event/satei/aacd_check.php";
include_once $_SERVER["DOCUMENT_ROOT"]."/include/page_event/satei/satei_check.php";


$rule_array = array();
$rule_array[] = array(
  "name"=>"category_id",
  "rule"=>" = ",
  "column_name"=>"",
  "shouhin_column"=>"category_id",
  "mst_ref_flg"=>"0",
  "nodisplay_column_flg"=>"0",
  "mst_ref_column"=>"",
  "mst_ref_target"=>"",
  "mst_ref_tbl"=>"",
  "target_data"=>"first",
);
$rule_array[] = array(
  "name"=>"colorstone_id",
  "rule"=>" = ",
  "column_name"=>"",
  "shouhin_column"=>"sub_category_id1",
  "mst_ref_flg"=>"1",
  "nodisplay_column_flg"=>"0",
  "mst_ref_column"=>"colorstone_id",
  "mst_ref_target"=>"id",
  "mst_ref_tbl"=>"store_sub_categories",
  "target_data"=>"first",
);
$rule_array[] = array(
  "name"=>"shape",
  "rule"=>" = ",
  "column_name"=>"",
  "shouhin_column"=>"shape",
  "mst_ref_flg"=>"0",
  "nodisplay_column_flg"=>"0",
  "mst_ref_column"=>"",
  "mst_ref_target"=>"",
  "mst_ref_tbl"=>"",
  "target_data"=>"first",
);
$rule_array[] = array(
  "name"=>"cutting_syle",
  "rule"=>" = ",
  "column_name"=>"cutting_style",
  "mst_ref_flg"=>"0",
  "nodisplay_column_flg"=>"0",
  "mst_ref_column"=>"",
  "mst_ref_target"=>"",
  "mst_ref_tbl"=>"",
  "target_data"=>"first",
);
$rule_array[] = array(
  "name"=>"DA_CUT",
  "rule"=>" = ",
  "column_name"=>"",
  "shouhin_column"=>"DA_CUT",
  "mst_ref_flg"=>"1",
  "nodisplay_column_flg"=>"1",
  "mst_ref_column"=>"id",
  "mst_ref_target"=>"name",
  "mst_ref_tbl"=>"_DIA_DA_CUT",
  "target_data"=>"first",
);
$rule_array[] = array(
  "name"=>"status",
  "rule"=>" = ",
  "column_name"=>"",
  "shouhin_column"=>"status",
  "mst_ref_flg"=>"0",
  "nodisplay_column_flg"=>"0",
  "mst_ref_column"=>"",
  "mst_ref_target"=>"",
  "mst_ref_tbl"=>"",
  "target_data"=>"first",
);
$rule_array[] = array(
  "name"=>"parent_stone_lower_limit",
  "rule"=>" <= ",
  "column_name"=>"",
  "shouhin_column"=>"Parent_stone",
  "mst_ref_flg"=>"0",
  "nodisplay_column_flg"=>"0",
  "mst_ref_column"=>"",
  "mst_ref_target"=>"",
  "mst_ref_tbl"=>"",
  "target_data"=>"last",
);
//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
//仕上コスト　
//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
$product_id = $keys["product_id"];
//仕上
$finish = $values["Finish"];
if($finish!=""){
  $mst_Finish_query = "SELECT `id` FROM `mst_Finish` WHERE `val`=\"$finish\" LIMIT 1";
  $mst_Finish_rs = CustomQuery($mst_Finish_query);
  if($mst_Finish_rs!==false){
    $mst_Finish_data = db_fetch_array($mst_Finish_rs);
    $finish_id = $mst_Finish_data["id"];//mst参照 id;
    $finish_cost_query = "SELECT *
    FROM `mst_finish_terms`
    WHERE `mst_Finish_id`='$finish_id'
    ORDER BY
    `finish_sort`,
    `colorstone_id` DESC,
    `cutting_syle` DESC,
    `shape` DESC,
    `DA_CUT` DESC,
    `parent_stone_lower_limit` DESC,
    `id`
    ";
    $finish_cost_rs = CustomQuery($finish_cost_query);
    if($finish_cost_rs!=false){
      $last_column_array = array();
      while($finish_cost_data = db_fetch_array($finish_cost_rs)){
        $all_ok = 'ok';
        for ($rule_i=0; $rule_i < count($rule_array); $rule_i++) {
          $rule = $rule_array[$rule_i];

          if($rule["target_data"] == "last"){
            $last_column_array[] = $rule["name"];
          }

          $column_name = $rule["column_name"];
          if($column_name != ''){
            $master_column = $column_name;
          }else{
            $master_column = $rule["name"];
          }

          //マスター側の参照値
          $master_column_data = $finish_cost_data[$master_column];
          //比較ルール
          $hikaku_rule = $rule["rule"];
          //商品側の参照値
          if($rule["mst_ref_flg"]==1){
            $mst_ref_column = $rule['mst_ref_column'];
            $mst_ref_tbl = $rule['mst_ref_tbl'];
            $mst_ref_target = $rule['mst_ref_target'];

            if($rule["nodisplay_column_flg"]==1){
              $mst_ref_query = "SELECT * FROM `shouhin` WHERE `product_id`={$product_id} LIMIT 1";
              $mst_ref_rs = CustomQuery($mst_ref_query);
              $mst_ref_data = db_fetch_array($mst_ref_rs);
              $mst_ref_data = $mst_ref_data[$rule['shouhin_column']];
            }else{
              $mst_ref_data = $values[$rule["shouhin_column"]];
            }
            $mst_query = "SELECT $mst_ref_column FROM $mst_ref_tbl WHERE $mst_ref_target=\"$mst_ref_data\" LIMIT 1";
            $mst_rs = CustomQuery($mst_query);
            $mst_data = db_fetch_array($mst_rs);
            $shouhin_data = $mst_data[$rule['mst_ref_column']];
          }else{
            $shouhin_data = $values[$rule["shouhin_column"]];
          }
          //比較
          if($hikaku_rule == " <= "){
            if(!($master_column_data <= $shouhin_data)){
              $all_ok = 'NG';
              break;// break for rule_array
            }
          }elseif($hikaku_rule == " = "){
            $value_count++;
            if(($master_column_data!=null)and($master_column_data!=0)and($master_column_data!='')){
              if($master_column_data != $shouhin_data){
                $all_ok = 'NG';
                break;// break for rule_array
              }
            }
          }else{
            if(($master_column_data!=null)and($master_column_data!=0)and($master_column_data!='')){
              if($master_column_data != $shouhin_data){
                $all_ok = 'NG';
                break;// break for rule_array
              }
            }
          }
        }// for
        if($all_ok == 'ok'){
          $finish_cost = $finish_cost_data['cost'];
          break;
        }//end
      }// while
    }
      // $values["comment"] = $finish_cost;
    if($finish_cost!=""){
      $shouhin_finish_query = "UPDATE `shouhin` SET `cost` = {$finish_cost} WHERE `product_id` = {$product_id} LIMIT 1";
      CustomQuery($shouhin_finish_query);
    }
  }
}
//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
//end 仕上コスト　
//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
//鑑別コスト　
//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
//新鑑別
$discrimination = $values["Discrimination"];
$discrimination_cost = "";
if($discrimination!=""){
  $mst_Discrim_query = "SELECT `id` FROM `mst_Discrimination` WHERE `val`=\"$discrimination\" LIMIT 1";
  $mst_Discrim_rs = CustomQuery($mst_Discrim_query);
  if($mst_Discrim_rs!==false){
    $mst_Discrim_data = db_fetch_array($mst_Discrim_rs);
    $discrimination_id = $mst_Discrim_data["id"];//mst参照 id;
    $discrim_cost_query = "SELECT *
    FROM `mst_finish_terms`
    WHERE `Discrimination`=$discrimination_id
    ORDER BY
    `discrimination_sort`,
    `colorstone_id` DESC,
    `cutting_syle` DESC,
    `shape` DESC,
    `DA_CUT` DESC,
    `parent_stone_lower_limit` DESC,
    `id`
    ";
    $discrim_cost_rs = CustomQuery($discrim_cost_query);
    if($discrim_cost_rs !== false){
      $last_column_array = array();
      while($discrim_cost_data = db_fetch_array($discrim_cost_rs)){
        $all_ok = 'ok';
        for ($rule_i=0; $rule_i < count($rule_array); $rule_i++) {
          $rule = $rule_array[$rule_i];

          if($rule["target_data"] == "last"){
            $last_column_array[] = $rule["name"];
          }

          $column_name = $rule["column_name"];
          if($column_name != ''){
            $master_column = $column_name;
          }else{
            $master_column = $rule["name"];
          }

          //マスター側の参照値
          $master_column_data = $discrim_cost_data[$master_column];
          //比較ルール
          $hikaku_rule = $rule["rule"];
          //商品側の参照値
          if($rule["mst_ref_flg"]==1){
            $mst_ref_column = $rule['mst_ref_column'];
            $mst_ref_tbl = $rule['mst_ref_tbl'];
            $mst_ref_target = $rule['mst_ref_target'];

            if($rule["nodisplay_column_flg"]==1){
              $mst_ref_query = "SELECT * FROM `shouhin` WHERE `product_id`={$product_id} LIMIT 1";
              $mst_ref_rs = CustomQuery($mst_ref_query);
              $mst_ref_data = db_fetch_array($mst_ref_rs);
              $mst_ref_data = $mst_ref_data[$rule['shouhin_column']];
            }else{
              $mst_ref_data = $values[$rule["shouhin_column"]];
            }

              $mst_query = "SELECT $mst_ref_column FROM $mst_ref_tbl WHERE $mst_ref_target=\"$mst_ref_data\" LIMIT 1";
              $mst_rs = CustomQuery($mst_query);
              $mst_data = db_fetch_array($mst_rs);
              $shouhin_data = $mst_data[$rule['mst_ref_column']];

          }else{
            $shouhin_data = $values[$rule["shouhin_column"]];
          }
          if($hikaku_rule == " <= "){
            if(!($master_column_data <= $shouhin_data)){
              $all_ok = 'NG';
              break;// break for rule_array
            }
          }elseif($hikaku_rule == " = "){
            $value_count++;
            if(($master_column_data!=null)and($master_column_data!=0)and($master_column_data!='')){
              if($master_column_data != $shouhin_data){
                $all_ok = 'NG';
                break;// break for rule_array
              }
            }
          }else{
            if(($master_column_data!=null)and($master_column_data!=0)and($master_column_data!='')){
              if($master_column_data != $shouhin_data){
                $all_ok = 'NG';
                break;// break for rule_array
              }
            }
          }
        }// for
        if($all_ok == 'ok'){
          $discrimination_cost = $discrim_cost_data['cost'];
          break;
        }//end
      }// while
    }
    if($discrimination_cost!=""){
      $shouhin_discrimination_query = "UPDATE `shouhin` SET `identification_cost` = $discrimination_cost WHERE `product_id` = {$product_id} LIMIT 1";
      CustomQuery($shouhin_discrimination_query);
    }
  }
}
//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
//鑑別コスト　　END
//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■


?>
