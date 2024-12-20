<?
//ログイン認証
include_once $_SERVER["DOCUMENT_ROOT"]."/include/login/login.php";
?>
	<div class="title">
		YAHOOカテゴリIDセレクト
	</div>


	<!-- <input id="yahoo_auto_1" type="button" value="自動入力1">
	<input id="yahoo_auto_2" type="button" value="自動入力2">
	<input id="yahoo_auto_3" type="button" value="自動入力3">
	<input id="yahoo_auto_4" type="button" value="自動入力4">
	<input id="yahoo_auto_5" type="button" value="自動入力5">
	<input id="yahoo_auto_6" type="button" value="自動入力6">
	<input id="yahoo_auto_7" type="button" value="自動入力7">
	<input id="yahoo_auto_8" type="button" value="自動入力8">
	<input id="yahoo_auto_9" type="button" value="自動入力9">
	<input id="yahoo_auto_10" type="button" value="自動入力10"> -->

	<br>

	<select id="value_yahoo_dir_1_1">
	<?
		$query = " SELECT distinct dir_1 FROM yahoo_all_dir ";

		$sql = mysql_query('SET NAMES utf8');
		$sql = mysql_query($query);
		while ($result = mysql_fetch_assoc($sql)) {
			$res = $result["dir_1"];
			print "<option value='{$res}'>{$res}</option>";
		}

	?>
	</select>
	<select id="value_yahoo_dir_2_1"></select>
	<select id="value_yahoo_dir_3_1"></select>
	<select id="value_yahoo_dir_4_1"></select>
	<select id="value_yahoo_dir_5_1"></select>
	<select id="value_yahoo_dir_6_1"></select>
	<select id="value_yahoo_dir_7_1"></select>
	<select id="value_yahoo_dir_8_1"></select>
	<select id="value_yahoo_dir_9_1"></select>
	<select id="value_yahoo_dir_10_1"></select>




	<input id='yahoo_id_res_btn' type='button' value='IDを確認する'>

	<div class="res_ttl">
		YAHOOカテゴリID結果欄
	</div>
	<div id="edit1_yahoo_dir_result_0"></div>
	<div id="value_yahoo_dir_result_1"></div>


<script type="text/javascript">
//+++++++++++++++++++++++++++++++
//yahooディレクトリ連携
//+++++++++++++++++++++++++++++++
var id_value_yahoo_dir_1_1 = $("#value_yahoo_dir_1_1");
var id_value_yahoo_dir_2_1 = $("#value_yahoo_dir_2_1");
var id_value_yahoo_dir_3_1 = $("#value_yahoo_dir_3_1");
var id_value_yahoo_dir_4_1 = $("#value_yahoo_dir_4_1");
var id_value_yahoo_dir_5_1 = $("#value_yahoo_dir_5_1");
var id_value_yahoo_dir_6_1 = $("#value_yahoo_dir_6_1");
var id_value_yahoo_dir_7_1 = $("#value_yahoo_dir_7_1");
var id_value_yahoo_dir_8_1 = $("#value_yahoo_dir_8_1");
var id_value_yahoo_dir_9_1 = $("#value_yahoo_dir_9_1");
var id_value_yahoo_dir_10_1 = $("#value_yahoo_dir_10_1");


id_value_yahoo_dir_1_1.change(function() {
	yahoo_dir_sel_make(1);
	id_value_yahoo_dir_3_1.html("");
	id_value_yahoo_dir_4_1.html("");
	id_value_yahoo_dir_5_1.html("");
	id_value_yahoo_dir_6_1.html("");
	id_value_yahoo_dir_7_1.html("");
	id_value_yahoo_dir_8_1.html("");
	id_value_yahoo_dir_9_1.html("");
	id_value_yahoo_dir_10_1.html("");
});
id_value_yahoo_dir_2_1.change(function() {
	yahoo_dir_sel_make(2);
});
id_value_yahoo_dir_3_1.change(function() {
	yahoo_dir_sel_make(3);
});
id_value_yahoo_dir_4_1.change(function() {
	yahoo_dir_sel_make(4);
});
id_value_yahoo_dir_5_1.change(function() {
	yahoo_dir_sel_make(5);
});
id_value_yahoo_dir_6_1.change(function() {
	yahoo_dir_sel_make(6);
});
id_value_yahoo_dir_7_1.change(function() {
	yahoo_dir_sel_make(7);
});
id_value_yahoo_dir_8_1.change(function() {
	yahoo_dir_sel_make(8);
});
id_value_yahoo_dir_9_1.change(function() {
	yahoo_dir_sel_make(9);
});


