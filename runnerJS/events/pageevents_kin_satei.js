







































































	

Runner.pages.PageSettings.addPageEvent('kin_satei', Runner.pages.constants.PAGE_LIST, "afterPageReady", function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = '__32';
	
	if ( !pageObj.buttonEventBefore['__32'] ) {
		pageObj.buttonEventBefore['__32'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row ) {		
jQuery("#searchButton1").click();
// Put your code here.
params["txt"] = "searc";
ctrl.setMessage("Sending request to server...");
 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['__32'] ) {
		pageObj.buttonEventAfter['__32'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row ) {
// Put your code here.
var message = result["txt"] + " !!!";
ctrl.setMessage(message);

		}
	}
	
	$('a[id="__32"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "__32" + "_" + Runner.genId();
		
		// create object
		var button___32 = new Runner.form.Button({
			id: this.id ,
			btnName: "__32"
		});
		
		// init
		button___32.init( {args: [ pageObj, proxy, pageid ]} );
	});
});


	

Runner.pages.PageSettings.addPageEvent('kin_satei', Runner.pages.constants.PAGE_LIST, "afterPageReady", function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = '___52';
	
	if ( !pageObj.buttonEventBefore['___52'] ) {
		pageObj.buttonEventBefore['___52'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row ) {		
// Put your code here.
jQuery("#showAll1").click();
params["txt"] = "success";
ctrl.setMessage("Sending request to server...");
 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['___52'] ) {
		pageObj.buttonEventAfter['___52'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row ) {
// Put your code here.
var message = result["txt"] + " !!!";
ctrl.setMessage(message);

		}
	}
	
	$('a[id="___52"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "___52" + "_" + Runner.genId();
		
		// create object
		var button____52 = new Runner.form.Button({
			id: this.id ,
			btnName: "___52"
		});
		
		// init
		button____52.init( {args: [ pageObj, proxy, pageid ]} );
	});
});



	

Runner.pages.PageSettings.addPageEvent('kin_satei', Runner.pages.constants.PAGE_LIST, "afterPageReady", function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = '___10';
	
	if ( !pageObj.buttonEventBefore['___10'] ) {
		pageObj.buttonEventBefore['___10'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row ) {		
// Put your code here.
params["txt"] = "Hello";
//ctrl.setMessage("Sending request to server...");

$("select[name^='value_status']").val(32);

 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 //return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['___10'] ) {
		pageObj.buttonEventAfter['___10'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row ) {
// Put your code here.
var message = result["txt"] + " !!!";
//ctrl.setMessage(message);

		}
	}
	
	$('a[id="___10"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "___10" + "_" + Runner.genId();
		
		// create object
		var button____10 = new Runner.form.Button({
			id: this.id ,
			btnName: "___10"
		});
		
		// init
		button____10.init( {args: [ pageObj, proxy, pageid ]} );
	});
});


	

Runner.pages.PageSettings.addPageEvent('kin_satei', Runner.pages.constants.PAGE_LIST, "afterPageReady", function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = '___12';
	
	if ( !pageObj.buttonEventBefore['___12'] ) {
		pageObj.buttonEventBefore['___12'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row ) {		
// Put your code here.
params["txt"] = "Hello";
//ctrl.setMessage("Sending request to server...");

$("select[name^='value_status']").val(34);

 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['___12'] ) {
		pageObj.buttonEventAfter['___12'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row ) {
// Put your code here.
var message = result["txt"] + " !!!";
//ctrl.setMessage(message);

		}
	}
	
	$('a[id="___12"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "___12" + "_" + Runner.genId();
		
		// create object
		var button____12 = new Runner.form.Button({
			id: this.id ,
			btnName: "___12"
		});
		
		// init
		button____12.init( {args: [ pageObj, proxy, pageid ]} );
	});
});





	

Runner.pages.PageSettings.addPageEvent('kin_satei', Runner.pages.constants.PAGE_LIST, "afterPageReady", function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'D_C1';
	
	if ( !pageObj.buttonEventBefore['D_C1'] ) {
		pageObj.buttonEventBefore['D_C1'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row ) {		
// Put your code here.
params["txt"] = "Hello";
//ctrl.setMessage("Sending request to server...");

$("select[name^='value_status']").val(127);

 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['D_C1'] ) {
		pageObj.buttonEventAfter['D_C1'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row ) {
// Put your code here.
var message = result["txt"] + " !!!";
//ctrl.setMessage(message);

		}
	}
	
	$('a[id="D_C1"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "D_C1" + "_" + Runner.genId();
		
		// create object
		var button_D_C1 = new Runner.form.Button({
			id: this.id ,
			btnName: "D_C1"
		});
		
		// init
		button_D_C1.init( {args: [ pageObj, proxy, pageid ]} );
	});
});


	

