<?
header('Content-Type: text/html; charset=UTF-8');
// print mb_internal_encoding();
?>
<script type="text/javascript" >
jQuery("[id*=readonly_value_product_id_]").css("width","0px");

//====================================================================
//追加、編集した際にセレクタを再読み込みさせるため、js_load関数化
//====================================================================
function js_load(){

	$("[id*=display_value_product_num]").focus(function(){
		$this_id_num = $(this).attr("id");
		$this_id_num = $this_id_num.split("_");
		$this_id_num = $this_id_num[$this_id_num.length-1];
		$value_product_num = $("#value_product_num_"+$this_id_num).val();
		if($value_product_num == 631){
			$(this).val("");
		}
	});
	var product_num_val = "";
	$("[id*=display_value_product_num]").focusout(function() {
		product_num_val = $(this).val();
		if((product_num_val == "") || (product_num_val == undefined)){
			$this_id_num = $(this).attr("id");
			$this_id_num = $this_id_num.split("_");
			$this_id_num = $this_id_num[$this_id_num.length-1];
			console.log("this_id_num"+$this_id_num);
			$("#value_product_num_"+$this_id_num).val(631);
		}
	});
	/*******************************************
	メモ欄　自動追加
	**********************************************/
	//+++++++++++++++++++++++↓↓メモ追加処理↓↓+++++++++++++++++++++++
	//コメントからそのまま反映
	$("[id*=value_comment]").keyup(function(){
		//idの固有連番を取得、抜き出す
		$this_id_num = $(this).attr("id");
		$this_id_num = $this_id_num.split("_");
		$this_id_num = $this_id_num[$this_id_num.length-1];
		$("#value_description_"+$this_id_num).val($(this).val());
	})

	//売り先、仕上、鑑別、付属品、優先、A保管
	$("[id*=value_Destination_selling] , [id*=value_Finish] , [id*=value_Discrimination] , [id*=value_accessories] , [id*=value_priority] , [id*=value_A_storage]").change(function(){
		//idの固有連番を取得、抜き出す
		$this_id_num = $(this).attr("id");
		$this_id_num = $this_id_num.split("_");
		$this_id_num = $this_id_num[$this_id_num.length-1];
		//それぞれの値取得、あれば先頭にスラッシュを追加
		$description = $("#value_description_"+$this_id_num).val();
		$Destination_selling = $("#value_Destination_selling_"+$this_id_num).val();
		if($Destination_selling != ""){$Destination_selling = "/"+$Destination_selling};
		$Finish = $("#value_Finish_"+$this_id_num).val();
		if($Finish != ""){$Finish = "/"+$Finish};
		$Discrimination = $("#value_Discrimination_"+$this_id_num).val();
		if($Discrimination != ""){$Discrimination = "/"+$Discrimination};
		$accessories = $("#value_accessories_"+$this_id_num).val();
		if($accessories != ""){$accessories = "/"+$accessories};
		$priority = $("#value_priority_"+$this_id_num).prop("checked");
			if($priority == true){$priority = "優先"}else{$priority = ""};
		if($priority != ""){$priority = "/"+$priority};
		$A_storage = $("#value_A_storage_"+$this_id_num).prop("checked");
			if($A_storage == true){$A_storage = "A保管"}else{$A_storage = ""};;
		if($A_storage != ""){$A_storage = "/"+$A_storage};

		$mark = $Destination_selling+$Finish+$Discrimination+$accessories+$priority+$A_storage;

		if($mark != ""){
		//追加内容がある処理
			if($description.match(/\*/)){
				$description = $description.split("\*");
				$description[1] = $Destination_selling+$Finish+$Discrimination+$accessories+$priority+$A_storage;
				$res_description = $description[0]+"\*"+$description[1];
			}else{
				$res_description = $description+"\*"+$Destination_selling+$Finish+$Discrimination+$accessories+$priority+$A_storage;
			}
		}else{
		//追加内容がない処理
			if($description.match(/\*/)){
				$description = $description.split("\*");
				$res_description = $description[0];
			}else{
				$res_description = $description;
			}
		}
		//メモ部分を書き換え
		$("#value_description_"+$this_id_num).val($res_description);

	});
	//+++++++++++++++++++++++↑↑メモ追加処理↑↑+++++++++++++++++++++++



	$moji = "";//必要？タイトル生成部分、削除 20180301 nishitani

	//製造番号（現・機番）の入力規制
	$("input[id*='serial_number']").focusout(function(){
	  $(this).val(toHalfWidth($(this).val()));
	});

	//型番の入力規制
	$("input[id*='yahoo_kataban']").focusout(function(){
	  $(this).val(toHalfWidth($(this).val()));
	});

	//刻印の入力規制
	$("input[id*='stamp']").focusout(function(){
	  $(this).val(toHalf_space_on($(this).val()));
	});

	//中カテをichba_ttlとアイテム名へ
	$("[id*=value_sub_category_id1]").change(function(){
		//idの固有連番を取得、抜き出す
		$this_id_num = $(this).attr("id");
		$this_id_num = $this_id_num.split("_");
		$this_id_num = $this_id_num[$this_id_num.length-1];

		// ichiba_ttl($this_id_num);
		item_name_cate($this_id_num);
	});


	//買取額、販売額計算処理
	$("[id*=value_price_]").focusout(function(){
		//idの固有連番を取得、抜き出す
		$this_id_num = $(this).attr("id");
		$this_id_num = $this_id_num.split("_");
		$this_id_num = $this_id_num[$this_id_num.length-1];
		hanbaikeisan($this_id_num);
	});

	$("[id*=value_Gram],[id*=value_price_per_gram],[id*=value_Parent_stone],[id*=value_price_per_parent_stone],[id*=value_Aside_stone],[id*=value_price_per_aside_stone]").focusout(function(){
		//idの固有連番を取得、抜き出す
		$this_id_num = $(this).attr("id");
		$this_id_num = $this_id_num.split("_");
		$this_id_num = $this_id_num[$this_id_num.length-1];

		//計算、隠語作成
		price_keisan($this_id_num);
		hanbai_ingo($this_id_num);
		kaitori_ingo($this_id_num);
	});
	//買取額、販売額入力後、隠語作成
	$("[id*=value_price],[id*=value_sales_price]").focusout(function(){
		//idの固有連番を取得、抜き出す
		$this_id_num = $(this).attr("id");
		$this_id_num = $this_id_num.split("_");
		$this_id_num = $this_id_num[$this_id_num.length-1];
		kaitori_ingo($this_id_num);
		hanbai_ingo($this_id_num);
	});


	//即時反映
	$("[id*='value_price_secret']").each(function(index) {
		//idの固有連番を取得、抜き出す
		$this_id_num = $(this).attr("id");
		$this_id_num = $this_id_num.split("_");
		$this_id_num = $this_id_num[$this_id_num.length-1];
		kaitori_ingo($this_id_num);
		hanbai_ingo($this_id_num);
	});


	//エラー表示切替用。
	var error_text = "";
	$("td[data-field='errors']").find("span[id*='_errors']").each(function(index, val) {
		error_text = $(this).text();
		if(error_text != ""){
			$(this).parent().parent().children('td').addClass('error_row');
		}else{
			$(this).parent().parent().children('td').removeClass('error_row');
		}
	});


	$("[id*=value_price_]").focusin(function(){
		if($(this).hasClass("dont_touch")){
			//idの固有連番を取得、抜き出す
			$this_id_num = $(this).attr("id");
			$this_id_num = $this_id_num.split("_");
			$this_id_num = $this_id_num[$this_id_num.length-1];

			$("#value_yahoo_sankou_uwadai_"+$this_id_num).focus();

		}
	});

}//-------------end js_load function----------------


