





































































	

Runner.pages.PageSettings.addPageEvent('dia', Runner.pages.constants.PAGE_LIST, "afterPageReady", function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = '__31';
	
	if ( !pageObj.buttonEventBefore['__31'] ) {
		pageObj.buttonEventBefore['__31'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row ) {		
jQuery("#searchButton1").click();
// Put your code here.
params["txt"] = "searc";
ctrl.setMessage("Sending request to server...");
 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['__31'] ) {
		pageObj.buttonEventAfter['__31'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row ) {
// Put your code here.
var message = result["txt"] + " !!!";
ctrl.setMessage(message);

		}
	}
	
	$('a[id="__31"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "__31" + "_" + Runner.genId();
		
		// create object
		var button___31 = new Runner.form.Button({
			id: this.id ,
			btnName: "__31"
		});
		
		// init
		button___31.init( {args: [ pageObj, proxy, pageid ]} );
	});
});


	

Runner.pages.PageSettings.addPageEvent('dia', Runner.pages.constants.PAGE_LIST, "afterPageReady", function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = '___51';
	
	if ( !pageObj.buttonEventBefore['___51'] ) {
		pageObj.buttonEventBefore['___51'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row ) {		
// Put your code here.
jQuery("#showAll1").click();
params["txt"] = "success";
ctrl.setMessage("Sending request to server...");
 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['___51'] ) {
		pageObj.buttonEventAfter['___51'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row ) {
// Put your code here.
var message = result["txt"] + " !!!";
ctrl.setMessage(message);

		}
	}
	
	$('a[id="___51"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "___51" + "_" + Runner.genId();
		
		// create object
		var button____51 = new Runner.form.Button({
			id: this.id ,
			btnName: "___51"
		});
		
		// init
		button____51.init( {args: [ pageObj, proxy, pageid ]} );
	});
});













	

Runner.pages.PageSettings.addPageEvent('dia', Runner.pages.constants.PAGE_LIST, "afterPageReady", function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = '_____411';
	
	if ( !pageObj.buttonEventBefore['_____411'] ) {
		pageObj.buttonEventBefore['_____411'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row ) {		
// Put your code here.
params["txt"] = "Hello";
ctrl.setMessage("Sending request to server...");
 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['_____411'] ) {
		pageObj.buttonEventAfter['_____411'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row ) {
// Put your code here.
var message = result["txt"] + " !!!";
ctrl.setMessage(message);

		}
	}
	
	$('a[id="_____411"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "_____411" + "_" + Runner.genId();
		
		// create object
		var button______411 = new Runner.form.Button({
			id: this.id ,
			btnName: "_____411"
		});
		
		// init
		button______411.init( {args: [ pageObj, proxy, pageid ]} );
	});
});


































































	

Runner.pages.PageSettings.addPageEvent('dia', Runner.pages.constants.PAGE_LIST, "afterPageReady", function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'New_Button2';
	
	if ( !pageObj.buttonEventBefore['New_Button2'] ) {
		pageObj.buttonEventBefore['New_Button2'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row ) {		
// Put your code here.
params["txt"] = "Hello";
ctrl.setMessage("Sending request to server...");
 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['New_Button2'] ) {
		pageObj.buttonEventAfter['New_Button2'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row ) {
// Put your code here.
var message = result["txt"] + " !!!";
ctrl.setMessage(message);

		}
	}
	
	$('a[id="New_Button2"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "New_Button2" + "_" + Runner.genId();
		
		// create object
		var button_New_Button2 = new Runner.form.Button({
			id: this.id ,
			btnName: "New_Button2"
		});
		
		// init
		button_New_Button2.init( {args: [ pageObj, proxy, pageid ]} );
	});
});









	

Runner.pages.PageSettings.addPageEvent('dia', Runner.pages.constants.PAGE_LIST, "afterPageReady", function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = '_____27';
	
	if ( !pageObj.buttonEventBefore['_____27'] ) {
		pageObj.buttonEventBefore['_____27'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row ) {		
// Put your code here.

window.open('https://urlounge.co.jp/include/csv/label/create_csv_shop5.php');

params["txt"] = "Hello";
ctrl.setMessage("Sending request to server...");
 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['_____27'] ) {
		pageObj.buttonEventAfter['_____27'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row ) {
// Put your code here.
var message = result["txt"] + " !!!";
ctrl.setMessage(message);

		}
	}
	
	$('a[id="_____27"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "_____27" + "_" + Runner.genId();
		
		// create object
		var button______27 = new Runner.form.Button({
			id: this.id ,
			btnName: "_____27"
		});
		
		// init
		button______27.init( {args: [ pageObj, proxy, pageid ]} );
	});
});





































































	

