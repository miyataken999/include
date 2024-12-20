<?
//ログイン認証
include_once $_SERVER["DOCUMENT_ROOT"]."/include/login/login.php";
// session_start();
// var_dump($_SESSION);
// $updated_by = $_SESSION["uid"];
//エラー出力⇒これ出したらCSVぐちゃぐちゃになる
// ini_set( 'display_errors', 1 );
mb_internal_encoding("utf8");
include $_SERVER["DOCUMENT_ROOT"]."/include/connection.php";

//★★★★★★★★★★★★★★★★★★★★★★★★★★★可変部分★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★
$koumoku_from = "mst_label_output"; //対象CSVマスタ
$from = " FROM shouhin"; //対象テーブル
$where = " WHERE (label_output_flag=1 OR tentou_label_output_flag=1) "; //抽出対象
//★★★★★★★★★★★★★★★★★★★★★★★★★★★可変部分★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★

//+++++++++++++++++++++++++++++++++++++++
//CSV項目名をマスタからひっぱる
//+++++++++++++++++++++++++++++++++++++++


$koumoku_query = " SELECT {$koumoku_from}.field_name , {$koumoku_from}.csv_name FROM {$koumoku_from} ORDER BY sort ";
$koumoku_sql = mysql_query('SET NAMES utf8');
$koumoku_sql = mysql_query($koumoku_query);

$csv_name = array(); //csv表示名を入れる （1行目）
$field_name = ""; //SELECT値を入れる （2行目以降）
$field_name_array = array();
$field_i = 1;
	while ($koumoku_result = mysql_fetch_assoc($koumoku_sql)) {
		if($field_i == 1){
			$koumoku_result["csv_name"] = mb_convert_encoding($koumoku_result["csv_name"],"SJIS");
			array_push($csv_name , $koumoku_result["csv_name"]);
			$field_name .= $koumoku_result["field_name"];
			array_push($field_name_array , $koumoku_result["field_name"]);

			$field_i++;
		}else{
			$koumoku_result["csv_name"] = mb_convert_encoding($koumoku_result["csv_name"],"SJIS");
			array_push($csv_name , $koumoku_result["csv_name"]);
			$field_name .= " , ".$koumoku_result["field_name"];
			array_push($field_name_array , $koumoku_result["field_name"]);
		}
	}




//+++++++++++++++++++++++++++++++++++++++
//CSVデータをひっぱる
//+++++++++++++++++++++++++++++++++++++++
//★★★★★★★★★★★★★★★★★★★★★★★★★★★データ作成★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★
//追加項目
$field_name .= ' , Destination_selling';
$field_name .= ' , Finish';
// $field_name .= ' , Discrimination';
// $field_name .= ' , accessories';
$field_name .= ' , priority';
$field_name .= ' , A_storage';
$field_name .= ' , yahoo_color';
$field_name .= ' , product_num';
$field_name .= ' , category_id';
$field_name .= ' , sub_category_id1';
$field_name .= ' , line';
$field_name .= ' , item_name';
// $field_name .= ' , yahoo_kataban';
$field_name .= ' , stamp';
$field_name .= ' , motif';
// $field_name .= ' , Setting';
$field_name .= ' , gold_property';
$field_name .= ' , sales_price';


$field_name .= ' , Gram';
$field_name .= ' , Parent_stone';
$field_name .= ' , Aside_stone';
$field_name .= ' , unit';
$field_name .= ' , Remarks';
$field_name .= ' , Eoc_unfinished_id';
$field_name .= ' , tentou_label_output_flag';




//★★★★★★★★★★★★★★★★★★★★★★★★★★★データ作成★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★
$query = ' SELECT '.$field_name.$from.$where;

$sql = mysql_query('SET NAMES utf8');
$sql = mysql_query($query);

header('Content-Type: text/csv');
header("Content-Disposition: attachment; filename=label_output.csv");
$fp = fopen('php://output','w');
if ($fp === FALSE) {
	throw new Exception('ファイルの書き込みに失敗しました。');
}
//CSVをエクセルで開くことを想定して文字コードをSJISへ変換する設定を行う
//20170220 これだと、変換ミスのときに終了してしまうので、個別に文字コード変換処理を追加
// stream_filter_append($fp, 'convert.iconv.UTF-8/CP932', STREAM_FILTER_WRITE);

$user_list = array($csv_name);
$count_field = count($field_name_array);
$result_array = array();
/*

SEQ 用配列

*/
// 修正中
$repair_id_array = array();
// 未採寸
$misaisun_id_array = array();
// ストック
$stock_id_array = array();
// J市場/宝飾
$housyoku_ichiba_id_array = array();
// B市場/服飾
$ichiba_id_array = array();
// A市場/服飾
$A_ichiba_id_array = array();

// M待機
$M_taiki_id_array = array();