//CSVファイルを読み込む関数getCSV()の定義
function getCSV(){
    var req = new XMLHttpRequest(); // HTTPでファイルを読み込むためのXMLHttpRrequestオブジェクトを生成
	$_file = "/include/csv/satei_sub_cate.csv";
    req.open("get", $_file, true); // アクセスするファイルを指定
    req.send(null); // HTTPリクエストの発行

    // レスポンスが返ってきたらconvertCSVtoArray()を呼ぶ
    req.onload = function(){
	convertCSVtoArray(req.responseText); // 渡されるのは読み込んだCSVデータ
    }
}

// 読み込んだCSVデータを二次元配列に変換する関数convertCSVtoArray()の定義
$result = []; // 最終的な二次元配列を入れるための配列
$tmp = "";
function convertCSVtoArray(str){ // 読み込んだCSVデータが文字列として渡される
    $tmp = str.split("\n"); // 改行を区切り文字として行を要素とした配列を生成
    // 各行ごとにカンマで区切った文字列を要素とした二次元配列を生成
    for(var i=0;i<$tmp.length;++i){
        $result[i] = $tmp[i].split(',');
        // console.log($result[i]);
    }
}

getCSV(); //最初に実行される

function sub_cate_alpha(sub_cate){
	for (var i = $tmp.length - 1; i >= 0; i--) {
		for (var iii = $result[i].length - 1; iii >= 0; iii--) {
			if($result[i][iii] == sub_cate){
				$sub_cate_res = $result[i][10];
				if($sub_cate_res != ""){
					return $moji = $sub_cate_res+":";
				}else{
					return $moji = "";
				}			}
		};
	};
}

