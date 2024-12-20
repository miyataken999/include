<?



function shop_name($id){


		$d = mysql_fetch_array(mysql_query("select * from shop_data where id = '$id'"));
		return $d['shop_name'];

}



function cate_name($id){


		$d = mysql_fetch_array(mysql_query("select * from cate_data where id = '$id'"));
		return $d['name'];

}

function user_mail($id){


		$d = mysql_fetch_array(mysql_query("select * from user_data where id = '$id'"));
		return $d['mail'];

}


function user_tel($id){


		$d = mysql_fetch_array(mysql_query("select * from user_data where id = '$id'"));
		return $d['tel'];

}


function user_point($id){


		$d = mysql_fetch_array(mysql_query("select * from user_data where id = '$id'"));
		return $d['now_point'];

}


//表示件数,現在ページ数,テーブル,条件,種別,検索単語  【普通検索用ページャー関数】
function pager_pc($max_amo,$page_amo,$table,$page_name,$where_data){

	$data_amo_que=mysql_query($test="select * from $table $where_data"); //レビューの総数クエリ

	$data_amo=mysql_num_rows($data_amo_que); //レビューの総数
	$page=$page_amo; //現在のページ
	if($page_amo==""){
		$page=1;
	}
	$start_reco=$page*$max_amo;
	$start_reco=$start_reco-$max_amo; //スタートレコード数
	$start_reco_hyouji=$start_reco+1;  //スタートレコード数　表示用
	//エンドレコード数　表示用
	$end_reco_hyouji=$max_amo*$page;  //ページ×ページ表示数
	if($data_amo<$end_reco_hyouji){
		$end_reco_hyouji=$data_amo;   //ページ内表示数よりレコード数が少ない時
	}
	//最大ページ数取得
	if($data_amo%$max_amo>0){
		$pager=floor($data_amo/$max_amo+1); //次のページがあるとき
	}else{
		$pager=floor($data_amo/$max_amo);   //次のページがないとき
	}

//次へと前へを使用する場合はコメントアウトをはずし一番下のprint分をコメントアウトする。

	$before_page=$page-1;
	$next_page=$page+1;

	if($pager >= $page && $page!=1){

		print "[ <a href='".$page_name."&amp;page=".$before_page."'>前の50件</a>";

	}else{

		print "[ 前の50件";

	}

	if($pager != $page && $pager!=1){

		print " | <a href='".$page_name."&amp;page=".$next_page."'>次の50件</a> ] ";

	}else{

		print " | 次の50件 ] ";

	}


	//ページャー作成
	if($page_amo<5){
		$n=1;
		$x=$n+9;
		if($x>$pager){
			$x=$pager;
		}
	}else{
		$n=$page_amo-4;
		$x=$n+9;
		if($x>$pager){
			$x=$pager;
		}
	}
	$pager_link = "";
	for($i=$n;$i<=$x;$i++){
		if($i==$page){  //カウント数と現在ページが同じかチェック

			$pager_link.="<a href=\"#\"><strong><font color=\"#FF0000\">".$i."</font></strong></a>";

		}else{          //カウント数と現在ページが同じじゃないとき

			$pager_link .= "<a href='".$page_name."?page=".$i."'>".$i."</a>";
		}
	}

	//print $pager_link;//ページャー変数


//#################################
##
##　表示用クエリに必要なソース
##	//表示件数,現在ページ数,テーブル,条件,種別,検索単語  【普通検索用ページャー関数】
##	$max_amo=10;				//表示件数
##  $page_amo=$_GET['page'];	//現在のページ数
##	$page_amo=$page_amo;		//現在ページ数
##	$table="テーブル名";		//テーブル
##	$page_name="news.html?shop_area=".urlencode($pref_data);		//次のページのURL
##	$wheredata="where shop_code in(".$pref_id.") order by id desc";		//条件
##	//表示用
##
##	if($page_amo==""){
##		$page_amo=1;
##	}
##
##	$start_data=($page_amo*$max_amo)-$max_amo;
##
##  $data_que=mysql_query("select * from テーブル名 limit $start_data,$max_amo");
##
###################################


}
//表示件数,現在ページ数,テーブル,条件,種別,検索単語  【普通検索用ページャー関数】
function pager_pc2($max_amo,$page_amo,$table,$page_name,$where_data){

	$data_amo_que=mysql_query($test="select * from $table $where_data"); //レビューの総数クエリ

	$data_amo=mysql_num_rows($data_amo_que); //レビューの総数
	$page=$page_amo; //現在のページ
	if($page_amo==""){
		$page=1;
	}
	$start_reco=$page*$max_amo;
	$start_reco=$start_reco-$max_amo; //スタートレコード数
	$start_reco_hyouji=$start_reco+1;  //スタートレコード数　表示用
	//エンドレコード数　表示用
	$end_reco_hyouji=$max_amo*$page;  //ページ×ページ表示数
	if($data_amo<$end_reco_hyouji){
		$end_reco_hyouji=$data_amo;   //ページ内表示数よりレコード数が少ない時
	}
	//最大ページ数取得
	if($data_amo%$max_amo>0){
		$pager=floor($data_amo/$max_amo+1); //次のページがあるとき
	}else{
		$pager=floor($data_amo/$max_amo);   //次のページがないとき
	}

//次へと前へを使用する場合はコメントアウトをはずし一番下のprint分をコメントアウトする。

//	$before_page=$page-1;
//	$next_page=$page+1;

//	if($pager >= $page && $page!=1){

//		print "<a href='".$page_name."&amp;page=".$before_page."'>＜前のページ</a>　";

//	}

//	if($pager != $page && $pager!=1){

//		print "<a href='".$page_name."&amp;page=".$next_page."'>次のページ＞</a>";

//	}


	//ページャー作成
	if($page_amo < 10){
		$n=1;
		$x=$n+19;
		if($x>$pager){
			$x=$pager;
		}
	}else{
		$n=$page_amo-9;
		$x=$n+19;
		if($x>$pager){
			$x=$pager;
		}
	}
	$pager_link = "";
	for($i=$n;$i<=$x;$i++){
		if($i==$page){  //カウント数と現在ページが同じかチェック

			$pager_link.="<a href=\"#\"><strong><font color=\"#FF0000\">".$i."</font></strong></a>";

		}else{          //カウント数と現在ページが同じじゃないとき

			$pager_link .= "<a href='".$page_name."&page=".$i."'>".$i."</a>";
		}
	}

	print $pager_link;//ページャー変数


}


function data_amo($table,$where_data){

	$str = mysql_num_rows(mysql_query("select * from $table $where_data"));
	return $str;

}

function main_clm_title($data){

	$d = mysql_fetch_array(mysql_query("select * from clm_tbl where data = '$data'"));
	return $d['code'];

}

function box_name($data){

	$d = mysql_fetch_array(mysql_query("select * from box_tbl where id = '$data'"));
	return $d['data'];

}

function shomei_str($id){

	$d = mysql_fetch_array(mysql_query("select * from shomei_tbl where id = '$id'"));
	return $d['str'];

}


function customer_name($id){

	$d = mysql_fetch_array(mysql_query("select * from Eoc where ecc_id = '$id'"));
	return $d['name1'];

}


function customer_mail($id){

	$d = mysql_fetch_array(mysql_query("select * from Eoc where ecc_id = '$id'"));
	return $d['mail1'];

}

function mail_str($from_addr,$col){

	$d = mysql_fetch_array(mysql_query("select * from from_mail_tbl where mail = '$from_addr'"));
	return $d[$col];

}



?>