function yahoo_dir_sel_make(num){
	if(num == 8){
		id_value_yahoo_dir_10_1.val("");
	}
	if(num == 7){
		id_value_yahoo_dir_9_1.val("");
		id_value_yahoo_dir_10_1.val("");
	}
	if(num == 6){
		id_value_yahoo_dir_8_1.val("");
		id_value_yahoo_dir_9_1.val("");
		id_value_yahoo_dir_10_1.val("");
	}
	if(num == 5){
		id_value_yahoo_dir_7_1.val("");
		id_value_yahoo_dir_8_1.val("");
		id_value_yahoo_dir_9_1.val("");
		id_value_yahoo_dir_10_1.val("");
	}
	if(num == 4){
		id_value_yahoo_dir_6_1.val("");
		id_value_yahoo_dir_7_1.val("");
		id_value_yahoo_dir_8_1.val("");
		id_value_yahoo_dir_9_1.val("");
		id_value_yahoo_dir_10_1.val("");
	}
	if(num == 3){
		id_value_yahoo_dir_5_1.val("");
		id_value_yahoo_dir_6_1.val("");
		id_value_yahoo_dir_7_1.val("");
		id_value_yahoo_dir_8_1.val("");
		id_value_yahoo_dir_9_1.val("");
		id_value_yahoo_dir_10_1.val("");
	}
	if(num == 2){
		id_value_yahoo_dir_4_1.val("");
		id_value_yahoo_dir_5_1.val("");
		id_value_yahoo_dir_6_1.val("");
		id_value_yahoo_dir_7_1.val("");
		id_value_yahoo_dir_8_1.val("");
		id_value_yahoo_dir_9_1.val("");
		id_value_yahoo_dir_10_1.val("");
	}
	if(num == 1){
		id_value_yahoo_dir_3_1.val("");
		id_value_yahoo_dir_4_1.val("");
		id_value_yahoo_dir_5_1.val("");
		id_value_yahoo_dir_6_1.val("");
		id_value_yahoo_dir_7_1.val("");
		id_value_yahoo_dir_8_1.val("");
		id_value_yahoo_dir_9_1.val("");
		id_value_yahoo_dir_10_1.val("");
	}
	var dir_1_sel = id_value_yahoo_dir_1_1.val();
	var dir_2_sel = id_value_yahoo_dir_2_1.val();
	var dir_3_sel = id_value_yahoo_dir_3_1.val();
	var dir_4_sel = id_value_yahoo_dir_4_1.val();
	var dir_5_sel = id_value_yahoo_dir_5_1.val();
	var dir_6_sel = id_value_yahoo_dir_6_1.val();
	var dir_7_sel = id_value_yahoo_dir_7_1.val();
	var dir_8_sel = id_value_yahoo_dir_8_1.val();
	var dir_9_sel = id_value_yahoo_dir_9_1.val();
	var dir_10_sel = id_value_yahoo_dir_10_1.val();

$.ajaxSetup({
beforeSend: function(xhr){
xhr.overrideMimeType("text/html;charset=utf-8");
}
});
if(num == 1){
	var param = "&y_dir_1="+dir_1_sel;
}else if(num == 2){
	var param = "&y_dir_1="+dir_1_sel+"&y_dir_2="+dir_2_sel;
}else if(num == 3){
	var param = "&y_dir_1="+dir_1_sel+"&y_dir_2="+dir_2_sel+"&y_dir_3="+dir_3_sel;
}else if(num == 4){
	var param = "&y_dir_1="+dir_1_sel+"&y_dir_2="+dir_2_sel+"&y_dir_3="+dir_3_sel+"&y_dir_4="+dir_4_sel;
}else if(num == 5){
	var param = "&y_dir_1="+dir_1_sel+"&y_dir_2="+dir_2_sel+"&y_dir_3="+dir_3_sel+"&y_dir_4="+dir_4_sel+"&y_dir_5="+dir_5_sel;
}else if(num == 6){
	var param = "&y_dir_1="+dir_1_sel+"&y_dir_2="+dir_2_sel+"&y_dir_3="+dir_3_sel+"&y_dir_4="+dir_4_sel+"&y_dir_5="+dir_5_sel+"&y_dir_6="+dir_6_sel;
}else if(num == 7){
	var param = "&y_dir_1="+dir_1_sel+"&y_dir_2="+dir_2_sel+"&y_dir_3="+dir_3_sel+"&y_dir_4="+dir_4_sel+"&y_dir_5="+dir_5_sel+"&y_dir_6="+dir_6_sel+"&y_dir_7="+dir_7_sel;
}else if(num == 8){
	var param = "&y_dir_1="+dir_1_sel+"&y_dir_2="+dir_2_sel+"&y_dir_3="+dir_3_sel+"&y_dir_4="+dir_4_sel+"&y_dir_5="+dir_5_sel+"&y_dir_6="+dir_6_sel+"&y_dir_7="+dir_7_sel+"&y_dir_8="+dir_8_sel;
}else if(num == 9){
	var param = "&y_dir_1="+dir_1_sel+"&y_dir_2="+dir_2_sel+"&y_dir_3="+dir_3_sel+"&y_dir_4="+dir_4_sel+"&y_dir_5="+dir_5_sel+"&y_dir_6="+dir_6_sel+"&y_dir_7="+dir_7_sel+"&y_dir_8="+dir_8_sel+"&y_dir_9="+dir_9_sel;
}

	$("#value_yahoo_dir_"+(num+1)+"_1").load("/include/ec_dir/yahoo_dir_get.php?change="+num+param);

}