//+++++++++++++++++++++++↑↑title処理↑↑+++++++++++++++++++++++
//+++++++++++++++++++++++↑↑title処理↑↑+++++++++++++++++++++++

/*********************************************************************
//地金、親石、脇石からの買取額計算
**********************************************************************/
function price_keisan(id_num){

	$kin_gram = 0;//総重量 - 石重量
	$_kin_price = 0;
	$_parent_price = 0;
	$_aside_price = 0;
	$_price_res = "";//買取額
	$_sales_price_res = "";//販売額

	$sum_gram = $("#value_Gram_"+id_num).val();//総重量
	$kin_gram_val = $("#value_price_per_gram_"+id_num).val();//地金単価
	$par_ct = $("#value_Parent_stone_"+id_num).val();//親石カラット
	$par_gram = ($("#value_Parent_stone_"+id_num).val())*0.4;//親石重量
	$par_gram_val = $("#value_price_per_parent_stone_"+id_num).val();//親石単価
	$asd_ct = $("#value_Aside_stone_"+id_num).val();//脇石カラット
	$asd_gram = ($("#value_Aside_stone_"+id_num).val())*0.4;//脇石重量
	$asd_gram_val = $("#value_price_per_aside_stone_"+id_num).val();//脇石単価
	//総重量があった場合、地金重量計算
	if(($sum_gram != "") && ($kin_gram_val != "")){
		$kin_gram = $sum_gram;
		//20180921 単価の項目は、判定に必要なかった
		// if(($par_ct != "") && ($par_gram_val != "")){
		if($par_ct != ""){
			$kin_gram = $kin_gram - $par_gram;
		}
		// if(($asd_ct != "") && ($asd_gram_val != "")){
		if($asd_ct != ""){
			$kin_gram = $kin_gram - $asd_gram;
		}
		//地金金額計算
		$_kin_price = $kin_gram * $kin_gram_val;
	}else{
	//総重量が無かった場合、石のみ計算なので、地金計算なし。
	}
	//石計算
	if(($par_ct != "") && ($par_gram_val != "")){
		$_parent_price = $par_ct * $par_gram_val;
	}
	if(($asd_ct != "") && ($asd_gram_val != "")){
		$_aside_price = $asd_ct * $asd_gram_val;
	}

	$_price_res = $_kin_price + $_parent_price + $_aside_price;
	console.log("_price_res "+$_price_res);
	$_price_res = Math.floor($_price_res);
	$("#value_price_"+id_num).val($_price_res);
	$_sales_price_res = $_price_res/0.4;
	$_sales_price_res = Math.floor($_sales_price_res);
	$("#value_sales_price_"+id_num).val($_sales_price_res);

	if($_price_res > 0){
		$("#value_price_"+id_num).addClass('dont_touch');
	}else{
		$("#value_price_"+id_num).removeClass('dont_touch');
	}

}//END price_keisan

function hanbaikeisan(id_num){
	$_price = $("#value_price_"+id_num).val();
	$_sales_price_res = $_price/0.4;
	$_sales_price_res = Math.floor($_sales_price_res);
	$("#value_sales_price_"+id_num).val($_sales_price_res);
}


/*********************************************************************
//中カテをichiba_titleへ反映
**********************************************************************/

// function ichiba_ttl(id_num){
// $sub_category_id1 = $("#value_sub_category_id1_"+id_num+" option:selected").text();//総重量
// if($sub_category_id1 != ""){
// 	$("#value_ichiba_title_"+id_num).val($sub_category_id1);
// }

// }//END ichiba_ttl


/*********************************************************************
//中カテをアイテム名へ反映
**********************************************************************/

