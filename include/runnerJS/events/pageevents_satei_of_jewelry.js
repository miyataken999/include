


























































































	

Runner.pages.PageSettings.addPageEvent('satei_of_jewelry', Runner.pages.constants.PAGE_LIST, "afterPageReady", function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = '__5';
	
	if ( !pageObj.buttonEventBefore['__5'] ) {
		pageObj.buttonEventBefore['__5'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row ) {		
// Put your code here.
params["txt"] = "Hello";
ctrl.setMessage("Sending request to server...");

$("select[name^='value_status']").val(33);
 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['__5'] ) {
		pageObj.buttonEventAfter['__5'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row ) {
// Put your code here.
var message = result["txt"] + " !!!";
ctrl.setMessage(message);


		}
	}
	
	$('a[id="__5"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "__5" + "_" + Runner.genId();
		
		// create object
		var button___5 = new Runner.form.Button({
			id: this.id ,
			btnName: "__5"
		});
		
		// init
		button___5.init( {args: [ pageObj, proxy, pageid ]} );
	});
});


	

Runner.pages.PageSettings.addPageEvent('satei_of_jewelry', Runner.pages.constants.PAGE_LIST, "afterPageReady", function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = '___14';
	
	if ( !pageObj.buttonEventBefore['___14'] ) {
		pageObj.buttonEventBefore['___14'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row ) {		
// Put your code here.
params["txt"] = "Hello";
ctrl.setMessage("Sending request to server...");

$("select[name^='value_status']").val(32);

 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 //return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['___14'] ) {
		pageObj.buttonEventAfter['___14'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row ) {
// Put your code here.
var message = result["txt"] + " !!!";
ctrl.setMessage(message);

		}
	}
	
	$('a[id="___14"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "___14" + "_" + Runner.genId();
		
		// create object
		var button____14 = new Runner.form.Button({
			id: this.id ,
			btnName: "___14"
		});
		
		// init
		button____14.init( {args: [ pageObj, proxy, pageid ]} );
	});
});


	

Runner.pages.PageSettings.addPageEvent('satei_of_jewelry', Runner.pages.constants.PAGE_LIST, "afterPageReady", function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = '___15';
	
	if ( !pageObj.buttonEventBefore['___15'] ) {
		pageObj.buttonEventBefore['___15'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row ) {		
// Put your code here.
params["txt"] = "Hello";
ctrl.setMessage("Sending request to server...");

$("select[name^='value_status']").val(34);

 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['___15'] ) {
		pageObj.buttonEventAfter['___15'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row ) {
// Put your code here.
var message = result["txt"] + " !!!";
ctrl.setMessage(message);

		}
	}
	
	$('a[id="___15"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "___15" + "_" + Runner.genId();
		
		// create object
		var button____15 = new Runner.form.Button({
			id: this.id ,
			btnName: "___15"
		});
		
		// init
		button____15.init( {args: [ pageObj, proxy, pageid ]} );
	});
});


	

Runner.pages.PageSettings.addPageEvent('satei_of_jewelry', Runner.pages.constants.PAGE_LIST, "afterPageReady", function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = '_____42';
	
	if ( !pageObj.buttonEventBefore['_____42'] ) {
		pageObj.buttonEventBefore['_____42'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row ) {		
// Put your code here.
params["txt"] = "Hello";
ctrl.setMessage("Sending request to server...");
 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['_____42'] ) {
		pageObj.buttonEventAfter['_____42'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row ) {
// Put your code here.
var message = result["txt"] + " !!!";
ctrl.setMessage(message);

		}
	}
	
	$('a[id="_____42"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "_____42" + "_" + Runner.genId();
		
		// create object
		var button______42 = new Runner.form.Button({
			id: this.id ,
			btnName: "_____42"
		});
		
		// init
		button______42.init( {args: [ pageObj, proxy, pageid ]} );
	});
});


	

Runner.pages.PageSettings.addPageEvent('satei_of_jewelry', Runner.pages.constants.PAGE_LIST, "afterPageReady", function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = '___________6';
	
	if ( !pageObj.buttonEventBefore['___________6'] ) {
		pageObj.buttonEventBefore['___________6'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row ) {		
// Put your code here.
params["txt"] = "Hello";
ctrl.setMessage("Sending request to server...");
 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['___________6'] ) {
		pageObj.buttonEventAfter['___________6'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row ) {
// Put your code here.
var message = result["txt"] + " !!!";
ctrl.setMessage(message);

		}
	}
	
	$('a[id="___________6"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "___________6" + "_" + Runner.genId();
		
		// create object
		var button____________6 = new Runner.form.Button({
			id: this.id ,
			btnName: "___________6"
		});
		
		// init
		button____________6.init( {args: [ pageObj, proxy, pageid ]} );
	});
});


	

