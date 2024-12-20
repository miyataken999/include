<?
//ログイン認証
include_once $_SERVER["DOCUMENT_ROOT"]."/include/login/login.php";
?>
	<div class="title">
		楽天ディレクトリIDセレクト
	</div>


	<input id="raku_auto_1" type="button" value="自動入力1">
	<input id="raku_auto_2" type="button" value="自動入力2">
	<input id="raku_auto_3" type="button" value="自動入力3">
	<input id="raku_auto_4" type="button" value="自動入力4">
	<input id="raku_auto_5" type="button" value="自動入力5">

	<br>

	<select id="value_raku_dir_1_1">
	<?
		$query = " SELECT distinct dir_1 FROM raku_all_dir ";

		$sql = mysql_query('SET NAMES utf8');
		$sql = mysql_query($query);
		while ($result = mysql_fetch_assoc($sql)) {
			$res = $result["dir_1"];
			print "<option value='{$res}'>{$res}</option>";
		}

	?>
	</select>
	<select id="value_raku_dir_2_1"></select>
	<select id="value_raku_dir_3_1"></select>
	<select id="value_raku_dir_4_1"></select>
	<select id="value_raku_dir_5_1"></select>




	<input id='id_res_btn' type='button' value='IDを確認する'>

	<div class="res_ttl">
		楽天ディレクトリID結果欄
	</div>
	<div id="edit1_raku_dir_result_0"></div>
	<div id="value_raku_dir_result_1"></div>


<script type="text/javascript">
//+++++++++++++++++++++++++++++++
//楽天ディレクトリ連携
//+++++++++++++++++++++++++++++++
var id_value_raku_dir_1_1 = $("#value_raku_dir_1_1");
var id_value_raku_dir_2_1 = $("#value_raku_dir_2_1");
var id_value_raku_dir_3_1 = $("#value_raku_dir_3_1");
var id_value_raku_dir_4_1 = $("#value_raku_dir_4_1");
var id_value_raku_dir_5_1 = $("#value_raku_dir_5_1");


id_value_raku_dir_1_1.change(function() {
	dir_sel_make(1);
	id_value_raku_dir_3_1.html("");
	id_value_raku_dir_4_1.html("");
	id_value_raku_dir_5_1.html("");
});
id_value_raku_dir_2_1.change(function() {
	dir_sel_make(2);
});
id_value_raku_dir_3_1.change(function() {
	dir_sel_make(3);
});
id_value_raku_dir_4_1.change(function() {
	dir_sel_make(4);
});


function dir_sel_make(num){
	if(num == 3){
		id_value_raku_dir_5_1.val("");
	}
	if(num == 2){
		id_value_raku_dir_4_1.val("");
		id_value_raku_dir_5_1.val("");
	}
	if(num == 1){
		id_value_raku_dir_3_1.val("");
		id_value_raku_dir_4_1.val("");
		id_value_raku_dir_5_1.val("");
	}
	var dir_1_sel = id_value_raku_dir_1_1.val();
	var dir_2_sel = id_value_raku_dir_2_1.val();
	var dir_3_sel = id_value_raku_dir_3_1.val();
	var dir_4_sel = id_value_raku_dir_4_1.val();
	var dir_5_sel = id_value_raku_dir_5_1.val();

$.ajaxSetup({
beforeSend: function(xhr){
xhr.overrideMimeType("text/html;charset=utf-8");
}
});
if(num == 1){
	var param = "&r_dir_1="+dir_1_sel;
}else if(num == 2){
	var param = "&r_dir_1="+dir_1_sel+"&r_dir_2="+dir_2_sel;
}else if(num == 3){
	var param = "&r_dir_1="+dir_1_sel+"&r_dir_2="+dir_2_sel+"&r_dir_3="+dir_3_sel;
}else if(num == 4){
	var param = "&r_dir_1="+dir_1_sel+"&r_dir_2="+dir_2_sel+"&r_dir_3="+dir_3_sel+"&r_dir_4="+dir_4_sel;
}

	$("#value_raku_dir_"+(num+1)+"_1").load("/include/ec_dir/raku_dir_get.php?change="+num+param);

}


//+++++++++++++++++++++++++++++++
//END 楽天ディレクトリ連携
//+++++++++++++++++++++++++++++++




//楽天ディレクトリ計算処理
var id_edit1_raku_dir_result_0 = $("#edit1_raku_dir_result_0");
id_edit1_raku_dir_result_0.prepend("<div id='raku_dir_load_area'></div><div id='raku_teigi_load_area'></div><div id='yahoo_teigi_load_area'></div>")

var id_value_raku_dir_result_1 = $("#value_raku_dir_result_1");
var id_raku_dir_load_area = $("#raku_dir_load_area");
var r_dir_1 = "";
var r_dir_2 = "";
var r_dir_3 = "";
var r_dir_4 = "";
var r_dir_5 = "";

	$("#id_res_btn").click(function() {
		r_dir_1 = $("#value_raku_dir_1_1").val();
		r_dir_2 = $("#value_raku_dir_2_1").val();
		r_dir_3 = $("#value_raku_dir_3_1").val();
		r_dir_4 = $("#value_raku_dir_4_1").val();
		r_dir_5 = $("#value_raku_dir_5_1").val();

		id_raku_dir_load_area.load("/include/ec_dir/raku_dir_select.php?r_dir_1="+r_dir_1+"&r_dir_2="+r_dir_2+"&r_dir_3="+r_dir_3+"&r_dir_4="+r_dir_4+"&r_dir_5="+r_dir_5,function(){
			var result_id = $("#result_id").text();
			id_value_raku_dir_result_1.val(result_id);
			var res_id_count = $("#res_id_count").text();
			if(res_id_count == 1){
				if(result_id != ""){
					$("#tag_check_area").load("/include/shuppin/rakuten/tag_get/get.php?genreId="+$("#result_id").text()+"&product_id="+$("#seq_td").text());
				}else{
					alert("選択が完了してないか、該当するディレクトリIDはありません。");
				}
			}else{
				//alert("選択が完了してません。\n残りが空欄だけの場合でも、最後まで入力してください。");
				id_value_raku_dir_result_1.val("");
				$("#tag_check_area").html("");
			}
		});
	});

//END 楽天ディレクトリ計算処理



//----------------------------------------------
//楽天ディレクトリ自動入力
//----------------------------------------------

$.ajaxSetup({
beforeSend: function(xhr){
xhr.overrideMimeType("text/html;charset=utf-8");
}
});
// console.log("aaa");
// $("#raku_teigi_load_area").load("/include/raku_dir/raku_dir_teigi.php");
// $("#yahoo_teigi_load_area").load("/include/yahoo_dir/yahoo_dir_teigi.php");


//----------------------------------------------
//END 楽天ディレクトリ自動入力
//----------------------------------------------

</script>

<?include $_SERVER["DOCUMENT_ROOT"]."/include/ec_dir/raku_dir_teigi.php";?>