function item_name_cate(id_num){
$sub_category_id1 = $("#value_sub_category_id1_"+id_num+" option:selected").text();//総重量
$category_id1 = $("#value_category_id_"+id_num+" option:selected").text();//総重量
if($sub_category_id1 != ""){
	// $("#display_value_item_name_"+id_num).val($sub_category_id1);
	// $("#value_item_name_"+id_num).val($sub_category_id1);
	$("#value_shape_supplement_"+id_num).val($sub_category_id1);
	$("#value_product_style_"+id_num).val($category_id1);
}

}//END item_name_cate


/*********************************************************************
//隠語変換
**********************************************************************/

$ingo = {
	"1":"R",
	"2":"U",
	"3":"N",
	"4":"J",
	"5":"D",
	"6":"Z",
	"7":"I",
	"8":"X",
	"9":"A",
	"0":"S",
	",":"K"
	};



function hanbai_ingo(id_num){
	$hanbai = $("#value_sales_price_"+id_num).val();
	if($hanbai.match(/,/)){}else{
		$hanbai = $hanbai.replace(/(\d)(?=(\d\d\d)+$)/g, '$1,');
	}
	if($hanbai){
		//一文字ずつ配列に格納
		$hanbai = $hanbai.split("");
		$han_len = $hanbai.length;
		$han_ingo = "";
		if($han_len >= 3){
			//末３文字が全部ゼロだったら、空にする
			if(($hanbai[$han_len-1] == "0") && ($hanbai[$han_len-2] == "0") && ($hanbai[$han_len-3] == "0")){
				$hanbai[$han_len-1] = "";
				$hanbai[$han_len-2] = "";
				$hanbai[$han_len-3] = "";
				if($hanbai[$han_len-4] == ","){
					$hanbai[$han_len-4] = "";
				}
			}
		}
		if($han_len == 3){
			$han_len = 4;
			$hanbai[3] = $hanbai[2];
			$hanbai[2] = $hanbai[1];
			$hanbai[1] = $hanbai[0];
			$hanbai[0] = ",";
		}
		if($han_len == 2){
			$han_len = 4;
			$hanbai[3] = $hanbai[1];
			$hanbai[2] = $hanbai[0];
			$hanbai[1] = "0";
			$hanbai[0] = ",";
		}
		if($han_len == 1){
			$han_len = 4;
			$hanbai[3] = $hanbai[0];
			$hanbai[2] = "0";
			$hanbai[1] = "0";
			$hanbai[0] = ",";
		}

		//隠語配列に変換、結合
		for ($i=0; $i < $han_len; $i++) {
			$hanbai[$i] = $ingo[$hanbai[$i]];
			if($hanbai[$i]){
				$han_ingo = $han_ingo + $hanbai[$i];
			}
		}

		$("#value_sales_price_secret_"+id_num).val($han_ingo);
	}
}


function kaitori_ingo(id_num){
	$kaitori = $("#value_price_"+id_num).val();
	if($kaitori.match(/,/)){}else{
		$kaitori = $kaitori.replace(/(\d)(?=(\d\d\d)+$)/g, '$1,');
	}
	if($kaitori){
		//一文字ずつ配列に格納
		$kaitori = $kaitori.split("");
		$kai_len = $kaitori.length;
		$kai_ingo = "";
		if($kai_len >= 3){
			//末３文字がゼロだったら、空にする
			if(($kaitori[$kai_len-1] == "0") && ($kaitori[$kai_len-2] == "0") && ($kaitori[$kai_len-3] == "0")){
				$kaitori[$kai_len-1] = "";
				$kaitori[$kai_len-2] = "";
				$kaitori[$kai_len-3] = "";
				if($kaitori[$kai_len-4] == ","){
					$kaitori[$kai_len-4] = "";
				}
			}
		}
		if($kai_len == 3){
			$kai_len = 4;
			$kaitori[3] = $kaitori[2];
			$kaitori[2] = $kaitori[1];
			$kaitori[1] = $kaitori[0];
			$kaitori[0] = ",";
		}
		if($kai_len == 2){
			$kai_len = 4;
			$kaitori[3] = $kaitori[1];
			$kaitori[2] = $kaitori[0];
			$kaitori[1] = "0";
			$kaitori[0] = ",";
		}
		if($kai_len == 1){
			$kai_len = 4;
			$kaitori[3] = $kaitori[0];
			$kaitori[2] = "0";
			$kaitori[1] = "0";
			$kaitori[0] = ",";
		}

		//隠語配列に変換、結合
		for ($i=0; $i < $kai_len; $i++) {
			$kaitori[$i] = $ingo[$kaitori[$i]];
			if($kaitori[$i]){
				$kai_ingo = $kai_ingo + $kaitori[$i];
			}

		}
		$("#value_price_secret_"+id_num).val($kai_ingo);
	}
}