Runner.pages.PageSettings.addPageEvent('dia', Runner.pages.constants.PAGE_ADD, "afterPageReady", function(pageObj, proxy, pageid, inlineRow, inlineObject) {
	$("[id*='value_Parent_stone_'] , [id*='value_price']").keyup(function(){
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
		keisan_nyuukin_price($this_id);
});


$("[id*='value_DA_RATE_'] , [id*='value_DA_INTEREST_1_'] , [id*='value_nyuukin_price_'] , [id*='value_DA_GROSSPROFIT_'] , [id*='value_DA_UNIT_PRICE_UNPLUG_']").keyup(function(){
		//idの固有連番を取得、抜き出す
		$this_id = $(this).attr("id");
		$this_id = $this_id.split("_");
		$this_id = $this_id[$this_id.length-1];
		keisan_rapa_b($this_id);
});





/********************************************************
PER_CRAFTの計算式
 DA_PER_CARAT/(DA_F.RAPA*DA_RATE)
*********************************************************/
function keisan_DA_PER_CARAT(id_num){
	$val_price = $("#value_price_"+id_num).val();
	$val_Parent_stone = $("#value_Parent_stone_"+id_num).val();
	if(($val_price != '') && ($val_Parent_stone != '') && ($val_Parent_stone > 0)){
		$da_per_carat = Math.floor(Number($val_price)/Number($val_Parent_stone)/1.1);
		//切り捨て
		$("#value_DA_PER_CARAT_"+id_num).val(Math.floor($da_per_carat/100)*100);
	}else{
		$("#value_DA_PER_CARAT_"+id_num).val('');
	}
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
//払い出し他  DA_UNIT_PRICE @ UNPLUG*Parent_stone*0.97*1.1
************************************************************/
function keisan_nyuukin_price(id_num) {
	$val_DA_UNIT_PRICE_UNPLUG = $("#value_DA_UNIT_PRICE_UNPLUG_"+id_num).val();
	$val_Parent_stone = $("#value_Parent_stone_"+id_num).val();
	$val_DA_CUT = $("#value_DA_CUT_"+id_num).val();
	$nyuukin_price = Math.floor($val_DA_UNIT_PRICE_UNPLUG*$val_Parent_stone*0.97);
	if($val_Parent_stone < 1){
		$Parent_stone_1 = "under";
	}else{
		$Parent_stone_1 = "over";
	}
	if(
		($val_DA_CUT == "3EXHC") ||
		($val_DA_CUT == "EX") ||
		($val_DA_CUT == "VG") ||
		($val_DA_CUT == "G") ||
		($val_DA_CUT == "F") ||
		($val_DA_CUT == "P") ||
		($val_DA_CUT == "3EX") ||
		($val_DA_CUT == "3EXC") ||
		($val_DA_CUT == "EXHC") ||
		($val_DA_CUT == "3EXH")
		){
		if($Parent_stone_1 == "under"){
			$nyuukin_price = $nyuukin_price-1500;
		}else{
			$nyuukin_price = $nyuukin_price-5000;
		}
	}else{
		if($Parent_stone_1 == "under"){
			$nyuukin_price = $nyuukin_price-1000;
		}else{
			$nyuukin_price = $nyuukin_price-4000;
		}
	}
	$("#value_nyuukin_price_"+id_num).val($nyuukin_price);
};



/************************************************************
rapa_B の計算　DA_UNIT_PRICE UNPLUG	/	(DA_F.RAPA*DA_RATE)
*************************************************************/
function keisan_rapa_b(id_num) {
	$val_DA_UNIT_PRICE_UNPLUG = $("#value_DA_UNIT_PRICE_UNPLUG_"+id_num).val();
	$val_DA_FRAPA = $("#value_DA_FRAPA_"+id_num).val();
	$val_DA_RATE = $("#value_DA_RATE_"+id_num).val();
	// console.log("val_DA_UNIT_PRICE_UNPLUG "+$val_DA_UNIT_PRICE_UNPLUG);
	// console.log("val_DA_FRAPA "+$val_DA_FRAPA);
	// console.log("val_DA_RATE "+$val_DA_RATE);

/*************************************************************
利１
**************************************************************/
//利益１
	$val_DA_RAPAB = $val_DA_UNIT_PRICE_UNPLUG/($val_DA_FRAPA*$val_DA_RATE);
	$("#value_DA_RAPAB_"+id_num).val($val_DA_RAPAB.toFixed(4));
	/***************************************************************
	仕入れ額が０以上の場合計算
	****************************************************************/
	$val_DA_THE_SPECIFICATIONS_LOSSES = $("#value_price_"+id_num).val();
	$id_DA_INTEREST_1 = $("#value_DA_INTEREST_1_"+id_num);
	$val_nyuukin_price = $("#value_nyuukin_price_"+id_num).val();
	$id_DA_GROSSPROFIT = $("#value_DA_GROSSPROFIT_"+id_num);



	if($val_DA_THE_SPECIFICATIONS_LOSSES>0){
		//小数点第３位以下切り捨て
	        //ctlDA_RAPAB.val(b.toFixed(4));
		//利益１
	        $id_DA_INTEREST_1.val(Math.floor($val_nyuukin_price-$val_DA_THE_SPECIFICATIONS_LOSSES));
		//粗利ss
		$val_id_DA_INTEREST_1 = $id_DA_INTEREST_1.val();
		// console.log($val_id_DA_INTEREST_1);
		// console.log($val_nyuukin_price);
		var b = $val_id_DA_INTEREST_1/$val_nyuukin_price;
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
	// console.log("ikkatsu_settei");
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

	$da_st = $("#value_status_"+$default_id).val();
	$da_st_2 = $("#value_status_2_"+$default_id).val();
	$(".bs-sidebar-main [id*=value_status_]").val($da_st);
	$(".bs-sidebar-main [id*=value_status_2_]").val($da_st_2);

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
	      		// console.log("ikkatsu_time "+$ikkatsu_time);
				// 確認メッセージ
				var msg = "編集中のレコード全てに対して、最上段のST1の内容をコピーします。\nよろしいですか?";
				// 「はい」を選択した場合
				if( window.confirm( msg ) ) {
					ikkatsu_settei();
					$ikkatsu_time = "on";//フラグ
					return false;
				// 「いいえ」を選択した場合
				} else {
					alert("キャンセルしました");
					$ikkatsu_time = "on";//フラグ
				}
			}
      }
    }
});//end keydown;
});
	