Runner.pages.PageSettings.addPageEvent('kin_satei', Runner.pages.constants.PAGE_LIST, "afterPageReady", function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = '_______6';
	
	if ( !pageObj.buttonEventBefore['_______6'] ) {
		pageObj.buttonEventBefore['_______6'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row ) {		
// Put your code here.
params["txt"] = "Hello";
//ctrl.setMessage("Sending request to server...");

$("select[name^='value_status']").val(119);

 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['_______6'] ) {
		pageObj.buttonEventAfter['_______6'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row ) {
// Put your code here.
var message = result["txt"] + " !!!";
//ctrl.setMessage(message);

		}
	}
	
	$('a[id="_______6"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "_______6" + "_" + Runner.genId();
		
		// create object
		var button________6 = new Runner.form.Button({
			id: this.id ,
			btnName: "_______6"
		});
		
		// init
		button________6.init( {args: [ pageObj, proxy, pageid ]} );
	});
});































	

Runner.pages.PageSettings.addPageEvent('kin_satei', Runner.pages.constants.PAGE_LIST, "afterPageReady", function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'No__';
	
	if ( !pageObj.buttonEventBefore['No__'] ) {
		pageObj.buttonEventBefore['No__'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row ) {		
// Put your code here.
params["txt"] = "Hello";
//ctrl.setMessage("Sending request to server...");

$("select[name^='value_status']").val(126);

 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['No__'] ) {
		pageObj.buttonEventAfter['No__'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row ) {
// Put your code here.
var message = result["txt"] + " !!!";
//ctrl.setMessage(message);

		}
	}
	
	$('a[id="No__"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "No__" + "_" + Runner.genId();
		
		// create object
		var button_No__ = new Runner.form.Button({
			id: this.id ,
			btnName: "No__"
		});
		
		// init
		button_No__.init( {args: [ pageObj, proxy, pageid ]} );
	});
});





























	

Runner.pages.PageSettings.addPageEvent('kin_satei', Runner.pages.constants.PAGE_LIST, "afterPageReady", function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = '___________71';
	
	if ( !pageObj.buttonEventBefore['___________71'] ) {
		pageObj.buttonEventBefore['___________71'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row ) {		
// Put your code here.
params["txt"] = "Hello";
ctrl.setMessage("Sending request to server...");
 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['___________71'] ) {
		pageObj.buttonEventAfter['___________71'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row ) {
// Put your code here.
var message = result["txt"] + " !!!";
ctrl.setMessage(message);

		}
	}
	
	$('a[id="___________71"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "___________71" + "_" + Runner.genId();
		
		// create object
		var button____________71 = new Runner.form.Button({
			id: this.id ,
			btnName: "___________71"
		});
		
		// init
		button____________71.init( {args: [ pageObj, proxy, pageid ]} );
	});
});












	

Runner.pages.PageSettings.addPageEvent('kin_satei', Runner.pages.constants.PAGE_LIST, "afterPageReady", function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'New_Button4';
	
	if ( !pageObj.buttonEventBefore['New_Button4'] ) {
		pageObj.buttonEventBefore['New_Button4'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row ) {		
// Put your code here.
params["txt"] = "Hello";
ctrl.setMessage("Sending request to server...");
 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['New_Button4'] ) {
		pageObj.buttonEventAfter['New_Button4'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row ) {
// Put your code here.
var message = result["txt"] + " !!!";
ctrl.setMessage(message);

		}
	}
	
	$('a[id="New_Button4"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "New_Button4" + "_" + Runner.genId();
		
		// create object
		var button_New_Button4 = new Runner.form.Button({
			id: this.id ,
			btnName: "New_Button4"
		});
		
		// init
		button_New_Button4.init( {args: [ pageObj, proxy, pageid ]} );
	});
});






	

Runner.pages.PageSettings.addPageEvent('kin_satei', Runner.pages.constants.PAGE_LIST, "afterPageReady", function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = '_____26';
	
	if ( !pageObj.buttonEventBefore['_____26'] ) {
		pageObj.buttonEventBefore['_____26'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row ) {		
// Put your code here.

window.open('https://urlounge.co.jp/include/csv/label/create_csv_shop5.php');

params["txt"] = "Hello";
ctrl.setMessage("Sending request to server...");
 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['_____26'] ) {
		pageObj.buttonEventAfter['_____26'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row ) {
// Put your code here.
var message = result["txt"] + " !!!";
ctrl.setMessage(message);

		}
	}
	
	$('a[id="_____26"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "_____26" + "_" + Runner.genId();
		
		// create object
		var button______26 = new Runner.form.Button({
			id: this.id ,
			btnName: "_____26"
		});
		
		// init
		button______26.init( {args: [ pageObj, proxy, pageid ]} );
	});
});






































































	