/*********************************************************************
//一括設定処理
**********************************************************************/


function ikkatsu_settei(){
	//最上段のid取得
	$sc_top = 10000;
	$(".bs-sidebar-main [id*=value_status_]").each(function(v,vv){
		$sc_top_now = $(vv).scrollTop();
		if($sc_top_now < $sc_top){
			$sc_top = $sc_top_now;
			$default_id = $(vv).attr("id");
			$default_id = $default_id.replace("value_status_","");
		}
	});

	var i = $default_id;
	var k = 0;
	$all_change = [];

	$all_change[k] = [];
	$all_change[k]["name"] = "value_price";
	$all_change[k]["val"] = $("#value_price_"+i).val(); k++;

	$all_change[k] = [];
	$all_change[k]["name"] = "value_status";
	$all_change[k]["val"] = $("#value_status_"+i).val(); k++;
	$all_change[k] = [];
	$all_change[k]["name"] = "display_value_yahoo_junle";
	$all_change[k]["val"] = $("#display_value_yahoo_junle_"+i).val(); k++;
	$all_change[k] = [];
	$all_change[k]["name"] = "value_yahoo_junle";
	$all_change[k]["val"] = $("#value_yahoo_junle_"+i).val(); k++;
	$all_change[k] = [];
	$all_change[k]["name"] = "value_category_id";
	$all_change[k]["val"] = $("#value_category_id_"+i).val(); k++;
	$all_change[k] = [];
	$all_change[k]["name"] = "value_sub_category_id1";
	$all_change[k]["val"] = $("#value_sub_category_id1_"+i).val(); k++;
	$all_change[k] = [];
	$all_change[k]["name"] = "value_yahoo_sex";
	$all_change[k]["val"] = $("#value_yahoo_sex_"+i).val(); k++;
	$all_change[k] = [];
	$all_change[k]["name"] = "value_yahoo_condition2";
	$all_change[k]["val"] = $("#value_yahoo_condition2_"+i).val(); k++;
	$all_change[k] = [];
	$all_change[k]["name"] = "value_line";
	$all_change[k]["val"] = $("#value_line_"+i).val(); k++;
	$all_change[k] = [];
	$all_change[k]["name"] = "value_item_name";
	$all_change[k]["val"] = $("#value_item_name_"+i).val(); k++;
	$all_change[k] = [];
	$all_change[k]["name"] = "value_yahoo_sozai";
	$all_change[k]["val"] = $("#value_yahoo_sozai_"+i).val(); k++;
	$all_change[k] = [];
	$all_change[k]["name"] = "value_motif";
	$all_change[k]["val"] = $("#value_motif_"+i).val(); k++;
	$all_change[k] = [];
	$all_change[k]["name"] = "value_Setting";
	$all_change[k]["val"] = $("#value_Setting_"+i).val(); k++;
	$all_change[k] = [];
	$all_change[k]["name"] = "value_processing";
	$all_change[k]["val"] = $("#value_processing_"+i).val(); k++;
	$all_change[k] = [];
	$all_change[k]["name"] = "value_Ring_size";
	$all_change[k]["val"] = $("#value_Ring_size_"+i).val(); k++;
	$all_change[k] = [];
	$all_change[k]["name"] = "value_serial_number";
	$all_change[k]["val"] = $("#value_serial_number_"+i).val(); k++;
	$all_change[k] = [];
	$all_change[k]["name"] = "value_stamp";
	$all_change[k]["val"] = $("#value_stamp_"+i).val(); k++;
	$all_change[k] = [];
	$all_change[k]["name"] = "value_Sleeve_Length";
	$all_change[k]["val"] = $("#value_Sleeve_Length_"+i).val(); k++;
	$all_change[k] = [];
	$all_change[k]["name"] = "value_length";
	$all_change[k]["val"] = $("#value_length_"+i).val(); k++;


	$all_change[k] = [];
	$all_change[k]["name"] = "value_product_num";
	$all_change[k]["val"] = $("#value_product_num_"+i).val(); k++;
	$all_change[k] = [];
	$all_change[k]["name"] = "value_ichiba_title";
	$all_change[k]["val"] = $("#value_ichiba_title_"+i).val(); k++;
	$all_change[k] = [];
	$all_change[k]["name"] = "value_gold_property";
	$all_change[k]["val"] = $("#value_gold_property_"+i).val(); k++;
	$all_change[k] = [];
	$all_change[k]["name"] = "value_Gram";
	$all_change[k]["val"] = $("#value_Gram_"+i).val(); k++;
	$all_change[k] = [];
	$all_change[k]["name"] = "value_price_per_gram";
	$all_change[k]["val"] = $("#value_price_per_gram_"+i).val(); k++;
	$all_change[k] = [];
	$all_change[k]["name"] = "value_Parent_stone";
	$all_change[k]["val"] = $("#value_Parent_stone_"+i).val(); k++;
	$all_change[k] = [];
	$all_change[k]["name"] = "value_price_per_parent_stone";
	$all_change[k]["val"] = $("#value_price_per_parent_stone_"+i).val(); k++;
	$all_change[k] = [];
	$all_change[k]["name"] = "value_Aside_stone";
	$all_change[k]["val"] = $("#value_Aside_stone_"+i).val(); k++;
	$all_change[k] = [];
	$all_change[k]["name"] = "value_price_per_aside_stone";
	$all_change[k]["val"] = $("#value_price_per_aside_stone_"+i).val(); k++;
	$all_change[k] = [];
	$all_change[k]["name"] = "value_Appraiser";
	$all_change[k]["val"] = $("#value_Appraiser_"+i).val(); k++;
	$all_change[k] = [];
	$all_change[k]["name"] = "value_Remarks";
	$all_change[k]["val"] = $("#value_Remarks_"+i).val(); k++;
	$all_change[k] = [];
	$all_change[k]["name"] = "value_title";
	$all_change[k]["val"] = $("#value_title_"+i).val(); k++;
	$all_change[k] = [];
	$all_change[k]["name"] = "value_yahoo_color";
	$all_change[k]["val"] = $("#value_yahoo_color_"+i).val(); k++;
	$all_change[k] = [];
	$all_change[k]["name"] = "value_yahoo_kataban";
	$all_change[k]["val"] = $("#value_yahoo_kataban_"+i).val(); k++;
	$all_change[k] = [];
	$all_change[k]["name"] = "value_comment";
	$all_change[k]["val"] = $("#value_comment_"+i).val(); k++;
	$all_change[k] = [];
	$all_change[k]["name"] = "value_sales_price";
	$all_change[k]["val"] = $("#value_sales_price_"+i).val(); k++;
	$all_change[k] = [];
	$all_change[k]["name"] = "value_yahoo_sankou_uwadai";
	$all_change[k]["val"] = $("#value_yahoo_sankou_uwadai_"+i).val(); k++;
	$all_change[k] = [];
	$all_change[k]["name"] = "value_description";
	$all_change[k]["val"] = $("#value_description_"+i).val(); k++;
	$all_change[k] = [];
	$all_change[k]["name"] = "value_Destination_selling";
	$all_change[k]["val"] = $("#value_Destination_selling_"+i).val(); k++;
	$all_change[k] = [];
	$all_change[k]["name"] = "value_Finish";
	$all_change[k]["val"] = $("#value_Finish_"+i).val(); k++;
	$all_change[k] = [];
	$all_change[k]["name"] = "value_Discrimination";
	$all_change[k]["val"] = $("#value_Discrimination_"+i).val(); k++;
	$all_change[k] = [];
	$all_change[k]["name"] = "value_accessories";
	$all_change[k]["val"] = $("#value_accessories_"+i).val(); k++;
	$all_change[k] = [];
	$all_change[k]["name"] = "value_price_secret";
	$all_change[k]["val"] = $("#value_price_secret_"+i).val(); k++;
	$all_change[k] = [];
	$all_change[k]["name"] = "value_sales_price_secret";
	$all_change[k]["val"] = $("#value_sales_price_secret_"+i).val(); k++;
	$all_change[k] = [];
	$all_change[k]["name"] = "value_yahoo_color_id";
	$all_change[k]["val"] = $("#value_yahoo_color_id_"+i).val(); k++;
	$all_change[k] = [];
	$all_change[k]["name"] = "value_handle";
	$all_change[k]["val"] = $("#value_handle_"+i).val(); k++;

	$all_change[k] = [];
	$all_change[k]["name"] = "value_priority";
	$all_change[k]["val"] = $("#value_priority_"+i).prop("checked"); k++;
	$all_change[k] = [];
	$all_change[k]["name"] = "value_A_storage";
	$all_change[k]["val"] = $("#value_A_storage_"+i).prop("checked"); k++;
	$all_change[k] = [];
	$all_change[k]["name"] = "value_label_output_flag";
	$all_change[k]["val"] = $("#value_label_output_flag_"+i).prop("checked"); k++;




	$all_change[k] = [];
	$all_change[k]["name"] = "value_country_of_origin";
	$all_change[k]["val"] = $("#value_country_of_origin_"+i).val(); k++;
	$all_change[k] = [];
	$all_change[k]["name"] = "value_zipper";
	$all_change[k]["val"] = $("#value_zipper_"+i).val(); k++;
	$all_change[k] = [];
	$all_change[k]["name"] = "value_designer";
	$all_change[k]["val"] = $("#value_designer_"+i).val(); k++;
	$all_change[k] = [];
	$all_change[k]["name"] = "value_number_of_stones";
	$all_change[k]["val"] = $("#value_number_of_stones_"+i).val(); k++;
	$all_change[k] = [];
	$all_change[k]["name"] = "value_shape_supplement";
	$all_change[k]["val"] = $("#value_shape_supplement_"+i).val(); k++;
	$all_change[k] = [];
	$all_change[k]["name"] = "value_side_gem";
	$all_change[k]["val"] = $("#value_side_gem_"+i).val(); k++;


	$all_change[k] = [];
	$all_change[k]["name"] = "value_product_style";
	$all_change[k]["val"] = $("#value_product_style_"+i).val(); k++;
	$all_change[k] = [];
	$all_change[k]["name"] = "value_toe";
	$all_change[k]["val"] = $("#value_toe_"+i).val(); k++;
	$all_change[k] = [];
	$all_change[k]["name"] = "value_heel";
	$all_change[k]["val"] = $("#value_heel_"+i).val(); k++;
	$all_change[k] = [];
	$all_change[k]["name"] = "value_cloth";
	$all_change[k]["val"] = $("#value_cloth_"+i).val(); k++;
	$all_change[k] = [];
	$all_change[k]["name"] = "value_collar_neck_line";
	$all_change[k]["val"] = $("#value_collar_neck_line_"+i).val(); k++;
	$all_change[k] = [];
	$all_change[k]["name"] = "value_breast";
	$all_change[k]["val"] = $("#value_breast_"+i).val(); k++;
	$all_change[k] = [];
	$all_change[k]["name"] = "value_silhouette";
	$all_change[k]["val"] = $("#value_silhouette_"+i).val(); k++;
	$all_change[k] = [];
	$all_change[k]["name"] = "value_sleeve";
	$all_change[k]["val"] = $("#value_sleeve_"+i).val(); k++;
	$all_change[k] = [];
	$all_change[k]["name"] = "value_amount";
	$all_change[k]["val"] = $("#value_amount_"+i).val(); k++;
	$all_change[k] = [];
	$all_change[k]["name"] = "value_hall_mark";
	$all_change[k]["val"] = $("#value_hall_mark_"+i).val(); k++;
	$all_change[k] = [];
	$all_change[k]["name"] = "value_producing_area";
	$all_change[k]["val"] = $("#value_producing_area_"+i).val(); k++;
	$all_change[k] = [];
	$all_change[k]["name"] = "value_hahakai";
	$all_change[k]["val"] = $("#value_hahakai_"+i).val(); k++;
	$all_change[k] = [];
	$all_change[k]["name"] = "value_effect";
	$all_change[k]["val"] = $("#value_effect_"+i).val(); k++;
	$all_change[k] = [];
	$all_change[k]["name"] = "value_shape";
	$all_change[k]["val"] = $("#value_shape_"+i).val(); k++;
	$all_change[k] = [];
	$all_change[k]["name"] = "value_cutting_style";
	$all_change[k]["val"] = $("#value_cutting_style_"+i).val(); k++;
	$all_change[k] = [];
	$all_change[k]["name"] = "value_chain_type";
	$all_change[k]["val"] = $("#value_chain_type_"+i).val(); k++;
	$all_change[k] = [];
	$all_change[k]["name"] = "value_price_per_gram";
	$all_change[k]["val"] = $("#value_price_per_gram_"+i).val(); k++;
	$all_change[k] = [];
	$all_change[k]["name"] = "value_price_per_parent_stone";
	$all_change[k]["val"] = $("#value_price_per_parent_stone_"+i).val(); k++;
	$all_change[k] = [];
	$all_change[k]["name"] = "value_price_per_aside_stone";
	$all_change[k]["val"] = $("#value_price_per_aside_stone_"+i).val(); k++;


	$all_change[k] = [];
	$all_change[k]["name"] = "value_logo";
	$all_change[k]["val"] = $("#value_logo_"+i).val(); k++;
	$all_change[k] = [];
	$all_change[k]["name"] = "value_parts";
	$all_change[k]["val"] = $("#value_parts_"+i).val(); k++;
	$all_change[k] = [];
	$all_change[k]["name"] = "value_guarantee";
	$all_change[k]["val"] = $("#value_guarantee_"+i).val(); k++;
	$all_change[k] = [];
	$all_change[k]["name"] = "value_plate";
	$all_change[k]["val"] = $("#value_plate_"+i).val(); k++;

	$all_change[k] = [];
	$all_change[k]["name"] = "value_unit";
	$all_change[k]["val"] = $("#value_unit_"+i).val(); k++;



	// console.log($all_change.length);
	for (var aaa = 0; aaa < $all_change.length; aaa++) {
		$name = $all_change[aaa]["name"];
		$val = $all_change[aaa]["val"];
		if(($name == "value_priority") || ($name == "value_A_storage") || ($name == "value_label_output_flag")){
			if($val == true){
				$("[id*="+$name+"]").prop("checked",true);
			}else{
				$("[id*="+$name+"]").prop("checked",false);
			}
		}else if($name == "value_sub_category_id1"){
			$("[id*=value_category_id]").change();
			// $aaa = $name;
			$bbb = $val;
			//$timer = setInterval("subcate_set("+$bbb+")",1000);
		}else{
			$("[id*="+$name+"]").val($val);
		}
	};
}

