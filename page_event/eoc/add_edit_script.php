<?//郵便番号自動入力ファイル取得?>
<script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
<script src="/include/js/kanaTextExtension.js" charset="UTF-8"></script>
<style type="text/css">
	span[id*='edit1_mail'] {
	    width: 100%;
	    max-width: 100%;
	}
</style>
<script type="text/javascript">
function js_load(){
	console.log("js_load");


//D在用スクリプト
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

}


//////////////////////////////////////////////////////////////////////////////////////////////
//            D在
//////////////////////////////////////////////////////////////////////////////////////////////

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
	$da_payoutother = Math.floor($val_DA_UNIT_PRICE_UNPLUG*$val_DA_WEIGHT*0.97*1.08);
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
//////////////////////////////////////////////////////////////////////////////////////////////
//            D在 END
//////////////////////////////////////////////////////////////////////////////////////////////



$(window).load(function(){
	$("button[id*='revertall_edited']").click();

	$("#value_address1_1").focus(function(){
	AjaxZip3.zip2addr('value_zip1_1','value_zip2_1','value_address1_1','value_address2_1','value_address3_1');
	});



	$("#value_wareki_1").bind("keyup", function(){
	              CSeireki();
	});
	function CSeireki() {

	var wa, nen, base, seireki,tuki,hi;
	//var formCSeireki = $("Eoc");
	/**************************************************
	マスターのデータを取得する  和暦項目を取得して表示
	***************************************************/
	wa  = $("#value_wareki_1").val();
	// 西暦を調べる
	nen = wa.substring(1,3);
	tuki = wa.substring(3,5);
	hi = wa.substring(5,7);
	wa = wa.substring(0,1);
	//alert("和暦は"+wa);
	switch (wa) {
	  case "M": base = 1867; break;
	  case "T": base = 1911; break;
	  case "S": base = 1925; break;
	  case "H": base = 1988; break;
	}
	//formCSeireki.b1.value = "
	seireki = base + parseInt(nen);
	//alert("年号は"+seireki);

	/***************************************************
	データを振り分け
	****************************************************/
	jQuery("#value_b1_1").val(seireki);
	jQuery("#value_b2_1").val(tuki);
	jQuery("#value_b3_1").val(hi);
	jQuery("#value_birth_day_1").val(seireki+"-"+tuki+"-"+hi);
	//      formCSeireki.TextBox3.value = parseInt(2023) - parseInt(seireki);

	var birthyear=seireki;
	var birthmonth=tuki;
	var birthday=hi;
	var age=0;
	now = new Date();
	y=now.getYear();
	m=now.getMonth()+1;
	d=now.getDate();

	  if(y<1900) {y=y+1900;}
	  if(m < birthmonth){age=y-birthyear-1}
	  if(m > birthmonth){age=y-birthyear}
	  if(m == birthmonth){
	  if(d < birthday){age=y-birthyear-1}
	  else{age=y-birthyear}
	  }
	//document.write("年齢："+age+"歳");
	jQuery("#value_age_1").val(age);
	//formCSeireki.TextBox3.value = age;
	//alert("年齢："+age+"歳");
	}


	$("#value_b3_1").bind("keyup", function(){
	              CWareki();
	});
	/**************************************************************************************
	和暦変換
	***************************************************************************************/

	 function CWareki() {
	                var n, nengou, base;
	                //var formCWareki = document.Eoc;//$("Eoc");
	//jQuery("#value_b1_1").val(seireki);
	//jQuery("#value_b2_1").val(tuki);
	//jQuery("#value_b3_1").val(hi);
	//jQuery("#value_birth_day_1").val(seireki+"-"+tuki+"-"+hi);
	                n = jQuery("#value_b1_1").val();
	                if (n == "") return;
	                n = parseInt(n);
	                if(n <= 0) return;
	                if (n < 1868) {
	                        nengou = "西暦";
	                        base = 1;
	                }
	                else if ((1868 <= n) && (n <= 1911)) {
	                        nengou = "M";
	                        base = 1968;
	                }
	                else if ((1912 <= n) && (n <= 1925)) {
	                        nengou = "T";
	                        base = 1912;
	                }
	                else if ((1926 <= n) && (n <= 1988)) {
	                        nengou = "S";
	                        base = 1926;
	                }
	                else {
	                        nengou = "H";
	                        base = 1989;
	                }
	                                var bases = n - base + 1;
	                                if(bases < 10){
	                        bbb = nengou + "0" + (n - base + 1) + "" + jQuery("#value_b2_1").val() + "" + jQuery("#value_b3_1").val();
	                jQuery("#value_wareki_1").val(bbb);
	          }else{
	                        bbb = nengou + "" + (n - base + 1) + "" + jQuery("#value_b2_1").val() + "" + jQuery("#value_b3_1").val();
	                jQuery("#value_wareki_1").val(bbb);
	          }
	               CSeireki();
	}










})

</script>