Runner.pages.PageSettings.addPageEvent('kin_satei', Runner.pages.constants.PAGE_ADD, "afterPageReady", function(pageObj, proxy, pageid, inlineRow, inlineObject) {
	
/*


=切り捨て((金性グラム-(親石+脇石)*0.2)*金性単価)+((親石*親石単価))+(脇石*脇石単価))


*/


// Place event code here.
// Use "Add Action" button to add code snippets.



// 金性グラム
var ctrl_Gram = Runner.getControl(pageid,'Gram');
// 金性単価
var ctrl_price_per_gram = Runner.getControl(pageid,'price_per_gram');

// 親石(カラット数)
var ctrl_Parent_stone = Runner.getControl(pageid,'Parent_stone');
// 親石単価
var ctrl_price_per_parent_stone = Runner.getControl(pageid,'price_per_parent_stone');

// 脇石(カラット数)
var ctrl_Aside_stone = Runner.getControl(pageid,'Aside_stone');
// 脇石単価
var ctrl_price_per_aside_stone = Runner.getControl(pageid,'price_per_aside_stone');

// 買取額
var ctrl_price = Runner.getControl(pageid,'price');
// 販売額
var ctrl_sales_price = Runner.getControl(pageid,'sales_price');

function func() {
	var kin_juuryou = ctrl_Gram.getValue();
	var pare_carat = ctrl_Parent_stone.getValue();
	var asid_carat = ctrl_Aside_stone.getValue();
	if(!isNaN(kin_juuryou)){
		if(!isNaN(pare_carat)){
			kin_juuryou = kin_juuryou-(pare_carat*0.4);
		}
		if(!isNaN(asid_carat)){
			kin_juuryou = kin_juuryou-(asid_carat*0.4);
		}
	}else{
		kin_juuryou = 0;
	}

	var kin_price = kin_juuryou*ctrl_price_per_gram.getValue();

	if(isNaN(kin_price)){
		kin_price = 0;
	}
	if(kin_price == ''){
		kin_price = 0;
	}

	var parent_price = pare_carat * ctrl_price_per_parent_stone.getValue();
	var aside_price = asid_carat * ctrl_price_per_aside_stone.getValue();
	if(isNaN(parent_price)){
		parent_price = 0;
	}
	if(isNaN(aside_price)){
		aside_price = 0;
	}

	var kaitori = Math.floor(kin_price + parent_price + aside_price);

	ctrl_price.setValue(kaitori);
	var sale_price = kaitori/0.4;
	sale_price = Math.floor(sale_price);
	ctrl_sales_price.setValue(sale_price);

	if(kaitori > 0){
		ctrl_price.addClass('dont_touch');
	}else{
		ctrl_price.removeClass('dont_touch');
	}
};

ctrl_Gram.on('keyup', func);
ctrl_price_per_gram.on('keyup', func);
ctrl_Parent_stone.on('keyup', func);
ctrl_price_per_parent_stone.on('keyup', func);

ctrl_Aside_stone.on('keyup', func);
ctrl_price_per_aside_stone.on('keyup', func);

$("[id*=value_price_]").focusin(function(){
	if($(this).hasClass("dont_touch")){
		//idの固有連番を取得、抜き出す
		$this_id_num = $(this).attr("id");
		$this_id_num = $this_id_num.split("_");
		$this_id_num = $this_id_num[$this_id_num.length-1];

		$("#value_yahoo_sankou_uwadai_"+$this_id_num).focus();

	}
});


//金性単価の自動反映
$("[id*=value_price_per_gram]").focusin(function(){
	//idの固有連番を取得、抜き出す
	$this_id_num = $(this).attr("id");
	$this_id_num = $this_id_num.split("_");
	$this_id_num = $this_id_num[$this_id_num.length-1];

	$gold_property_val = $("#value_gold_property_"+$this_id_num).val();
	// console.log("gold_property_val "+$gold_property_val);
	// console.log("value_price_per_gram_"+$this_id_num+"  "+$("#value_price_per_gram_"+$this_id_num).val());
	$kinsyou_tanka = $("#kinsyou_auto_list option[data='"+$gold_property_val+"']").val();
	// console.log("#kinsyou_auto_list[data='"+$gold_property_val+"']");
	// console.log("kinsyou_tanka "+$kinsyou_tanka);
	if($kinsyou_tanka != ''){
		if($("#value_price_per_gram_"+$this_id_num).val() == ''){
			$("#kinsyou_auto_list").val($kinsyou_tanka);
			$("#value_price_per_gram_"+$this_id_num).val($kinsyou_tanka);
		}
	}
})


;
});
	

