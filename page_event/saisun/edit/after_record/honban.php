<?
$old_st = $oldvalues["status"];

$product_id = $values["product_id"];
$nowtime_no = date("Y/m/d H:i:s");
$nowtime = "'".$nowtime_no."'";
$user_id = $_SESSION['uid'];
$brand_id = $values["product_num"];
$new_st = $values["status"];


//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
//ST未採寸か撮影待ちか修理中かブティックの場合の処理
//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
if(($old_st == 29) OR ($old_st == 7) OR ($old_st == 110) OR ($old_st == 125)){
	//必要項目が入ってる場合のみ実行
	if(($product_id != "") && ($nowtime != "") && ($user_id != "") && ($brand_id != "")){

		/**********************************************************
		ステータス
		**********************************************************/
		$sql = "UPDATE shouhin SET `status` = 7 WHERE product_id = {$product_id}";
		$rs = CustomQuery($sql);

		/**********************************************************
		更新者
		**********************************************************/
		$sql = "UPDATE shouhin SET updated_by = {$_SESSION['uid']} WHERE product_id = {$product_id}";
		$rs = CustomQuery($sql);

		/**********************************************************
		更新日
		**********************************************************/
		$sql = "UPDATE shouhin SET updated_at = {$nowtime} WHERE product_id = {$product_id}";
		$rs = CustomQuery($sql);


		/**********************************************************
		採寸者
		***********************************************************/
		$sql = "UPDATE shouhin SET yahoo_saisun_sha = {$user_id} WHERE product_id = {$product_id}";
		$rs = CustomQuery($sql);

		/**********************************************************
		採寸終了
		**********************************************************/
		$sql = "UPDATE shouhin SET saisun_end = {$nowtime} WHERE product_id = {$product_id}";
		$rs = CustomQuery($sql);

		/**********************************************************
		ブランドジャンル日本語名項目へ保存
		**********************************************************/
		$sql = "SELECT name FROM mst_brand WHERE id = {$brand_id}";
		$rs = CustomQuery($sql);
		$data = db_fetch_array($rs);
		$brand_name = $data["name"];

		$sql = "UPDATE shouhin SET yahoo_junle = '{$brand_name}' WHERE product_id = {$product_id}";
		$rs = CustomQuery($sql);

		/**********************************************************
		auctionsへのデータコピー(3か月ほどでなくす)
		**********************************************************/
		//shouhinから取得
		$sql = "SELECT yahoo_title , search_keyword , sales_price , raku_title FROM shouhin WHERE product_id = {$product_id}";
		$rs = CustomQuery($sql);
		$data = db_fetch_array($rs);
		$yahoo_title = $data["yahoo_title"];
		$search_keyword = $data["search_keyword"];
		$sales_price = $data["sales_price"];
		$raku_title = $data["raku_title"];

		//auctionsにそのseqが存在するか
		$sql = "SELECT product_id FROM auctions WHERE product_id = {$product_id}";
		$rs = CustomQuery($sql);
		$auc_data = db_fetch_array($rs);
		$auc_id = $auc_data["product_id"];
		if($auc_id == $product_id){
			//update
			$sql = "UPDATE auctions SET Title = '{$yahoo_title}' , Items_in_the_store_for_the_search_keyword = '{$search_keyword}' , Starting_price = '{$sales_price}' , raku_goods_name = '{$raku_title}' , Qty = '1' WHERE product_id = {$product_id}";
			$rs = CustomQuery($sql);
		}else{
			//insert
			$sql = "INSERT INTO auctions(product_id,Title,Items_in_the_store_for_the_search_keyword,Starting_price,raku_goods_name,Qty) VALUES('{$product_id}','{$yahoo_title}','{$search_keyword}','{$sales_price}','{$raku_title}','1') ";
			$rs = CustomQuery($sql);
		}



	//価格更新判定処理
	include_once $_SERVER["DOCUMENT_ROOT"]."/include/page_event/function/kakaku.php";

	header("Location: /include/ec_dir/dir.php?product_id={$product_id}&uid={$user_id}");
	exit();
	}//end if
}else{
	//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
	//ST未採寸と撮影待ちか修理中かブティック以外のSTの場合
	//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
	//必要項目が入ってる場合のみ実行
	if(($product_id != "") && ($nowtime != "") && ($user_id != "")){
		if($new_st == 33){
			//売却済
			$sql = "SELECT yahoo_sinaban FROM shouhin WHERE product_id = {$product_id} LIMIT 1";
			$rs = CustomQuery($sql);
			$data = db_fetch_array($rs);
			$yahoo_sinaban = $data["yahoo_sinaban"];
			//品番がなければ、品番をつける
			if($yahoo_sinaban == ""){
				/******************************************************************
				シーケンスの取得
				*******************************************************************/


				$sql = "SELECT * FROM seq where product_id=".$product_id;
				$rs = CustomQuery($sql);
				$data = db_fetch_array($rs);

				if($data["initial_name"] == ""){
					$ini = "X";
				}else{
					$ini= $data["initial_name"];
				}


				$yahoo_seq =
				$data["sub_cate"].
				$ini.
				$data["c"].
				$data["d"].
				$data["sex_ini"];

				// $sql = "UPDATE shouhin SET yahoo_sinaban = '".$yahoo_seq."' where product_id = ".$product_id;
				// $rs = CustomQuery($sql);
				/**********************************************************
				品番
				**********************************************************/
				$sql = "UPDATE shouhin SET yahoo_sinaban = '".$yahoo_seq."' where product_id = ".$product_id;
				$rs = CustomQuery($sql);

				/**********************************************************
				更新者
				**********************************************************/
				$sql = "UPDATE shouhin SET updated_by = {$_SESSION['uid']} WHERE product_id = {$product_id}";
				$rs = CustomQuery($sql);

				/**********************************************************
				更新日
				**********************************************************/
				$sql = "UPDATE shouhin SET updated_at = {$nowtime} WHERE product_id = {$product_id}";
				$rs = CustomQuery($sql);

				/**********************************************************
				成約人
				**********************************************************/
				$sql = "UPDATE shouhin SET REG_AUTHOR = {$_SESSION['uid']} WHERE product_id = {$product_id}";
				$rs = CustomQuery($sql);

				/**********************************************************
				成約日
				**********************************************************/
				$sql = "UPDATE shouhin SET DT_UP_DATE = {$nowtime} WHERE product_id = {$product_id}";
				$rs = CustomQuery($sql);

				/**********************************************************
				ログ
				**********************************************************/
				$log_ip = $_SERVER["REMOTE_ADDR"];
				$log_table = "saisun";
				$log_action = "edit";//ここでは固定
				//user_login取得
				$user_login_query = " SELECT user_login FROM users WHERE user_id={$_SESSION['uid']} LIMIT 1";
				$rs = CustomQuery($user_login_query);
				while ($data = db_fetch_array($rs))
				{
					$log_user = $data["user_login"];
				}
				$log_descri = "---Keys\n";
				$log_descri = $log_descri."product_id : {$product_id}\n";
				$log_descri = $log_descri."---Fields\n";
				$log_descri = $log_descri."yahoo_sinaban[new]:{$yahoo_seq}\n";
				$log_descri = $log_descri."updated_by[new]:{$_SESSION['uid']}\n";
				$log_descri = $log_descri."updated_at[new]:{$nowtime_no}\n";
				$log_descri = $log_descri."REG_AUTHOR[new]:{$_SESSION['uid']}\n";
				$log_descri = $log_descri."DT_UP_DATE[new]:{$nowtime_no}\n";
				$insert_sql = "INSERT INTO evav62122_audit (datetime,ip,`user`,`table`,action,description) VALUES ({$nowtime},'{$log_ip}','{$log_user}','{$log_table}','{$log_action}','{$log_descri}')";
				CustomQuery($insert_sql);
			}else{
				/**********************************************************
				更新者
				**********************************************************/
				$sql = "UPDATE shouhin SET updated_by = {$_SESSION['uid']} WHERE product_id = {$product_id}";
				$rs = CustomQuery($sql);

				/**********************************************************
				更新日
				**********************************************************/
				$sql = "UPDATE shouhin SET updated_at = {$nowtime} WHERE product_id = {$product_id}";
				$rs = CustomQuery($sql);
				/**********************************************************
				ログ
				**********************************************************/
				$log_ip = $_SERVER["REMOTE_ADDR"];
				$log_table = "saisun";
				$log_action = "edit";//ここでは固定
				//user_login取得
				$user_login_query = " SELECT user_login FROM users WHERE user_id={$_SESSION['uid']} LIMIT 1";
				$rs = CustomQuery($user_login_query);
				while ($data = db_fetch_array($rs))
				{
					$log_user = $data["user_login"];
				}
				$log_descri = "---Keys\n";
				$log_descri = $log_descri."product_id : {$product_id}\n";
				$log_descri = $log_descri."---Fields\n";
				$log_descri = $log_descri."updated_by[new]:{$_SESSION['uid']}\n";
				$log_descri = $log_descri."updated_at[new]:{$nowtime_no}\n";
				$insert_sql = "INSERT INTO evav62122_audit (datetime,ip,`user`,`table`,action,description) VALUES ({$nowtime},'{$log_ip}','{$log_user}','{$log_table}','{$log_action}','{$log_descri}')";
				CustomQuery($insert_sql);

			}


		}elseif($new_st == 34){
			/**********************************************************
			更新者
			**********************************************************/
			$sql = "UPDATE shouhin SET updated_by = {$_SESSION['uid']} WHERE product_id = {$product_id}";
			$rs = CustomQuery($sql);

			/**********************************************************
			更新日
			**********************************************************/
			$sql = "UPDATE shouhin SET updated_at = {$nowtime} WHERE product_id = {$product_id}";
			$rs = CustomQuery($sql);

			/**********************************************************
			合わず人
			**********************************************************/
			$sql = "UPDATE shouhin SET AWAZU_NIN = {$_SESSION['uid']} WHERE product_id = {$product_id}";
			$rs = CustomQuery($sql);

			/**********************************************************
			合わず日
			**********************************************************/
			$sql = "UPDATE shouhin SET AWAZU_DATE = {$nowtime} WHERE product_id = {$product_id}";
			$rs = CustomQuery($sql);

			/**********************************************************
			ログ
			**********************************************************/
			$log_ip = $_SERVER["REMOTE_ADDR"];
			$log_table = "saisun";
			$log_action = "edit";//ここでは固定
			//user_login取得
			$user_login_query = " SELECT user_login FROM users WHERE user_id={$_SESSION['uid']} LIMIT 1";
			$rs = CustomQuery($user_login_query);
			while ($data = db_fetch_array($rs))
			{
				$log_user = $data["user_login"];
			}
			$log_descri = "---Keys\n";
			$log_descri = $log_descri."product_id : {$product_id}\n";
			$log_descri = $log_descri."---Fields\n";
			$log_descri = $log_descri."AWAZU_NIN[new]:{$_SESSION['uid']}\n";
			$log_descri = $log_descri."AWAZU_DATE[new]:{$nowtime_no}\n";
			$log_descri = $log_descri."updated_by[new]:{$_SESSION['uid']}\n";
			$log_descri = $log_descri."updated_at[new]:{$nowtime_no}\n";
			$insert_sql = "INSERT INTO evav62122_audit (datetime,ip,`user`,`table`,action,description) VALUES ({$nowtime},'{$log_ip}','{$log_user}','{$log_table}','{$log_action}','{$log_descri}')";
			CustomQuery($insert_sql);

		}else{
			/**********************************************************
			更新者
			**********************************************************/
			$sql = "UPDATE shouhin SET updated_by = {$_SESSION['uid']} WHERE product_id = {$product_id}";
			$rs = CustomQuery($sql);

			/**********************************************************
			更新日
			**********************************************************/
			$sql = "UPDATE shouhin SET updated_at = {$nowtime} WHERE product_id = {$product_id}";
			$rs = CustomQuery($sql);

			/**********************************************************
			ログ
			**********************************************************/
			$log_ip = $_SERVER["REMOTE_ADDR"];
			$log_table = "saisun";
			$log_action = "edit";//ここでは固定
			//user_login取得
			$user_login_query = " SELECT user_login FROM users WHERE user_id={$_SESSION['uid']} LIMIT 1";
			$rs = CustomQuery($user_login_query);
			while ($data = db_fetch_array($rs))
			{
				$log_user = $data["user_login"];
			}
			$log_descri = "---Keys\n";
			$log_descri = $log_descri."product_id : {$product_id}\n";
			$log_descri = $log_descri."---Fields\n";
			$log_descri = $log_descri."updated_by[new]:{$_SESSION['uid']}\n";
			$log_descri = $log_descri."updated_at[new]:{$nowtime_no}\n";
			$insert_sql = "INSERT INTO evav62122_audit (datetime,ip,`user`,`table`,action,description) VALUES ({$nowtime},'{$log_ip}','{$log_user}','{$log_table}','{$log_action}','{$log_descri}')";
			CustomQuery($insert_sql);
		}
	}//end 値



}



//価格更新判定処理
include_once $_SERVER["DOCUMENT_ROOT"]."/include/page_event/function/kakaku.php";


?>
