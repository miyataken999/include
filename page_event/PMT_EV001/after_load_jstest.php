<?
header('Content-Type: text/html; charset=UTF-8');
// print mb_internal_encoding();
?>
<script type="text/javascript">
//====================================================================
//追加、編集した際にセレクタを再読み込みさせるため、js_load関数化
//====================================================================
function js_load(){

	$("[id*='value_DA_WEIGHT_'] , [id*='value_DA_THESPECIFICATIONSLOSSES']").keyup(function(){
			//idの固有連番を取得、抜き出す
			$this_id = $(this).attr("id");
			$this_id = $this_id.split("_");
			$this_id = $this_id[$this_id.length-1];
			keisan_DA_PER_CARAT($this_id);
	});
	$("[id*='value_DA_RATE_']").keyup(function(){
			//idの固有連番を取得、抜き出す
			$this_id = $(this).attr("id");
			$this_id = $this_id.split("_");
			$this_id = $this_id[$this_id.length-1];
			keisan_DA_RAPA($this_id);
	});
	$("[id*='value_DA_UNIT_PRICE_UNPLUG_']").keyup(function(){
			//idの固有連番を取得、抜き出す
			$this_id = $(this).attr("id");
			$this_id = $this_id.split("_");
			$this_id = $this_id[$this_id.length-1];
			keisan_DA_PAYOUTOTHER($this_id);
	});


	$("[id*='value_DA_RATE_'] , [id*='value_DA_INTEREST_1_'] , [id*='value_DA_PAYOUTOTHER_'] , [id*='value_DA_GROSSPROFIT_'] , [id*='value_DA_UNIT_PRICE_UNPLUG_']").keyup(function(){
			//idの固有連番を取得、抜き出す
			$this_id = $(this).attr("id");
			$this_id = $this_id.split("_");
			$this_id = $this_id[$this_id.length-1];
			keisan_rapa_b($this_id);
	});





};//-------------end js_load function----------------

/********************************************************
PER_CRAFTの計算式
 DA_PER_CARAT/(DA_F.RAPA*DA_RATE)
*********************************************************/
function keisan_DA_PER_CARAT(id_num){
	$val_DA_THESPECIFICATIONSLOSSES = $("#value_DA_THESPECIFICATIONSLOSSES_"+id_num).val();
	$val_DA_WEIGHT = $("#value_DA_WEIGHT_"+id_num).val();
	$da_per_carat = Math.floor(Number($val_DA_THESPECIFICATIONSLOSSES)/Number($val_DA_WEIGHT)/1.08);
	//切り捨て
	$("#value_DA_PER_CARAT_"+id_num).val(Math.floor($da_per_carat/100)*100);
};

/********************************************************
ＤＡ_FPARA の計算式
  　DA_PER_CARAT/(DA_F.RAPA*DA_RATE)
*********************************************************/
//rapa_A計算
function keisan_DA_RAPA(id_num) {
	$val_DA_PER_CARAT = $("#value_DA_PER_CARAT_"+id_num).val();
	$val_DA_FRAPA = $("#value_DA_FRAPA_"+id_num).val();
	$val_DA_RATE = $("#value_DA_RATE_"+id_num).val();
	$da_rapa = Number($val_DA_PER_CARAT)/(Number($val_DA_FRAPA)*Number($val_DA_RATE));
	$("#value_DA_RAPA_"+id_num).val($da_rapa.toFixed( 4 ));
};

/***********************************************************
//払い出し他  DA_UNIT_PRICE @ UNPLUG*DA_WEIGHT*0.97*1.08
************************************************************/
function keisan_DA_PAYOUTOTHER(id_num) {
	$val_DA_UNIT_PRICE_UNPLUG = $("#value_DA_UNIT_PRICE_UNPLUG_"+id_num).val();
	$val_DA_WEIGHT = $("#value_DA_WEIGHT_"+id_num).val();
	$val_DA_CUT = $("#value_DA_CUT_"+id_num).val();
	$da_payoutother = Math.floor($val_DA_UNIT_PRICE_UNPLUG*$val_DA_WEIGHT*0.97);
	if($val_DA_WEIGHT < 1){
		$DA_WEIGHT_1 = "under";
	}else{
		$DA_WEIGHT_1 = "over";
	}
	if(
		($val_DA_CUT == "3EXHC") ||
		($val_DA_CUT == "EXCELLENT") ||
		($val_DA_CUT == "VERY GOOD") ||
		($val_DA_CUT == "GOOD") ||
		($val_DA_CUT == "FAIR") ||
		($val_DA_CUT == "POOR") ||
		($val_DA_CUT == "3EX") ||
		($val_DA_CUT == "3EXC") ||
		($val_DA_CUT == "EXHC") ||
		($val_DA_CUT == "3EXH")
		){
		if($DA_WEIGHT_1 == "under"){
			$da_payoutother = $da_payoutother-1500;
		}else{
			$da_payoutother = $da_payoutother-5000;
		}
	}else{
		if($DA_WEIGHT_1 == "under"){
			$da_payoutother = $da_payoutother-1000;
		}else{
			$da_payoutother = $da_payoutother-4000;
		}
	}
	$("#value_DA_PAYOUTOTHER_"+id_num).val($da_payoutother);
};