Runner.pages.PageSettings.addPageEvent('kin_satei', Runner.pages.constants.PAGE_EDIT, "afterPageReady", function(pageObj, proxy, pageid, inlineRow, inlineObject) {
	
/*


=切り捨て((金性グラム-(親石+脇石)*0.2)*金性単価)+((親石*親石単価))+(脇石*脇石単価))


*/


// Place event code here.
// Use "Add Action" button to add code snippets.



// 金性グラム
var ctrl_Gram = Runner.getControl(pageid,'Gram');
// 金性単価
var ctrl_price_per_gram = Runner.getControl(pageid,'price_per_gram');

// 親石(カラット数)
var ctrl_Parent_stone = Runner.getControl(pageid,'Parent_stone');
// 親石単価
var ctrl_price_per_parent_stone = Runner.getControl(pageid,'price_per_parent_stone');

// 脇石(カラット数)
var ctrl_Aside_stone = Runner.getControl(pageid,'Aside_stone');
// 脇石単価
var ctrl_price_per_aside_stone = Runner.getControl(pageid,'price_per_aside_stone');

// 買取額
var ctrl_price = Runner.getControl(pageid,'price');
// 販売額
var ctrl_sales_price = Runner.getControl(pageid,'sales_price');

function func() {
	var kin_juuryou = ctrl_Gram.getValue();
	var pare_carat = ctrl_Parent_stone.getValue();
	var asid_carat = ctrl_Aside_stone.getValue();
	if(!isNaN(kin_juuryou)){
		if(!isNaN(pare_carat)){
			kin_juuryou = kin_juuryou-(pare_carat*0.4);
		}
		if(!isNaN(asid_carat)){
			kin_juuryou = kin_juuryou-(asid_carat*0.4);
		}
	}else{
		kin_juuryou = 0;
	}

	var kin_price = kin_juuryou*ctrl_price_per_gram.getValue();

	if(isNaN(kin_price)){
		kin_price = 0;
	}
	if(kin_price == ''){
		kin_price = 0;
	}

	var parent_price = pare_carat * ctrl_price_per_parent_stone.getValue();
	var aside_price = asid_carat * ctrl_price_per_aside_stone.getValue();
	if(isNaN(parent_price)){
		parent_price = 0;
	}
	if(isNaN(aside_price)){
		aside_price = 0;
	}

	var kaitori = Math.floor(kin_price + parent_price + aside_price);

	ctrl_price.setValue(kaitori);
	var sale_price = kaitori/0.4;
	sale_price = Math.floor(sale_price);
	ctrl_sales_price.setValue(sale_price);

	if(kaitori > 0){
		ctrl_price.addClass('dont_touch');
	}else{
		ctrl_price.removeClass('dont_touch');
	}
};

ctrl_Gram.on('keyup', func);
ctrl_price_per_gram.on('keyup', func);
ctrl_Parent_stone.on('keyup', func);
ctrl_price_per_parent_stone.on('keyup', func);

ctrl_Aside_stone.on('keyup', func);
ctrl_price_per_aside_stone.on('keyup', func);

$("[id*=value_price_]").focusin(function(){
	if($(this).hasClass("dont_touch")){
		//idの固有連番を取得、抜き出す
		$this_id_num = $(this).attr("id");
		$this_id_num = $this_id_num.split("_");
		$this_id_num = $this_id_num[$this_id_num.length-1];

		$("#value_yahoo_sankou_uwadai_"+$this_id_num).focus();

	}
});


//金性単価の自動反映
$("[id*=value_price_per_gram]").focusin(function(){
	//idの固有連番を取得、抜き出す
	$this_id_num = $(this).attr("id");
	$this_id_num = $this_id_num.split("_");
	$this_id_num = $this_id_num[$this_id_num.length-1];

	$gold_property_val = $("#value_gold_property_"+$this_id_num).val();
	// console.log("gold_property_val "+$gold_property_val);
	// console.log("value_price_per_gram_"+$this_id_num+"  "+$("#value_price_per_gram_"+$this_id_num).val());
	$kinsyou_tanka = $("#kinsyou_auto_list option[data='"+$gold_property_val+"']").val();
	// console.log("#kinsyou_auto_list[data='"+$gold_property_val+"']");
	// console.log("kinsyou_tanka "+$kinsyou_tanka);
	if($kinsyou_tanka != ''){
		if($("#value_price_per_gram_"+$this_id_num).val() == ''){
			$("#kinsyou_auto_list").val($kinsyou_tanka);
			$("#value_price_per_gram_"+$this_id_num).val($kinsyou_tanka);
		}
	}
})


;
});

//	AJAX snippets