// $product_id_list_array = array();
	while ($result = mysql_fetch_assoc($sql)) {
		for ($field_i=0; $field_i < $count_field; $field_i++) {
			//★★★★★★★★★★★★★★★★★★★★★★★★★★★データ作成★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★
			//---ラベル出力
			if($field_name_array[$field_i] == "raku_title"){
				// $raku_title = $result['raku_title'];
				$raku_title = "";
				if($result['sales_price'] >= 100000){
					$raku_title .= "★";
				}
				if(($result['product_num'] != "") && ($result['product_num'] != 631)){
					// if($raku_title != ''){$raku_title .= "/";}
					$q = "SELECT name FROM mst_brand2 WHERE id={$result['product_num']}";
					$s = mysql_query($q);
					$r = mysql_fetch_assoc($s);
					$raku_title .= $r['name'];
				}
				if($result['category_id'] != ""){
					if($raku_title != ''){$raku_title .= "/";}
					$q = "SELECT category_name FROM store_categories WHERE category_id={$result['category_id']}";
					$s = mysql_query($q);
					$r = mysql_fetch_assoc($s);
					$raku_title .= $r['category_name'];
				}
				if($result['sub_category_id1'] != ""){
					if($raku_title != ''){$raku_title .= "/";}
					$q = "SELECT name FROM store_sub_categories WHERE id={$result['sub_category_id1']}";
					$s = mysql_query($q);
					$r = mysql_fetch_assoc($s);
					$raku_title .= $r['name'];
				}
				if($result['line'] != ""){
					if($raku_title != ''){$raku_title .= "/";}
					$raku_title .= $result['line'];
				}
				if($result['item_name'] != ""){
					if($raku_title != ''){$raku_title .= "/";}
					$raku_title .= $result['item_name'];
				}
				if($result['serial_number_for_storage'] != ""){
					if($raku_title != ''){$raku_title .= "/";}
					$raku_title .= $result['serial_number_for_storage'];
				}
				if($result['yahoo_kataban'] != ""){
					if($raku_title != ''){$raku_title .= "/";}
					$raku_title .= $result['yahoo_kataban'];
				}
				if($result['stamp'] != ""){
					if($raku_title != ''){$raku_title .= "/";}
					$raku_title .= $result['stamp'];
				}
				if($result['motif'] != ""){
					if($raku_title != ''){$raku_title .= "/";}
					$raku_title .= $result['motif'];
				}
				// if($result['Setting'] != ""){
				// 	if($raku_title != ''){$raku_title .= "/";}
				// 	$raku_title .= $result['Setting'];
				// }
				if($result['gold_property'] != ""){
					if($raku_title != ''){$raku_title .= "/";}
					$raku_title .= $result['gold_property'];
				}

				if($result['Gram'] != ""){
					if($raku_title != ''){$raku_title .= "/";}
					$raku_title .= $result['Gram'].$result['unit'];
				}

				if($result['Parent_stone'] != ""){
					if($raku_title != ''){$raku_title .= "/";}
					$raku_title .= $result['Parent_stone'].'ct';
				}

				if($result['Aside_stone'] != ""){
					if($raku_title != ''){$raku_title .= "/";}
					$raku_title .= $result['Aside_stone'].'ct';
				}





				if($result['Destination_selling'] != ""){
					if($raku_title != ''){$raku_title .= "/";}
					$raku_title .= $result['Destination_selling'];

					if($result['Destination_selling'] == "ECサイト"){
						if(!in_array($result['product_id'] , $misaisun_id_array)){
							array_push($misaisun_id_array , $result['product_id']);
						}
					}elseif($result['Destination_selling'] == "Stock"){
						if(!in_array($result['product_id'] , $stock_id_array)){
							array_push($stock_id_array , $result['product_id']);
						}
					}elseif($result['Destination_selling'] == "B市場/服飾"){
						if(!in_array($result['product_id'] , $ichiba_id_array)){
							array_push($ichiba_id_array , $result['product_id']);
						}
					}elseif($result['Destination_selling'] == "J市場/宝飾"){
						if(!in_array($result['product_id'] , $housyoku_ichiba_id_array)){
							array_push($housyoku_ichiba_id_array , $result['product_id']);
						}
					}elseif($result['Destination_selling'] == "A市場/服飾"){
						if(!in_array($result['product_id'] , $A_ichiba_id_array)){
							array_push($A_ichiba_id_array , $result['product_id']);
						}
					}elseif($result['Destination_selling'] == "M待機"){
						if(!in_array($result['product_id'] , $M_taiki_id_array)){
							array_push($M_taiki_id_array , $result['product_id']);
						}
					}elseif($result['Destination_selling'] == "委託"){
						if(!in_array($result['product_id'] , $misaisun_id_array)){
							array_push($misaisun_id_array , $result['product_id']);
						}
					}




				}// end Destination_selling
				if($result['Finish'] != ""){
					if($raku_title != ''){$raku_title .= "/";}
					$raku_title .= $result['Finish'];
					if(!in_array($result['product_id'] , $repair_id_array)){
						array_push($repair_id_array , $result['product_id']);
					}
				}
				if($result['Discrimination'] != ""){
					if($raku_title != ''){$raku_title .= "/";}
					$raku_title .= $result['Discrimination'];
					if(!in_array($result['product_id'] , $repair_id_array)){
						array_push($repair_id_array , $result['product_id']);
					}
				}
				if($result['accessories'] != ""){
					if($raku_title != ''){$raku_title .= "/";}
					$raku_title .= $result['accessories'];
				}
				if($result['A_storage'] == 1){
					if($raku_title != ''){$raku_title .= "/";}
					$raku_title .= "A保管";
				}
				if($result['priority'] == 1){
					if($raku_title != ''){$raku_title .= "/";}
					$raku_title .= "優先";
				}
				if($result['yahoo_color'] != ""){
					if($raku_title != ''){$raku_title .= "/";}
					$raku_title .= $result['yahoo_color'];
				}



				if($result['Eoc_unfinished_id'] != ""){
					$product_id = $result['product_id'];
					$Eoc_unfinished_query = " SELECT details FROM Eoc_chigins_unfinished WHERE product_id='{$product_id}' limit 1";
					$Eoc_unfinished_sql = '';
					$Eoc_unfinished_result = '';
					$Eoc_unfinished_sql = mysql_query($Eoc_unfinished_query);
					$Eoc_unfinished_result = mysql_fetch_assoc($Eoc_unfinished_sql);
					if($Eoc_unfinished_result["details"] != ''){
						if($raku_title != ''){$raku_title .= "/";}
						$raku_title .= $Eoc_unfinished_result['details'];
					}
				}


				if($result['Remarks'] != ""){
					if($raku_title != ''){$raku_title .= "/";}
					$raku_title .= $result['Remarks'];
				}




				$no_star_title = str_replace('★', '', $raku_title);
				$tmp_query = " UPDATE shouhin SET title='{$raku_title}' WHERE product_id=".$result['product_id']." LIMIT 1";
				$tmp_sql = mysql_query('SET NAMES utf8');
				$tmp_sql = mysql_query($tmp_query);

				$result[$field_name_array[$field_i]] = $raku_title;

			}

			// $product_id_list_array[] = $result['product_id'];
			//★★★★★★★★★★★★★★★★★★★★★★★★★★★データ作成★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★
			$result[$field_name_array[$field_i]] = mb_convert_encoding($result[$field_name_array[$field_i]],"SJIS");
			$result_array[$field_i] = $result[$field_name_array[$field_i]];
		}
			array_push($user_list , $result_array);
	}


