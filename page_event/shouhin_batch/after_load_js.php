<?
header('Content-Type: text/html; charset=UTF-8');
// print mb_internal_encoding();
?>
<script type="text/javascript">
//====================================================================
//追加、編集した際にセレクタを再読み込みさせるため、js_load関数化
//====================================================================
function js_load(){
	console.log("js_load");
};

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
	$all_change[k]["name"] = "value_title";
	$all_change[k]["val"] = $("#value_title_"+i).val(); k++;
	$all_change[k] = [];
	$all_change[k]["name"] = "value_price";
	$all_change[k]["val"] = $("#value_price_"+i).val(); k++;
	$all_change[k] = [];
	$all_change[k]["name"] = "value_sales_price";
	$all_change[k]["val"] = $("#value_sales_price_"+i).val(); k++;
	$all_change[k] = [];
	$all_change[k]["name"] = "value_nyuukin_price";
	$all_change[k]["val"] = $("#value_nyuukin_price_"+i).val(); k++;
	$all_change[k] = [];
	$all_change[k]["name"] = "value_comment";
	$all_change[k]["val"] = $("#value_comment_"+i).val(); k++;
	$all_change[k] = [];
	$all_change[k]["name"] = "value_memo";
	$all_change[k]["val"] = $("#value_memo_"+i).val(); k++;
	$all_change[k] = [];
	$all_change[k]["name"] = "value_status";
	$all_change[k]["val"] = $("#value_status_"+i).val(); k++;


	// console.log($all_change.length);
	for (var aaa = 0; aaa < $all_change.length; aaa++) {
		$name = $all_change[aaa]["name"];
		$val = $all_change[aaa]["val"];
		$("[id*="+$name+"]").val($val);
	};
}

//END 一括設定処理







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