/************************************************************
rapa_B の計算　DA_UNIT_PRICE UNPLUG	/	(DA_F.RAPA*DA_RATE)
*************************************************************/
function keisan_rapa_b(id_num) {
	$val_DA_UNIT_PRICE_UNPLUG = $("#value_DA_UNIT_PRICE_UNPLUG_"+id_num).val();
	$val_DA_FRAPA = $("#value_DA_FRAPA_"+id_num).val();
	$val_DA_RATE = $("#value_DA_RATE_"+id_num).val();
	console.log("val_DA_UNIT_PRICE_UNPLUG "+$val_DA_UNIT_PRICE_UNPLUG);
	console.log("val_DA_FRAPA "+$val_DA_FRAPA);
	console.log("val_DA_RATE "+$val_DA_RATE);

/*************************************************************
利１
**************************************************************/
//利益１
	$val_DA_RAPAB = $val_DA_UNIT_PRICE_UNPLUG/($val_DA_FRAPA*$val_DA_RATE);
	$("#value_DA_RAPAB_"+id_num).val($val_DA_RAPAB.toFixed(4));
	/***************************************************************
	仕入れ額が０以上の場合計算
	****************************************************************/
	$val_DA_THE_SPECIFICATIONS_LOSSES = $("#value_DA_THESPECIFICATIONSLOSSES_"+id_num).val();
	$id_DA_INTEREST_1 = $("#value_DA_INTEREST_1_"+id_num);
	$val_DA_PAYOUTOTHER = $("#value_DA_PAYOUTOTHER_"+id_num).val();
	$id_DA_GROSSPROFIT = $("#value_DA_GROSSPROFIT_"+id_num);



	if($val_DA_THE_SPECIFICATIONS_LOSSES>0){
		//小数点第３位以下切り捨て
	        //ctlDA_RAPAB.val(b.toFixed(4));
		//利益１
	        $id_DA_INTEREST_1.val(Math.floor($val_DA_PAYOUTOTHER-$val_DA_THE_SPECIFICATIONS_LOSSES));
		//粗利ss
		$val_id_DA_INTEREST_1 = $id_DA_INTEREST_1.val();
		console.log($val_id_DA_INTEREST_1);
		console.log($val_DA_PAYOUTOTHER);
		var b = $val_id_DA_INTEREST_1/$val_DA_PAYOUTOTHER;
		//小数点第４今で表示
	   $id_DA_GROSSPROFIT.val(b.toFixed(4));

	}else{
		//小数点第３位以下切り捨て
	        //ctlDA_RAPAB.val();
		//利益１
	        $id_DA_INTEREST_1.val("");
	}



};






function ikkatsu_settei(){
	console.log("ikkatsu_settei");
	//最上段のid取得
	$sc_top = 10000;
	$(".bs-sidebar-main [id*=value_DA_STATUS_]").each(function(v,vv){
		$sc_top_now = $(vv).scrollTop();
		if($sc_top_now < $sc_top){
			$sc_top = $sc_top_now;
			$default_id = $(vv).attr("id");
			$default_id = $default_id.replace("value_DA_STATUS_","");
		}
	});

	$da_st = $("#value_DA_STATUS_"+$default_id).val();
	$da_st_2 = $("#value_DA_STATUS_2_"+$default_id).val();
	$(".bs-sidebar-main [id*=value_DA_STATUS_]").val($da_st);
	$(".bs-sidebar-main [id*=value_DA_STATUS_2_]").val($da_st_2);

}

/*********************************************************************
//ST1一括設定処理
**********************************************************************/

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
				var msg = "編集中のレコード全てに対して、最上段のST1の内容をコピーします。\nよろしいですか？" ;
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