foreach($user_list as $user){
  fputcsv($fp, $user);
}
fclose($fp);






//+++++++++++++++++++++++++++++++++++++++
//CSVデータを出力後の処理
//+++++++++++++++++++++++++++++++++++++++

//★★★★★★★★★★★★★★★★★★★★★★★★★★★可変部分★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★
//CSV出力後の処理

//ラベルフラグ外す
//更新日、登録日
//phprunnerの、ボタンのserverの部分⇒ここで更新者、登録者（セッションがここのファイルだと効かないから）
// $sql = "update shouhin set kaitori_by=".$_SESSION['uid']." where label_output_flag=1";
// $rs = CustomQuery($sql);
$now_datetime = date("Y-m-d H:i:s");

$up_query = " UPDATE shouhin SET label_output_flag=0 , status=29 , kaitori_by={$uid} , kaitory_hi = '".$now_datetime."' , updated_by = {$uid} , updated_at = '".$now_datetime."'  WHERE label_output_flag=1 ";
$up_sql = mysql_query('SET NAMES utf8');
$up_sql = mysql_query($up_query);



/*

ステータス変更

※下のコードで上書きされるから、下が優先度高いイメージ

*/

// 未採寸
for ($misaisun_id_array_i=0; $misaisun_id_array_i < count($misaisun_id_array); $misaisun_id_array_i++) {
	$up_query = " UPDATE shouhin SET status=29 WHERE tentou_label_output_flag!='1' AND product_id=".$misaisun_id_array[$misaisun_id_array_i];
	$up_sql = mysql_query('SET NAMES utf8');
	$up_sql = mysql_query($up_query);
}


// 修理中
for ($repair_id_array_i=0; $repair_id_array_i < count($repair_id_array); $repair_id_array_i++) {
	$up_query = " UPDATE shouhin SET status=110 WHERE tentou_label_output_flag!='1' AND  product_id=".$repair_id_array[$repair_id_array_i];
	$up_sql = mysql_query('SET NAMES utf8');
	$up_sql = mysql_query($up_query);
}