//END 一括設定処理









//全角→半角　空白削除
function toHalfWidth(strVal){
  var halfVal = strVal.replace(/[！-～]/g,
    function( tmpStr ) {
      // 文字コードをシフト
      return String.fromCharCode( tmpStr.charCodeAt(0) - 0xFEE0 );
    }
  );

  // 文字コードシフトで対応できない文字の変換
  return halfVal.replace(/”/g, "\"")
    .replace(/’/g, "'")
    .replace(/‘/g, "`")
    .replace(/￥/g, "\\")
    .replace(/　/g, " ")
    .replace(/\s/g, "")
    .replace(/〜/g, "~");
}

//全角⇒半角　空白そのまま
function toHalf_space_on(strVal){
  var halfVal = strVal.replace(/[！-～]/g,
    function( tmpStr ) {
      // 文字コードをシフト
      return String.fromCharCode( tmpStr.charCodeAt(0) - 0xFEE0 );
    }
  );

  // 文字コードシフトで対応できない文字の変換
  return halfVal.replace(/”/g, "\"")
    .replace(/’/g, "'")
    .replace(/‘/g, "`")
    .replace(/￥/g, "\\")
    .replace(/　/g, " ")
    .replace(/〜/g, "~");
}








$(document).keydown(function(event){
  // クリックされたキーのコード
  var keyCode = event.keyCode;

	//F1一括設定用のフラグ
	$ikkatsu_time = "";

	//Ctrlキー+F1
    if(event.ctrlKey){
      if(keyCode === 112){
		  if($ikkatsu_time == ""){
	      		console.log("ikkatsu_time "+$ikkatsu_time);
				// 確認メッセージ
				var msg = "編集中のレコード全てに対して、最上段の内容をコピーします。\nよろしいですか？" ;
				// 「はい」を選択した場合
				if( window.confirm( msg ) ) {
					ikkatsu_settei();
					$ikkatsu_time = "on";//フラグ
					return false;
				// 「いいえ」を選択した場合
				} else {
					alert("キャンセルしました。");
					$ikkatsu_time = "on";//フラグ
				}
			}
      }
    }






});//end keydown



</script>

