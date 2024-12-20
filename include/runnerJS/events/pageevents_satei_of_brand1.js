
































































































	

Runner.pages.PageSettings.addPageEvent('satei_of_brand', Runner.pages.constants.PAGE_LIST, "afterPageReady", function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = '__6';
	
	if ( !pageObj.buttonEventBefore['__6'] ) {
		pageObj.buttonEventBefore['__6'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row ) {		
// Put your code here.
params["txt"] = "Hello";
ctrl.setMessage("Sending request to server...");

$("select[name^='value_status']").val(33);
 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['__6'] ) {
		pageObj.buttonEventAfter['__6'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row ) {
// Put your code here.
var message = result["txt"] + " !!!";
ctrl.setMessage(message);


		}
	}
	
	$('a[id="__6"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "__6" + "_" + Runner.genId();
		
		// create object
		var button___6 = new Runner.form.Button({
			id: this.id ,
			btnName: "__6"
		});
		
		// init
		button___6.init( {args: [ pageObj, proxy, pageid ]} );
	});
});


	

Runner.pages.PageSettings.addPageEvent('satei_of_brand', Runner.pages.constants.PAGE_LIST, "afterPageReady", function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = '___16';
	
	if ( !pageObj.buttonEventBefore['___16'] ) {
		pageObj.buttonEventBefore['___16'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row ) {		
// Put your code here.
params["txt"] = "Hello";
ctrl.setMessage("Sending request to server...");

$("select[name^='value_status']").val(32);

 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 //return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['___16'] ) {
		pageObj.buttonEventAfter['___16'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row ) {
// Put your code here.
var message = result["txt"] + " !!!";
ctrl.setMessage(message);

		}
	}
	
	$('a[id="___16"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "___16" + "_" + Runner.genId();
		
		// create object
		var button____16 = new Runner.form.Button({
			id: this.id ,
			btnName: "___16"
		});
		
		// init
		button____16.init( {args: [ pageObj, proxy, pageid ]} );
	});
});


	

Runner.pages.PageSettings.addPageEvent('satei_of_brand', Runner.pages.constants.PAGE_LIST, "afterPageReady", function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = '___17';
	
	if ( !pageObj.buttonEventBefore['___17'] ) {
		pageObj.buttonEventBefore['___17'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row ) {		
// Put your code here.
params["txt"] = "Hello";
ctrl.setMessage("Sending request to server...");

$("select[name^='value_status']").val(34);

 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['___17'] ) {
		pageObj.buttonEventAfter['___17'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row ) {
// Put your code here.
var message = result["txt"] + " !!!";
ctrl.setMessage(message);

		}
	}
	
	$('a[id="___17"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "___17" + "_" + Runner.genId();
		
		// create object
		var button____17 = new Runner.form.Button({
			id: this.id ,
			btnName: "___17"
		});
		
		// init
		button____17.init( {args: [ pageObj, proxy, pageid ]} );
	});
});


	

Runner.pages.PageSettings.addPageEvent('satei_of_brand', Runner.pages.constants.PAGE_LIST, "afterPageReady", function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = '_____43';
	
	if ( !pageObj.buttonEventBefore['_____43'] ) {
		pageObj.buttonEventBefore['_____43'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row ) {		
// Put your code here.
params["txt"] = "Hello";
ctrl.setMessage("Sending request to server...");
 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['_____43'] ) {
		pageObj.buttonEventAfter['_____43'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row ) {
// Put your code here.
var message = result["txt"] + " !!!";
ctrl.setMessage(message);

		}
	}
	
	$('a[id="_____43"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "_____43" + "_" + Runner.genId();
		
		// create object
		var button______43 = new Runner.form.Button({
			id: this.id ,
			btnName: "_____43"
		});
		
		// init
		button______43.init( {args: [ pageObj, proxy, pageid ]} );
	});
});


	

Runner.pages.PageSettings.addPageEvent('satei_of_brand', Runner.pages.constants.PAGE_LIST, "afterPageReady", function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = '___________7';
	
	if ( !pageObj.buttonEventBefore['___________7'] ) {
		pageObj.buttonEventBefore['___________7'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row ) {		
// Put your code here.
params["txt"] = "Hello";
ctrl.setMessage("Sending request to server...");
 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['___________7'] ) {
		pageObj.buttonEventAfter['___________7'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row ) {
// Put your code here.
var message = result["txt"] + " !!!";
ctrl.setMessage(message);

		}
	}
	
	$('a[id="___________7"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "___________7" + "_" + Runner.genId();
		
		// create object
		var button____________7 = new Runner.form.Button({
			id: this.id ,
			btnName: "___________7"
		});
		
		// init
		button____________7.init( {args: [ pageObj, proxy, pageid ]} );
	});
});


	