//+++++++++++++++++++++++++++++++
//END yahooディレクトリ連携
//+++++++++++++++++++++++++++++++




//yahooディレクトリ計算処理
var id_edit1_yahoo_dir_result_0 = $("#edit1_yahoo_dir_result_0");
id_edit1_yahoo_dir_result_0.prepend("<div id='yahoo_dir_load_area'></div><div id='yahoo_teigi_load_area'></div><div id='yahoo_teigi_load_area'></div>")

var id_value_yahoo_dir_result_1 = $("#value_yahoo_dir_result_1");
var id_yahoo_dir_load_area = $("#yahoo_dir_load_area");
var y_dir_1 = "";
var y_dir_2 = "";
var y_dir_3 = "";
var y_dir_4 = "";
var y_dir_5 = "";
var y_dir_6 = "";
var y_dir_7 = "";
var y_dir_8 = "";
var y_dir_9 = "";
var y_dir_10 = "";

	$("#yahoo_id_res_btn").click(function() {
		y_dir_1 = $("#value_yahoo_dir_1_1").val();
		y_dir_2 = $("#value_yahoo_dir_2_1").val();
		y_dir_3 = $("#value_yahoo_dir_3_1").val();
		y_dir_4 = $("#value_yahoo_dir_4_1").val();
		y_dir_5 = $("#value_yahoo_dir_5_1").val();
		y_dir_6 = $("#value_yahoo_dir_6_1").val();
		y_dir_7 = $("#value_yahoo_dir_7_1").val();
		y_dir_8 = $("#value_yahoo_dir_8_1").val();
		y_dir_9 = $("#value_yahoo_dir_9_1").val();
		y_dir_10 = $("#value_yahoo_dir_10_1").val();

		id_yahoo_dir_load_area.load("/include/ec_dir/yahoo_dir_select.php?y_dir_1="+y_dir_1+"&y_dir_2="+y_dir_2+"&y_dir_3="+y_dir_3+"&y_dir_4="+y_dir_4+"&y_dir_5="+y_dir_5+"&y_dir_6="+y_dir_6+"&y_dir_7="+y_dir_7+"&y_dir_8="+y_dir_8+"&y_dir_9="+y_dir_9+"&y_dir_10="+y_dir_10,function(){
			var result_id = $("#yahoo_result_id").text();
			id_value_yahoo_dir_result_1.val(result_id);
			var res_id_count = $("#yahoo_res_id_count").text();
			if(res_id_count == 1){
				if(result_id != ""){
				}else{
					alert("選択が完了してないか、該当するディレクトリIDはありません。");
				}
			}else{
				//alert("選択が完了してません。\n残りが空欄だけの場合でも、最後まで入力してください。");
				id_value_yahoo_dir_result_1.val("");
			}
		});
	});

//END yahooディレクトリ計算処理




id_value_yahoo_dir_1_1.change();

</script>



<?include $_SERVER["DOCUMENT_ROOT"]."/include/ec_dir/yahoo_dir_teigi.php";?>