Runner.pages.PageSettings.addPageEvent('satei_of_jewelry', Runner.pages.constants.PAGE_LIST, "afterPageReady", function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = '_________5';
	
	if ( !pageObj.buttonEventBefore['_________5'] ) {
		pageObj.buttonEventBefore['_________5'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row ) {		
// Put your code here.
params["txt"] = "Hello";
ctrl.setMessage("Sending request to server...");
 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['_________5'] ) {
		pageObj.buttonEventAfter['_________5'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row ) {
// Put your code here.
var message = result["txt"] + " !!!";
ctrl.setMessage(message);

		}
	}
	
	$('a[id="_________5"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "_________5" + "_" + Runner.genId();
		
		// create object
		var button__________5 = new Runner.form.Button({
			id: this.id ,
			btnName: "_________5"
		});
		
		// init
		button__________5.init( {args: [ pageObj, proxy, pageid ]} );
	});
});




















































	

Runner.pages.PageSettings.addPageEvent('satei_of_jewelry', Runner.pages.constants.PAGE_LIST, "afterPageReady", function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'New_Button1';
	
	if ( !pageObj.buttonEventBefore['New_Button1'] ) {
		pageObj.buttonEventBefore['New_Button1'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row ) {		
// Put your code here.
params["txt"] = "Hello";
ctrl.setMessage("Sending request to server...");
 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['New_Button1'] ) {
		pageObj.buttonEventAfter['New_Button1'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row ) {
// Put your code here.
var message = result["txt"] + " !!!";
ctrl.setMessage(message);

		}
	}
	
	$('a[id="New_Button1"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "New_Button1" + "_" + Runner.genId();
		
		// create object
		var button_New_Button1 = new Runner.form.Button({
			id: this.id ,
			btnName: "New_Button1"
		});
		
		// init
		button_New_Button1.init( {args: [ pageObj, proxy, pageid ]} );
	});
});







	

Runner.pages.PageSettings.addPageEvent('satei_of_jewelry', Runner.pages.constants.PAGE_LIST, "afterPageReady", function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = '_____24';
	
	if ( !pageObj.buttonEventBefore['_____24'] ) {
		pageObj.buttonEventBefore['_____24'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row ) {		
// Put your code here.

window.open('https://urlounge.co.jp/include/csv/label/create_csv_shop5.php');

params["txt"] = "Hello";
ctrl.setMessage("Sending request to server...");
 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['_____24'] ) {
		pageObj.buttonEventAfter['_____24'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row ) {
// Put your code here.
var message = result["txt"] + " !!!";
ctrl.setMessage(message);

		}
	}
	
	$('a[id="_____24"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "_____24" + "_" + Runner.genId();
		
		// create object
		var button______24 = new Runner.form.Button({
			id: this.id ,
			btnName: "_____24"
		});
		
		// init
		button______24.init( {args: [ pageObj, proxy, pageid ]} );
	});
});








































































	

Runner.pages.PageSettings.addPageEvent('satei_of_jewelry', Runner.pages.constants.PAGE_ADD, "afterPageReady", function(pageObj, proxy, pageid, inlineRow, inlineObject) {
	if($("#js_load_area").html() == ""){
		$("#js_load_area").load("/include/page_event/satei/after_load_js.php",function(){
			js_load();
		});
	}else{
		js_load();
	};

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

// Place event code here.
// Use "Add Action" button to add code snippets.;
});
	

Runner.pages.PageSettings.addPageEvent('satei_of_jewelry', Runner.pages.constants.PAGE_EDIT, "afterPageReady", function(pageObj, proxy, pageid, inlineRow, inlineObject) {
	if($("#js_load_area").html() == ""){
		$("#js_load_area").load("/include/page_event/satei/after_load_js.php",function(){
			js_load();
		});
	}else{
		js_load();
	};

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

// Place event code here.
// Use "Add Action" button to add code snippets.;
});
	

Runner.pages.PageSettings.addPageEvent('satei_of_jewelry', Runner.pages.constants.PAGE_VIEW, "afterPageReady", function(pageObj, proxy, pageid, inlineRow, inlineObject) {
	
console.log('satei_view');
// Place event code here.
// Use "Add Action" button to add code snippets.;
});
	

Runner.pages.PageSettings.addPageEvent('satei_of_jewelry', Runner.pages.constants.PAGE_LIST, "afterPageReady", function(pageObj, proxy, pageid, inlineRow, inlineObject) {
	
// Place event code here.
// Use "Add Action" button to add code snippets.;
});

//	AJAX snippets