// ストック
for ($stock_id_array_i=0; $stock_id_array_i < count($stock_id_array); $stock_id_array_i++) {
	$up_query = " UPDATE shouhin SET status=124 WHERE tentou_label_output_flag!='1' AND product_id=".$stock_id_array[$stock_id_array_i];
	$up_sql = mysql_query('SET NAMES utf8');
	$up_sql = mysql_query($up_query);
}


// B市場/服飾
for ($ichiba_id_array_i=0; $ichiba_id_array_i < count($ichiba_id_array); $ichiba_id_array_i++) {
	$up_query = " UPDATE shouhin SET status=111 WHERE tentou_label_output_flag!='1' AND  product_id=".$ichiba_id_array[$ichiba_id_array_i];
	$up_sql = mysql_query('SET NAMES utf8');
	$up_sql = mysql_query($up_query);
}


// J市場/宝飾
for ($housyoku_ichiba_id_array_i=0; $housyoku_ichiba_id_array_i < count($housyoku_ichiba_id_array); $housyoku_ichiba_id_array_i++) {
	$up_query = " UPDATE shouhin SET status=121 WHERE tentou_label_output_flag!='1' AND  product_id=".$housyoku_ichiba_id_array[$housyoku_ichiba_id_array_i];
	$up_sql = mysql_query('SET NAMES utf8');
	$up_sql = mysql_query($up_query);
}

// A市場/服飾
for ($A_ichiba_id_array_i=0; $A_ichiba_id_array_i < count($A_ichiba_id_array); $A_ichiba_id_array_i++) {
	$up_query = " UPDATE shouhin SET status=113 WHERE tentou_label_output_flag!='1' AND  product_id=".$A_ichiba_id_array[$A_ichiba_id_array_i];
	$up_sql = mysql_query('SET NAMES utf8');
	$up_sql = mysql_query($up_query);
}

// M待機
for ($M_taiki_id_array_i=0; $M_taiki_id_array_i < count($M_taiki_id_array); $M_taiki_id_array_i++) {
	$up_query = " UPDATE shouhin SET status=147 WHERE tentou_label_output_flag!='1' AND  product_id=".$M_taiki_id_array[$M_taiki_id_array_i];
	$up_sql = mysql_query('SET NAMES utf8');
	$up_sql = mysql_query($up_query);
}













// ST変更なしフラグの削除
$up_query = " UPDATE shouhin SET tentou_label_output_flag=0 WHERE tentou_label_output_flag=1 ";
$up_sql = mysql_query($up_query);


//+++++++++++++++++++++++++++++++++++++++++++++++++++++++
//!!!ログ!!!!!!sessionを引き継がず、ユーザーを取れないので保留
//+++++++++++++++++++++++++++++++++++++++++++++++++++++++

// session_start();
//ログ項目設定
// $log_time = $now_datetime;
// $log_ip = $_SERVER["REMOTE_ADDR"];
// $log_table = "saisun";
// $log_action = "edit";//ここでは固定
// $log_descri = "---Keys\n";
// $product_id_list = implode(",\n",$product_id_list_array);
// $log_descri .= "product_id : \n{$product_id_list}";
// $log_descri .= "---Fields\n";
// $log_descri .= "label_output_flag[old]:1\n";
// $log_descri .= "label_output_flag[new]:0\n";
// $log_descri .= "status[new]:29\n";
// $log_descri .= "kaitory_hi[new]:'".$now_datetime."'\n";
// $log_descri .= "updated_at[new]:'".$now_datetime."'\n";

// $user_id = $_SESSION["uid"];
// //user_login取得
// $user_login_query = " SELECT user_login FROM users WHERE user_id={$user_id} LIMIT 1";
// $user_login_sql = mysql_query('SET NAMES utf8');
// $user_login_sql = mysql_query($user_login_query);
// $user_login_result = mysql_fetch_assoc($user_login_sql);
// $log_user = $user_login_result["user_login"];


// // $insert_sql = "INSERT INTO evav62122_audit (datetime,ip,`user`,`table`,action,description) VALUES ('{$log_time}','{$log_ip}','{$log_user}','{$log_table}','{$log_action}','{$log_descri}')";
// $insert_sql = "INSERT INTO evav62122_audit (datetime,ip,`user`,`table`,action,description) VALUES ('{$log_time}','{$log_ip}','{$log_user}','{$log_table}','{$log_action}','{$log_descri}')";
// $result_flag = mysql_query('SET NAMES utf8');
// $result_flag = mysql_query($insert_sql);
// if (!$result_flag) {
// 	print mysql_error();
// 	exit('データを登録できませんでした。');
// }


//★★★★★★★★★★★★★★★★★★★★★★★★★★★可変部分★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★





?>