Runner.pages.PageSettings.addPageEvent('dia', Runner.pages.constants.PAGE_EDIT, "afterPageReady", function(pageObj, proxy, pageid, inlineRow, inlineObject) {
	$("[id*='value_Parent_stone_'] , [id*='value_price']").keyup(function(){
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
		keisan_nyuukin_price($this_id);
});


$("[id*='value_DA_RATE_'] , [id*='value_DA_INTEREST_1_'] , [id*='value_nyuukin_price_'] , [id*='value_DA_GROSSPROFIT_'] , [id*='value_DA_UNIT_PRICE_UNPLUG_']").keyup(function(){
		//idの固有連番を取得、抜き出す
		$this_id = $(this).attr("id");
		$this_id = $this_id.split("_");
		$this_id = $this_id[$this_id.length-1];
		keisan_rapa_b($this_id);
});





/********************************************************
PER_CRAFTの計算式
 DA_PER_CARAT/(DA_F.RAPA*DA_RATE)
*********************************************************/
function keisan_DA_PER_CARAT(id_num){
	$val_price = $("#value_price_"+id_num).val();
	$val_Parent_stone = $("#value_Parent_stone_"+id_num).val();
	if(($val_price != '') && ($val_Parent_stone != '') && ($val_Parent_stone > 0)){
		$da_per_carat = Math.floor(Number($val_price)/Number($val_Parent_stone)/1.1);
		//切り捨て
		$("#value_DA_PER_CARAT_"+id_num).val(Math.floor($da_per_carat/100)*100);
	}else{
		$("#value_DA_PER_CARAT_"+id_num).val('');
	}
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
//払い出し他  DA_UNIT_PRICE @ UNPLUG*Parent_stone*0.97*1.1
************************************************************/
function keisan_nyuukin_price(id_num) {
	$val_DA_UNIT_PRICE_UNPLUG = $("#value_DA_UNIT_PRICE_UNPLUG_"+id_num).val();
	$val_Parent_stone = $("#value_Parent_stone_"+id_num).val();
	$val_DA_CUT = $("#value_DA_CUT_"+id_num).val();
	$nyuukin_price = Math.floor($val_DA_UNIT_PRICE_UNPLUG*$val_Parent_stone*0.97);
	if($val_Parent_stone < 1){
		$Parent_stone_1 = "under";
	}else{
		$Parent_stone_1 = "over";
	}
	if(
		($val_DA_CUT == "3EXHC") ||
		($val_DA_CUT == "EX") ||
		($val_DA_CUT == "VG") ||
		($val_DA_CUT == "G") ||
		($val_DA_CUT == "F") ||
		($val_DA_CUT == "P") ||
		($val_DA_CUT == "3EX") ||
		($val_DA_CUT == "3EXC") ||
		($val_DA_CUT == "EXHC") ||
		($val_DA_CUT == "3EXH")
		){
		if($Parent_stone_1 == "under"){
			$nyuukin_price = $nyuukin_price-1500;
		}else{
			$nyuukin_price = $nyuukin_price-5000;
		}
	}else{
		if($Parent_stone_1 == "under"){
			$nyuukin_price = $nyuukin_price-1000;
		}else{
			$nyuukin_price = $nyuukin_price-4000;
		}
	}
	$("#value_nyuukin_price_"+id_num).val($nyuukin_price);
};



/************************************************************
rapa_B の計算　DA_UNIT_PRICE UNPLUG	/	(DA_F.RAPA*DA_RATE)
*************************************************************/
function keisan_rapa_b(id_num) {
	$val_DA_UNIT_PRICE_UNPLUG = $("#value_DA_UNIT_PRICE_UNPLUG_"+id_num).val();
	$val_DA_FRAPA = $("#value_DA_FRAPA_"+id_num).val();
	$val_DA_RATE = $("#value_DA_RATE_"+id_num).val();
	// console.log("val_DA_UNIT_PRICE_UNPLUG "+$val_DA_UNIT_PRICE_UNPLUG);
	// console.log("val_DA_FRAPA "+$val_DA_FRAPA);
	// console.log("val_DA_RATE "+$val_DA_RATE);

/*************************************************************
利１
**************************************************************/
//利益１
	$val_DA_RAPAB = $val_DA_UNIT_PRICE_UNPLUG/($val_DA_FRAPA*$val_DA_RATE);
	$("#value_DA_RAPAB_"+id_num).val($val_DA_RAPAB.toFixed(4));
	/***************************************************************
	仕入れ額が０以上の場合計算
	****************************************************************/
	$val_DA_THE_SPECIFICATIONS_LOSSES = $("#value_price_"+id_num).val();
	$id_DA_INTEREST_1 = $("#value_DA_INTEREST_1_"+id_num);
	$val_nyuukin_price = $("#value_nyuukin_price_"+id_num).val();
	$id_DA_GROSSPROFIT = $("#value_DA_GROSSPROFIT_"+id_num);



	if($val_DA_THE_SPECIFICATIONS_LOSSES>0){
		//小数点第３位以下切り捨て
	        //ctlDA_RAPAB.val(b.toFixed(4));
		//利益１
	        $id_DA_INTEREST_1.val(Math.floor($val_nyuukin_price-$val_DA_THE_SPECIFICATIONS_LOSSES));
		//粗利ss
		$val_id_DA_INTEREST_1 = $id_DA_INTEREST_1.val();
		// console.log($val_id_DA_INTEREST_1);
		// console.log($val_nyuukin_price);
		var b = $val_id_DA_INTEREST_1/$val_nyuukin_price;
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
	// console.log("ikkatsu_settei");
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

	$da_st = $("#value_status_"+$default_id).val();
	$da_st_2 = $("#value_status_2_"+$default_id).val();
	$(".bs-sidebar-main [id*=value_status_]").val($da_st);
	$(".bs-sidebar-main [id*=value_status_2_]").val($da_st_2);

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
	      		// console.log("ikkatsu_time "+$ikkatsu_time);
				// 確認メッセージ
				var msg = "編集中のレコード全てに対して、最上段のST1の内容をコピーします。\nよろしいですか?";
				// 「はい」を選択した場合
				if( window.confirm( msg ) ) {
					ikkatsu_settei();
					$ikkatsu_time = "on";//フラグ
					return false;
				// 「いいえ」を選択した場合
				} else {
					alert("キャンセルしました");
					$ikkatsu_time = "on";//フラグ
				}
			}
      }
    }
});//end keydown;
});

//	AJAX snippets