Runner.pages.PageSettings.addPageEvent('satei_of_brand', Runner.pages.constants.PAGE_LIST, "afterPageReady", function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = '_________6';
	
	if ( !pageObj.buttonEventBefore['_________6'] ) {
		pageObj.buttonEventBefore['_________6'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row ) {		
// Put your code here.
params["txt"] = "Hello";
ctrl.setMessage("Sending request to server...");
 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['_________6'] ) {
		pageObj.buttonEventAfter['_________6'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row ) {
// Put your code here.
var message = result["txt"] + " !!!";
ctrl.setMessage(message);

		}
	}
	
	$('a[id="_________6"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "_________6" + "_" + Runner.genId();
		
		// create object
		var button__________6 = new Runner.form.Button({
			id: this.id ,
			btnName: "_________6"
		});
		
		// init
		button__________6.init( {args: [ pageObj, proxy, pageid ]} );
	});
});













































	

Runner.pages.PageSettings.addPageEvent('satei_of_brand', Runner.pages.constants.PAGE_LIST, "afterPageReady", function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'New_Button';
	
	if ( !pageObj.buttonEventBefore['New_Button'] ) {
		pageObj.buttonEventBefore['New_Button'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row ) {		
// Put your code here.
params["txt"] = "Hello";
ctrl.setMessage("Sending request to server...");
 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['New_Button'] ) {
		pageObj.buttonEventAfter['New_Button'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row ) {
// Put your code here.
var message = result["txt"] + " !!!";
ctrl.setMessage(message);

		}
	}
	
	$('a[id="New_Button"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "New_Button" + "_" + Runner.genId();
		
		// create object
		var button_New_Button = new Runner.form.Button({
			id: this.id ,
			btnName: "New_Button"
		});
		
		// init
		button_New_Button.init( {args: [ pageObj, proxy, pageid ]} );
	});
});







	

Runner.pages.PageSettings.addPageEvent('satei_of_brand', Runner.pages.constants.PAGE_LIST, "afterPageReady", function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = '_____23';
	
	if ( !pageObj.buttonEventBefore['_____23'] ) {
		pageObj.buttonEventBefore['_____23'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row ) {		
// Put your code here.

window.open('https://urlounge.co.jp/include/csv/label/create_csv_shop5.php');

params["txt"] = "Hello";
ctrl.setMessage("Sending request to server...");
 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['_____23'] ) {
		pageObj.buttonEventAfter['_____23'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row ) {
// Put your code here.
var message = result["txt"] + " !!!";
ctrl.setMessage(message);

		}
	}
	
	$('a[id="_____23"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "_____23" + "_" + Runner.genId();
		
		// create object
		var button______23 = new Runner.form.Button({
			id: this.id ,
			btnName: "_____23"
		});
		
		// init
		button______23.init( {args: [ pageObj, proxy, pageid ]} );
	});
});









































































	

Runner.pages.PageSettings.addPageEvent('satei_of_brand', Runner.pages.constants.PAGE_ADD, "afterPageReady", function(pageObj, proxy, pageid, inlineRow, inlineObject) {
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
	

Runner.pages.PageSettings.addPageEvent('satei_of_brand', Runner.pages.constants.PAGE_EDIT, "afterPageReady", function(pageObj, proxy, pageid, inlineRow, inlineObject) {
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
	

Runner.pages.PageSettings.addPageEvent('satei_of_brand', Runner.pages.constants.PAGE_VIEW, "afterPageReady", function(pageObj, proxy, pageid, inlineRow, inlineObject) {
	
console.log('satei_view');
// Place event code here.
// Use "Add Action" button to add code snippets.;
});
	

Runner.pages.PageSettings.addPageEvent('satei_of_brand', Runner.pages.constants.PAGE_LIST, "afterPageReady", function(pageObj, proxy, pageid, inlineRow, inlineObject) {
	
// Place event code here.
// Use "Add Action" button to add code snippets.

// function add_window_print_csv(fieldsData){
// 	let product_id_val;
// 	let status_val;
//
// 	for(let i = 0, l = fieldsData.length; i < l; i += 1) {
// 		if(fieldsData[i]['name'] == 'product_id'){
// 			product_id_val = fieldsData[i]['value'];
// 			break;
// 		}
// 	}
//
// 	for(let ii = 0, ll = fieldsData.length; ii < ll; ii += 1) {
// 		if(fieldsData[ii]['name'] == 'status'){
// 			status_val = fieldsData[ii]['value'];
// 			break;
// 		}
// 	}
//
// 	console.log(fieldsData);
//
// 	if(status_val == 32){
// 		console.log(product_id_val);
// 		window.open('https://rifa.life/lounge_API/brother/print.php?product_id='+product_id_val);
// 	}
// }

// this.on('afterInlineAdd', function( fieldsData ) {
	// add_window_print_csv(fieldsData);
// });

// this.on('afterInlineEdit', function( fieldsData ) {
	// add_window_print_csv(fieldsData);

// });
;
});

//	AJAX snippets
